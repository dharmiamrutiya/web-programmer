<?php>


$username = $_REQUEST ['user_text'];
$password = $_REQUEST ['psw_text'];
$name = $_REQUEST ['name_text'];
$address = $_REQUEST ['add_text'];
$country = $_REQUEST ['country_ddl'];
$zipcode = $_REQUEST ['zip_text'];
$email = $_REQUEST ['mail_text'];
$gender = $_REQUEST ['gender_text'];
$language = $_REQUEST ['lan_text'];
$about = $_REQUEST ['about_text'];

echo "<table border=2 aling=center bordercolor=grey><tr><td>username:</td><td>$username</td></tr>
				<tr><td>password:</td><td>$password</td></tr>
				<tr><td>name:</td><td>$name</td></tr>
				<tr><td>address:</td><td>$address</td></tr>
				<tr><td>country:</td><td>$country</td></tr>
				<tr><td>zipcode:</td><td>$zipcode</td></tr>
				<tr><td>e_mail:</td><td>$email</td></tr>
				<tr><td>gender:</td><td>$gender</td></tr>
				<tr><td>language:</td><td>$language</td></tr>
				<tr><td>about:</td><td>$about</td></tr>
</table>";
?>