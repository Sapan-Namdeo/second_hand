

<html>
<body>
<center>
<form name="form2" class="form2" method="post" action="sellfinish.php" enctype="multipart/form-data">
		      <table width="700" cellspacing="5" cellpadding="5" border=5px solid>
  <tr>
    <td>
					<input value="<?php if(isset($_SESSION['fname']))  echo $_SESSION['fname']; ?>" name="fname" type="text" placeholder="firstname" /></td>
    <td>
					<input value="<?php if(isset($_SESSION['lname']))  echo $_SESSION['lname']; ?>" name="lname" type="text" placeholder="lastname"/></td>
    <td> 
	<td>
	<label for="Roll No">Roll No</label>
          <input  type="text" name="rollno" id="rollno">
	</td>
	</tr>
	
  <tr>
    <td><label for="email">EMAIL</label>
					<input value="<?php if(isset($_SESSION['email']))  echo $_SESSION['email']; ?>" name="email" type="text" /></td>
  </tr>
  
  <tr>
    <td>gender<label>
    			Male<input <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=="male")  echo "checked" ?> type="radio" name="gender" value="male" id="RadioGroup2_0">
          </label>
        <br>
        <label>
          Female<input  <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=="female")  echo "checked" ?> type="radio" name="gender" value="female" id="RadioGroup2_1">
          </label></td>
    
    <td><label for="phno">CONTACT NO:</label>
					<input value="<?php if(isset($_SESSION['phno']))  echo $_SESSION['phno']; ?>" name="phno" type="text"/></td>
    
  </tr>
  <tr>
    <td><label for="department">Department</label>
					<select   name="dept">
 <option > Select Dept</option>
 <option value="cse">CSE</option>
 <option value="mech">Mechanical</option>
 <option value="inst">Instrumental</option>
 <option value="arch">Architecture</option>
 <option value="ca">CA</option>
 <option value="ece">ECE</option>
 <option value="eee">EEE</option>
 <option value="civil">Civil</option>
 <option value="prod">Production</option>
 </select></td>
    <td><label for="pic">Advertisement pic</label>
          <input  type="file" name="pic" id="pic"></td>
    
  </tr>
  		
</table>        
  
<input type="reset" name="reset" value="reset" />

<input type="submit" name="submit" id="submit" value="submit" />

</form>
</center>

</body>
</html>