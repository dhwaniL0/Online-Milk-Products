<?php
     include 'connection.php';
     $id = null;
     if(isset($_GET['updateid'])) {
     $id= $_GET['updateid'];
     $query="select * from `user1` where id=$id";
     $result = mysqli_query($conn, $query);
     if($result) {
        // Fetch data from result set
        $_row = mysqli_fetch_array($result);
        // Proceed with further operations using $row
        $name=$_row['name'];
        $lname=$_row['lname'];
        $email=$_row['email'];
        $pwd=$_row['pwd'];
        $gender=$_row['gender'];
        $city=$_row['city'];
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
}
     
    
    if(isset($_POST['submit'])) {
        // Retrieve form data
        $name=$_POST['name'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $sql = "UPDATE `user1` SET name='$name', lname='$lname', email='$email', 
        pwd='$pwd', gender='$gender', city='$city' WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:dis.php');
        }
        else{
            die("Update failed: " . mysqli_error($conn));
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" href="regis.css">
    </head>
    <body>
    <div class="wrapper">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h1>Registration</h1>
        <div class="input-box">
            <input type="text" name="name" placeholder="User Name" value=<?php echo $name;?>>    
        </div>
		<div class="input-box">
            <input type="text" name="lname" placeholder="Last Name" value=<?php echo $lname;?> required>
        </div>
        <div class="input-box">
            <input type="text" name="email" placeholder="Emai Id" value=<?php echo $email;?> required>
        </div>
        <div class="input-box">
            <input type="password" name="pwd" placeholder="password" value=<?php echo $pwd;?> requird>
        </div>
        <div class="input-box">
            <input type="text" name="gender" placeholder="Gender" value=<?php echo $gender;?> required>
        </div>
        <div class="input-box">
                <input type="text" name="city" placeholder="City" value=<?php echo $city;?> required>
        </div>
        <button type="submit" name="submit" class="btn">Update</button>
    </div>
    </form>
</body>
</html>