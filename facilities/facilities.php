<!DOCTYPE html>
<html>

<head>
	<title>Hotel Escober</title>
	<link rel="stylesheet" href="../css/style.css">
</head>


<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
?>

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
   <a href="../food/food.php">Food</a>
   <a href="#">Facilities</a>
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
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Fitness center" class = "squaredTwo" ><h2>1.Fitness center</h2></p>
  <img src="../img/facilities/Fitness centre.jpg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Fitness center'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk </p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Conference Club" class = "squaredTwo"><h2>2.Conference Club</h2></p>
  <img src="../img/facilities/Club Conference.jpg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Conference Club'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk </p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>
    

    
  <div class = "room_border">
	<form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Massage(s)" class = "squaredTwo"><h2>3.Massage(s)</h2></p>
  <img src="../img/facilities/massage.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Massage(s)'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Sauna" class = "squaredTwo"><h2>4.Sauna</h2></p>
  <img src="../img/facilities/sauna.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Sauna'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Steamroom" class = "squaredTwo"><h2>5.Steamroom</h2></p>
  <img src="../img/facilities/Steamroom.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Steamroom'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Library" class = "squaredTwo"><h2>6.Library</h2></p>
  <img src="../img/facilities/library.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Library'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Baggage Service" class = "squaredTwo"><h2>7.Baggage Service</h2></p>
  <img src="../img/facilities/baggage service.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Baggage Service'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>




  <div class = "room_border_1">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Salon(per person)" class = "squaredTwo"><h2>8.Salon(per person)</h2></p>
  <img src="../img/facilities/Salon.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Salon(per person)'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Babysitting service" class = "squaredTwo"><h2>9.Babysitting service</h2></p>
  <img src="../img/facilities/babysitting service.jpeg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Babysitting service'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt" ></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Nightclub" class = "squaredTwo"><h2>10.Nightclub</h2></p>
  <img src="../img/facilities/Nightclub.jpg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Nightclub'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Medical Service" class = "squaredTwo"><h2>11.Medical Service</h2></p>
  <img src="../img/facilities/medical services.jpg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Medical Service'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_facilities.php" method="POST">
  <p><input type="checkbox" name="selection" value="Safe Deposit Boxes" class = "squaredTwo"><h2>12.Safe Deposit Boxes</h2></p>
  <img src="../img/facilities/safe deposit boxes.jpg">
  <p>Price: <?php $req=mysql_query("SELECT price FROM facility WHERE name = 'Safe Deposit Boxes'"); $row_req = mysql_fetch_array($req); echo "".$row_req['price']; ?> tk</p>
  <p><input type="submit" name="submit" value="ORDER" class="submt"></p>
  </form>
  </div>




</div>

</body>
</html>