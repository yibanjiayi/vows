<?php
include './public/common/config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/index.css">
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/jquery.drag.js"></script>
</head>
<body>
    <div class="main">
        <div class="header">
            <span>开心了，就来许愿墙，留言吧！</span>
        </div>
        <div class="nav">
            <div class="logo">
                <a href="index.php"><img src="./public/images/logo.jpg"></a>
            </div>
            <div class="send">
                <a href="index.php?a=add"><img src="./public/images/nava.gif"></a>
            </div>
            <div class="read">
                <a href="index.php?a=list"><img src="./public/images/navc.gif"></a>
            </div>
            <div class="find">
                <input type="text" class="search" maxlength="15">
                <input type="image" src="./public/images/sub.gif" class="sub">
            </div>
        </div>
        <div class="info">
            <?php
                switch ($_GET['a']) {
                    case 'add':
                        include 'add.php';
                        break;
                    case 'list':
                        include 'list.php';
                        break;
                    case 'so':
                        include 'so.php';
                        break;
                    default:
                        include 'show.php';
                        break;
                }
            ?>
        </div>
        <div class="footer">
            <span>www. ??? .com</span>
        </div>
    </div>
</body>
<script>
    $('.send img').hover(
        function () {
            $(this).attr({'src' : './public/images/navb.gif'});
        },function () {
            $(this).attr({'src' : './public/images/nava.gif'});
        }
    );
    $('.read img').hover(
        function () {
            $(this).attr({'src' : './public/images/navd.gif'});
        },function () {
            $(this).attr({'src' : './public/images/navc.gif'});
        }
    );

    setInterval(function () {
        t = new Date();
        y = t.getFullYear();
        m = t.getMonth();
        d = t.getDate();
        h = t.getHours();
        i = t.getMinutes();
        s = t.getSeconds();
        time = y + '-' + m + '-' + d + ' ' + h + ':' + i + ':' + s;
        $('.ptime').html(time);
    },1000);

    $('input').eq(0).keyup(function (){
        val = $(this).val();
        $(".ppick").html(val);
    });
    $(".input").eq(1).keyup(function () {
        val = $(this).val();
        $(".psend").html(val);
    });
    $("textarea").keyup(function () {
        val = $(this).val();
        $(".pinfo").html(val);
    });

    infow = $('.info').width();
    infoh = $('.info').height();
    voww = 240;
    vowh = 190;
    x = infow - voww;
    y = infoh - vowh;
    $('.vow').each(function (){
        randx = Math.ceil(Math.random() * x);
        randy = Math.ceil(Math.random() * y);
        $(this).css({'left':randx + 'px', 'top':randy + 'px'});
    });

    $('.vow').drag();

    $('.sub').click(function () {
        val = $(this).prev().val();
        url = 'index.php?a=so&id=' + val;
        location = url;
    });
</script>
</html>