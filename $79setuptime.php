<?php
if( count($_GET)==4 && isset($_REQUEST['ph'])  &&  isset($_REQUEST['dt'])  && isset($_REQUEST['st1'])  && isset($_REQUEST['st2'])  )

{
$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72");

if($con)
{

$phon=$_REQUEST['ph'];
$dat=$_REQUEST['dt'];$slt1=$_REQUEST['st1'];$slt2=$_REQUEST['st2'];
$slt = $slt1." - ".$slt2;

$a="select * from activa586 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phon==$row[1] && $row[4]=='1')
	{
		$a="update activa586 set    date='$dat'      ,     slot='$slt'   ,   status='2'   where  phn='$phon' "; 
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from bike903 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phon==$row[1] && $row[4]=='1')
	{
		$a="update bike903 set    date='$dat'      ,     slot='$slt'   ,   status='2'   where  phn='$phon' "; 
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from bullet777 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phon==$row[1] && $row[4]=='1')
	{
		$a="update bullet777 set    date='$dat'      ,     slot='$slt'   ,   status='2'   where  phn='$phon' "; 
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from swift685 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phon==$row[1] && $row[4]=='1')
	{
		$a="update swift685 set    date='$dat'      ,     slot='$slt'   ,   status='2'   where  phn='$phon' "; 
		mysqli_query($con,$a);
		break;
	}
}
$a="select * from ameo298 ";
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
    if($phon==$row[1] && $row[4]=='1')
	{
		$a="update ameo298 set    date='$dat'      ,     slot='$slt'   ,   status='2'   where  phn='$phon' "; 
		mysqli_query($con,$a);
		break;
	}
}


}

mysqli_close($con);

}
?>

