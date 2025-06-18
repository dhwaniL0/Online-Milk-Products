<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $connect=mysqli_connect("localhost","root","","milkshop");

        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

            $query = "select * from user1 where email='$email'" ;
            $result = mysqli_query($connect,$query);
            $num = mysqli_num_rows($result);
            if($num == 1)
            {
                while($row=mysqli_fetch_assoc($result)){

                if($pwd == $row['pwd']){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                    echo "<script>alert('Successfully login');</script>";
                    header("location: home.php");
            }
            else{
                echo "<script>alert('Wrong password!!');</script>" ;
            }
        }   
    }
    else{
        echo "<script>alert('email not exits please register!!');</script>" ;
    }
}
?>