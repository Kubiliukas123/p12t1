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
    echo $act3 = '<p>' . substr($act1,0,1) . " " . substr($act2,0,1) . '</p>';
    ?>
</body>

</html>