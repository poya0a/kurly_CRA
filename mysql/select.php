<?
include_once('./header.php');

$sql = "SELECT * FROM kurly_member";
$result = mysqli_query($conn, $sql);

$arr = array();

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result) ){
    array_push($arr, array(
      '번호'          => $row['idx'],
      '아이디'        => $row['userid'],
      '비밀번호'      => $row['userpw'],
      '이름'          => $row['username'],
      '이메일'        => $row['useremail'],
      '휴대폰'        => $row['userphone'],
      '주소'          => $row['useraddress'],
      '성별'          => $row['usergender'],
      '생년월일'      => $row['userbirthday'],
      '추가입력 사항' => $row['useradd'],
      '이용약관동의'  => $row['userservice'],
      '가입일'        => $row['userdate']
    ));
  }
}

$jsonData = json_encode($arr, JSON_UNESCAPED_UNICODE);

echo $jsonData;


include_once('./footer.php');
?>