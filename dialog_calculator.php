<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.simplemodal-1.4.4.js"></script>
<script src="js/jquery.formatCurrency-1.4.0.min.js"></script>
<script src="js/jquery.history.js"></script>
<script type="text/javascript">
<?php include("js/etmf_demo.js.php"); ?>
</script>
<link rel="stylesheet" href="css/jqueryui.css" type="text/css" />
<link rel="stylesheet" href="css/etmf_demo.css" type="text/css" />
<script>
var order = ["step1", "step2", "step3"]
function populate_calculator(options)
{
 var options = $.extend({symbol:$("#calc_ticker").val(), screen:"demo", dialog_display: false}, options); //set defaults to be overwritten
 symbol = options.symbol;
 $("#calc_ticker").val(symbol);
 
 $.getJSON("js/ticker_data.js",symbol,function(data){
  $.each(data, function(group_key, group_val){
  if(typeof group_val[symbol] != 'undefined') //found the fucker
  {
   $("[id^=dynamic_]").each(function(){ //iterate through dynamic databoxes by finding class names that begin with dynamic_
    var value_selector = $(this).attr("id").replace("dynamic_",""); //match up the text after dynamic_ with the json array key
    if(typeof group_val[symbol][value_selector] != 'undefined'){$(this).html(group_val[symbol][value_selector]);} //replace html
   });
  }
 });
});
 setTimeout(function(){run_formats({f_currency: [".currency"], f_comma: [".comma"]});}, 200);
}
function showhide_byclass(){
 $("#calculator_box [class$='_show']").css("display", "none"); //hide all that should be hidden with _show class
 $.each(show_binders, function(key, value){
  $("#calculator_box ."+$("#"+value).val()+"_show").css({"display":""});}); //loop through and show the ones that should be shown
  
 $.each(clear_these, function(key, value){
  var selector = "#calculator_box #"+value;
  if($(selector).get(0).tagName == "INPUT"){$(selector).val("0");}else{$(selector).html("0");}
  run_formats({f_currency: [".currency"], f_comma: [".comma"]});
 });     
}
show_binders = ["input_calc", "price_select"]; //these are showhide binders
clear_these = ["end_shares", "end_calc", "quantity"]; //these are for clearing
$(function(){
 $.ajaxSetup({cache: false});
  $("#calc_ticker").autocomplete({
  appendTo: "#calculator_dialog",
  source: function(query, process){
  return $.getJSON(
          "js/ticker_data.js",
          {query: query},
          function(data){
            tickers = [];
            regexp = new RegExp($("#calc_ticker").val(), "i");
            $.each(data, function(key1, value1){
             if(key1.match(/ETMF/)) //only get etmf tickers
             {
              $.each(value1, function(key2, value2){if(regexp.test(key2)){tickers.push(key2);}});
             }
         });
        return process(tickers);
       }
      );
  },
  select: function(event, ui){populate_calculator({symbol:ui.item.value});},
  autoFocus: true
    });
 
 $("#submit_calculation").click(function(e){
  var current_nav = "#dynamic_"+$("#calculator_box #price_select").val();
  var nav_adjust = $(current_nav).get(0).tagName == "INPUT"?$(current_nav).val():$(current_nav).html();
  var spread_adjust = ($("#calculator_box #calc_spread").val()=="Premium")?Number(($("#calculator_box #spread").val()).replace(/[^0-9\.]+/g,"")):(0-Number(($("#calculator_box #spread").val()).replace(/[^0-9\.]+/g,""))); //positive or negative spread
  var share_price = (Number(nav_adjust.replace(/[^0-9\.]+/g,"")))+spread_adjust;
  
  if($("#calculator_box #input_calc").val() == "number_shares")
  {
   var shares = Math.floor(Number(($("#calculator_box #total_dollar").val()).replace(/[^0-9\.]+/g,""))/share_price);
   shares = isNaN(parseInt(shares))?0:shares;
   var calc = shares*share_price
   var final_val = isNaN(parseInt(calc))?"0":calc;
   
   $("#end_shares").html(shares);
   $("#end_calc").html(final_val);
  }
  
  if($("#calculator_box #input_calc").val() == "amt")
  {
   var calc = Number($("#calculator_box #quantity").val())*share_price;
   var final_val = isNaN(parseInt(calc))?0:calc;
   
   $("#end_calc").html(final_val);
  }
  
  run_formats({f_currency: [".currency"], f_comma: [".comma"]});
 });
 
 showhide_byclass();
 init_limit_sign($("#calc_spread").val(), "#calculator_box");
 
 $.each(show_binders, function(key, value){$("#"+value).bind("change", showhide_byclass);}); //bind all in the show_binders array
 $("#calculator_box #calc_spread").change(function(){init_limit_sign($(this).val(), "#calculator_box");});
});
</script>
<style>
.grey_box {background: #eeeeee; display: inline-block; padding: 5px; border: 2px solid #cccccc; height: 16px; font-weight: bold; font-size: 110%}
#calculator_box {width: 450px; border: 4px solid #cccccc; font-family: sans-serif; font-size: 15px}
#calculator_box .leftcol {width: 150px; font-weight: bold; text-align: right; padding-right: 10px}
#calculator_box .rightcol {width: 50%; text-align: left}
#calculator_box .row {clear: both; border-top: 1px solid #eeeeee}
#calculator_box .row > div {float: left; padding: 8px; vertical-align: baseline}
</style>
</head>
<body>
<div id="calculator_box">
<div class="row">
<div class="leftcol">ETMF Symbol</div>
<div class="rightcol"><input type="text" id="calc_ticker"></div>
</div>
<div class="row">
<div class="leftcol">Calculation</div>
<div class="rightcol"><select id="input_calc"><option value="amt">Dollar Amount</option><option value="number_shares">Number of Shares</option></select></div>
</div>
<div class="row amt_show">
<div class="leftcol">Number of Shares</div>
<div class="rightcol"><input type="text" id="quantity" value="0"></div>
</div>
<div class="row number_shares_show">
<div class="leftcol">Total Dollar Amount of Trade</div>
<div class="rightcol"><input type="text" id="total_dollar"></div>
</div>
<div class="row amt_show number_shares_show">
<div class="leftcol">Price</div>
<div class="rightcol"><select id="price_select" style="margin-right: 10px"><option value="close">Previous Day NAV</option><option value="intraday">Intraday NAV</option><option value="manual">Enter Manually</option></select><span id="dynamic_close" class="currency close_show" style="font-size: 85%; font-weight: bold"></span><span id="dynamic_intraday" class="currency intraday_show" style="font-size: 85%; font-weight: bold"></span><!--<span id="dynamic_close_date" class="small_ticker close_show"></span><span id="dynamic_close_date" class="small_ticker dateplus_1 intraday_show"></span>-->
<div class="row manual_show" style="padding-top: 6px; border: none"><b>Closing NAV</b>&nbsp;&nbsp;&nbsp;$<input type="text" id="dynamic_manual" style="width: 50px !important"></div>
</div>
</div>
<div class="row amt_show number_shares_show">
<div class="leftcol"></div>
<div class="rightcol"><select id="calc_spread" style="margin-right: 10px"><option value="Premium">Premium</option><option value="Discount">Discount</option></select><span id="limit_sign"></span><input id="limit_sign_val" type="hidden" value=""><input id="spread" maxlength="6" style="width: 40px !important; margin-right: 5px" value="0.00"></span></div>
</div>
<div class="row amt_show number_shares_show" style="text-align: center; padding: 6px">
<input type="button" value="Calculate" id="submit_calculation" class="screen_buttons">
</div>
<div class="row number_shares_show">
<div class="leftcol" style="margin-top: 6px">Number of Shares</div>
<div class="rightcol"><div id="end_shares" class="comma grey_box">0</div></div>
</div>
<div class="row amt_show number_shares_show" style="height: 50px; border-top: 1px solid #eeeeee">
<div class="leftcol">Estimated Dollar Amount of Trade</div>
<div class="rightcol"><div id="end_calc" class="currency grey_box">$0.00</div></div>
</div>
</div>
</body>
</html>

            
 