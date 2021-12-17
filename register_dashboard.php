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
                <li>Marriage Ragistration</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
            <center>
                <h4>User Registration</h4>   </center>

                <form  action="register.php" method="post" onsubmit= "register()">
                <div class="form-group">
                        <p>ID</p>
                        <input type="text" name ="id"   class="form-control" required>
                    </div>
                    <div class="form-group">
                        <p>Full Name:</p>
                        <input type="text" name ="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <p>Email ID:</p>
                        <input type="text" name ="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <p>Password</p>
                        <input type="text" name ="password" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <p>Mobile number</p>
                        <input type="text" name ="mobile" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <p>Address</p>
                        <input type="text" name ="address" class="form-control" required>
                    </div><br>
                    <input type="submit" class="btn btn-primary"  value="Register"><br><br>

                </form>

                <script>
                function register()
                { 
                    
                }



                </script>
        </div>
    </div>















</body>
<?php
include("footer.php")

?>
</html>