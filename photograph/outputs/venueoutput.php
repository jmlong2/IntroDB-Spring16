<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=../login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}

    include("../connection.php");
    echo "<link rel='stylesheet' type='text/css' href='../css/master.css'/>";
    echo "<h1>Venues</h1>";
  	echo "<table border='1' align='center'>";
  	echo "<tr>";
  	echo "<td><b>ID</b></td>";
  	echo "<td><b>Address</b></td>";
    echo "<td><b>City</b></td>";
    echo "<td><b>State</b></td>";
    echo "<td><b>ZIP</b></td>";
    echo "<td><b>Phone</b></td>";
    echo "<td><b>Contact Name</b></td>";
    echo "<td><b>Type</b></td>";
  	echo "</tr>";
    $r = mysqli_query($dbc, "SELECT * FROM VENUES");

    while ( $row = mysqli_fetch_array($r))
    {
        echo "<tr>";
        echo "<td>".$row['VENUEID']."</td>";
        echo "<td>".$row['VENUEADDRESS']."</td>";
        echo "<td>".$row['VENUECITY']."</td>";
        echo "<td>".$row['VENUESTATE']."</td>";
        echo "<td>".$row['VENUEZIP']."</td>";
        echo "<td>".$row['VENUENUMBER']."</td>";
        echo "<td>".$row['VENUECONTACTNAME']."</td>";
        echo "<td>".$row['VENUETYPE']."</td>";
        echo "</tr>";
    }
mysqli_close($dbc); //always close the connection for security
echo "</table>";
?>
