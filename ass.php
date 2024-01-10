<html>
<head>
  <style>
   table
   {
	    background-color:#e7dddb;
   }
   input,select
   {
	   border:1px solid red;
   }
   font
   {
	   border:1px solid red;
   }
  </style>
</head>
<body>
   <form action="catch_register_form.php" method="post" align="center">
   <table align="center">
    <thead>
	     <tr><th colspan="2" align="center"> Registration Form </th></tr>
    </thead>
	 <tbody>
     <tr>
			 <td> Username: </td> <td> <input type="text" name="user_txt" /> </td>
	 </tr> 

	 <tr>
	         <td>Password: </td> <td> <input type="password" name="psw_txt" /> </td>
	 </tr>

	 <tr> 
	         <td>Name: </td> <td> <input type="text" name="name_txt" /> </td>
	 </tr>

	 <tr>
	         <td>Address: </td> <td> <input type="text" name="add_txt" /> </td> 
	 </tr>

	 <tr>
	         <td>Country: </td> <td> 
				 <select name="county_ddl">
	                 <option value="">(please select a country)</option>
	                 <option value="India">India</option>
	                 <option value="Japan">Japan</option>
	             </select> </td>
	 </tr>

	 <tr>
	         <td>Zipcode: </td> <td> <input type="text" name="zip_txt" /> </td> 
	 </tr>

	 <tr>
	         <td>Email: </td> <td> <input type="email" name="mail_txt" /></td>
	 </tr>

	 <tr>
	         <td> Sex: </td> <td> <input type="radio" name="gender_rdb" value="Male"/><font>Male</font>
	                              <input type="radio" name="gender_rdb" value="Female"/><font>Female </font></td> 
	 </tr>

	 <tr>
	         <td>Language: </td> <td> <input type="checkbox" name="lan_chk" value="English"/><font>English</font>
	                                 <input type="checkbox" name="lan_chk" value="Non English"/><font>Non English</font></td> 
	 </tr>

     <tr>	 
	        <td>About: </td> <td> <textarea name="about_txt" rows="4" cols="50">
	         </textarea></td> 
	 </tr>
	 <tr></tr><tr></tr><tr></tr>
	 <tr>	 
	          <td colspan="2" align="center"><input type="submit" name="submit"/></td>
	 </tr>
	 <tbody>
	  </table>
   </form>
</body>
</html>

<?php
