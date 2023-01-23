<html>
<body>

<?php
if(!isset($_COOKIE["user"])) {
  echo "Cookie named is not set!";
} else {
  echo "Cookie is set!<br>";
  echo "Value is: " . $_COOKIE["user"];
}
?>

</body>
</html>