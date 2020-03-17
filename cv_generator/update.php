<?php
session_start();
if($_SESSION['uname'])
{
include "header.php";
include "dbcon.php";
$un=$_SESSION['uname'];
$un1=0;
$data="SELECT * FROM signup,personal,education,work_experience,project,skills WHERE signup.username='$un' AND signup.username=personal.username And signup.username=education.username AND signup.username=work_experience.username AND signup.username=project.username AND signup.username=skills.username";
foreach($con->query($data) as $dat)
{
?>
<center>
	<h2 style="background-color:yellow">If you not created CV then click on create cv button</h2>
  <h4 style="background-color:yellow">If you update data then check your blood group</h4>
<form action="update.php" method="post">
	<fieldset style="margin-top: 20px;">
		<legend>Personal Information</legend>
	<table style="background-color: lightgreen;width: 60%;" border="2">
		<tr><td align="center">Linkedin url</td><td align="center"><input type="text" name="linkedin" value="<?php echo $dat['linkedin']; ?>"></td></tr>
		<tr><td align="center">Github url</td><td align="center"><input type="text" name="github" value="<?php echo $dat['github']; ?>"></td></tr>
		<tr>
			<td align="center">Blood group</td>
			<td align="center"><select name="bg"><option>A+</option><option>A-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option><option>AB+</option><option>AB-</option></select></td>
		</tr>
		<tr>
			<td align="center" rowspan="4">Address:</td>
		</tr>
		<tr><td align="center"><input type="number" name="pincode" placeholder="Pin code" maxlength="6" minlength="6" value="<?php echo $dat['pincode']; ?>"></td>
		</tr>
		<tr>
			<td align="center"><input type="text" name="dist" value="<?php echo $dat['district']; ?>"></td></tr>
			<tr><td align="center"><input type="text" name="state" value="<?php echo $dat['state']; ?>"></td></tr>
	</table>
	</fieldset>
	<fieldset>
		<legend>Education Information</legend>
	<table style="background-color: lightgreen;width: 60%;" border="2">
		<tr>
			<td rowspan="5" align="center">Collage Details</td>
		</tr>
		<tr>
			<td align="center">Collage Name:</td>
			<td align="center"><input type="text" name="cname" value="<?php echo $dat['collage_name']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Degree:</td>
			<td align="center"><input type="text" name="degree" value="<?php echo $dat['degree']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Branch:</td>
			<td align="center"><input type="text" name="bname" value="<?php echo $dat['branch']; ?>"></td>
		</tr>
		<tr>
			<td align="center">CGPA/CPI:</td>
			<td align="center"><input type="number" name="cpi" value="<?php echo $dat['cpi']; ?>"></td>
		</tr>
		<tr>
			<td rowspan="4" align="center">Higher Secondary Details</td>
		</tr>
		<tr>
			<td align="center">Board Name:</td>
			<td align="center"><input type="text" name="boname1" value="<?php echo $dat['board_name_12']; ?>"></td>
		</tr>
		<tr>
			<td align="center">School Name:</td>
			<td align="center"><input type="text" name="sname1" value="<?php echo $dat['school_name_12']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Percentage:</td>
			<td align="center"><input type="number" name="per1" value="<?php echo $dat['percent_12']; ?>"></td>
		</tr>
		<tr>
			<td rowspan="4" align="center">Secondary Details</td>
		</tr>
		<tr>
			<td align="center">Board Name:</td>
			<td align="center"><input type="text" name="boname2" value="<?php echo $dat['board_name_10']; ?>"></td>
		</tr>
		<tr>
			<td align="center">School Name:</td>
			<td align="center"><input type="text" name="sname2" value="<?php echo $dat['school_name_10']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Percentage:</td>
			<td align="center"><input type="number" name="per2" value="<?php echo $dat['percent_10']; ?>"></td>
		</tr>
	</table>
	</fieldset>
	<fieldset>
		<legend>Internship/Work Experience</legend>
	<table style="background-color: lightgreen;width: 60%;" border="2">
		<tr>
			<td rowspan="5" align="center">Work exp 1.</td>
		</tr>
		<tr>
			<td align="center">Work Title:</td>
			<td align="center"><input type="text" name="title1" value="<?php echo $dat['work_title1']; ?>" ></td>
		</tr>
		<tr>
			<td align="center">company/orgenization:</td>
			<td align="center"><input type="text" name="oname1" value="<?php echo $dat['company1']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Time period:</td>
			<td align="center">Start date:<input type="date" name="tp11" value="<?php echo $dat['start_date1']; ?>">End date:<input type="date" name="tp12" value="<?php echo $dat['end_date1']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Discription:</td>
			<td align="center"><input type="text" name="disc1" value="<?php echo $dat['discription1']; ?>"></td>
		</tr>
		<tr>
			<td rowspan="5" align="center">Work exp 2.</td>
		</tr>
		<tr>
			<td align="center">Work Title:</td>
			<td align="center"><input type="text" name="title2" value="<?php echo $dat['work_title2']; ?>"></td>
		</tr>
		<tr>
			<td align="center">company/orgenization:</td>
			<td align="center"><input type="text" name="oname2" value="<?php echo $dat['company2']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Time period:</td>
			<td align="center">Start date:<input type="date" name="tp21" value="<?php echo $dat['start_date2']; ?>">End date:<input type="date" name="tp22" value="<?php echo $dat['end_date2']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Discription:</td>
			<td align="center"><input type="text" name="disc2" value="<?php echo $dat['discription2']; ?>"></td>
		</tr>
	</table>
	</fieldset>
	<fieldset>
		<legend>skills</legend>
	<table style="background-color: lightgreen;width: 60%;" border="2">
		<tr><td>Skills</td>
		<td><input type="text" name="skills" style="width: 99%;height: 50px;" value="<?php echo $dat['skill']; ?>"/></td></tr>
		</tr>
	</table>
	</fieldset>
	<fieldset>
		<legend>Project Details</legend>
	<table style="background-color: lightgreen;width: 60%;" border="2">
		<tr>
			<td rowspan="4" align="center">project 1.</td>
		</tr>
		<tr>
			<td align="center">project Title:</td>
			<td align="center"><input type="text" name="ptitle1" value="<?php echo $dat['project_title1']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Time period:</td>
			<td align="center">Start date:<input type="date" name="ptp11" value="<?php echo $dat['pstart_date1']; ?>">End date:<input type="date" name="ptp12" value="<?php echo $dat['pend_date1']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Discription:</td>
			<td align="center"><input type="text" name="pdisc1" value="<?php echo $dat['pdiscription1']; ?>"></td>
		</tr>
		<tr>
			<td rowspan="4" align="center">project 2.</td>
		</tr>
		<tr>
			<td align="center">project Title:</td>
			<td align="center"><input type="text" name="ptitle2" value="<?php echo $dat['project_title2']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Time period:</td>
			<td align="center">Start date:<input type="date" name="ptp21" value="<?php echo $dat['pstart_date2']; ?>">End date:<input type="date" name="ptp22" value="<?php echo $dat['pend_date2']; ?>"></td>
		</tr>
		<tr>
			<td align="center">Discription:</td>
			<td align="center"><input type="text" name="pdisc2" value="<?php echo $dat['pdiscription2']; ?>"></td>
		</tr>
	</table>
	</fieldset>
	<fieldset>
		<legend>Confirm and Submit</legend>
		<table style="background-color: lightgreen;width: 60%;" border="2">
		<tr>
			<td align="center"><input type="checkbox" name="checkbox" required>Confirm</td>
			<td align="center" colspan="2"><input type="submit" name="submit" value="save & next"></td>
		</tr>
	</table>
	</fieldset>
</form>
</center>
<br><br>
<?php
}
if(isset($_POST['submit']))
{
  $un=$_SESSION['uname'];
	$linkedin=$_POST['linkedin'];
	$github=$_POST['github'];
	$blood=$_POST['bg'];
	$dist=$_POST['dist'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$qry1 = $con->query("UPDATE personal SET linkedin='$linkedin',github='$github',blood='$blood',district='$dist',state='$state',pincode='$pincode' WHERE username='$un'");
	$collage_name=$_POST['cname'];
	$degree=$_POST['degree'];
	$branch=$_POST['bname'];
	$cpi=$_POST['cpi'];
	$school_name_10=$_POST['sname1'];
	$board_name_10=$_POST['boname1'];
	$per1=$_POST['per1'];
	$school_name_12=$_POST['sname2'];
	$board_name_12=$_POST['boname2'];
	$per2=$_POST['per2'];
	$qry2 = $con->query("UPDATE education SET collage_name='$collage_name',degree='$degree',branch='$branch',cpi=$cpi,board_name_10='$board_name_10',school_name_10='$school_name_10',percent_10=$per1,board_name_12='$board_name_12',school_name_12='$school_name_12',percent_12=$per2 WHERE username='$un'");
	$work_title1=$_POST['title1'];
	$company1=$_POST['oname1'];
	$start_date1=$_POST['tp11'];
	$end_date1=$_POST['tp12'];
	$discription1=$_POST['disc1'];
	$work_title2=$_POST['title2'];
	$company2=$_POST['oname2'];
	$start_date2=$_POST['tp21'];
	$end_date2=$_POST['tp22'];
	$discription2=$_POST['disc2'];
	$qry3 = $con->query("UPDATE work_experience SET work_title1='$work_title1',company1='$company1',start_date1='$start_date1',end_date1='$end_date1',discription1='$discription1',work_title2='$work_title2',company2='$company2',start_date2='$start_date2',end_date2='$end_date2',discription2='$discription2' WHERE username='$un'");
	$project_title1=$_POST['ptitle1'];
	$pstart_date1=$_POST['ptp11'];
	$pend_date1=$_POST['ptp12'];
	$pdiscription1=$_POST['pdisc1'];
	$project_title2=$_POST['ptitle2'];
	$pstart_date2=$_POST['ptp21'];
	$pend_date2=$_POST['ptp22'];
	$pdiscription2=$_POST['pdisc2'];
	$qry4 = $con->query("UPDATE project SET project_title1='$project_title1',pstart_date1='$pstart_date1',pend_date1='$pend_date1',pdiscription1='$pdiscription1',project_title2='$project_title2',pstart_date2='$pstart_date2',pend_date2='$pend_date2',pdiscription2='$pdiscription2' WHERE username='$un'");
	$skills=$_POST['skills'];
	$qry5 = $con->query("UPDATE skills SET skill='$skills' WHERE username='$un'");
	if($qry1==true && $qry2==true && $qry3==true  && $qry4==true && $qry5==true)
	{
	  ?>
	    <script>
	    alert('data updated successfully');
			window.open('templates.php','_self');
	    </script>
	  <?php
	}
	else
	{
	  ?>
	    <script>
	    alert('Oho!! Somthing went wrong !! Plz try again');
			window.open('update.php','_self');
	    </script>
	  <?php
	}
}
?>
</body>
</html>
<?php
}
else
{
	header('location:signin.php');
}
?>
