<html>

<head>
    <title>DATE FUNCTIONS</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="John Lloyd Umani">
	<meta name="description" content="Shows multiple date-functions that enhances web readability.">
	<meta name="keywords" content="webdev, web development, activities, fun, learning, home, date, functions, day, time, year">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: grey;
        }

        ::-webkit-scrollbar-thumb {
            background: white;
        }

        img {
            image-rendering: optimizeQuality;
        }


        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-weight: bold;
            text-align: center;
            background: linear-gradient(to bottom, rgb(255, 176, 116), rgb(255, 176, 116), rgb(142, 195, 255), rgb(142, 195, 255));
            color: rgb(56, 10, 10);
            font-family: "Roboto Slab";
            font-size: 20px;
            overflow-x: hidden;
            transition: background 0.5s ease;
        }

        body.background-animation {
            background-position: left;
            background-size: 200% 200%;

        }

        .cont h1 {
            color: black;
            background: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 30px;
            margin-bottom: 10px;
        }

        hr {
            width: 100%;
            height: 2px;
            background: black;
            border: none;
            margin-top: 40px;
        }

        .cont {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .titleCont {
            opacity: 1;
            transform: translateX(0);
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            margin-top: 50px;
        }

        .titleCont hr {
            margin: 0;
        }

        #title {

            position: relative;
            background: orangered;
            opacity: 1;
            margin-top: 5px;
            transform: translateX(0);
            white-space: nowrap;
            border-radius: 20px;
            overflow: hidden;
            width: 1000px;
            border: solid transparent;
            z-index: 1;
            transition: border 0.5s ease;
        }

        #title:hover {
            border: solid black;

        }

        #text-title {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
            border-radius: 20px;
            font-size: 40px;
            cursor: default;
        }

        #backBtn {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: orange;
            border-radius: 20px;
            position: absolute;
            font-size: 40px;
            width: 100%;
            height: 100%;
            background: white;
            top: 0;
            left: 0;
            bottom: 0;
            opacity: 1;
            transform: translateY(-200%);
            z-index: 1;
            transition: transform 0.5s ease;
        }

        #title:hover #backBtn {
            transform: translateY(0);
        }

        div {
            margin-top: 40px;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 1s ease,
                transform 0.8s ease-out;
        }

        div.show-animation,
        #num1,
        #num2,
        #num3 {
            transform: translateX(0);
            opacity: 1;
        }

        #num1 {
            margin-top: 50px;
        }

        #jose-left,
        #jose-right {
            opacity: 0;
            position: absolute;
        }

        #jose-left {
            top: 100;
            left: -300;
            rotate: 22deg;
            z-index: 2;
            transition: opacity 2s ease,
                left 2s ease;
        }

        #jose-right {
            top: 100;
            right: -500;
            rotate: -90deg;
            z-index: 2;
            transition: opacity 2s 2s ease,
                right 2s 2s ease;
        }

        /* animation of logo */

        .logo-cont {
            background: black;
            position: sticky;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 0;
            bottom: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            z-index: 100;
            transition: left 1s ease;
        }

        #logo-title {
            opacity: 0;
            position: relative;
            font-size: 5rem;
            color: #00fffb;
            font-weight: bold;
            z-index: 1;
            cursor: pointer;
        }

        #logo-title::before {
            opacity: 0;
            position: absolute;
            content: "";
            background: hsl(179, 100%, 50%, 70%);
            width: 100%;
            height: 100%;
            bottom: -50%;
            right: 0;
            left: 0;
            z-index: -1;
            transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
        }

        #logo-title:hover {
            opacity: 1;
            animation: glowing 10s;
        }

        #logo-title:hover::before {
            opacity: 1;
            animation: glowingfloor 10s;
        }


        @keyframes glowing {

            0%,
            7%,
            9%,
            30%,
            100% {
                filter: brightness(1);
                filter: drop-shadow(0px 0px 150px #00fffb);
                text-shadow: 0px 0px 10px #00fffb;
            }

            3%,
            6%,
            8%,
            10% {
                filter: brightness(0);
            }
        }

        @keyframes glowingfloor {

            0%,
            7%,
            9%,
            20%,
            50%,
            100% {
                filter: blur(0.5em);
            }

            3%,
            6%,
            8%,
            10%,
            99% {
                filter: blur(0.45em);
            }
        }
    </style>
</head>

<body>
    <section class="logo-cont">
        <h3 id="logo-title">DATE FUNCTIONS</h3>
    </section>
    <img src="side_jose-removebg-preview.png" alt="" id="jose-left">
    <img src="jose+mari+chan+stretching-removebg-preview (1).png" alt="" id="jose-right">
    <div class="titleCont">
        <hr id="hr1">
        <div id="title">
            <a href="index.html" id="backBtn">GO BACK</a>
            <h1 id="text-title">DATE FUNCTIONS</h1>
        </div>
        <hr id="hr2">
    </div>

    <?php
    echo '<div class="cont" id="num1">';
    echo "<h1>#1 checkdate()</h1>";
    var_dump(checkdate(12, 31, -400));
    var_dump(checkdate(2, 29, 2003));
    var_dump(checkdate(2, 29, 2004));
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num2">';
    echo "<h1>#2 date_add()</h1>";
    $date = date_create("2013-03-15");
    date_add($date, date_interval_create_from_date_string("40 days"));
    echo date_format($date, "Y-m-d");
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num3">';
    echo "<h1>#3 date_create_from_format()</h1>";
    $date = date_create_from_format("j-M-Y", "15-Mar-2013");
    echo date_format($date, "Y-m-d");
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num4">';
    echo "<h1>#4 date_create()</h1>";
    $date = date_create("2013-03-15");
    echo date_format($date, "Y/m/d");
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num5">';
    echo "<h1>#5 date_default_timezone_set()</h1>";
    date_default_timezone_set("Asia/Bangkok");
    echo date_default_timezone_get();
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num6">';
    echo "<h1>#6 date_diff() <br></h1>";
    $date1 = date_create("2013-03-15");
    $date2 = date_create("2013-12-12");
    $diff = date_diff($date1, $date2);
    echo "Difference: ";
    echo $diff->y . " years, " . $diff->m . " months, " . $diff->d . " days";
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num7">';
    echo "<h1>#7 date_create()</h1>";
    $date = date_create("2013-03-15");
    echo date_format($date, "Y/m/d H:i:s");
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num8">';
    echo "<h1>#8 date()</h1>";
    echo date("l jS \of F Y h:i:s A");
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num9">';
    echo "<h1>#9 getdate()</h1>";
    print_r(getdate());
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num10">';
    echo "<h1>#10 idate()</h1>";
    echo idate("B") . "<br>";
    echo idate("d") . "<br>";
    echo idate("h") . "<br>";
    echo idate("H") . "<br>";
    echo idate("i") . "<br>";
    echo idate("I") . "<br>";
    echo idate("L") . "<br>";
    echo idate("m") . "<br>";
    echo idate("s") . "<br>";
    echo idate("t") . "<br>";
    echo idate("U") . "<br>";
    echo idate("w") . "<br>";
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num11">';
    echo "<h1>#11 localtime()</h1>";
    print_r(localtime());
    echo "<br><br>";
    print_r(localtime(time(), true));
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num12">';
    echo "<h1>#12 mktime()</h1>";
    echo "Oct 3, 1975 was on a " . date("l", mktime(0, 0, 0, 10, 3, 1975));
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num13">';
    echo "<h1>#13 strftime()</h1>";
    echo (strftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
    setlocale(LC_ALL, "hu_HU.UTF8");
    echo (strftime("%Y. %B %d. %A. %X %Z"));
    echo "<hr>";
    echo "</div>";

    echo '<div class="cont" id="num14">';
    echo "<h1>#14 strtotime()</h1>";
    $date_string = "2003-10-08 14:30:00";
    $timestamp = strtotime($date_string);
    echo "Timestamp for $date_string: $timestamp";
    echo "<hr>";
    echo "</div>";
    ?>
    <script>
        let divs = document.querySelectorAll("div");
        window.onscroll = function() {
            divs.forEach(div => {
                let windowPos = window.scrollY;
                let elementTop = div.offsetTop - 550;
                let elementHeight = div.offsetHeight;

                if (windowPos >= elementTop) {
                    div.classList.add('show-animation');
                } else {
                    div.classList.remove("show-animation");
                }
            });
        }
        document.getElementById("title").addEventListener("mouseover", function() {
            document.body.style.background = "linear-gradient(to right,red,orange,yellow,lime,blue,indigo,violet)";
            document.body.classList.add("background-animation");
            document.getElementById("jose-left").style.left = "-35";
            document.getElementById("jose-left").style.opacity = "1";
            document.getElementById("jose-right").style.right = "-50";
            document.getElementById("jose-right").style.opacity = "1";
        });
        document.getElementById("title").addEventListener("mouseout", function() {
            document.body.style.background = "linear-gradient(to bottom, rgb(255, 176, 116), rgb(255, 176, 116), rgb(142, 195, 255), rgb(142, 195, 255))";
            document.getElementById("jose-left").style.left = "-300";
            document.getElementById("jose-right").style.right = "-500";
            document.getElementById("jose-right").style.opacity = "0";
            document.getElementById("jose-left").style.opacity = "0";
        });

        // newwwww
        document.getElementById("logo-title").addEventListener("click", function() {
            console.log("Logo title is clicked");
            document.querySelector(".logo-cont").style.position = "absolute";
            document.querySelector(".logo-cont").style.left = "150%";
        });
    </script>

</body>

</html>