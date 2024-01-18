<html>
<body>
<form action="" method="post">
<label> Enter Year:</label>
<input type="text" pattern="[0-9]{4}" name="Year" id="Year"><br><br>
<input type="submit" value="submit"name="submit"><br><br>
</body>
</html>

<?php

$Year=$_REQUEST['Year'];

if($Year%4==0)
{
	echo "$Year is a leap Year";
}
else
{
	echo "$Year is not a leap Year";
}

?>