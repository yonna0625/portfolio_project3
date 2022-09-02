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
        margin-top: 600px;
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
    .title:after {
        content: '';
        display: block;
        border-bottom: 1px solid #333333;
        width: 30px;
        margin: 0 auto;
    }
    .content {
        width: 100%;
        height: 300px;
    }
    .content p {
        width: 600px;
        height: 150px;
        margin: 40px auto;
        text-align: center;
        font-size: 20px;
    }
</style>
<body>
    <div id="main_img_bar"></div>
    <section>
        <!-- 로고 -->
        <div class="title">
            <p><img src="./img/sub01_logo.png" alt="logo"></p>
            <p>이 거리의 브랜드는 당신입니다</p>
        </div>
        <div class="content">
            <p>
                시대의 트렌드가 반영되고 즐거운 에너지가 가득한 도시의 거리,
                자유분방한 개성과 자신을 사랑하는 거리의 사람들.
                도시의 거리를 모티브로 즐겁고 자유로운 라이프스타일을 지향하는
                스트리트 컬처(street culture) 뷰티 브랜드 <span style="color: coral">‘토니모리’</span>입니다.
            </p>
            <p><img src="./img/sub01_product.jpg" alt="product"></p>
        </div>
    </section>
</body>
</html>