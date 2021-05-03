<!DOCTYPE html>
<html>
<style>
h1 { text-align: center; }
</style>

<body style="background-color:#36393f;">
<h1>😂</h1>

<?php
for ($i = 0;$i < 53;$i++) {
  $color = sprintf("#%06x",rand(0,16777215));
  print ($i % 4 === 0 ? "<span style=\"color:$color\"> ${i} TRUE</span><br>" : "<span style=\"color:#ffffff\">$i FALSE</span><br>");
}
?>

</body>
</html>