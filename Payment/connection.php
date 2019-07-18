define('HOST', 'localhost'); 
 
define('USERNAME', 'fami.sultana98@gmail.com'); 
 
define('PASSWORD', 'Fs23061996'); 
 
define('DATABASE_NAME', 'travelo'); 
 
//Connect and select the database 
 
$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME); 
 
if ($db->connect_error) { 
 
    die("Connection failed: " . $db->connect_error); 
 
}