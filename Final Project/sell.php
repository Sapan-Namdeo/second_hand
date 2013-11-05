

<html>

<head>
    <link rel='stylesheet'  href='css/style.css' type='text/css' media='all'> 
  


</head>

<body>
<div class ="fl_right">
    <center><img src="images/1.png" /></center></br>
    <img src="images/4.png" style="float:left;left:800px;position:relative;"/>
    <img src="images/5.png" style="position:relative;top:120px;left:300px;"/></br>
    </div>
<center>
<form name="form2" class="form2" method="post" action="sellfinish.php" enctype="multipart/form-data">
		      <table width="700" border=5px solid #ccc class="schedule" style="position:relative;top:150px;">
  <tr>
    <td>
					<input  name="fname" type="text" placeholder="firstname" /></td>
    <td>
					<input name="lname" type="text" placeholder="lastname"/></td>
    
	<td>
	<label for="Roll No">ROLL NO</label>
          <input  type="text" name="rollno" id="rollno">
	</td>
	</tr>
	
  <tr>
    <td><label for="email">EMAIL</label>
					<input  name="email" type="text" /></td>
    <td><label for="Expected value">VALUE</label>
					<input  name="value" type="text" /></td>
                    <td>GENDER<label><br>
    			Male<input  type="radio" name="gender" value="male" id="RadioGroup2_0">
          </label>
        <br>
        <label>
          Female<input   type="radio" name="gender" value="female" id="RadioGroup2_1">
          </label></td>
                      </tr>
  
  <tr>
    
    
    <td><label for="phno">CONTACT NO:</label>
					<input  name="phno" type="text"/></td>
    
  
  
    <td><label for="department">DEPARTMENT</label>
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
  
<input type="reset" name="reset" value="reset" style="position:relative;top:200px;"/>

<input type="submit" name="submit" id="submit" value="submit"style="position:relative;top:200px;" />

</form>

<p style="font:Arial, Helvetica, sans-serif;position:relative;top:300px;color:#CCC"> NOTE: If you sell your product, Please inform us on this no. 09442524834.</p>
</center>

</body>
</html>