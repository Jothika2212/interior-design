<?php
require '../config/function.php';

if(isset($_POST['saveUser']))
{

$name = validate($_POST['name']);
$phone = validate($_POST['phone']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);
$role = validate($_POST['role']);
$is_ban = validate($_POST['is_ban']) == true ? 1:0;

if($name != ''|| $email != ' '|| $phone != '' || $password!='')
{
    $query ="INSERT INTO users(name, phone, email, password,is_ban,role)
VALUES ('$name', '$phone', '$email', '$password', '$is_ban','$role')";
$result = mysqli_query($conn, $query);

if($result){
redirect('user.php', 'User/Admin Added Successfully');
}else{
redirect('user-create.php', 'Something Went Wrong');
}
}

else{
    redirect('user-create.php', 'Please fill all the input fields');
}
}

if(isset($_POST['updateUser']))
{

$name = validate($_POST['name']);
$phone = validate($_POST['phone']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);
$role = validate($_POST['role']);
$is_ban = validate($_POST['is_ban']) == true ? 1:0;

$userID = validate($_POST['userID']);

$user = getById('users',$userID);
if($user['status'] != 200)
{
    redirect('user-update.php?id='.$userID, 'No such id found');
}

if($name != ''|| $email != ' '|| $phone != '' || $password!='')
{
    $query = "UPDATE users SET
name ='$name',
phone ='$phone',
email='$email',
password='$password',
is_ban='$is_ban',
role='$role'
WHERE id='$userId'";
$result = mysqli_query($conn, $query);

if($result){
redirect('user.php', 'User/Admin Updated Successfully');
}else{
redirect('user-create.php', 'Something Went Wrong');
}
}

else{
    redirect('user-create.php', 'Please fill all the input fields');
}
}

if(isset($_POST['saveSetting']))
{
$title = validate($_POST['title']);
$slug = validate($_POST['slug']);
$small_description = validate($_POST['small_description']);

$meta_description = validate($_POST['meta_description']);
$meta_keyword = validate($_POST['meta_keyword']);

$email1 = validate($_POST['email1']);
$email2 = validate($_POST['emai12']);
$phone1 = validate($_POST['phone1']);
$phone2 = validate($_POST['phone2']);
$address = validate($_POST['address']);



$query = "INSERT INTO settings (title, slug, small_description,meta_description,meta_keyword,email1, email2, phone1, phone2, address)
VALUES ('$title ', '$slug', '$small_description', '$meta_description', '$meta_keyword', '$email1', '$email2', '$phone1', '$phone2 ','$address')";
$result = mysqli_query($conn, $query);

if($result){
redirect('settings.php', 'Settings Saved');
}else{
redirect('settings.php', 'Something Went Wrong .! ');

}
}


if(isset($_POST['save']))
{

$name = validate($_POST['name']);
$url = validate($_POST['url']);

$status= validate($_POST['status']) == true ? 1:0;

if($name != ''|| $url != ' ')
{
    $query ="INSERT INTO social_media(name, url, status)
VALUES ('$name', '$url', '$status')";
$result = mysqli_query($conn, $query);

if($result){
redirect('social-media.php', 'Socila Media  Added Successfully');
}else{
redirect('social-media-create.php', 'Something Went Wrong');
}
}

else{
    redirect('user-create.php', 'Please fill all the input fields');
}
}

if(isset($_POST['update']))
{

$name = validate($_POST['name']);
$url = validate($_POST['url']);

$is_ban = validate($_POST['status']) == true ? 1:0;

$userID = validate($_POST['userID']);

$user = getById('social_media',$userID);

if($name != ''|| $email != ' '|| $phone != '' || $password!='')
{
    $query = "UPDATE social_media SET
name ='$name',
url ='$phone',

status='$is_ban'

WHERE id='$userId'";
$result = mysqli_query($conn, $query);

if($result){
redirect('social-media.php', 'User/Admin Updated Successfully');
}else{
redirect('social-media--create.php', 'Something Went Wrong');
}
}

else{
    redirect('social-media-create.php', 'Please fill all the input fields');
}
}
<?php
if (isset ($_POST ['save'])) {

$name=$_POST['name' ] ;
$email=$_POST['email'];
$sub=$_POST['subject'];
$conn=$_POST['content'];
$con=mysqli_connect ('localhost','root', null, 'interior') ;
$query ="INSERT INTO contact(name,  email, subject,content)
VALUES ('$name','$email', '$sub', '$conn')";
if (mysqli_query ($con, $query1) ){
echo 'MEssage Sent';
}
else{
echo "error";

}
}
?>
?>