<?php
include('./includes/dbconn.php');
if(!empty($_POST["sp_id"])) 
{
$spid=$_POST["sp_id"];
$sql=$dbh->prepare("SELECT * FROM doctor WHERE specialization=:spid");
$sql->execute(array(':spid' => $spid));	
?>
<option value="">Select Doctor</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["id"]; ?>"><?php echo $row["fullname"]; ?></option>
<?php
}
}
?>