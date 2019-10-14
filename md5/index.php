<!DOCTYPE html>
<html lang="en">
<head>
<title>Kumar Divyank</title>
</head>
<body>
<h1>MD5 Cracker</h1>
<p>This application takes an MD5 hash of a four-digit pin and checks all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
Debug Output:
<?php
$goodtext="Not found";
$checks=0;
if(isset($_GET['md5'])){
$time_pre=microtime(true);
$md5=$_GET['md5'];
$count=15;
$set="0123456789";
$flag=false;
for($i=0; $i<strlen($set); $i++){
    $ch1=$set[$i];
    for($j=0; $j<strlen($set); $j++){
        $ch2=$set[$j];
        for($k=0; $k<strlen($set); $k++){
            $ch3=$set[$k];
            for($l=0; $l<strlen($set); $l++){
                $ch4=$set[$l];
                $ch=$ch1.$ch2.$ch3.$ch4;
                $check=hash('md5',$ch);
                $checks++;
                if($count){
                   print "$check $ch\n";
                   $count=$count-1;
                }
                if($check==$md5){
                   $goodtext=$ch;
                   $flag=true;
                   break;
                }
            }
        if($flag)
        break;
        }
    if($flag)
    break;
    }
if($flag)
break;
}
print "Total checks: ";
print "$checks \n";
$time_post=microtime(true);
print "Elapsed time: ";
print $time_post-$time_pre;
print "\n";
}
?>
</pre>
<p>PIN: <?= htmlentities($goodtext);?></p>
<form>
<input type="text" name="md5" size="40" />
<input type="submit" value="Crack MD5" />
</form>
<ul>
<li><a href="index.php">Reset this page</a></li>
<li><a href="maker.php">Make an MD5 PIN</a></li>
<li><a href="encoder.php">MD5 Encoder</a></li>
</ul>
</body>
</html>