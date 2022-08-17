<?PHP

include_once('./header.php');

$idData       = $_POST['idData']; 
$pwData       = $_POST['pwData']; 
$nameData     = $_POST['nameData']; 
$emailData    = $_POST['emailData']; 
$phoneData    = $_POST['phoneData']; 
$addressData  = $_POST['addressData']; 
$genderData   = $_POST['genderData']; 
$birthdayData = $_POST['birthdayData']; 
$addData      = $_POST['addData']; 
$serviceData  = $_POST['serviceData']; 
$dateData     = $_POST['dateData']; 

$sql = "INSERT INTO kurly_member (userid, userpw, username, useremail, userphone, useraddress, usergender, userbirthday, useradd, userservice, userdate) 
VALUE ('$idData','$pwData','$nameData','$emailData','$phoneData','$addressData','$genderData','$birthdayData','$addData','$serviceData','$dateData')";

$result = mysqli_query($conn, $sql);

if(!$result){  
  die("데이터 입력 실패");
}
else {
  echo('데이터 입력 성공');
}


include_once('./footer.php');
?>