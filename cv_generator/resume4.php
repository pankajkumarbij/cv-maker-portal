<?php
session_start();
if($_SESSION['uname'])
{
include "header.php";
include "dbcon.php";
?>
<script type="text/javascript">
function codespeedy()
{
var pd = document.getElementById("resume");
var p = window.open();
p.document.write(pd.innerHTML);
p.document.close();
p.focus();
p.print();
p.close();
}
</script>
<?php
$un=$_SESSION['uname'];
$un1=0;
$data="SELECT * FROM signup,personal,education,work_experience,project,skills WHERE signup.username='$un' AND signup.username=personal.username And signup.username=education.username AND signup.username=work_experience.username AND signup.username=project.username AND signup.username=skills.username";
foreach($con->query($data) as $dat)
{
	?>
	<center>
		<form>
	    <input type="button" value="Click For Print" onclick="codespeedy()" style="background-color:lightgreen;margin-top:30px;">
	  </form>
	<div id="resume" style="width: 50%;height: 130vh;background-color: white;margin-bottom:30px;border:1px solid;padding:20px;">
		<div style="width: 100%;height: 20vh;margin-top:10px;">
		<h2 align="left" style="margin-left:50px;color:black;">
		<?php
		echo $dat['name'];
		?>
	</h2>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Gender: ".$dat['gender'];
			echo ";  Blood Group: ".$dat['blood'];
			echo "<br />E-mail: ".$dat['email'];
			echo "; M.No: ".$dat['mobile'];
			?>
			<br />
			<?php
			echo "Linkedin: ".$dat['linkedin'];
			echo "; Github: ".$dat['github'];
			?>
			<br>
			<?php
			echo "Address: ".$dat['pincode'];
			?>
			<?php
			echo ",".$dat['district'];
			?>
			<?php
			echo ",".$dat['state'];
			?>
		</p>
	</div>
	<div style="width: 100%;height: 35vh;">
		<hr>
		<h2 style="color:black;">Education Details:</h2>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Degree: ".$dat['degree'];
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Collage: ".$dat['collage_name'];
			echo "; Branch: ".$dat['branch'];
			echo "<br />CGPA/CPI: ".$dat['cpi'];
			?>
			<br />
		</p>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Higher Secondary";
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Board: ".$dat['board_name_12'];
			echo "; School: ".$dat['school_name_12'];
			echo "<br />Percentage: ".$dat['percent_12'];
			?>
			<br />
		</p>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Secondary";
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Board: ".$dat['board_name_10'];
			echo "; School: ".$dat['school_name_10'];
			echo "<br />Percentage: ".$dat['percent_10'];
			?>
			<br />
		</p>
	</div>
	<div style="width: 100%;height: 30vh;">
		<hr>
		<h2 style="color:black;">Work/Internship Experience:</h2>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Work Title: ".$dat['work_title1'];
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Company/orgenization: ".$dat['company1'];
			echo "<br />Time Interval: ".$dat['start_date1']." to ".$dat['end_date1'];
			echo "<br />Discription: ".$dat['discription1'];
			?>
			<br />
		</p>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Work Title: ".$dat['work_title2'];
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Company/orgenization: ".$dat['company2'];
			echo "<br />Time Interval: ".$dat['start_date2']." to ".$dat['end_date2'];
			echo "<br />Discription: ".$dat['discription2'];
			?>
			<br />
		</p>
	</div>
	<div style="width: 100%;height: 30vh;">
		<hr>
		<h2 style="color:black;">Project Details:</h2>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Project Title: ".$dat['project_title1'];
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Time Interval: ".$dat['pstart_date1']." to ".$dat['pend_date1'];
			echo "<br />Discription: ".$dat['pdiscription1'];
			?>
			<br />
		</p>
		<h3 align="left" style="margin-left:50px;">
		<?php
		echo "Work Title: ".$dat['project_title2'];
		?>
	</h3>
		<p align="left" style="margin-left:50px;">
			<?php
			echo "Time Interval: ".$dat['pstart_date2']." to ".$dat['pend_date2'];
			echo "<br />Discription: ".$dat['pdiscription2'];
			?>
			<br />
		</p>
	</div>
	<div style="width: 100%;">
		<hr />
	<h2 style="color:black;">Skills:</h2>
	<p align="left" style="margin-left:50px;">
		<?php
		echo $dat['skill'];
		?>
		<br />
	</p>
	</div>
</div>
</center>
</body>
</html>
	<?php
}
}
else
{
	header('location:signin.php');
}
?>
