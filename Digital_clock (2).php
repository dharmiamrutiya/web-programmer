<html>
<body>
<head>
<meta http-equiv="refresh" content="1">
<style>
.a
{
	
	background-color:black;
	color:red;
    border-color:gray;
}
@font
{
    font-family:digital-readout fat;   	
     src:url('digital-readout\digital-readout fat');
}
	




</style>
</head>
</body>
</html>



<?php
echo "<table colspan=2 border=1 class=a>";
echo "<tr>";
echo "<td>";
date_default_timezone_set("Asia/kolkata");
echo date("H:i:s a");
echo "</td>";
echo "</tr>";
echo "</table>";

?>
