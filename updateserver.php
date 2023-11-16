<?php
extract($_REQUEST , EXTR_PREFIX_SAME , "dup");
$newData = array();
//id
if (intval($id)) {
    echo $id;
}
else {
    echo 'invalid id';
}
echo '<br>';
//age
if ($age >= 18) {
    echo $age ;
    $age = array('age'=>$age);
    $total = array_merge($newData , $age);
}
else {
    echo 'invalid age';

}
echo '<br>';
//phone number
if (strlen($phone) <= 11) {
    echo $phone;
    $phone = array('phone'=>$phone);
    $total = array_merge($newData , $phone);}
else {
    echo 'invalid';
}
echo '<br>';
// first name
if (strlen($firstname) <= 40) {
    echo $firstname;
    $firstname = array('firstname'=>$firstname);
    $total = array_merge($newData , $firstname);}
else {
    echo 'invalid';
}
echo '<br>';
//last name
if (strlen($lastname) <= 40) {
    $lastname = array('lastname'=>$lastname);
    $total = array_merge($newData , $lastname);}

else {
    echo 'invalid';
}
echo '<br>';
//password
$str = $pwd ;
$password = md5($str);
echo $password ;
echo '<br>';
$password = array('password'=>$password);
$total = array_merge($newData , $password);

$gender = array('gender'=>$gender);
$total = array_merge($newData , $gender);

//put in database
print_r($total);
$file = file_get_contents('task.txt');
$data = json_decode($file, true);

foreach ($data as $key => $user) {
    if ($user['id'] == $id) {
        $data[$key] =array_replace($user,$total)
        ;

    }
}
file_put_contents('task.txt',json_encode($data)) ;




