<?php
    include "define.php";


    $num   = $_GET["num"];
    $page   = $_GET["page"];


    
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql = "select * from board where num = $num";
    $result = mysqli_query($con, $sql); 
    $row = mysqli_fetch_array($result); 

    $copied_name = $row["file_copied"]; 

    if ( $userlevel != 1 )
    {
        echo("
                    <script>
                    alert('관리자가 아닙니다! 게시판 삭제는 관리자만 가능합니다!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }


    
	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path); 
    }

    
    $sql = "delete from board where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
        //페이지 이동
            location.href = 'board_list.php?page=$page';
        </script>
    ";
?>