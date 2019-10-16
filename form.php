<?php

//get content of textfile
$filename = "mydata.txt";
$content = file($filename);

$data = $_POST['field1'] . "\n" . "\r\n";

//insert to txt file
$fp = fopen($filename,"a+");
fputs($fp,$data);
fclose($fp);
?>



<h2>Cool! Here's everyone's favorite memes so far:</h2>

<?php
echo file_get_contents( "mydata.txt" ); // get the contents, and echo it out.
?>