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

<div class="lgd">

<?php


if(isset($_POST['conf_delux']))
{
session_start();
$id = $_POST['id'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];


$_SESSION['id'] = $_POST['id'];
$_SESSION['check_in'] = $_POST['check_in'];
$_SESSION['check_out'] = $_POST['check_out'];


mysql_connect("localhost","root","");
mysql_select_db("hotel");

echo "<table border='2'>
     <tr>
     <th>Room No</th>
     <th>ID No.</th>
     <th>Bill No.</th>
     <th>Check In Date</th>
     <th>Check Out Date</th>
     </tr>";


$result = mysql_query("SELECT * FROM book_info WHERE id = '$id' AND check_in_date = '$check_in' AND check_out_date = '$check_out' ");


while( $row_result=mysql_fetch_array($result))
{
         echo "<tr>";
         echo "<td>" . $row_result['room_no'] . "</td>";
         echo "<td>" . $row_result['id'] . "</td>";
         echo "<td>" . $row_result['bill_no'] . "</td>";
         echo "<td>" . $row_result['check_in_date'] . "</td>";
         echo "<td>" . $row_result['check_out_date'] . "</td>";
         echo "</tr>";
}


echo "<table border='2'>
     <tr>
     <th>Room No</th>
     <th>ID No.</th>
     <th>Check In Date</th>
     <th>Check Out Date</th>
     <th>Availibility</th>
     </tr>";

echo "<br><br><br><br>";

$result_1 = mysql_query("SELECT * FROM room_deluxe");

while($row_result_1 = mysql_fetch_array($result_1))
{
         echo "<tr>";
         echo "<td>" . $row_result_1['room_no'] . "</td>";
         echo "<td>" . $row_result_1['id'] . "</td>";
         echo "<td>" . $row_result_1['check_in_date'] . "</td>";
         echo "<td>" . $row_result_1['check_out_date'] . "</td>";
         echo "<td>" . $row_result_1['availibility'] . "</td>";
         echo "</tr>";
}

?> 
<form action = "modify_deluxe.php" method="POST">
    <p><label>Enter Room No:</label></p>
    <input type="text" name="room_no"/>
    <p><label>Enter ID No :</label></p>
    <input type="text" name="id_no">
    <p><label>Enter Check In Date:</label></p>
    <input type="date" name="check_in_date"/>
    <p><label>Enter Check Out Date:</label></p>
    <input type="date" name="check_out_date">
    <p><label>Availibility:</label></p>
    <input type="text" name="availibility">
    <p><input type="submit" name="update" value = "UPDATE"/></p>
</form>

<?php


}







if(isset($_POST['update']))
{
	session_start();
	$id = $_SESSION['id'];
	$check_in = $_SESSION['check_in'];
    $check_out = $_SESSION['check_out'];



	$room = $_POST['room_no'];
	$id_no = $_POST['id_no'];
	$check_in_date = $_POST['check_in_date'];
	$check_out_date = $_POST['check_out_date'];
    $availibility = $_POST['availibility'];
   
   mysql_connect("localhost","root","");
   mysql_select_db("hotel");

 
    mysql_query("UPDATE room_deluxe SET id = '$id_no',check_in_date = '$check_in_date' , check_out_date='$check_out_date' , availibility = '$availibility' WHERE room_no = '$room' ");
    mysql_query("DELETE FROM book_info WHERE room_no ='$room' AND id = '$id_no' AND check_in_date = '$check_in_date' ");
    $bill = mysql_query("SELECT * FROM users WHERE id = '$id_no'");
    $bill_row = mysql_fetch_array($bill);
    $rr = $bill_row['bill_no'];
    mysql_query("INSERT INTO room_calc(room_no,bill_no,check_in_date,check_out_date) VALUES('$room','$rr','$check_in_date','$check_out_date') ");
   


echo "<table border='2'>
     <tr>
     <th>Room No</th>
     <th>ID No.</th>
     <th>Bill No.</th>
     <th>Check In Date</th>
     <th>Check Out Date</th>
     </tr>";


$result = mysql_query("SELECT * FROM book_info WHERE id = '$id' AND check_in_date = '$check_in' AND check_out_date = '$check_out' ");


while( $row_result=mysql_fetch_array($result))
{
         echo "<tr>";
         echo "<td>" . $row_result['room_no'] . "</td>";
         echo "<td>" . $row_result['id'] . "</td>";
         echo "<td>" . $row_result['bill_no'] . "</td>";
         echo "<td>" . $row_result['check_in_date'] . "</td>";
         echo "<td>" . $row_result['check_out_date'] . "</td>";
         echo "</tr>";
}


echo "<table border='2'>
     <tr>
     <th>Room No</th>
     <th>ID No.</th>
     <th>Check In Date</th>
     <th>Check Out Date</th>
     <th>Availibility</th>
     </tr>";

echo "<br><br><br><br>";

$result_1 = mysql_query("SELECT * FROM room_deluxe");

while($row_result_1 = mysql_fetch_array($result_1))
{
         echo "<tr>";
         echo "<td>" . $row_result_1['room_no'] . "</td>";
         echo "<td>" . $row_result_1['id'] . "</td>";
         echo "<td>" . $row_result_1['check_in_date'] . "</td>";
         echo "<td>" . $row_result_1['check_out_date'] . "</td>";
         echo "<td>" . $row_result_1['availibility'] . "</td>";
         echo "</tr>";
}

?> 
<form action = "modify_deluxe.php" method="POST">
    <p><label>Enter Room No:</label></p>
    <input type="text" name="room_no"/>
    <p><label>Enter ID No :</label></p>
    <input type="text" name="id_no">
    <p><label>Enter Check In Date:</label></p>
    <input type="date" name="check_in_date"/>
    <p><label>Enter Check Out Date:</label></p>
    <input type="date" name="check_out_date">
     <p><label>Availibility:</label></p>
    <input type="text" name="availibility">
    <p><input type="submit" name="update" value = "UPDATE"/></p>
</form>

<?php


      
}

?>












<p></p><p></p><a href="admin_operation.php">BACK TO MODIFY PAGE</a><p></p><p></p>
</div>


</body>
</html>