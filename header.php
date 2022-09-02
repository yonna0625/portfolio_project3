<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/header.js"></script>
	<script src="./js/jquery-1.11.0.min.js"></script>
    
</head>
<body>
<?php
    include "define.php"; 
    
    session_start(); // 세션의 시작. 세션을 저장하거나 저장된 세션을 사용할 때 미리 선언해야 함.

    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    // isset() 함수는 id값이 있는지 검사하여 있으면 true, 없으면 false를 반환

    else $userid = ""; // 값을 null로 설정.

    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    
    else $username = ""; 

    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";

?>		
        <div id="top">
            <h1>
                <a href="index.php"><img src="./img/fix_logo.gif"></a>
            </h1>
            <ul id="top_menu">  

<?php
    if(!$userid) { //로그인 되지 않은 상태.
       
?>           

                <li><a href="member_form.php">회원 가입</a> </li>
                <li> · </li>
                <li><a href="login_form.php">로그인</a></li>

<?php
    } else { // 로그인 상태. 사용자 이름, 아이디, 레벨, 포인트가 출력됨.
       

        $logged = $username."님 [Level:".$userlevel.", Point:".$userpoint."]";
        

?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="member_modify_form.php">마이페이지</a></li>
<?php
    }
?>


<?php
    if($userlevel==1) { // 관리자모드 버튼. 로그인한 사용자가 관리자인지 확인하여 관리자면 관리자 페이지에 접속하는 메뉴가 생김.
   
?>
                <li> | </li>
                <li><a href="admin.php">관리자 모드</a></li>
<?php
    }
?>
            </ul>
        </div>
        <div id="menu_bar">
            <ul class="main_menu">  
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">BRAND</a></li>                                
                <li><a href="#">STORE</a></li>
                <!-- <li><a href="#">NOTICE</a></li> -->
                <!-- <li><a href="login_form.php">MYPAGE</a></li> -->
                <li><a href="#">BOARD</a></li>
            </ul>
            <ul class="sub_menu">
               <li><a href="index.php" style="text-decoration: underline">미션/비전</a></li> 
               <li><a href="#">연혁</a></li> 
               <li><a href="#">대표이사 인사말</a></li> 
               <li class="second"><a href="sub01.php" style="text-decoration: underline">Brands</a></li> 
               <li class="second"><a href="#">Brands Gallery</a></li> 
               <li class="third"><a href="sub02.php" style="text-decoration: underline">국내</a></li> 
               <li class="third"><a href="#">해외</a></li> 
               <li class="third"><a href="#">온라인몰</a></li> 
               <li class="fourth"><a href="board_main.php" style="text-decoration: underline">게시판 메인</a></li>
               <li class="fourth"><a href="board_list.php" style="text-decoration: underline">게시판 목록</a></li>
            </ul>
        </div>
</body>
<script>
    $(function() {

    $('.sub_menu').hide()

    $('#menu_bar > ul > li').click(function(){
        $('.sub_menu').slideToggle();
    })

    });
</script>
</html>