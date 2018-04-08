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
      $user  = $_POST['user'];
      $pass  = $_POST['pass'];

      $user  = stripcslashes($user);
      $pass  = stripcslashes($pass);

      $user  = mysql_real_escape_string($user);
      $pass  = mysql_real_escape_string($pass);

      $room_cost = 6000;


      session_start();
      $check_in     = $_SESSION['check_in'];
      $check_out    = $_SESSION['check_out'];
      $number       = $_SESSION['option'];
      $days_numb    = $_SESSION['days'];

       mysql_connect("localhost","root","");
       mysql_select_db("hotel");

  

         $result_login = mysql_query("SELECT * FROM users WHERE id='$user' AND password='$pass' ");
         $row_login    = mysql_fetch_array($result_login);

      if($row_login['id'] == $user && $row_login['password'] == $pass)
      {
        ?> <div class="lged"> <?php
        echo "Dear ".$row_login['username']."<br>Your Booking is Successful !";
        ?> </div> <?php
        
        $bill_no = mt_rand(100,999);
        
        $qr = mysql_query("SELECT * FROM bill_calc");
        while($qr_row=mysql_fetch_array($qr))
        {
          if($qr_row['bill_no'] == $bill_no)
          {
            $bill_no = mt_rand(100,999);
          }
        }

        mysql_query("INSERT INTO bill_calc(ID,bill_no) VALUES('$user','$bill_no')");
        mysql_query("UPDATE users SET bill_no = '$bill_no' WHERE id = '$user' ");

        $dd=0;
        $ff=0;
        for($x=500;$x<=510;$x++)
        {
            if($dd==$number)
            break;
           
            $check = mysql_query("SELECT * FROM room_predential_suite WHERE room_no = '$x' AND check_out_date < '$check_in' OR check_in_date>'$check_out' ") ;
            $check_oth = mysql_query("SELECT * FROM book_info WHERE room_no = '$x' AND check_in_date<='$check_in' AND check_out_date >='$check_out'");
            $row_check = mysql_fetch_array($check);
            $row_check_oth = mysql_fetch_array($check_oth);
            if($row_check['room_no'])
            {
              $dd++;

              if($row_check_oth['room_no'])
              {
                $dd--;
              }
              else
              {
                if($row_check['check_in_date'] != '0000-00-00' && $row_check['check_out_date'] != '0000-00-00')
                {
                  mysql_query("INSERT INTO book_info(id,room_no,bill_no,check_in_date,check_out_date) VALUES('$user','$x','$bill_no','$check_in','$check_out')");  
                }
                else
                {
                  mysql_query("UPDATE room_predential_suite SET id = '$user' , check_in_date = '$check_in' , check_out_date = '$check_out' WHERE room_no = '$x' AND check_out_date < '$check_in' ");
                }
              }
            } 
          

        }

        $serv = 'Room Rent';
        $fnl_cost = $room_cost * $number * $days_numb;
        mysql_query("INSERT INTO billing(bill_no,services,price,date) VALUES('$bill_no','$serv','$fnl_cost','$check_in')");
      } 

      else
      {
        ?> <div class="lged"> <?php
        echo "ID not Found!";
        ?> </div> <?php
      }         

?>

</body>
</html>