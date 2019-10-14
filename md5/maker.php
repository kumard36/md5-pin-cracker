<?php
$error = false;
$md5 = false;
$pin = "";
if ( isset($_GET['pin']) ) {
    $pin = $_GET['pin'];
    if ( strlen($pin) != 4 ) {
        $error = "Input must be four characters";
    } else if (!(is_numeric($pin))) {
        $error = "Input must be numeric";
    } else {
        $md5 = hash('md5', $pin);
    }
}
?>
<!DOCTYPE html>
<head><title>Kumar Divyank PIN Code</title></head>
<body>
<h1>MD5 PIN Maker</h1>
<?php
if ( $error !== false ) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

if ( $md5 !== false ) {
    print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
?>
<form>
<input type="text" name="pin" value="<?= htmlentities($pin) ?>"/>
<input type="submit" value="Compute MD5 for CODE"/>
</form>
<ul>
<li><a href="maker.php">Reset</a></li>
<li><a href="index.php">Back to Cracking</a></li>
</ul>
</body>
</html>
