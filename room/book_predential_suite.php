
<!DOCTYPE html>
<html>

<head>
	<title>Hotel Escober</title>
	<link rel="stylesheet" href="../css/style.css">
</head>


<body>


<div class="Login">
<a href="../login/login_admin.php">Admin Login</a>
<a href="../login/login_user.php">User Login</a>
<a href="../login/registration.php">Registration</a>
</div>



<div class="heading">
<img src="../img/title.jpg"/>
</div>


<div class="navigation">
   <a href="../index.php">Home</a>
   <a href="room.php">Room</a>
   <a href="../food/food.php">Food</a>
   <a href="../facilities/facilities.php">Facilities</a>
   <a href="../about/about.php">About</a>
   <a href="../contact/contact.php">Contact</a>
</div>


<div class="body_1">

<div class="lg_date">
<h3>
 <script language="javascript">
 var today = new Date();
 document.write(today);
 </script>
 </h3>
</div>

</div>



<form action="process_predential_suite.php" method="POST">
<div class="lged">
<p>
	<label>Check In Date  :</label>
<p><input type="date" id="check_in" name="check_in" value = "yyyy/mm/dd" class = "box" /></p>
</p>
<p>
	<label>Check Out Date:</label>
<p><input type="date" id="check_out" name="check_out" value = "yyyy/mm/dd" class = "box" /></p>
</p>

<p>Requried Room(s): </p>                    
<select name="option" class = "opt" >
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
</select>

<p>Day(s): </p>                    
<select name="days" class = "opt" >
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
</select>




<p><input type="submit" name="submt" value="Check Availability" class = "submt" ></p>
</div>
</form>


</body>
</html>