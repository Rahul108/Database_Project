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
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Baked Salmon with lemon dill butter" class = "squaredTwo"><h2>1.Baked Salmon with lemon dill butter</h2></p>
  <img src="../img/Dinner/Baked Salmon with lemon dill butter.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Baked Salmon with lemon dill butter' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


  <div class = "room_border_1">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Chicken Parmesan" class = "squaredTwo"><h2>2.Chicken Parmesan</h2></p>
   <img src="../img/Dinner/Chicken Parmesan.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Chicken Parmesan' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


  <div class = "room_border">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Chicken Rosemary" class = "squaredTwo"><h2>3.Chicken Rosemary</h2></p>
   <img src="../img/Dinner/Chicken Rosemary.jpeg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Chicken Rosemary' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>  


 
  <div class = "room_border_1">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Cordon Bleu" class = "squaredTwo"><h2>4.Cordon Bleu</h2></p>
   <img src="../img/Dinner/Cordon Bleu.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Cordon Bleu' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>  
  </div>
  



  <div class = "room_border">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Cranberry and Wild Rice Stuffed Chicken Breast" class = "squaredTwo">
  <h2>5.Cranberry and Wild </h2></p>
   <img src="../img/Dinner/Cranberry and Wild Rice Stuffed Chicken Breast.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Cranberry and Wild Rice Stuffed Chicken Breast' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div> 
 


  <div class = "room_border_1">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Pan Fried Canadian Walleye" class = "squaredTwo"><h2>6.Pan Fried Canadian Walleye</h2></p>
   <img src="../img/Dinner/Pan Fried Canadian Walleye.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Pan Fried Canadian Walleye' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form> 
  </div>
   



  <div class = "room_border">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Stuffed Pork Chop" class = "squaredTwo"><h2>7.Stuffed Pork Chop</h2></p>
   <img src="../img/Dinner/Stuffed Pork Chop.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Stuffed Pork Chop' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>     
  </div>
   


  <div class = "room_border_1">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Tilapia with Crab au Gratin" class = "squaredTwo"><h2>8.Tilapia with Crab au Gratin</h2></p>
   <img src="../img/Dinner/Tilapia with Crab au Gratin.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Tilapia with Crab au Gratin' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Buffet A(Dinner)" class = "squaredTwo"><h2>9.Buffer A(Dinner)</h2><h3>(Stuffed Chicken Parmesan, Smoked Ham Dijon, Tender Beef Tips and Tilapia Au Gratin)</h3></p>
   <img src="../img/Dinner/Buffet A(Dinner).jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Buffet A(Dinner)' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Buffet B(Dinner)" class = "squaredTwo"><h2>10.Buffer B(Dinner)</h2><h3>(Chicken Cordon Bleu, Roast Barbecued Pork Loin, Top Sirloin with Burgundy Mushrooms,Seafood Newburg, Chicken Rosemary)</h3></p>
   <img src="../img/Dinner/Buffet B(Dinner).jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Buffet B(Dinner)' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>




  <div class = "room_border">
  <form action = "process_dinner.php" method="POST">
  <p><input type="checkbox" name="selection" value="Buffet C(Dinner)" class = "squaredTwo"><h2>11.Buffer C(Dinner)</h2><h3>(Chorizo stuffed Mexican Chicken, Brandied Cinnamon Apple Pork, Stuffed Tenderloin Medallions and Crab Stuffed Shrimp)</h3></p>
   <img src="../img/Dinner/Buffet C(Dinner).jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_dinner WHERE name ='Buffet C(Dinner)' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


</div>

</body>
</html>