<?php
/**
 * @param int $id
 *
 * @return [type]
 */
function SIGNUP(int $id)
{
    $db=new PDO('mysql:host=localhost;dbname=mypro_bbms','root','');
if($db)
{
    echo "Connect";
}
else
{
    echo "Not Connect";
}
if(isset($_POST['sub'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=@$_POST['email'];
        $pass=$_POST['pass'];
$q=$db->prepare("INSERT INTO login(fname,lname,email,pass) VALUES (:fname,:lname,:email,:pass)");
  $q->bindValue('fname',$fname);
        $q->bindValue('lname',$lname);
        $q->bindValue('email',$email);
        $q->bindValue('pass',$pass);
if($q->execute())
{
    return true;
}
else
{
    return false;
}
}
}