<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>p12t1</title>
</head>

<body>
    <?php
    $name = 'Donatas';
    $surname = 'Kubilius';
    $birth = '1990';
    $present = '2022';
    echo ('<p> Aš esu ' . $name . ' ' . $surname . '. Man yra ' . $present - $birth . ' metai. </p>');
    ?>
    <?php
    $num1 = rand(0, 4);
    $num2 = rand(0, 4);
    echo '<p>' . $num1 . '</p>';
    echo '<p>' . $num2 . '</p>';
    if ($num1 >= $num2 && $num1 != 0 && $num2 != 0) {
        echo '<p class="answer">' . round(($num1 / $num2), 2) .  '</p>';
    }
    if ($num1 < $num2 && $num1 != 0 && $num2 != 0) {
        echo '<p class="answer">' . round(($num2 / $num1), 2) .  '</p>';
    }
    if ($num1 == 0 || $num2 == 0) {
        echo '<p class="answer"> Not gonna happen!!!!</p>';
    }

    ?>
    <?php
    $num3 = rand(0, 25);
    $num4 = rand(0, 25);
    $num5 = rand(0, 25);
    echo '<p>' . $num3 . '</p>';
    echo '<p>' . $num4 . '</p>';
    echo '<p>' . $num5 . '</p>';

    if (($num3 >= $num4 && $num4 >= $num5) ||
        ($num3 <= $num4 && $num4 <= $num5)
    ) {
        echo '<p class="answer">' . $num4 .  '</p>';
    }
    if (($num4 >= $num5 && $num5 >= $num3) ||
        ($num4 <= $num5 && $num5 <= $num3)
    ) {
        echo '<p class="answer">' . $num5 .  '</p>';
    }
    if (($num5 >= $num3 && $num3 >= $num4) ||
        ($num5 <= $num3 && $num3 <= $num4)
    ) {
        echo '<p class="answer">' . $num3 .  '</p>';
    }

    ?>
    <?php
    $act1 = 'Matt';
    $act2 = 'Damon';
    echo '<p>' . $act1 . '</p>';
    echo '<p>' . $act2 . '</p>';

    if (strlen($act1) > strlen($act2)) {
        echo '<p class="answer">' . $act1 .  '</p>';
    } else {
        echo '<p class="answer">' . $act2 .  '</p>';
    }

    ?>
    <?php
    echo '<p>' . strtoupper($act1) . ' ' . strtolower($act2) .  '</p>';

    ?>
    <?php
    echo $act3 = '<p>' . substr($act1, 0, 1) . ' ' . substr($act2, 0, 1) . '</p>';
    ?>
    <?php
    $count = 0;
    $text = '';
    for ($i = 0; $i < 300; $i++) {
        $task7 = rand(0, 300);
        if ($task7 > 150) {
            $count++;
        }
        if ($task7 > 275) {
            $text .= '[' . $task7 . ']';
        } else {
            $text .= $task7 . ' ';
        }
    }
    echo '<p> Nuo 150: ' . $count . '</p>';
    echo '<p>' . $text . '</p>';
    ?>

    <?php
    $text2 = '';
    for ($i = 77; $i < 3000; $i += 77) { 
        $text2 .= $i . ',';
    }
    echo '<p>' . substr($text2, 0, -1) . '</p>';
    ?>

    <?php
    for ($i=0; $i < 20; $i++) { 
        $square = '';
        for ($a=0; $a < 20; $a++) { 
            $square .= '*';
        }
        echo '<div class="square">' . $square . '</div>';
    }
    ?>
    <?php
    function fun1($textInH){
        echo '<h1>' . $textInH . '</h1>';
    }
    fun1("aglkdsfgolknmasdlASDASdddf");
    ?>
    <?php
    function fun2($textInH2,$hSize){
        echo '<h' . $hSize . '>' . $textInH2 . '</h' . $hSize . '>';
    }
    fun2("asdvadijfg", 2);
    fun2("asdvadijfg", 4);
    fun2("asdvadijfg", 3);
    fun2("asdvadijfg", 6);
    fun2("asdvadijfg", 5);
    ?>
    <?php
    function rndStr($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function fun3(){
        $str = rndStr(20);
        echo '<p class="rndStr">' .$str . '</p>';
        $tmp = '';
        for ($i=0; $i < strlen($str); $i++) { 
            if (is_numeric( $str[$i])) {
                $tmp .= $str[$i]; 
            } else {
                if ($tmp != '') {
                    echo '<h1>' . '[' . $tmp . ']' . '</h1>';
                    echo '<p>' . $str[$i] . '</p>';
                    $tmp = '';
                } else {
                    echo '<p>' . $str[$i] . '</p>';
                }
                
            }
            
        }
    }
     fun3();
    ?>
</body>

</html>