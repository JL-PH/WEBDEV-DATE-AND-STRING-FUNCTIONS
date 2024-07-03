<!DOCTYPE html>
<html lang="en">

<head>
    <title>STRING FUNCTIONS</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="John Lloyd Umani">
	<meta name="description" content="Page where different functions can change the output of strings.">
	<meta name="keywords" content="webdev, web development, activities, fun, learning, home, strings, string, functions, function, string functions, string-functions, string-function"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
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

        body {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            font-family: "Roboto Slab";
            background: linear-gradient(to bottom, rgb(0, 194, 194), rgb(106, 160, 255), rgb(226, 99, 255), rgb(238, 130, 179));
            font-weight: bold;
            overflow-x: hidden;
        }

        .line {
            width: 100%;
            border: none;
            background-color: rgb(3, 3, 3);
            box-shadow: 0px 0px 20px grey;
            margin-top: 40px;
            height: 3px;
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 1s ease,
                transform 1s ease-out;
        }

        .cont {
            padding: 0px 50px;
            width: 100%;
            opacity: 0;
            font-size: 18px;
            transform: translateX(100%);
            transition: opacity 1s ease,
                transform 0.7s ease-out;
        }

        h1 {
            color: rgb(255, 255, 255);
            text-shadow: 0px 0px 5px black;
        }

        div:nth-of-type(1),
        div:nth-of-type(2) {
            opacity: 1;
            transform: translateY(0);
        }

        .cont.animation,
        .line.animation {
            opacity: 1;
            transform: translateX(0);
        }

        .title-cont {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        #backBtn {
            display: none;
            position: absolute;
            right: 80%;
            background: black;
            padding: 10px 20px;
            border-radius: 20px;
            color: white;
            text-decoration: none;
            transition: opacity 1s ease;
        }

        #title {
            font-size: 40px;
            padding: 5px 10px;
            border-radius: 10px;
            background: black;
        }

        #cat {
            position: absolute;
            height: 6em;
            right: -10%;
        }

        #cat.animation {
            animation: run 3s linear;
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
            color: lime;
            font-weight: bold;
            z-index: 1;
            cursor: pointer;
        }

        #logo-title::before {
            opacity: 0;
            position: absolute;
            content: "";
            background: hsl(120, 100%, 50%, 70%);
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
                filter: drop-shadow(0px 0px 150px lime);
                text-shadow: 0px 0px 10px lime;
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


        @keyframes run {
            0% {
                opacity: 1;
                right: -10%;
            }

            95% {
                right: 120%;
                opacity: 1;
            }

            96%,
            99% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="logo-cont">
        <h3 id="logo-title">STRING FUNCTIONS</h3>
    </div>
    <div class="title-cont" id="title-cont">
        <a href="index.html" id="backBtn">GO BACK</a>
        <h1 id="title">STRING FUNCTIONS</h1>
        <img src="cat.gif" alt="cat" id="cat">
    </div>
    <?php
    echo "<div class=cont>";
    echo "<h1>#1 addcslashes()</h1>";
    $str = "Hello, my name is John Lloyd<br>";
    echo $str;
    echo addcslashes($str, "o") . "<br>";
    echo addcslashes($str, "m");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#2 addslashes()</h1>";
    $str = "Who's John Lloyd?<br>";
    echo $str . "This is not safe in a database query<br><br>";
    echo addslashes($str) . "This is safe in a database query";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#3 bin2hex()</h1>";
    $str = "a";
    echo bin2hex($str) . "<br>";
    echo pack("H*", '61') . "<br>";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#4 chr()</h1>";
    echo chr(52) . "<br>";
    echo chr(052) . "<br>";
    echo chr(0x52) . "<br>";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#5 chunk_split()</h1>";
    echo chunk_split($str, 1, ".");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#6 convert_cyr_string()</h1>";
    echo "deprecated";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#7 convert_uuedecode()</h1>";
    $str = ",2&5L;&\@=V]R;&0A";
    echo convert_uudecode($str);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#8 convert_uuendecode()</h1>";
    $str = "Hello world!";
    echo convert_uuencode($str);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#9 crc32()</h1>";
    $str = "Hello world!";
    echo 'Without %u: ' . $str . "<br>";
    $str = crc32($str);
    echo 'With %u: ';
    printf("%u", $str);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#10 echo()</h1>";
    $str = "Who's John Lloyd?";
    echo $str;
    echo "<br>";
    echo $str . "<br>I don't know!";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#11 fprintf()</h1>";
    $str = "Hello";
    $number = 123;
    $file = fopen("text.txt", "w");
    echo fprintf($file, "%s world. Day number %u", $str, $number);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#12 get_html_translation_table()</h1>";
    print_r(get_html_translation_table());
    echo "<br />";
    print_r(get_html_translation_table(HTML_ENTITIES));
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#13 hebrev()</h1>";
    echo hebrev("אני אוהב אותך", 40);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#14 html_entity_decode</h1>";
    $str = "Jane &amp; &#039;Tarzan&#039;";
    echo html_entity_decode($str);
    echo "<br />";
    echo html_entity_decode($str, ENT_QUOTES);
    echo "<br />";
    echo html_entity_decode($str, ENT_NOQUOTES);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#15 htmlentities()</h1>";
    $str = "Jane & 'Tarzan'";
    echo htmlentities($str, ENT_COMPAT);
    echo "<br />";
    echo htmlentities($str, ENT_QUOTES);
    echo "<br />";
    echo htmlentities($str, ENT_NOQUOTES);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#16 htmlspecialchars()</h1>";
    $str = "Jane & 'Tarzan'";
    echo htmlspecialchars($str, ENT_COMPAT);
    echo "<br />";
    echo htmlspecialchars($str, ENT_QUOTES);
    echo "<br />";
    echo htmlspecialchars($str, ENT_NOQUOTES);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#17 implode()</h1>";
    $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
    echo implode(" ", $arr);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#18 levenshtein()</h1>";
    echo levenshtein("Hello World", "ello World");
    echo "<br>";
    echo levenshtein("Hello World", "ello World", 10, 20, 30);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#19 localeconv()</h1>";
    setlocale(LC_ALL, 'US');
    $locale_info = localeconv();
    print_r($locale_info);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#20 ltrim()</h1>";
    $str = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello World!";
    echo "Without ltrim: " . $str;
    echo "<br>With ltrim: " . ltrim($str, "&nbsp;");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#21 md5()</h1>";
    $str = "Hello";
    echo md5($str);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#22 md5_file()</h1>";
    $md5file = md5_file("test.txt");
    echo $md5file;
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#23 metaphone()</h1>";
    echo metaphone("world");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#24 money_format()</h1>";
    $number = 1234.56;
    $formatted = '$' . number_format($number, 2);
    echo "The price is $formatted";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#25 number_format()</h1>";
    echo number_format("1000000");
    echo "<br>";
    echo number_format("1000000", 2);
    echo "<br>";
    echo number_format("1000000", 2, ",", ".");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#26 ord()</h1>";
    echo ord("h") . "<br>";
    echo ord("hello") . "<br>";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#27 print()</h1>";
    $str = "Who's John Lloyd?";
    print $str;
    print "<br>";
    print $str . "<br>I don't know!";
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#28 printf()</h1>";
    $str = "Hello";
    $number = 123;
    printf("%s world. Day number %u", $str, $number);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#29 setlocale()</h1>";
    echo setlocale(LC_ALL, "En-Us");
    echo "<br>";
    echo setlocale(LC_ALL, NULL);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#30 sha1()</h1>";
    $str = "Hello";
    echo sha1($str);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#31 sha1_file()</h1>";
    $filename = "test.txt";
    $sha1file = sha1_file($filename);
    echo $sha1file;
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#32 soundex()</h1>";
    $str = "Hello";
    echo soundex($str);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#33 sprintf()</h1>";
    $str = "Hello";
    $number = 123;
    $txt = sprintf("%s world. Day number %u", $str, $number);
    echo $txt;
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#34 sscanf()</h1>";
    $string = "age:30 weight:60kg";
    sscanf($string, "age:%d weight:%dkg", $age, $weight);
    var_dump($age, $weight);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#35 strspn()</h1>";
    echo strspn("Hello world!", "Hello");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#36 strstr()</h1>";
    echo strstr("Hello world!", "world");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#37 strtolower()</h1>";
    echo strtolower("Hello WORLD.");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#38 strtoupper()</h1>";
    echo strtoupper("Hello WORLD.");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#39 str_count()</h1>";
    echo substr_count("Hello world. The world is nice", "world");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#40 substr_replace()</h1>";
    echo substr_replace("Hello", "world", 0);
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#41 strlen()</h1>";
    echo strlen("Hello");
    echo "<div class=line></div>";
    echo "</div>";

    echo "<div class=cont>";
    echo "<h1>#42 substr()</h1>";
    echo substr("Hello world", 6);
    echo "<div class=line></div>";
    echo "</div>";
    ?>

    <script>
        let lines = document.querySelectorAll(".line");
        let conts = document.querySelectorAll(".cont");
        window.onscroll = function() {
            lines.forEach(line => {
                let windowPos = window.scrollY;
                let elementTop = line.offsetTop - 550;
                let elementHeight = line.offsetHeight;

                if (windowPos >= elementTop) {
                    line.classList.add('animation');
                } else {
                    line.classList.remove("animation");
                }
            });
            conts.forEach(cont => {
                let windowPos = window.scrollY;
                let elementTop = cont.offsetTop - 550;
                let elementHeight = cont.offsetHeight;
                if (windowPos >= elementTop) {
                    cont.classList.add('animation');
                } else {
                    cont.classList.remove("animation");
                }
            });
        }

        document.getElementById("title-cont").addEventListener("mouseenter", function() {
            document.getElementById("cat").classList.add('animation');
            document.getElementById("backBtn").style.display = "flex";
        });

        document.getElementById("title-cont").addEventListener("mouseout", function() {
            document.getElementById("backBtn").style.display = "none";
        });

        document.getElementById("cat").addEventListener("animationend", function() {
            document.getElementById("cat").classList.remove('animation');
        })

        document.getElementById("backBtn").addEventListener("mouseenter", function() {
            document.getElementById("backBtn").style.display = "flex";
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