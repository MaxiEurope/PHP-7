<!DOCTYPE html>
<html>
<style>
h1 { text-align: center; font-family: serif;}
body { color: #ffffff; font-family: sans-serif;}
</style>

<body style="background-color:#36393f;">
<h1>Bitte ausfüllen</h1>

<form action="form_mm.php" method="post">
    1. Nummer <input id="num1" name="num1">
    <br>
    2. Nummer <input id="num2" name="num2">
    <br>
    <input type="submit" value="✅">
</form>

// WIP

<?php
    $num1 = $_POST[num1] || null;
    $num2 = $_POST[num2] || null;
    $tmp = array($num1, $num2);

    foreach ($tmp as $item) {
        if (!is_numeric($item)) {
            print("Mindestens eine Nummer ist keine Nummer!");
            return;
        }
    }
    print($num1);
    print($num2)
?>

</body>
</html>