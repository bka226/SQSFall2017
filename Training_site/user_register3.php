<?php
/**
This file is where users can create accounts.
Accounts created on this page are automically given a ranking of "3", which is simply an account without administrative privileges (further distinctions between account rankings may be given in the future).
Only the name, email, and password information must be created to create an account.
Errors will not be introduced to this page any time soon because specific errors can currently only be associated with users who are logged in.
*/
include 'config/header.php'; //connects to database
require_once('../sql_connector.php');?>




<?php //Begining of  user registration  of page 3
// When Users add their information to the registration page 3(Hardware skills), it will add infomation to Mysql //database

if(isset($_POST["submit"])) //waits for buttons press
{		
	$url= 'user_register4.php';
	
	{
		$HardwareskillList = implode(',', $_POST['HardwareSkill']); //allows to select multiple skills in the array
		echo '<p>'.$HardwareskillList.'</p>';
		$sql = "UPDATE user SET HardwareSkill = '" .$HardwareskillList."' WHERE uid=".$_SESSION['ID'].";";
		$result = $mysqli->query($sql);
		echo "Date Success"; //Diplays
	}
	//header("Location: $url"); // will take you to the next registration page

}  
//End of user registration page 3 sql commands
if ($HardwareskillList== True){
	echo "<div class='container' id='percentSoftware'> Your Current Percentage for the page is 25% .....</div>";
} else{
	echo "<div class='container' id='percentSoftware'> Your Current Percentage for the page is 0% .....</div>";
}
?>




<html>
<!DOCTYPE html>
<div class="container">

	<div class="form-horizontal" id="centerbox">
		Registration Progress
	</div>
	
	<div class="progress">
		<div class="progress-bar progress-bar-striped" role="progressbar" 
			aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
			50%
		</div>
	</div>
	
	<form  class="form-horizontal" action="" method="post">
        <div>
			<div class="form-group" id="centerbox">
				<label class="control-label col-sm-4" >Optional, may leave this page blank</label>
                <div class="col-sm-7"></div>
            </div>

			<div class="form-group" id="centerbox">
				<label class="control-label col-sm-2">Hardware Skills</label>
			</div>
			
			<div class="form-group" id="centerbox">
				<div class="col-sm-2">
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_assembly" value="Computer Assembly"/> Computer assembly <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_maintenence" value="Computer maintenence"/> Computer maintenence <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_troubleshoot" value="Troubleshooting"/> Troubleshooting<br/>
					
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_refilling" value="Printer and cartage refilling"/> Printer and cartage refilling <br/>
					
				</div>
				
				<div class="col-sm-2" >
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_monitoring" value="Operation Monitoring"/> Operation Monitoring<br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_processing" value="Network Processing"/>Network processing <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_recovery" value="Disaster Recovery"/> Disaster Recovery <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_design" value="Circuit Design knownledge"/> Circuit Design knownledge<br/>
				</div>
				<div class="col-sm-3"  >

					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_analysis" value="Systems Analysis "/> Systems Analysis <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_app" value="Installing Applications"/> Installing Applications <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_component" value=" Installing components and drivers"/> Installing components and drivers <br/>
					<input type="checkbox" name="HardwareSkill[]" id="hardwareSkills_backup" value="Backup Management,Reporting and Recovery"/> Backup Management,Reporting and Recovery <br/>
				</div>
				
			</div>
			
			<div class="form-group" id="centerbox">
				<label class="control-label col-sm-5">Did we forget any skills?</label>
				
				<div class="col-sm-7">
					<input type="text" name="HardwareSkill[]" size="30" id="hardwareSkills_Textbox"/>
				</div>
			</div>
			
			<label class="control-label col-sm-5">(list with commas seperating)</label>
			
			<div class="form-group" id="centerbox">
				<div class="control-label col-sm-6">
					<input class="btn btn-default" type="btn" name="back" value="Back" onclick="history.back()" id="signup_Back2"/>
					<input class="btn btn-default" type="submit" name="submit" value="Next" id="signup_Next2"/>
				</div>
			</div>
			
		</div>		
    </form>
</div>

</html>