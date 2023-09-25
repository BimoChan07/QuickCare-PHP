<?php
include('./includes/dbconn.php');

if(isset($_POST['login']))
  {
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $age=$_POST['age'];
    $password=$_POST['password'];
    $ret="select username from users where username =:username";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() == 0)
    {
        $sql="Insert Into users(fullname,age,phone,username,password)Values(:fname,:age,:phone,:username,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':phone',$phone,PDO::PARAM_INT);
        $query->bindParam(':age',$age,PDO::PARAM_INT);
        $query->bindParam(':username',$username,PDO::PARAM_STR);
        $query->bindParam(':password',$password,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId){
        echo "<script>alert('User Registered Successfully');window.location.href='./login.php'</script>
        ";
        }
        else{
        echo "<script>alert('Something went wrong.Please try again');</script>";
        }
    }
}