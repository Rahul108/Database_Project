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
   <a href="../index.php">Home</a>
   <a href="../room/room.php">Room</a>
   <a href="../food/food.php">Food</a>
   <a href="../facilities/facilities.php">Facilities</a>
    <a href="../about/about.php">About</a>
   <a href="#">Contact</a>
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

   <form action="process_user.php" method="POST">
     <p>
     <label>ID No   :</label></p>
     <p><input type="text" id="id" name="id" class = "box"/>
     </p>
     <p>
     <label>Password: </label></p>
    <p> <input type="password" id="pass" name="pass" class = "box" />
     </p>
     <p>
       <input type="submit" id="btn" value="LOGIN" class = "submt" />
     </p>
   </form>
  
</div>

</body>
</html>