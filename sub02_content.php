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
        height: 600px;
    }
    .title {
        text-align: center;
        font-weight: 600;
        font-size: 30px;
        margin-top: 20px;
    }
    .map {
        width: 850px;
        height: 500px;
        margin: 25px auto;
        box-shadow: 0 0 15px #dfdfdf;
    }
    .map img {
        position: relative;
        left: 40px;
        top: 20px;
    }
    .checkbox {
        width: 400px;
        height: 250px;
        float: right;
        margin: 100px 30px 0 0;
    }
    #footer_content {
        margin-top: 300px;
    }
    input, select {
        width: 400px;
        height: 50px;
        margin-bottom: 10px;
        border: 1px solid #dfdfdf;
    }
    input {
        width: 395px;
    }
    button {
        width: 49%;
        height: 50px;
        margin-left: 1px;
        border-style: none;
    }
    button.first {
        background-color: #ff6347;
        color: #ffffff;
        cursor: pointer;
    }
    button.second {
        background-color: #ffffff;
        border: 1px solid #ff6347;
        color: #ff6347;
        cursor: pointer;
    }
</style>
<body>
    <div id="main_img_bar"></div>
    <section>
        <p class="title">매장 찾기</p>
        <div class="map">
            <img src="./img/sub02_map.png" alt="map">
            <div class="checkbox">
                <select name="local1" id="local1">
                    <option>광역시/도</option>
                    <option>경기도</option>
                    <option>제주도</option>
                    <option>서울특별시</option>
                </select>
                <select name="local2" id="local2">
                    <option>시/군/구</option>
                </select>
                <input type="text">
                <button class="first">검색</button>
                <button class="second">토니모리 공식 온라인몰</button>
            </div>
        </div>
    </section>
</body>
</html>