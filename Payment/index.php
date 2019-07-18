<!DOCTYPE html> 
 
<html lang="en"> 
 
<head> 
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 
<title>Paypal :: SPACE-O </title> 
 
</head> 
 
<body> 
 
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">        
 
        <input type="hidden" name="business" value="paypal_username">         
 
        <!-- Specify a Buy Now button. --> 
 
        <input type="hidden" name="cmd" value="_xclick">         
 
        <!-- Specify details about the item that buyers will purchase. --> 
 
        <input type="hidden" name="item_name" value="item_name"> 
 
        <input type="hidden" name="item_number" value="item_number"> 
 
        <input type="hidden" name="amount" value="Item_amount"> 
 
        <input type="hidden" name="currency_code" value="USD">        
 
        <!-- Specify URLs --> 
 
        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/paypal_cancel.php'> 
 
<input type='hidden' name='return' value='http://localhost/paypal_integration_php/paypal_success.php'>         
 
        <!-- Display the payment button. --> 
 
        <input type="image" name="submit" border="0" 
 
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> 
 
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >     
 
    </form> 
</body> 
 
</html>