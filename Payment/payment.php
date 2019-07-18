
<?php 
 
include 'connection.php'; 
 
//save Trasaction information form PayPal 
 
$item_number = $_GET['item_number']; 
 
$txn_id = $_GET['Trasaction_ID']; 
 
$payment_gross = $_GET['AMT']; 
 
$currency_code = $_GET['CURRENCY_CODE']; 
 
$payment_status = $_GET['PAYMENT_STATUS']; 
 
 
if(!empty($txn_id)){ 
 
        //Insert tansaction data into the database 
 
        $insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_amount,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')"); 
 
        $last_insert_id = $db->insert_id;  
 
?> 
 
<h1>Your payment has been successful.</h1> 
 
    <h1>Your Payment ID - <?php echo $last_insert_id; ?>.</h1> 
 
<?php 
 
}else{ 
 
?> 
 
<h1>Your payment has failed.</h1> 
 
<?php 
 
} 
 
?>
 