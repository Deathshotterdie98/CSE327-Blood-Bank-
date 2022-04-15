<?php
/**
 * @param int $user_id
 * 
 * @return [type]
 */
function SIGNUP(int $user_id)
{
    $db_host = "localhost:3307"; /* Server Name*/
    $db_user = 'root'; /* Username*/
    $db_pass = ''; /* Password*/
    $db_name = 'mypro_bbms'; /* Database Name*/

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 if (!$conn) 
{
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$fname = "shamim";
$lname = "mullick";
$email = "shamimmullick98@gmail.com";
$password = "a123";


$q=$db->prepare("INSERT INTO login(fname,lname,email,pass) VALUES (:fname,:lname,:email,:pass)");

  $q->bindValue('fname',$fname);
        $q->bindValue('lname',$lname);
        $q->bindValue('email',$email);
        $q->bindValue('pass',$pass);
        
/*$side = "INSERT INTO USER_ROLE(ROLE , USER_ID)*/
/*VALUES ('customer' , (SELECT ID FROM AUTH_USER WHERE EMAIL='".$email."'))";*/

if($q->execute())
{
    return true;
} 
else 
{
    return false;
}

}