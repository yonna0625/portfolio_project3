<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<script type="text/javascript" src="./js/member_modify.js"></script>
</head>
<style>
	h2 {
		position: relative;
		left: -30px;
		top: -10px;
	}
	.col2 {
		margin-top: 13px;
	}
	.password {
		position: relative;
		left: -110px;
	}
	#main_content {
		height: 500px;
		position: relative;
	}
	.form.id {
		position: relative;
		height: 100px;
		top: -10px;
	}
	.form {
		width: 800px;
		height: 300px;
	}
	input[name=pass] {
		position: relative;
		left: -110px;
		top: -15px;
	}
	.confirm {
		position: absolute;
		left: 200px;
		top: 195px;
	}
	input[name=pass_confirm] {
		margin-left: 110px;
		position: relative;
		top: -20px;
	}
	.name {
		position: absolute;
		left: 200px;
		top: 250px;
	}
	input[name=name] {
		position: relative;
		right: 290px;
		top: 20px;
	}
	.email-text {
		position: relative;
		top: 25px;
	}
	.col2.email {
		position: relative;
		top: 10px;
	}
	.buttons {
		position: relative;
		top: 10px;
		left: 2px;
	}
</style>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
<?php    
   	$con = mysqli_connect("localhost", DBuser, DBpass, DBname); 
   
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

 	
    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]); 
    
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>
	<section>
		<div id="main_img_bar">
           
        </div>
        <div id="main_content">
      		<div id="join_box">
      		
          	<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
          		
			    <h2>회원 정보수정</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<?=$userid?> 
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1 password">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass" value="<?=$pass?>">
							
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1 confirm">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1 name">이름</div>
				        <div class="col2">
							<input type="text" name="name" value="<?=$name?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1 email-text">이메일</div>
				        <div class="col2 email">
							<input type="text" name="email1" value="<?=$email1?>">@<input 
							       type="text" name="email2" value="<?=$email2?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="./img/button_save.png" onclick="check_input()">&nbsp;
	                	
                  		<img id="reset_button" style="cursor:pointer" src="./img/button_reset.png"
                  			onclick="reset_form()">
	           		</div>
           	</form>
        	</div> 
        </div> 
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
