<?php
include('../includes/dbconn.php');

if(isset($_POST['login']))
  {
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $sid=$_POST['specializationid'];
    $password=md5($_POST['password']);
    $ret="select email from doctor where email =:email";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() == 0)
    {
        $sql="Insert Into doctor(fullname,phone,email,specialization,username,password)Values(:fname,:phone,:email,:sid,:username,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':phone',$phone,PDO::PARAM_INT);
        $query->bindParam(':sid',$sid,PDO::PARAM_INT);
        $query->bindParam(':username',$username,PDO::PARAM_STR);
        $query->bindParam(':password',$password,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId){
        echo "<script>alert('Doctor Registered Successfully');window.location.href='login.php'</script>
        ";
        }
        else{
        echo "<script>alert('Something went wrong.Please try again');</script>";
        }
    }
}