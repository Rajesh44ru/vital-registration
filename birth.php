<?php
include("updesign.php");


?>

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
                <h4>Fill The Details To Register Birth Certificate</h4>
            </center>
            <form action="process_birth.php" method="post">
                <div class="form-group">
                    <p>Father's Name</p>
                    <input type="text" name="father_name" class="form-control" required>

                </div>
                <div class="form-group">
                    <p>Father's Citizenship Number</p>
                    <input type="varchar" name="f_citizenship_number" class="form-control " required>
                </div>
                <div class="form-group">
                    <p>Mother's Name</p>
                    <input type="text" name="mother_name" class="form-control" required>
                </div>
                <div>
                    <p> Mother's Citizenship Number</p>
                    <input type="varchar" name="m_citizenship_number" class="form-control" required>

                </div><br>
                <input type="file" name="f_name">
                <div><br>
                    <p>Child Name
                    <p>
                        <input type="text" name="child_name" class="form-control" required>

                </div>
                <div>
                    <p>Date of Birth</p>
                    <input type="date" name="date_name" class="form-control" required>

                </div>
                <div>
                    <p>Gender</p>
                    <input type="radio" name="gend" value="male">Male
                    <input type="radio" name ="gend" value="female">Female
                </div>
                <div>  

                    <p> Permanent Address</p>
                    <input type="text" name="address_name" class="form-control " required>

                </div>
                <div>

                    <p> Birth Place</p>
                    <input type="text" name="birthPlace_name" class="form-control " required>

                </div>

                <div>
                    <p>Grand Father's Name
                    <p>
                        <input type="text " name="g_name" class="form-control" required>
                </div>


                <br>
                <input type="submit" name="submit" class="btn btn-primary" value="submit"></button>

            </form>


        </div>
    </div>
    <br> <br>
    <!-- Footer -->
</body>
<?php

include("footer.php");
?>