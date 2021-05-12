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

<form action="date.php" method="post">
    Datum <input id="date" type="date" name="date" value="null">
    <br>
    <input type="submit" value="✅">
</form>


<?php
    $date = $_POST[date];
    if ($date == null) $date = date("Y-m-d H:i:s");
    print ("<span style=\"color:#ffff00\">Du hast den ".date("j. F, \J\a\h\\r Y", strtotime($date))." ausgewählt.</span>");
    return;
?>

</body>
</html>