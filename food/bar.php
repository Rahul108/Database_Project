<?php 
mysql_connect("localhost","root","");
mysql_select_db("hotel");
?>

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
   <a href="../room/room.php">Room</a>
   <a href="food.php">Food</a>
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





<div class="body_2">
   
  <div class = "room_border">
  <form action = "process_bar.php" method="POST">
  <p><input type="checkbox" name="selection" value="100 PIPERS Scoach" class = "squaredTwo"><h2>1.100 PIPERS Scotch</h2></p>
  <img src="../img/Bar/file (1).jpeg">
  <p>Price:  <?php $rr = mysql_query("SELECT * FROM food_bar WHERE name ='100 PIPERS Scotch' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/bottle</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_bar.php" method="POST">
  <p><input type="checkbox" name="selection" value="PASSPORT Scotch" class = "squaredTwo"><h2>2.PASSPORT Scotch</h2></p>
  <img src="../img/Bar/file (2).jpeg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_bar WHERE name ='PASSPORT Scotch' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/bottle</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt"/>
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>
  

  <div class = "room_border">
  <form action = "process_bar.php" method="POST">
  <p><input type="checkbox" name="selection" value="Wisconsin Varietals" class = "squaredTwo"><h2>3.Wisconsin Varietals</h2></p>
  <img src="../img/Bar/Carrera_33_front_center_large-2000x1476.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_bar WHERE name ='Wisconsin Varietals' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/bottle</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>  
  </div>
  



  <div class = "room_border_1">
  <form action = "process_bar.php" method="POST">
  <p><input type="checkbox" name="selection" value="HUNTER Beer" class = "squaredTwo"><h2>4.HUNTER Beer</h2></p>
  <img src="../img/Bar/file.jpeg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_bar WHERE name ='HUNTER Beer' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/cane</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>  
  </div>



 
  <div class = "room_border">
  <form action = "process_bar.php" method="POST">
  <p><input type="checkbox" name="selection" value="House Wines by Sycamore Lane" class = "squaredTwo"><h2>5.House Wines by Sycamore Lane</h2></p>
  <img src="../img/Bar/file (3).jpeg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_bar WHERE name ='House Wines by Sycamore Lane' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/bottle</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_bar.php" method="POST">
  <p><input type="checkbox" name="selection" value="Vodka Martini" class = "squaredTwo"><h2>6.Vodka Martini</h2></p>
  <img src="../img/Bar/file.png">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_bar WHERE name ='Vodka Martini' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/bottle</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


</div>

</body>
</html>