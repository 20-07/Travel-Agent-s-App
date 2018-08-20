<?php
if(  count($_GET)==2 && isset($_REQUEST['ph'])  && ctype_digit($_REQUEST['ph']) && strlen($_REQUEST['ph'])==10  && isset($_REQUEST['v'])     )

{

$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

if($con)
{

$phn=$_REQUEST['ph'];
$vh=$_REQUEST['v'];
$x=0;

if($vh=='1'){
$a="select * from activa586 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1])
	{
		$x=1;
		if($row[4]=='1')
		echo '<span style="color:#FFFF00;text-align:center;">Kindly Set Your Rides Schedule</span>';
		else if($row[4]=='2'){
		$ans='Booking Active for Activa on'.' $row[2] '.'slot-'.'$row[3]';
		echo '<span style="color:#00FF00;">$ans</span>';}
		else if($row[4]=='3')
		echo '<span style="color:#00FF00;text-align:center;">Ride Complete</span>';
		else if($row[4]=='4')
		echo '<span style="color:#ff0000;text-align:center;">Ride has been Cancelled</span>';
		break;
	}
}}


if($vh=='2'){
$a="select * from bike903 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1])
	{
		$x=1;
		if($row[4]=='1')
		echo '<span style="color:#FFFF00;text-align:center;">Kindly Set Your Rides Schedule</span>';
		else if($row[4]=='2'){
		$ans='Booking Active for Bike on'.' $row[2] '.'slot-'.'$row[3]';
		echo '<span style="color:#00FF00;">$ans</span>';}
		else if($row[4]=='3')
		echo '<span style="color:#00FF00;text-align:center;">Ride Complete</span>';
		else if($row[4]=='4')
		echo '<span style="color:#ff0000;text-align:center;">Ride has been Cancelled</span>';
		break;
	}
}}

if($vh=='3'){
$a="select * from bullet777 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1])
	{
		$x=1;
		if($row[4]=='1')
		echo '<span style="color:#FFFF00;text-align:center;">Kindly Set Your Rides Schedule</span>';
		else if($row[4]=='2'){
		$ans='Booking Active for Bullet on'.' $row[2] '.'slot-'.'$row[3]';
		echo '<span style="color:#00FF00;">$ans</span>';}
		else if($row[4]=='3')
		echo '<span style="color:#00FF00;text-align:center;">Ride Complete</span>';
		else if($row[4]=='4')
		echo '<span style="color:#ff0000;text-align:center;">Ride has been Cancelled</span>';
		break;
	}
}}

if($vh=='4'){
$a="select * from swift685 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1])
	{
		$x=1;
		if($row[4]=='1')
		echo '<span style="color:#FFFF00;text-align:center;">Kindly Set Your Rides Schedule</span>';
		else if($row[4]=='2'){
		$ans='Booking Active for Swift on'.' $row[2] '.'slot-'.'$row[3]';
		echo '<span style="color:#00FF00;">$ans</span>';}
		else if($row[4]=='3')
		echo '<span style="color:#00FF00;text-align:center;">Ride Complete</span>';
		else if($row[4]=='4')
		echo '<span style="color:#ff0000;text-align:center;">Ride has been Cancelled</span>';
		break;
	}
}}

if($vh=='5'){
$a="select * from ameo298 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1])
	{
		$x=1;
		if($row[4]=='1')
		echo '<span style="color:#FFFF00;text-align:center;">Kindly Set Your Rides Schedule</span>';
		else if($row[4]=='2'){
		$ans='Booking Active for Ameo on'.' $row[2] '.'slot-'.'$row[3]';
		echo '<span style="color:#00FF00;">$ans</span>';}
		else if($row[4]=='3')
		echo '<span style="color:#00FF00;text-align:center;">Ride Complete</span>';
		else if($row[4]=='4')
		echo '<span style="color:#ff0000;text-align:center;">Ride has been Cancelled</span>';
		break;
	}
}}

if($x==0)
echo '<span style="color:#FFFF00;text-align:center;">Welcome to Royal Ride, Book your first Ride!</span>';


}

mysqli_close($con);

}
?>

