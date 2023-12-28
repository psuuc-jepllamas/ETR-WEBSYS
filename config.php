<?php 
 
// Product Details 
$itemNumber = "DP12345"; 
$itemName = "Demo Product"; 
$itemPrice = 15000;  
$currency = "PHP"; 
 

define('PAYPAL_SANDBOX', TRUE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'AaFpFmo3Wve1FTE0-ecIAbE0B3KEIyPsqxbBDR7N25jivsEl5ubMWY-WHZcd3cAMdboXml8Y4xB3KJ1G'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EAWrODRNLGvpHXV6QKWZinriDRzkClLvLmBsxlIZjnBodU-xGTPuSloEGnTmibiwXK0_LBjs_Tdcirq0'); 
define('PAYPAL_PROD_CLIENT_ID', 'Insert_Live_PayPal_Client_ID_Here'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'Insert_Live_PayPal_Secret_Key_Here'); 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USER', 'root');  
define('DB_PASS', '');  
define('DB_NAME', 'lab_activity_5'); 
 
?>