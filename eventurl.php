<form name="paypalfrm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">        
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="svinay@onegodmed.com">        
        
       
        <input type="hidden" name="tax" id="tax" value="">
        <input type="hidden" name="no_shipping" value="1">
        <input type="hidden" name="no_note" value="1">
        <input type="hidden" name="currency_code" value="USD" id="currency_code">
        <input type="hidden" name="return" value="http://dev.onegodmed.com/eventurl.php/">
        <input type="hidden" name="cancel_return" value="http://dev.onegodmed.com/eventurl.php/">
        <input type="hidden" name="rm" value="2">
        <input type="hidden" name="bn" value="PP-BuyNowBF">
        
<label> <strong> Please Select Services : </strong> </label> &nbsp;&nbsp;&nbsp;
<select class="car"  id="item_name" name="item_name">
<option value="">Select Services</option>
<option value="GOODS AND SERVICES">Goods And Services</option>
<option value="Online Healing">Online Healing</option>
<option value="Online Meditation">Online Meditation</option>
</select>
<br>
 <p style="font-size:13px;">Please select services (India is NOT permitted to receive donations etc. figure)</p> <br>
 
 <label> <strong> Please use your curency : </strong> </label> 
 <select  name="currency_code" onChange="return funcCurrency(this.value);" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; width:149px; height:25px;">     
             <option selected="" title="$" value="USD">USD</option>
             <option title="$" value="INR">INR</option>
              <option title="$" value="AUD">AUD</option>
              <option title="R$" value="BRL">BRL</option>
              <option title="£" value="GBP">GBP</option>
              <option title="$" value="CAD">CAD</option>
              <option title="" value="CZK">CZK</option>
              <option title="" value="DKK">DKK</option>
              <option title="€" value="EUR">EUR</option>
              <option title="$" value="HKD">HKD</option>
              <option title="" value="HUF">HUF</option>
              <option title="₪" value="ILS">ILS</option>
              <option title="¥" value="JPY">JPY</option>
              <option title="$" value="MXN">MXN</option>
              <option title="NT$" value="TWD">TWD</option>
              <option title="$" value="NZD">NZD</option>
              <option title="" value="NOK">NOK</option>
              <option title="P" value="PHP">PHP</option>
              <option title="" value="PLN">PLN</option>
              <option title="" value="RUB">RUB</option>
              <option title="$" value="SGD">SGD</option>
              <option title="" value="SEK">SEK</option>
              <option title="" value="CHF">CHF</option>
              <option title="฿" value="THB">THB</option> 
             </select> <br> <br>

<label> <strong> Please Enter Amount : </strong> </label> &nbsp; &nbsp; &nbsp;
<input class="car" type="text" onKeyUp="return funAmount(this.value)" id="amount" size="15" value="" name="amount"  placeholder="Enter Amount..."> <br> <br> 
<a href="https://www.paypal.com/cgi-bin/webscr"> 
<button class="btn1" type="" value="" style="width:35% !important;"> </button> </a> <p class="right3"> <br>(<strong>Paypal Id - </strong>svinay@onegodmed.com)</p>


</form>