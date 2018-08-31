<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hero blog</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: white;
            width: 100%;
            height: 100%;
        }
        .navbar-static-top{
            background-color: #9caebf;
            height: 60px;
        }
        .navbar-static-top-text{
            padding: 0 auto;
            height: 60px;
            color: white;
        }
        .navbar-static-top-sign{
            float: left;
            padding-top: 10px;
            padding-left: 300px;
            font-size: 22px;
            color: white;
            text-decoration: none;
        }
        .navbar-static-top-left li{
            float:left;
            font-size: 15px;
            padding: 15px 15px;
            list-style-type: none;
        }
        .navbar-static-top-left li a{
            color: white;
            text-decoration: none;
        }
        .navbar-static-top-right{
            float: right;
            padding-top: 15px;
            padding-right: 250px;
            font-size: 20px;
        }
        .navbar-static-top-right a{
            color: white;
            text-decoration: none;
            padding: 15px 15px;
        }
        .navbar-static-top-right input{
            height: 30px;
            border-radius: 10px;
            border: 1px solid white;
            background: #9caebf;
            text-indent: 10px;
        }
        .navbar-static-top-right input::-webkit-input-placeholder {
            color: white;
        }
        .jumbotron{
            text-align: center;
            color: white;
            margin: 0 auto;
            height: 188px;
            background: #9caebf;
        }
        .jumbotron h1{
            width: 500px;
            margin: auto;
            text-align: center;
            padding: 50px 20px 0;
        }
        .jumbotron-text{
            width: 500px;
            margin: auto;
            text-align: center;
            padding: 10px 20px 0;
        }
        .blog-footer{
            background-color: #9caebf;
            width: 100%;
            position: fixed;
            bottom: 0;
            height: 264px;
            text-align: center;
        }
        .blog-footer-n1{
            width: 500px;
            margin: 20px auto;
            height: 24px;
            list-style-type: none;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .blog-footer-n1 li{
            height: 50px;
            margin: 0 20px;
        }
        .blog-footer-n1 li a img{
            height: 32px;
            width: 32px;
        }
        .blog-footer-n2{
            height: 24px;
            width: 500px;
            text-align: center;
            margin: 0 auto;
        }
        .blog-footer-n2 a{
            padding: 0 30px;
            text-decoration: none;
            color: white;
        }
        .blog-footer-n3{
            color: white;
            margin: 30px;
        }
        .blog-footer-n4 a img{
            width: 100px;
            height: 50px;
            margin: 0 auto;
        }
        .blog-footer-n5{
            width: 500px;
            height: 44px;
            margin: 0 auto;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar-static-top">
        <nav class="navbar-static-top-text">
            <a href="{{url('/article')}}" class="navbar-static-top-sign">Hero Blog</a>
            <ul class="navbar-static-top-left">
                <li><a href="">文章</a></li>
                <li><a href="">讨论</a></li>
                <li><a href="">分享</a></li>
                <li><a href="">文档</a></li>
                <li><a href="">打赏</a></li>
                <li><a href="">例子</a></li>
            </ul>
            <div class="navbar-static-top-right">
                <input type="text" name="search" placeholder="搜索">
                <a href="">登录</a>
                <a href="">注册</a>
            </div>
        </nav>
    </div>
    <div>
        @section('part')
        <div class="jumbotron">
            <h1>Don't worry.</h1>
            <h3 class="jumbotron-text">everything is under controller.</h3>
        </div>
        @show
    </div>
    @section('content')
        @show
    <div class="blog-footer">
        <ul class="blog-footer-n1">
            <li><a href=""><img src="images/timg.png" alt="图1"></a></li>
            <li><a href=""><img src="images/timg1.png" alt="图2"></a></li>
            <li><a href=""><img src="images/timg2.png" alt="图3"></a></li>
        </ul>
        <div class="blog-footer-n2">
            <a href="">友情链接</a>
            <a href="">关于我</a>
        </div>
        <div class="blog-footer-n3">
            <span>CDN支持</span>
        </div>
        <div class="blog-footer-n4">
            <a href="https://www.qixiubao.cn/v4.21.42/index.php?client=PC#!/login"><img src="images/car.png" alt="汽修宝"></a>
        </div>
        <div class="blog-footer-n5">
            <p>© Hero 2018. All rights reserved.粤ICP备16020344号-1 </p>
        </div>
    </div>
</body>
</html>