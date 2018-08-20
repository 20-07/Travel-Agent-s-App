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

$a="select * from ratecard135";
$result=mysqli_query($con,$a);
#echo  "<i><div style='color:#000000 ; text-align:center ; font-size:18; '>Vehicle_______Rate</div></i><br><br>"; 
echo "<br>";
echo "<table style='font-weight:bold' cellpadding='9' cellspacing='5'  align=center width=350  style='font-size:120%' border=1 frame=void rules=rows bordercolor=#000000>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo  "<td >".$row[0]."</td>";
echo  "<td >"."Rs.".$row[1]."</td>";
echo "<td >" .$row[2] ."</td>";
echo "</tr>";
}

}

mysqli_close($con);
}

?>

</body>
</html>

