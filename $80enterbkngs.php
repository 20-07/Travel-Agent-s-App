<?php
if(  count($_GET)==3 && isset($_REQUEST['naam'])  && isset($_REQUEST['phn'])  && ctype_digit($_REQUEST['phn']) && strlen($_REQUEST['phn'])==10  && isset($_REQUEST['veh'])     )

{

$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

if($con)
{

$name=$_REQUEST['naam'];
$phn=$_REQUEST['phn'];
$v=$_REQUEST['veh'];

$x=0;
$a="select * from activa586 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && ($row[4]=='1'||$row[4]=='2'))
	{
		$x=1;
		break;
	}
}
$a="select * from bike903 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && ($row[4]=='1'||$row[4]=='2'))
	{
		$x=1;
		break;
	}
}
$a="select * from bullet777 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && ($row[4]=='1'||$row[4]=='2'))
	{
		$x=1;
		break;
	}
}
$a="select * from swift685 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && ($row[4]=='1'||$row[4]=='2'))
	{
		$x=1;
		break;
	}
}
$a="select * from ameo298 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phn==$row[1] && ($row[4]=='1'||$row[4]=='2'))
	{
		$x=1;
		break;
	}
}





if($v=='1'&&$x==0)
{
$a = "INSERT INTO activa586 (name, phn, date, slot, status)  VALUES ('$name', '$phn', 'N/A', 'N/A', '1')";
mysqli_query($con,$a);

$a="update activa586 set    name='$name'     ,  date='N/A'  ,  slot='N/A'   ,  status='1'   where  phn='$phn' "; 
mysqli_query($con,$a);
}

if($v=='2'&&$x==0)
{
$a = "INSERT INTO bike903 (name, phn, date, slot, status)  VALUES ('$name', '$phn', 'N/A', 'N/A', '1')";
mysqli_query($con,$a);
$a="update bike903 set    name='$name'     ,  date='N/A'  ,  slot='N/A'  ,  status='1'   where  phn='$phn' "; 
mysqli_query($con,$a);
}

if($v=='3'&&$x==0)
{
$a = "INSERT INTO bullet777 (name, phn, date, slot, status)  VALUES ('$name', '$phn', 'N/A', 'N/A', '1')";
mysqli_query($con,$a);
$a="update bullet777 set    name='$name'     ,  date='N/A'  ,  slot='N/A'  ,  status='1'   where  phn='$phn' "; 
mysqli_query($con,$a);
}

if($v=='4'&&$x==0)
{
$a = "INSERT INTO swift685 (name, phn, date, slot, status)  VALUES ('$name', '$phn', 'N/A', 'N/A', '1')";
mysqli_query($con,$a);
$a="update swift685 set    name='$name'      ,  date='N/A'  ,  slot='N/A'  ,  status='1'   where  phn='$phn' "; 
mysqli_query($con,$a);
}

if($v=='5'&&$x==0)
{
$a = "INSERT INTO ameo298 (name, phn, date, slot, status)  VALUES ('$name', '$phn', 'N/A', 'N/A' ,'1')";
mysqli_query($con,$a);
$a="update ameo298 set    name='$name'      ,  date='N/A'  ,  slot='N/A'  ,  status='1'   where  phn='$phn' "; 
mysqli_query($con,$a);
}


}

mysqli_close($con);

}
?>

