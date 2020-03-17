<?php
include "header.php";
include "dbcon.php"
?>
<center>
<form action="signup.php" method="post" style="margin-top: 100px;">
<fieldset>
	<legend>Sign Up</legend>
	<table border="2" style="background-color: lightgreen; width: 50%;">
		<tr>
			<td align="center">username:</td>
			<td align="center"><input type="text" name="un"></td>
		</tr>
		<tr>
			<td align="center">Name:</td>
			<td align="center"><input type="text" name="name"></td>
		</tr>
		<tr>
			<td align="center">Gender:</td>
			<td align="center"><input type="radio" name="gn" value="Male">Male<input type="radio" name="gn" value="Female">Female</td>
		</tr>
		<tr>
			<td align="center">Contact No:</td>
			<td align="center"><input type="number" name="cn" minlength="10" maxlength="10"></td>
		</tr>
		<tr>
			<td align="center">Email:</td>
			<td align="center"><input type="email" name="email"></td>
		</tr>
		<tr>
			<td align="center">Password:</td>
			<td align="center"><input type="Password" name="pw"></td>
		</tr>
		<tr>
			<td align="center">Confirm Password:</td>
			<td align="center"><input type="Password" name="cpw"></td>
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
	$name=$_POST['name'];
	$gn=$_POST['gn'];
	$cn=$_POST['cn'];
	$email=$_POST['email'];
	$pw=$_POST['pw'];
	$cpw=$_POST['cpw'];
	if($pw!=$cpw)
	{
		?>
		<script>alert("password is not match");</script>
		<?php
	}
	else
	{
		$result = $con->prepare("SELECT count(*) FROM signup WHERE username='$un'");
		$result->execute();
		$nor = $result->fetchColumn();
	    if($nor>0)
	    {
	      ?>
	      <script>
	  		alert('sorry !! username is already exist');
	  		</script>
	      <?php
	    }
	    else
	    {
	    	$qry = $con->query("INSERT INTO signup(username,password,name,gender,mobile,email) VALUES ('$un','$pw','$name','$gn','$cn','$email')");
			if($qry==true)
			{
				?>
					<script>
					alert('You Registered successfully');
					</script>
				<?php
			}
			else
			{
				?>
					<script>
					alert('Oho!! Somthing went wrong !! Plz try again');
					</script>
				<?php
			}
	    }
	}
}
?>
