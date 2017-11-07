<!DOCTYPE html>
<html>
<head>
<title>
Ticker Demo
</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.simplemodal-1.4.4.js"></script>
<script src="js/jquery.formatCurrency-1.4.0.min.js"></script>
<script src="js/jquery.history.js"></script>
<script type="text/javascript">
<?php include("js/etmf_demo.js.php"); ?>
</script>
<link rel="stylesheet" href="css/jqueryui.css" type="text/css"/>
<link rel="stylesheet" href="css/etmf_demo.css" type="text/css"/>
</head>
<body>
<div style="width: 100%; text-align: center">
<!-- START DEMO -->
<!--<div style="text-align: center; padding-bottom: 10px"><a href="?screen=demo" class="hist_handler">State 1: Demo Screen<span class='screen'>demo</span></a> | <a href="?screen=review" class="hist_handler">State 2: Review<span class='screen'>review</span></a> | <a href="?screen=confirm" class="hist_handler">State 3: Confirm<span class='screen'>confirm</span></a> | <a href="?screen=endofday" class="hist_handler">State 4: End of Day<span class='screen'>endofday</span></a></div>-->
<div id="calculator_dialog" style="z-index: 1200; width: auto" class="etmf_modal">This is temp text.</div>
<div id="demo_help_dialog" class="disclaimer etmf_modal" style="width: 700px">This demo includes 7 symbols that represent how an ETF and ETMFs could be traded on-line by an Investment Professional. The Submit button will use the information you entered to show the trade progression. <div style='padding-top: 15px; padding-bottom: 0px; text-align: center'><div style="display:inline-block">
<table cellpadding="5" cellspacing="1" border="0" align="center">
<tr class="header"><td>Symbol</td><td>Security</td><td>Price Entered</td><td>Format of Information</td><td>After Submit</td></tr>
<tr class="odd"><td>QQQ</td><td>ETF</td><td>Limit Price</td><td>ETF Quote</td><td>No progression</td></tr>
<tr><td>IBM</td><td>Equity</td><td>Limit Price</td><td>Equity Quote</td><td>No progression</td></tr>
<tr class="odd"><td>EHSTC</td><td>ETMF</td><td>Spread Only, Sign Provided</td><td>Signed Premium/Discount</td><td>Progress thru Confirm</td></tr>
<tr><td>EALCC</td><td>ETMF</td><td>Spread Only, Enter Sign</td><td>$ for Premium (Discount)</td><td>No progression</td></tr>
<tr class="odd"><td>EMACC</td><td>ETMF</td><td>Absolute Value of Spread</td><td>Same as EHSTC</td><td>Progress thru Confirm</td></tr>
<tr><td>ESACC</td><td>ETMF</td><td>Proxy = 100</td><td>Same as EHSTC</td><td>Progress thru Confirm</td></tr>
<tr class="odd"><td>ESALC</td><td>ETMF</td><td>Proxy = Previous NAV</td><td>Same as EHSTC</td><td>Progress thru Confirm</td></tr>
</table></div>
</div></div>
<div id="etmf_disclaimer" class="etmf_modal">Please note that this is an Exchange-Traded Managed Fund. This type of fund trades differently than other funds, for example: <div style='font-weight: bold; padding: 10px'>Limit orders require you to indicate a premium (discount) limit rather than a price limit.</div> For more information about the differences between these and other funds, <a href="/" target="_blank">click here to visit the ETMF Educational Website</a>.<div style='text-align: left; padding-top: 15px; font-size: 90%; font-weight: bold'><input type='checkbox' id='dialog_check' style='margin-bottom: -2px; width: 10px'>Do not show this again.</div></div>

<div style="margin: auto; width: 900px">
<ul id="header_links"></ul>
<div id="the_box"></div>
<form id="order_entry"><div id="entry_screen">
<div style='padding-bottom: 10px; font-style: italic'>Use "EHSTC" as Symbol, "100" as Quantity, and ".05" as Limit Amount for the full demo experience.</div>
<div id="ticker_left">
<div id="ticker_input">
<div class="ticker_row first">
<div class="ticker_cell t_leftcol">Symbol</div>
<div class="ticker_cell t_rightcol"><input id="ticker"><span class="toggled_blocks etmf1_show"><a href="<?php echo $_SERVER["PHP_SELF"];?>" class="tooltips"><img src="images/interface/order_entry_tooltip.png"><span>An ETMF always has a "C" as the fifth character in the ticker.</span></a></span>
</div>
</div>
<div class="ticker_row">
<div class="ticker_cell t_leftcol">Action</div>
<div class="ticker_cell t_rightcol"><div class="toggled_blocks default_show"><select id="action_select"><option selected value=""></option><option value="BUY">Buy</option><option value="SELL">Sell</option></select></div><div class="toggled_blocks etmf1_show" style="display: none"><select id="action_select"><option value="BUY" selected>Buy</option><option value="SELL">Sell</option></select></div></div>
</div>
<div class="ticker_row">
<div class="ticker_cell t_leftcol">Quantity</div>
<div class="ticker_cell t_rightcol"><input id="share_quantity" maxlength="12" style="width: 100px !important" size="4" class="required"> Shares</div>
</div>
<div class="ticker_row">
<div class="ticker_cell t_leftcol">Order Type</div>
<div class="ticker_cell t_rightcol"><div class="toggled_blocks default_show"><select id="type_select" class="bindswap limit_bind"><option selected value=""></option><option value="Limit">Limit Order</option><option value="Market">Market Order</option></select></div><div class="toggled_blocks etmf1_show"><select id="type_select" class="bindswap"><option value="Limit">Limit Order</option><option value="Market">Market Order</option></select><a href="<?php echo $_SERVER["PHP_SELF"];?>" class="tooltips"><img src="images/interface/order_entry_tooltip.png"><span>An ETMF can be traded by placing a market order or a limit order on the spread relative to the next NAV.</span></a></div></div>
</div>
<div class="ticker_row" id="order_type_toggle" style="display: none">
<div class="ticker_cell t_leftcol"><div class="toggled_blocks default_show">Limit Price</div><div class="toggled_blocks etmf1_show">Limit</div></div>
<div class="ticker_cell t_rightcol">
<div class="toggled_blocks default_show"><input id="limit_price"><input id="spread" value="0.00" type="hidden"><input id="spread_indicator" value="Premium" type="hidden"><span id="limit_sign" style="display: none"></span><input id="limit_sign_val" type="hidden" value=""></div>
<div class="toggled_blocks etmf1_show" style="font-size: 11px; line-height: 120%"><span style="float: left"><select id="spread_indicator" style="width: 80px !important; margin-right: 10px"><option value="Premium">Premium</option><option value="Discount">Discount</option></select><span id="limit_sign"></span><input id="limit_sign_val" type="hidden" value=""><input id="spread" maxlength="6" style="width: 40px !important; margin-right: 5px" value="0.00"></span> to closing NAV <span id="order_entry_close_nav" class="dateplus_1"></span><a href="<?php echo $_SERVER["PHP_SELF"];?>" class="tooltips"><img src="images/interface/order_entry_tooltip.png"><span>Premium/Discount paid above/below the next closing NAV. Value calculated when the trade is updated with the next closing NAV.</span></a>
<div id="limit_warning_box" style="display: none">Limit Price should be a premium or discount to the next closing NAV, not the share price.</div></div>
</div>
</div>
<div class="ticker_row">
<div class="ticker_cell t_leftcol">Time in Force</div>
<div class="ticker_cell t_rightcol">
<div class="toggled_blocks default_show"><select id="force_select"><option selected></option><option value="Day">Day</option></select></div>
<div class="toggled_blocks etmf1_show"><select id="force_select"><option selected value="Day">Day</option></select><a href="<?php echo $_SERVER["PHP_SELF"];?>" class="tooltips"><img src="images/interface/order_entry_tooltip.png"><span>Order is only valid until the end of the trading day.</span></a>
</div>
</div>
</div>
<div class="ticker_row" style="padding: 10px; text-align: center"><input type="submit" value="Submit" id="submit_button"></div></div>
<div class="toggled_blocks etmf1_show" style="padding-top: 10px; text-align: center; font-weight: bold; text-transform: uppercase; font-size: 13px">
<a href="/" target="_blank">Click here to visit the ETMF Education Website</a>
</div>
</div></form>
<div id="ticker_data"></div>
</div>
<!-- END DEMO -->

</body>
</html>