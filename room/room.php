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
<a href="../login/login_admin.php">ADMIN LOGIN</a>
<a href="../login/login_user.php">USER LOGIN</a>
<a href="../login/registration.php">REGISTRATION</a>
</div>



<div class="heading">
<img src="../img/title.jpg"/>
</div>


<div class="navigation">
   <a href="../index.php">Home</a>
   <a href="#">Room</a>
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



<div class = "body_2">

<div class = rm_type>
   
    <div class = "room_border">
	<p><h2>1.Deluxe</h2> </p>
	<img src="../img/deluxe.jpg"/>
	<p><h2>Price: <?php $rr=mysql_query("SELECT price FROM room_price WHERE name = 'room_deluxe'"); $rr_row=mysql_fetch_array($rr); echo "".$rr_row['price']; ?> Tk/day</h2> </p>
	<a href="book_deluxe.php">Book</a>
	</div>


    <div class = "room_border_1">
	<p><h2>2.Premium Deluxe</h2></p>
	<img src="../img/Predential_suite.jpg"/>
	<p><h2>Price: <?php $rr=mysql_query("SELECT price FROM room_price WHERE name = 'room_premium_deluxe'"); $rr_row=mysql_fetch_array($rr); echo "".$rr_row['price']; ?> Tk/day</h2> </p>
	<a href="book_premium_deluxe.php">Book</a>
	</div>
     
    <div class = "room_border">
	<p><h2>3.Executive Club Floor</h2></p>
	<img src="../img/Executive_club.jpg"/>
	<p><h2>Price: <?php $rr=mysql_query("SELECT price FROM room_price WHERE name = 'room_executive_floor'"); $rr_row=mysql_fetch_array($rr); echo "".$rr_row['price']; ?> Tk/day</h2> </p>
	<a href="book_executive_club_floor.php">Book</a>
	</div>

    <div class = "room_border_1">
	<p><h2>4.Executive Suite</h2></p>
	<img src="../img/Executive_suit.jpg"/>
	<p><h2>Price: <?php $rr=mysql_query("SELECT price FROM room_price WHERE name = 'room_executive_suite'"); $rr_row=mysql_fetch_array($rr); echo "".$rr_row['price']; ?> Tk/day</h2> </p>
	<a href="book_executive_suite.php">Book</a>
	</div>
     
    <div class = "room_border">
	<p><h2>5.Predential Suite</h2></p>
	<img src="../img/Premium_deluxe.jpg"/>
	<p><h2>Price: <?php $rr=mysql_query("SELECT price FROM room_price WHERE name = 'room_predential_suite'"); $rr_row=mysql_fetch_array($rr); echo "".$rr_row['price']; ?> Tk/day</h2> </p>
	<a href="book_predential_suite.php">Book</a>
    </div>

</div>

</div>

</body>
</html>


