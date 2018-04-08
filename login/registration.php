<!DOCTYPE html>
<html>

<head>
	<title>Hotel Escober</title>
	<link rel="stylesheet" href="../css/style.css">
</head>


<body>

<div class="heading">
<img src="../img/title.jpg"/>
</div>


<div class="navigation">
   <a href=../index.php>Home</a>
   <a href="../room/room.php">Room</a>
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



<div class="lged">

   <form action="process_reg.php" method="POST">
     <p>
     <label>Name    :</label> </p>
     <input type="text" id="user" name="user" class = "box" />
     </p>
     <p>
     <label>Password: </label></p>
     <input type="password" id="pass" name="pass" class = "box" />
     </p>
     <p>
     <label>Email   : </label></p>
     <input type="text" id="email" name="email" class = "box" />
     </p>
     <p>
     <label>Address: </label></p>
     <input type="text" id="address" name="address" class = "box" />
     </p>
     <p>
     <label>Phone No  : </label></p>
     <input type="text" id="phone" name="phone" class = "box" />
     </p>
     <p></p><p>
       <input type="submit" id="btn" value="REGISTER" class = "submt" />
     </p>
   </form>
  
</div>

</body>
</html>