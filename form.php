<?php

//get content of textfile
$filename = "mydata.txt";
$content = file($filename);

$data = $_POST['field1'] . "\r\n";

//insert votes to txt file
$fp = fopen($filename,"a");
fputs($fp,$data);
fclose($fp);
?>



<h2>Result:</h2>

<?php
echo file_get_contents( "mydata.txt" ); // get the contents, and echo it out.
?>