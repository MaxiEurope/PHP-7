<!DOCTYPE html>
<html>
<style>
h1 {
    text-align: center;
    font-family: serif;
    background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
body {
    color: #ffffff;
    font-family: sans-serif;
}
</style>

<body style="background-color:#36393f;">
<h1>Bitte ausfüllen</h1>

<form action="form.php" method="post">
    1. Nummer <input id="num1" name="num1">
    <br>
    2. Nummer <input id="num2" name="num2">
    <br>
    <input type="submit" value="✅">
</form>


<?php
    $num1 = $_POST[num1];
    $num2 = $_POST[num2];
    $tmp = array($num1, $num2);
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));

    foreach ($tmp as $item) {
        if (!is_numeric($item)) {
            print("<span style=\"font-size:123%; color:#FFFF00;\">Mindestens ein Argument ist keine Nummer!</span>");
            return;
        }
    }
    $res = $num1 + $num2;

    print(rand(0,10) % 4 ? "<span style=\"font-size:200%; color:$color;\">$res</span>" : $res);
?>

</body>
</html>