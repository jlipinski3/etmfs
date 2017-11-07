ticker_templates = {'US Equity':'<div class="ticker_row first">\
<div class="ticker_cell" style="width: 366px; padding: 7px"><span class="ticker" style="float: left">-XtickerX-</span><span style="float: right; line-height: 90%; text-align: right"><a href="<?php echo $_SERVER["PHP_SELF"]."?ticker=-XtickerX-";?>" onclick="refresh_data(); return false;" class="refresh_link">Refresh</a><br><span id="refresh_time"></span></span><br style="clear: both"><span class="company_name">-XnameX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Last [Tick]</div>\
<div class="smallticker_cell rightside"><span id="t_price" class="currency">-XlastX-</span> [-XtickX-]</div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Volume</div>\
<div class="smallticker_cell rightside"><span id="t_volume" class="comma">-XvolumeX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Change</div>\
<div class="smallticker_cell rightside" style="white-space: nowrap"><span class="change_mood">-Xchange_indicatorX-</span><span id="t_change" class="currency">-XchangeX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Day High</div>\
<div class="smallticker_cell rightside"><span id="t_dayhigh" class="currency">-XhighX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Change %</div>\
<div class="smallticker_cell rightside" style="white-space: nowrap"><span class="change_mood">-Xchange_indicatorX-</span><span id="t_change_percent">-Xchange_percentX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Day Low</div>\
<div class="smallticker_cell rightside"><span id="t_daylow" class="currency">-XlowX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Bid</div>\
<div class="smallticker_cell rightside"><span id="t_bid" class="currency">-XbidX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Open</div>\
<div class="smallticker_cell rightside"><span id="t_open" class="currency">-XopenX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Ask</div>\
<div class="smallticker_cell rightside"><span id="t_ask" class="currency">-XaskX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Prev Close<br><span id="t_close_date">-Xclose_dateX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_prevclose" class="currency">-XcloseX-</span></div>\
</div>\
</div>',
'ETMF1':'<div class="ticker_row first">\
<div class="ticker_cell" style="width: 406px; padding: 7px"><span class="ticker" style="float: left">-XtickerX-</span><span style="float: right; line-height: 90%; text-align: right"><a href="<?php echo $_SERVER["PHP_SELF"]."?ticker=-XtickerX-";?>" onclick="refresh_data(); return false;" class="refresh_link">Refresh</a><br><span id="refresh_time"></span></span><br style="clear: both"><span class="company_name">-XnameX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Last Trade to next NAV<br><span class="comma small_ticker">Volume -Xlast_trade_volumeX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_price" class="plusminus">-XlastX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Today\'s Volume</div>\
<div class="smallticker_cell rightside"><span id="t_volume" class="comma">-XvolumeX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Change</div>\
<div class="smallticker_cell rightside" style="white-space: nowrap"><span class="change_mood">-Xchange_indicatorX-</span><span id="t_change">-XchangeX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Average Volume (3m)</div>\
<div class="smallticker_cell rightside"><span id="t_average_volume" class="comma">-Xaverage_volumeX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Bid<br><span class="small_ticker">Volume -Xbid_volumeX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_bid" class="plusminus redneg">-XbidX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Intraday High<br>Premium/Discount</div>\
<div class="smallticker_cell rightside"><span id="t_dayhigh" class="plusminus redneg">-XhighX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Ask<br><span class="small_ticker">Volume -Xask_volumeX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_ask" class="plusminus redneg">-XaskX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Intraday Low<br>Premium/Discount</div>\
<div class="smallticker_cell rightside"><span id="t_daylow" class="plusminus redneg">-XlowX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Intraday NAV<br><span id="t_intraday_closedate" class="dateplus_1">-Xclose_dateX-</span> <span id="refresh_time15"></span></div>\
<div class="smallticker_cell rightside"><span id="t_intraday" class="currency">-XintradayX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Previous NAV<br><span id="t_close_date">-Xclose_dateX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_prevclose" class="currency">-XcloseX-</span></div>\
</div>\
</div>',
'ETF':'<div class="ticker_row first">\
<div class="ticker_cell" style="width: 406px; padding: 7px"><span class="ticker" style="float: left">-XtickerX-</span><span style="float: right; line-height: 90%; text-align: right"><a href="<?php echo $_SERVER["PHP_SELF"]."?ticker=-XtickerX-";?>" onclick="refresh_data(); return false;" class="refresh_link">Refresh</a><br><span id="refresh_time"></span></span><br style="clear: both"><span class="company_name">-XnameX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Last [Tick]</div>\
<div class="smallticker_cell rightside"><span id="t_price" class="currency">-XlastX-</span> [-XtickX-]</div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Volume</div>\
<div class="smallticker_cell rightside"><span id="t_volume" class="comma">-XvolumeX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Change</div>\
<div class="smallticker_cell rightside" style="white-space: nowrap"><span class="change_mood">-Xchange_indicatorX-</span><span id="t_change" class="currency">-XchangeX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Day High</div>\
<div class="smallticker_cell rightside"><span id="t_dayhigh" class="currency">-XhighX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Change %</div>\
<div class="smallticker_cell rightside" style="white-space: nowrap"><span class="change_mood">-Xchange_indicatorX-</span><span id="t_change_percent">-Xchange_percentX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Day Low</div>\
<div class="smallticker_cell rightside"><span id="t_daylow" class="currency">-XlowX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Bid</div>\
<div class="smallticker_cell rightside"><span id="t_bid" class="currency">-XbidX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Open</div>\
<div class="smallticker_cell rightside"><span id="t_open" class="currency">-XopenX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Ask</div>\
<div class="smallticker_cell rightside"><span id="t_ask" class="currency">-XaskX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Prev Close<br><span id="t_close_date">-Xclose_dateX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_prevclose" class="currency">-XcloseX-</span></div>\
</div>\
</div>',
'ETMF2':'<div class="ticker_row first">\
<div class="ticker_cell" style="width: 406px; padding: 7px"><span class="ticker" style="float: left">-XtickerX-</span><span style="float: right; line-height: 90%; text-align: right"><a href="<?php echo $_SERVER["PHP_SELF"]."?ticker=-XtickerX-";?>" onclick="refresh_data(); return false;" class="refresh_link">Refresh</a><br><span id="refresh_time"></span></span><br style="clear: both"><span class="company_name">-XnameX-</span></div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Last Trade to next NAV<br><span class="comma small_ticker">Volume -Xlast_trade_volumeX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_price" class="currency">-XlastX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Today\'s Volume</div>\
<div class="smallticker_cell rightside"><span id="t_volume" class="comma">-XvolumeX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Change</div>\
<div class="smallticker_cell rightside" style="white-space: nowrap"><span class="change_mood">-Xchange_indicatorX-</span><span id="t_change" class="currency">-XchangeX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Average Volume (3m)</div>\
<div class="smallticker_cell rightside"><span id="t_average_volume" class="comma">-Xaverage_volumeX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Bid<br><span class="small_ticker">Volume -Xbid_volumeX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_bid" class="currency">-XbidX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Intraday High Premium<br>(Discount)</div>\
<div class="smallticker_cell rightside"><span id="t_dayhigh" class="currency">-XhighX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Ask<br><span class="small_ticker">Volume -Xask_volumeX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_ask" class="currency">-XaskX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Intraday Low Premium<br>(Discount)</div>\
<div class="smallticker_cell rightside"><span id="t_daylow" class="currency">-XlowX-</span></div>\
</div>\
</div>\
\
<div class="ticker_row">\
<div class="ticker_cell t_leftcol">\
<div class="smallticker_cell leftside">Intraday NAV<br><span id="t_intraday_closedate" class="dateplus_1">-Xclose_dateX-</span> <span id="refresh_time15"></span></div>\
<div class="smallticker_cell rightside"><span id="t_intraday" class="currency">-XintradayX-</span></div>\
</div>\
\
<div class="ticker_cell t_rightcol">\
<div class="smallticker_cell leftside">Previous NAV<br><span id="t_close_date">-Xclose_dateX-</span></div>\
<div class="smallticker_cell rightside"><span id="t_prevclose" class="currency">-XcloseX-</span></div>\
</div>\
</div>\
\
</div>'};
ticker_templates['ETMF3'] = ticker_templates['ETMF1'] + '<div class="ticker_row quote_notes">For Limit Price, add a premium or discount to the Previous NAV price. Actual Price will be next closing NAV plus premium or discount.</div>';
ticker_templates['ETMF4'] = ticker_templates['ETMF1'] + '<div class="ticker_row quote_notes">For Limit Price, enter only the absolute value of the premium of discount. Sell orders will be assumed a negative sign.</div>';
ticker_templates['ETMF5'] = ticker_templates['ETMF1'] + '<div class="ticker_row quote_notes">For Limit Price, add a premium or discount to a proxy price of 100. Actual Price will be next closing NAV plus premium or discount.</div>';
advance_types = ['ETMF1', 'ETMF3', 'ETMF4', 'ETMF5'];
limit_guardrails = ['ETMF1', 'ETMF2'];
show_class = "default";
function comma_number(val){
 while (/(\d+)(\d{3})/.test(val.toString())){
   val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
 }
 return val;
}
function templating(template, data_set)
{
 return template.replace(/(-X)([A-Z0-9_]*)(X-)/gi, function(x, y, z){try{return data_set[z];}catch(err){}});
}
function refresh_data(options)
{
 var options = $.extend({symbol:$("#ticker").val(), screen:"demo", dialog_display: false}, options); //set defaults to be overwritten
 symbol = options.symbol;
 $("#ticker").val(symbol);
 var found = false;
 
 $(".toggled_blocks").css("display", "none");
 $(".default_show").css("display", "");
 show_class = "default";
 $(".etmf1_show select.bindswap").removeClass("limit_bind").unbind("change", limit_binder);
 $(".default_show select.bindswap").addClass("limit_bind").bind("change", limit_binder).init_limit_binder(); //add limit bind
 
 $.getJSON("js/ticker_data.js",symbol,function(data){
  $.each(data, function(group_key, group_val){
   if(typeof group_val[symbol] != 'undefined')
   { 
    if(group_key == "ETMF1" || group_key == "ETMF2"){ //etmf disclaimer and order entry change
     $(".toggled_blocks").css("display", "none");
     $(".etmf1_show").css("display", "");
     show_class = "etmf1";
     $(".default_show select.bindswap").removeClass("limit_bind").unbind("change", limit_binder);
     $(".etmf1_show select.bindswap").addClass("limit_bind").bind("change", limit_binder).init_limit_binder();
     
     $("#disclaimer_ticker").html(symbol);
     if(options.dialog_display){$.modal($("#etmf_disclaimer"), {containerCss: {height: "auto"}, overlayClose: true});}
    }
    if($.inArray(group_key, limit_guardrails)>-1)
    {
     $("div."+show_class+"_show #spread").blur(function(){if(Number($(this).val())>.99){$("#limit_warning_box").css("display","");}else{$("#limit_warning_box").css("display","none");}});
      
    }
    
    $("#ticker_data").css("visibility", "visible");
    $("#ticker_data").html(templating(ticker_templates[group_key], group_val[symbol]));
    var now_date = new Date().toTimeString().replace(/.*((\d{2}):(\d{2}):(\d{2})).*/, function(x, y, z, zz, zzz){ampm=z>=12?"pm":"am"; if(z>12){z-=12;} return "<span style='font-size: 80%'></span>"+z+":"+zz+":"+zzz+"<span style='text-transform:uppercase; font-size: 80%'> " + ampm + "</span>";});
    var now15_date_old = new Date();
    var now15_date = new Date(now15_date_old.getTime() - (15*60000)).toTimeString().replace(/.*((\d{2}):(\d{2}):(\d{2})).*/, function(x, y, z, zz, zzz){ampm=z>=12?"pm":"am"; if(z>12){z-=12;}return "<span style='font-size: 80%'></span>"+z+":"+zz+":"+zzz+"<span style='text-transform:uppercase; font-size: 80%'> " + ampm + "</span>";});
    $("#order_entry_close_nav").html(group_val[symbol]["close_date"]); //set for now and will be formatted properly later
    
    $("#refresh_time").html(now_date);
    $("#refresh_time15").html(now15_date);
    
    $(".change_mood").each(function(){ //rules for formatting change lines
     switch($(this).html()){
      case "-":
       $(this).html("<img src='/images/interface/down_arrow.png'>" + $(this).html());
       //$(this).css({"color":"#dd0000"});
       //$("#t_change").css({"color":"#dd0000"});
       //$("#t_change_percent").css({"color":"#dd0000"});
       break;
      case "+":
       $(this).html("<img src='images/interface/up_arrow.png'>" + $(this).html());
       //$(this).css({"color":"#006600"});
       //$("#t_change").css({"color":"#006600"});
       //$("#t_change_percent").css({"color":"#006600"});
       break;
      default:
     }      
    });
    
  run_formats({f_currency: [".currency"], f_comma: [".comma"], f_dateplus: [".dateplus_1", ".dateplus_4"], f_plusminus: [".plusminus"], f_redneg: []});
  init_limit_sign($("div."+show_class+"_show #spread_indicator").val()); //bind to init for plus or minus premium discount
  if(group_key != "ETMF1"){$("div."+show_class+"_show #limit_sign").css("display", "none");}else{$("div."+show_class+"_show #limit_sign").css("display", "");} //only display limit sign for etmf1
  
  $("div."+show_class+"_show #spread_indicator").change(function(){init_limit_sign($(this).val());});
    
    if(options.screen)
    {
     launch_screen(options.screen,group_val[symbol],group_key); //call this here so the correct data can be used in the template
   }
  found = true;
    return false; //break the loop if found
   }
  });
 });
}
function run_formats(options)
{
 var options = $.extend({f_currency: [], f_comma: [], f_plusminus: [], f_dateplus: [], f_redneg: []}, options);
 
 $.each(options.f_currency, function(key, value){$(value).each(function(){$(this).toNumber().formatCurrency();});});
    $.each(options.f_comma, function(key, value){$(value).each(function(){$(this).html(comma_number($(this).html()));});});
    
    $.each(options.f_dateplus, function(key, value){
     var factor_split = value.split("_");
     var factor = factor_split.length>1?factor_split[1]:1;
     $(value).each(function(){ //this may be class or id
      var og_date = $(this).html();
       var date_obj = new Date(parseInt(og_date.substring(6), 10),parseInt(og_date.substring(0, 2), 10) - 1,parseInt(og_date.substring(3, 5), 10));
       date_obj.setDate(date_obj.getDate()+Number(factor));
       var date_dd = date_obj.getDate();
       var date_mm = date_obj.getMonth()+1; //January is 0!
       var yyyy = date_obj.getFullYear();
       if(date_dd < 10){date_dd='0'+date_dd;}
       if(date_mm<10){date_mm='0'+date_mm;}
       var date_plus_one = date_mm+'/'+date_dd+'/'+yyyy;
         $(this).html(date_plus_one);
        });
    });
    
    $.each(options.f_plusminus, function(key, value){$(value).each(function(){
     var formatted = Number($(this).html()).toFixed(2);
     formatted = (formatted>0?"+":"")+formatted;
     $(this).html(formatted);});
  });
     
    $.each(options.f_redneg, function(key, value){$(value).each(function(){
     var numeric_value = Number($(this).text());
     if(numeric_value < 0){$(this).css("color", "#c00000");}
     });
  });
}
function limit_binder()
{
 if($(this).val() != "Limit"){$("#order_type_toggle").css("display","none");}
 else{$("#order_type_toggle").css("display","");}
}
$.fn.init_limit_binder = function(){
 if($(this).val() != "Limit"){$("#order_type_toggle").css("display","none");}
 else{$("#order_type_toggle").css("display","");}
}
function init_limit_sign(jquery_obj,parent_div)
{
 parent_div = typeof parent_div != 'undefined'?parent_div+" ":"div."+show_class+"_show ";
 var limit_sign_html = jquery_obj == "Premium"?"<b>+</b>":"<font color='#dd0000'><b>&#8211;</b></font>";
 $(parent_div+"#limit_sign").html(limit_sign_html);
 $(parent_div+"#limit_sign_val").val($(parent_div+"#limit_sign").text());
}
function launch_screen(screen_id,data_set,group_key)
{
 if(screen_id !== "demo")
 {
   $("div#entry_screen").css("display", "none");
   $("div#the_box").css("display", "");
   
 if(show_class) //fix this later
   {
   var template = $.ajax({
    url: "template_" + screen_id + ".php",
    dataType: "html",
    type: "get",
    cache: false,
    success: function(data){
     $("#the_box").html(templating(data,data_set));
     $("#the_box [id^=carry_]").each(function(){
      var value_selector = $(this).attr("id").replace("carry_","");
      var multi = false;
      $("#"+value_selector).each(function(){
       if($(this).parents("div[class^='toggled_blocks']").length > 0){multi = true;} //check if this is part of a toggled blocks section
      });
      
      this_val = multi?$("div."+show_class+"_show #"+value_selector).val():$("#"+value_selector).val(); //pick as part of a toggled group or just by selector alon
      $(this).text(this_val);
     });
     
     //var adj_price = Number($("#the_box .order_price").text())+.01; //this was arbitrarily selected as the number
  var adj_price = Number($("#the_box .order_price").text()); //this was arbitrarily selected as the number
     $("#the_box .order_price").html(adj_price.toFixed(2));
     
     if($("div."+show_class+"_show #type_select").val() == "Market")
     {
      $("#the_box .nav_price").html("Market");
      $("#the_box #carry_spread").html(".02"); //market order override
      $("#the_box #carry_limit_sign_val").html("+"); //override for market order
   var end_price = data_set["intraday"] + .02; //THIS IS ARBITRARY TO ADD Kristine Delano's 2 cents!!
   var adj_cost = end_price * $("#share_quantity").val();
   var estm_cost = (data_set["close"] * $("#share_quantity").val()); //based off prev close with no spread adjust
   $("#the_box .estm_cost").html(estm_cost.toFixed(2));
   $(".review_section #carry_spread, .review_section #carry_limit_sign_val").css("display", "none");
     }
     else
     {
      var spread_val = Number($("div."+show_class+"_show #spread").val());
   var end_price = ($("div."+show_class+"_show #spread_indicator").val()=="Premium"?(data_set["intraday"] + spread_val):(data_set["intraday"] - spread_val));
      var adj_cost = end_price * $("#share_quantity").val();
   var estm_cost = ($("div."+show_class+"_show #spread_indicator").val()=="Premium"?(data_set["close"] + spread_val):(data_set["close"] - spread_val)) * $("#share_quantity").val(); //based off prev close with spread adjust
   $("#the_box .estm_cost").html(estm_cost);
     }
     
     if($("div."+show_class+"_show #action_select").val()=="BUY") //adjust buy and sell related lingo
     {
      $("#the_box .bought_sold").html("You Bought:");
      $("#the_box .estm_total").html("Cost");
     }
     else
     {
      $("#the_box .bought_sold").html("You Sold:");
      $("#the_box .estm_total").html("Proceeds");
     }
     
  $("#the_box .end_price").html(end_price.toFixed(2));
     $("#the_box .order_cost").html(adj_cost);
     $("#the_box .order_net").html(adj_cost);
     if(group_key == "ETMF5" && screen_id!="endofday"){ //hacks for proxy display
      $("#the_box #carry_spread").html(100+Number($("#the_box #carry_spread").html()));
      $("#the_box #carry_limit_sign_val").css("display", "none");
      $("#the_box .nav_label").css("display", "none");
      $("#the_box .nav_price").css("display", "none");
     }
          
     setTimeout(function(){run_formats({f_currency: ["#carry_spread", ".order_price", ".order_cost", ".estm_cost", ".end_price", ".order_net"], f_dateplus: [".dateplus_1", ".dateplus_4"], f_plusminus: [".plusminus"]});}, 250);
     }
    });
   }
   else
   {
    $("#the_box").html("Order simulation screens are for particular symbols only. <a href=\"javascript:window.history.go(-1)\">Go back.</a>");
   }
 }
 else
 { 
  $("div#the_box").css("display", "none");
  $("div#entry_screen").css("display", "");
 }
 
History.pushState({screen:screen_id,ticker:$("#ticker").val()}, "Order Entry Demo | State: "+screen_id+" | Symbol: "+$("#ticker").val(), "?screen="+screen_id+"&ticker="+$("#ticker").val());
}
function check_required(form_id)
{
 var errors = false;
 $("#"+form_id+" .required").each(function(){
  if(!(/^\d+$/).test($(this).val())){$(this).parent("div").siblings(".t_leftcol").css("color", "#c00000"); errors = true;}else{$(this).parent("div").siblings(".t_leftcol").css("color", "#000000");}
 });
 
 return errors;
}
$(function(){
 $.ajaxSetup({cache: false});
 
$("#calculator_dialog").html("<iframe src='dialog_calculator.php' width='470' height='450' frameborder='0'></iframe>");
 
 History.Adapter.bind(window,'statechange',function() { // Note: We are using statechange instead of popstate
  var State = History.getState();
  if(typeof State.data["screen"] != "undefined"){refresh_data({screen:State.data["screen"]});}
 });
 $("a.hist_handler").click(function(evt){
        evt.preventDefault();
        refresh_data({screen:$(this).find('span.screen').text()});
 });
  $("input#submit_button").click(function(evt){evt.preventDefault(); //check if this symbol is part of the group that is supposed to advance
  advance_check = false;
  $.getJSON("js/ticker_data.js",symbol,function(data){
   $.each(data, function(group_key, group_val){
    if(typeof group_val[symbol] != 'undefined'){if($.inArray(group_key, advance_types)>-1){
    advance_check = true;
    spread_adjust = null;
    if(group_key == "ETMF3"){spread_adjust = Number($("#limit_price").val())-group_val[symbol]["close"];}
    if(group_key == "ETMF4"){spread_adjust = ($("div."+show_class+"_show #action_select").val()=="BUY")?Math.abs(Number($("#limit_price").val())):-Math.abs(Number($("#limit_price").val()));}
    if(group_key == "ETMF5"){spread_adjust = Number($("#limit_price").val())-100;}
    if(spread_adjust!==null && spread_adjust>=0){
     $("div."+show_class+"_show #spread_indicator").val("Premium");
     $("div."+show_class+"_show #spread").val(spread_adjust);
    }else if(spread_adjust!==null && spread_adjust<0){$("div."+show_class+"_show #spread_indicator").val("");} //for adjusted cost
    }}
  });
  
  if(advance_check){if(!check_required("order_entry")){   
   refresh_data({screen:"review"});}} //put this inline so its synchronous
   else{alert("Order simulation screens are only for particular tickers.");}
  });
 });
  
 $(".toggled_blocks").css("display", "none"); //show default order entry
 $(".default_show").css("display", "");
 
 $("#ticker").change(function(){
  refresh_data({dialog_display:true});
 });
 
 $("select.limit_bind").change(limit_binder);
 
 $(".tooltips").click(function(e){e.preventDefault();});
 
 $("#ticker").autocomplete({
  source: function(query, process){
    return $.getJSON(
            "js/ticker_data.js",
            {query: query},
            function(data){
              tickers = [];
              regexp = new RegExp($("#ticker").val(), "i");
              $.each(data, function(key1, value1){
               $.each(value1, function(key2, value2){if(regexp.test(key2)){tickers.push(key2);}});
           });
          return process(tickers);
         }
        );
  },
  select: function(event, ui){refresh_data({symbol:ui.item.value,dialog_display:true});},
  autoFocus: true
 });
 
 $("#header_links").html("<li><a href='<?php echo $_SERVER["PHP_SELF"];?>'>Reset</a></li><li><a href='<?php echo $_SERVER["PHP_SELF"];?>' id='launch_demo_help'>Demo Help</a></li><li><a href='<?php echo $_SERVER["PHP_SELF"];?>' id='launch_calculator'>ETMF Calculator</a></li>");
 $("#launch_demo_help").click(function(e){e.preventDefault();$.modal($("#demo_help_dialog"), {containerCss: {height: "auto"}, overlayClose: true});}); 
 $("#launch_calculator").click(function(e){e.preventDefault();$.modal($("#calculator_dialog"), {containerCss: {height: "auto"}, overlayClose: true});});
 
 var default_state = "<?php echo isset($_REQUEST["screen"])?$_REQUEST["screen"]:"demo";?>";
 <?php
 
 if(isset($_REQUEST["ticker"])){echo 'refresh_data({symbol:"'.htmlspecialchars(strtoupper($_REQUEST["ticker"])).'",screen:default_state});';}
 
 ?>
});