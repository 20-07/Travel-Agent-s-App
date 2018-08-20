<?php
if(  count($_GET)==1 && isset($_REQUEST['dphn'])  && ctype_digit($_REQUEST['dphn']) && strlen($_REQUEST['dphn'])==10       )

{

$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

if($con)
{

if(isset($_REQUEST['dphn']) )

{

$phn=$_REQUEST['dphn'];

$a="select * from activa586 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && $row[4]=='2')
	{
		$a="update activa586 set   status='4'   where  phn='$phn' ";
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from bike903 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && $row[4]=='2')
	{
		$a="update bike903 set   status='4'   where  phn='$phn' ";
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from bullet777 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && $row[4]=='2')
	{
		$a="update bullet777 set   status='4'   where  phn='$phn' ";
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from swift685 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && $row[4]=='2')
	{
		$a="update swift685 set   status='4'   where  phn='$phn' ";
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from ameo298 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && $row[4]=='2')
	{
		$a="update ameo298 set   status='4'   where  phn='$phn' ";
		mysqli_query($con,$a);
		break;
	}
}






}


}

mysqli_close($con);

}
?>

