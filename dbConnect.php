<?php  
require_once 'config.php';

// Create a database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
// Display error if failed to connect  
if ($conn->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
} 
 
?>