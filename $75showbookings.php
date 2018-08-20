<html>
<head >
</head>

<body bgcolor=#fff >
<meta name="viewport" content ="width=device-width,initial-scale=1.0">

<?php
{
$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

$i=0;
if($con)
{


echo  "<i><div style='color:#000000 ; text-align:center ; font-size:18; '>Name____Phn No____Date____Slot</div></i><br>"; 
 
$a="select * from activa586 ";
$result=mysqli_query($con,$a);
echo  "<b><div style='color:#000000 ; text-align:center ; font-size:24; '>Activa</div></b>"; 
echo "<table  cellpadding='6' cellspacing='5'  align=left width=300  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";
while($row=mysqli_fetch_array($result))
{
if($row[4]=='2'){
echo "<tr>";
echo  "<td >".$row[0]."</td>";
echo  "<td > <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td >" .$row[2] ."</td>";
echo "<td >" .$row[3] ."hrs"."</td>";
echo "</tr>";}

}$i=0;


$a="select * from bike903";
$result=mysqli_query($con,$a);
echo "<table  cellpadding='6' cellspacing='5'  align=left width=300  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";
while($row=mysqli_fetch_array($result))
{
if($i==0){echo  "<b><div style='color:#000000 ; text-align:center ; font-size:24; '>Bike</div></b>";$i=1; }
if($row[4]=='2'){
echo "<tr>";
echo  "<td >".$row[0]."</td>";
echo  "<td > <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td >" .$row[2] ."</td>";
echo "<td >" .$row[3] ."hrs"."</td>";
echo "</tr>";}

}$i=0;


$a="select * from bullet777";
$result=mysqli_query($con,$a);
echo "<table  cellpadding='6' cellspacing='5'  align=left width=300  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";
while($row=mysqli_fetch_array($result))
{
if($i==0){echo  "<br><br><br><b><div style='color:#000000 ; text-align:center ; font-size:24; '>Bullet</div></b>";$i=1; }
if($row[4]=='2'){
echo "<tr>";
echo  "<td >".$row[0]."</td>";
echo  "<td > <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td >" .$row[2] ."</td>";
echo "<td >" .$row[3] ."hrs"."</td>";
echo "</tr>";}

}$i=0;

$a="select * from swift685";
$result=mysqli_query($con,$a);
echo "<table  cellpadding='6' cellspacing='5'  align=left width=300  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";
while($row=mysqli_fetch_array($result))
{
if($i==0){echo  "<br><br><br><b><div style='color:#000000 ; text-align:center ; font-size:24; '>Swift</div></b>";$i=1; }
if($row[4]=='2'){
echo "<tr>";
echo  "<td >".$row[0]."</td>";
echo  "<td > <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td >" .$row[2] ."</td>";
echo "<td >" .$row[3] ."hrs"."</td>";
echo "</tr>";}

}$i=0;

$a="select * from ameo298";
$result=mysqli_query($con,$a);
echo "<table  cellpadding='6' cellspacing='5'  align=left width=300  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";
while($row=mysqli_fetch_array($result))
{
if($i==0){echo  "<br><br><br><b><div style='color:#000000 ; text-align:center ; font-size:24; '>Ameo</div></b>";$i=1; }
if($row[4]=='2'){
echo "<tr>";
echo  "<td >".$row[0]."</td>";
echo  "<td > <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td >" .$row[2] ."</td>";
echo "<td >" .$row[3] ."hrs"."</td>";
echo "</tr>";}

}


}

mysqli_close($con);
}

?>

</body>
</html>

