<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("dictionary.txt", "r+") or die("Unable to open file!");
echo fread($myfile,filesize("dictionary.txt"));
fclose($myfile);
?>
</body>
</html>