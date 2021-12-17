<?php
include("updesign.php");
?>
<html>
<body>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h5>Registration Timing</h5>
            <ul>
                <li>Opening Timimg : 8:00 AM</li>
                <li>Closing Timing : 9:00 PM</li>
                <li>Friday half from (9:00 am to 2:00 pm)</li>
                <li>Saturday Off</li>
            </ul>
            <h5>What we provide?</h5>
            <ul>
                <li>Birth Registration</li>
                <li>Death Registration</li>
                <li>Marriage Registration</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
            <center>
                <h4>Fill the Details To Login</h4>            </center>
                <form action="" method="post">
                <div class="form-group">
                    <p>ID:</p>
                    <input type="text" name="id" class="form-control" required>

                </div>
                <div class="form-group">
                    <p>Email ID:</p>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <input type="submit" name="submit" class="btn btn-primary" value="login"></button>

            </form>
            <?php
         if(isset($_POST['submit']))
     {
        $conn=mysqli_connect("localhost","root","","vrs");
        if(!$conn)
        {
            die("error ".mysqli_connect_error());
        }
        else
        {
             $sql="SELECT * from `registered` where Id=$_POST[id]";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['Email']==$_POST['email'])
                {                     
                    session_start();

                    if($row['password']==$_POST['password'])
                    {
                     $_SESSION['email']=$row['Email'];
                     $_SESSION['name']=$row['full_name'];
                    header("Location:user_dashboard.php");
                    }
                    // echo "Login sucessfully";
                    else{
                        ?><p style="color:red">"Wrong Password"</p><?php
                    }
                }
                else{
                  ?><p style="color:red">"Wrong Email Address"</p><?php                }

            }
            
        }
       
     }
    


     ?>
        </div>
    </div>
    <br> <br>  
    <!-- Footer -->
</body>
<?php

include("footer.php");
?>
</html>