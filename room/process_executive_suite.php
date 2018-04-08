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


<?php


$room_name  = "Executive Suite";

$number     = (is_numeric($_POST['option']) ? (int)$_POST['option'] : 0);
$days       = (is_numeric($_POST['days']) ? (int)$_POST['days'] : 0);
$check_in   = $_POST['check_in'];
$check_out  = $_POST['check_out'];

session_start();
$_SESSION['check_in']   = $_POST['check_in'];
$_SESSION['check_out']  = $_POST['check_out'];
$_SESSION['option']     = $number;
$_SESSION['days']       = $days;


$check_in  = stripcslashes($check_in);
$check_out = stripcslashes($check_out);

$check_in  = mysql_real_escape_string($check_in);
$check_out = mysql_real_escape_string($check_out);

$date_1 = date_create($check_in);
$date_2 = date_create($check_out);
$date_3 = date_create(date("y-m-d"));
$diff = date_diff($date_1,$date_2);
$diff_1 = date_diff($date_3,$date_1);


  mysql_connect("localhost","root","");
  mysql_select_db("hotel");

  $cst       =  mysql_query("SELECT price FROM room_price WHERE name = 'room_executive_suite'");
  $rw_cst    =  mysql_fetch_array($cst);
  $room_cost =  $rw_cst['price'];


  $result    = mysql_query("SELECT * FROM room_executive_suite WHERE check_out_date<'$check_in'" ) or 
        die("Failed to query database".mysql_error());

  $ff = 0;
  $room_no_temp = 0;
  while($row = mysql_fetch_array($result))
  {
     $result_oth = mysql_query(" SELECT * FROM book_info WHERE room_no = ' ".$row['room_no']." ' AND check_in_date>'$check_in' AND check_out_date >'$check_out' ");

     $result_oth_row = mysql_fetch_array($result_oth) ;

     if($row['room_no'] == $result_oth_row['room_no'])
     {
        if($result_oth && $room_no_temp != $result_oth_row['room_no'] )
       {
          $ff++;
       } 
       $room_no_temp = $result_oth_row['room_no'];
     }
     else
     {
        $ff++;
     }
     
  }
  
  
  
 


if($diff->format("%d") > 7 )
{
  ?> <div class="lged"> <h2>You Can't Book Room for more than 7 days !</h2> </div> <?php 
}
else if($diff->format("%d")  != $days)
{
   ?> <div class="lged"> <h2>Please enter the day correctly!</h2> </div> <?php
}
else if($diff_1->format("%d") >15)
{
  ?> <div class="lged"> <?php echo "You Can't Book Room More Than 15 Days Earlier!<br>"; ?> </div> <?php
}
else
{
  if(mysql_num_rows($result)>=$number && $ff>=$number)
    { 
       ?>  <div class="lged"> <h2>Congratz!! Room is Available</h2><p></p> <?php 
         echo "Check In Date : ".$check_in."<br>"; 
         echo "Check Out Date : ".$check_out."<br>";
         echo "Room Needed : ".$number."<br>";
         echo "For ".$days." day(s)<br>";
         echo "Total Cost : ".($number*$room_cost*$days)."<br><br><br>Confirm Your Booking : <br><br><br>"; ?> 
         
         <form action = "process_executive_suite_done.php" method="POST">
         <label>Enter Your Id:</label>
         <p><input type="text" name="user" class="box"></p>
         <label>Enter Your Password:</label>
         <p><input type="password" name="pass" class = "box"></p> 
         <p> <input type="submit" id="book" name="book" value="BOOK" class = "submt"> </p> 
         </form> </div> 
         <?php
    }
    else
    {
         ?><div class = "lged"><h2>Room Is Not Available!!</h2></div> <?php
    }
}

    
?>




</body>
</html>
