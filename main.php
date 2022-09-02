        <!-- 헤더 끝내고 그 다음 오는 div. -->
        <!-- 게시판의 최근게시물과 포인트가 표시되는 영역 -->
        <div id="main_img_bar">
        </div>
        <div id="main_content">
            <div id="latest">
                <h4>최근게시글</h4>
                <p class="notice_plus"><a href="board_list.php"> + </a></p>
                <ul>
                    <!-- 최근 게시글 Db에서 불러오기 -->
                    <?php
                        $con = mysqli_connect("localhost",DBuser , DBpass, DBname);
                        //지정한 로컬호스트,텍스트,DB네임등 설정한 것,
                        $sql = "select * from board order by num desc limit 5";
                        $result = mysqli_query($con, $sql);
                        //게시판 DB테이블인  BOARD에 저장된 최근 게시물 5개를 num필드에 내림차순으로 정렬 후 $result에 저장.(담음)

                        if(!$result)//!=게시글이 생성되지 않았다면,
                            echo "게시판 DB 테이블(BOARD)이 생성 전이거나 아직 게시글이 없습니다.";

                        else{
                            while($row = mysqli_fetch_array($result))
                            //board테이블에서 필드의 각 항목 가져오기
                            {
                                $regist_day = substr($row["regist_day"],0,10);
            ?>            
                            <li>
                                <span><?= $row["subject"] ?></span>
                                <span><?= $row["name"] ?></span>
                                <span><?= $regist_day ?></span>
                            </li>
                    <?php  //li가 중간에 들어가야해서 php 구문 사이로.
                            }
                        }
                   ?> 
                    
                </ul>
                
            </div>
            <div id="point_rank">
                <h4>포인트랭킹</h4>
                <ul>
                    <!-- 포인트 랭킹 표시하기 -->
                <?php
                
                $rank = 1;
                $sql = "select * from members order by point desc limit 4";
                $result = mysqli_query($con, $sql);

                if(!$result)
                    echo "회원 DB 테이블 (members)이 생성 전이거나 아직 가입된 회원이 없습니다!";
                else
                {
                    while( $row = mysqli_fetch_array($result) )
                    {
                        $name = $row["name"];
                        $id = $row["id"];
                        $point = $row["point"];

                        $name = mb_substr($name,0,1)." * ".mb_substr($name, 2, 1);
                        //mb_substr를 이용하여 한글문자열이 ....
        ?>   
                        <li>
                            <span><?=$rank?></span>
                            <span><?=$name?></span>
                            <span><?=$id?></span>
                            <span><?=$point?></span>
                        </li>
                
            <?php  //li가 중간에 들어가야해서 php 구문 사이로.
                        $rank++;
                        }
                    }
                    mysqli_close($con);
                ?>
                


                </ul>
            </div>
        </div>