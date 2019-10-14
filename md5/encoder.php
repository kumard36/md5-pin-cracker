<?php
$md5 = "Not Computed";
if(isset($_GET['PIN'])){
   $md5 = hash('md5', $_GET['PIN']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kumar Divyank MD5</title>
<head>
<body>
<h1>MD5 Maker</h1>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="PIN" size="40" />
<input type="submit" value="Compute MD5" />
</form>
<ul>
<li><a href="encoder.php">Reset</a></li>
<li><a href="index.php">Backs to Cracking</a></li>
</ul>
</body>
</html>