<?php
// setcookie("user", "test", time() + 3600, '/');
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>



</body>
</html>