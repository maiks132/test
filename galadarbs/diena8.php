<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <style>
        nav{
            background-color: lightblue;
        }
        ul{
            padding-left: 0px;
            display: flex;
        }
        li{
            display: inline-block;
            flex: 1;
        }
        li:nth-child(1){
            flex: 3;
        }
        a{
            padding: 10px 20px;
            display:inline-block;
            border: 2px solid #000;
        }
        .container{
            width: 80%;
            margin-left: 10%;
            min-height: 300px;
            background-color: #eee;
        }
        @media only screen and (max-width: 500px)
        {
            .container{
                width: 100%;
                margin-left: 0px;
            }
        }
    </style>
</head>
<body>
<?php
$navigation=['welcome'=>'/galadarbs/resources/views/welcome.php', 'about'=>'/about.php','contact'=>'/contact.php'];

?>
<nav>
    <ul>
    <?Php

    foreach ($navigation as $name => $url) {
       echo("<li><a href='$url'>$name</a></li>");
        // VAI
        // echo('<li><a href='.$url.'">'.$name.'</a></li>');
    }

    ?>
</ul>
</nav>
<div class="container">
    
</div>
</body>
</html>