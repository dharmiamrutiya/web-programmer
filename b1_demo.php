<?php

/*
$myfile=fopen("b1_220801008.txt","r");
echo $myfile;

$myfile=fopen("b1_220801008.txt","w");
$content="home page";
$write=fwrite($myfile,$content);

fclose($myfile);
*/

if(file_exists("b1_220801008.txt"))
{
	echo "the file exist...";
}
else
{
	echo "the file dose not exits...";
}

?>