<?php
include "header.php";
include "dbcon.php"
?>
<center>
<form action="signin.php" method="post" style="margin-top: 150px;">
<fieldset>
	<legend>Sign In</legend>
	<table border="2" style="background-color: lightgreen; width: 50%;">
		<tr>
			<td align="center">username:</td>
			<td align="center"><input type="text" name="un"></td>
		</tr>
		<tr>
			<td align="center">Password:</td>
			<td align="center"><input type="Password" name="pw"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit"></td>
		</tr>
	</table>
</fieldset>
</form>
</center>
<?php
if(isset($_POST['submit']))
{
	$un=$_POST['un'];
	$pw=$_POST['pw'];
	$result = $con->prepare("SELECT count(*) FROM signup WHERE username='$un' AND password='$pw'"); 
	$result->execute(); 
	$nor = $result->fetchColumn();
	if($nor<1)
	{
		?>
		<script>
			alert("user_name and password is not match !! plz try again");
			window.open('signin.php','_self');
		</script>
		<?php
	}
	else
	{
		$un1=0;
		$data="SELECT * FROM signup where username='$un'";
		foreach($con->query($data) as $dat)
		{
			$un1=$dat['username'];
		}
		session_start();
		$_SESSION['uname']=$un1;
		?>
		<script>
			alert("Congratulations !! Now you can create your cv ");
			window.open('personal.php','_self');
		</script>
		<?php
	}
}
?>