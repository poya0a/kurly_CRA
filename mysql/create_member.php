<?PHP

include_once('./header.php');

$sql = "CREATE TABLE IF NOT EXISTS kurly_member (
  idx          INT(11)      NOT NULL AUTO_INCREMENT COMMENT '자동증가 고유번호',
  userid       VARCHAR(20)  NOT NULL                COMMENT '아이디',
  userpw       VARCHAR(20)  NOT NULL                COMMENT '비밀번호',
  username     VARCHAR(50)  NOT NULL                COMMENT '이름',
  useremail    VARCHAR(300) NOT NULL                COMMENT '이메일',
  userphone    VARCHAR(11)  NOT NULL                COMMENT '휴대폰',
  useraddress  VARCHAR(500) NOT NULL                COMMENT '주소',
  usergender   VARCHAR(4)                           COMMENT '주소',
  userbirthday VARCHAR(10)                          COMMENT '생년월일',
  useradd      VARCHAR(30)                          COMMENT '추가입력 사항',
  userservice  VARCHAR(100) NOT NULL                COMMENT '이용약관 동의',
  userdate     DATE         NOT NULL                COMMENT '가입일',  
  PRIMARY KEY (idx)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COMMENT='마켓컬리 회원 가입 테이블'";

$result = mysqli_query($conn, $sql);

if(!$result){
  die('테이블 생성 실패');
}

else{
  echo('테이블 생성 성공');
}

include_once('./footer.php');

?>
