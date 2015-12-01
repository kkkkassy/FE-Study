﻿<!DOCTYPE html>
<?php
     session_start();

   if(empty($_SESSION['username'])){
    echo "<script>window.location.replace('login.php')</script>";
   }
?>

<html>
<head>
    <title>Index</title>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" type="text/css" href="css/main_page.css" />
    <link rel="short icon" href="imgs/home.png" type="image/x-icon">
</head>

<body>
    <div class="header">
        <h2><a href="#home">一个新的开始</a></h2>
        <div>
            <ul>
                <li class="nav">
                    <a href="#about"><img src="imgs/about.png" width="30" height="30" alt="about">关于</a>
                </li>
                <li class="nav">
                    <a href="#book"><img src="imgs/book.png" width="30" height="30" alt="book">读书</a>
                </li>
                <li class="nav">
                    <a href="#books"><img src="imgs/books.png" width="30" height="30" alt="books">分类</a>
                </li>
                <li class="nav">
                    <a href="#books"><img src="imgs/books.png" width="30" height="30" alt="library">归档</a>
                </li>
                <li class="nav">
                    <a href="#home"><img src="imgs/home.png" width="30" height="30" alt="home">首页</a>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <ul class="content">
            <li><a href="http://www.w3school.com.cn/html/index.asp">HTML</a></li>
            <hr>
            <li><a href="http://www.w3school.com.cn/css/index.asp">CSS</a></li>
            <hr>
            <li><a href="http://www.w3school.com.cn/b.asp">JavaScript</a></li>
            <hr>
            <li><a href "http://www.w3school.com.cn/sql/index.asp">SQL</a></li>
            <hr>
            <li><a href="http://www.w3school.com.cn/jquery/index.asp">jQuery</a></li>
            <hr>
        </ul>
    </div>
    <div class="footer">
        <p>something about copyright </p>
        <p>some information with <a href="#links" tilt="links about creators">links</a> related with the creators </p>
    </div>
</body>

</html>