<?php
if( count($_GET)==4 &&  isset($_REQUEST['enty'])  && isset($_REQUEST['rs']) && isset($_REQUEST['r1'])  && isset($_REQUEST['r2'])    )

{
$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72");

if($con)
{

$en=$_REQUEST['enty'];$rs=$_REQUEST['rs'];$rt1=$_REQUEST['r1'];$rt2=$_REQUEST['r2'];
$rt1 = $rt1."Km/".$rt2."hrs";
$a="update ratecard135 set    rupee='$rs'      ,     rate='$rt1'   where  entity='$en' "; 
mysqli_query($con,$a);

}

mysqli_close($con);

}
?>

