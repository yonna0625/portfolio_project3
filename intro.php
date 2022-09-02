<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    section {
        width: 100%;
        height: 500px;
    }
    #footer_content {
        margin-top: 300px;
    }
    .title > img {
        width: 480px;
        height: 60px;
        margin-top: 40px;
        margin: 0 auto;
    }
    .title > p {
        width: 600px;
        height: 50px;
        margin: 30px auto;
        text-align: center;
        font-weight: 600;
        font-size: 20px;
    }
    .content {
        width: 100%;
        height: 300px;
    }
    .intro-img {
        width: 720px;
        height: 300px;
        margin: 30px auto;
    }
    .intro-img .intro {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        float: left;
        margin-right: 20px;
        margin-left: 20px;
        position: relative;
    }
    .intro-img img {
        position: absolute;
        top: 60px;
        left: 75px;
    }
    .intro-img span {
        display: inline-block;
        position: absolute;
        top: 120px;
        left: 50px;
        color: #ffffff;
    }
    .intro-img span.second {
        left: 55px;
    }
    .intro-img span.third {
        left: 65px;
    }
    .intro1 {
        background-color: #F08080;
    }
    .intro2 {
        background-color: #FA8072;
    }
    .intro3 {
        background-color: #FF6347;
    }
    .intro-img b {
        position: relative;
        top: 215px;
        color: #666666;
        text-align: center;
    }
</style>
<body>
    <div id="main_img_bar"></div>
    <section>
        <!-- 로고 -->
        <div class="title">
            <p><img src="./img/visual_logo.png" alt="logo"></p>
            <p>이 거리의 브랜드는 당신입니다</p>
        </div>
        <div class="content">
            <div class="intro-img">
                <div class="intro intro1">
                    <img src="./img/intro_img1.png" alt="img1">
                    <span>
                        나의, 만들어가는
                    </span>
                    <b>
                        <p>
                            데이터 기반으로 개개인에
                            맞춘, 고객이 원하는 제품을
                            예측하여 제시합니다.
                        </p>
                    </b>
                </div>
                <div class="intro intro2">
                    <img src="./img/intro_img2.png" alt="img2">
                    <span class="second">
                        라이프 스타일
                    </span>
                    <b>
                        <p>
                            뷰티를 넘어 바이오, 패션,
                            생활용품 등 생활에 밀접한
                            모든 분야를 제공합니다.
                        </p>
                    </b>
                </div>
                <div class="intro intro3">
                    <img src="./img/intro_img3.png" alt="img3">
                    <span class="third">
                        글로벌 뷰티
                    </span>
                    <b>
                        <p>
                            전세계 누구와도 쉽게 소통이
                            가능하고 쉽게 접근 가능한 맞춤형
                            뷰티 플랫폼 환경을 제공합니다.
                        </p>
                    </b>
                </div>
            </div>
        </div>
    </section>
</body>
</html>