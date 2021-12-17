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
                <h4>Fill The Details To Register Death Certificate</h4>
            </center>
            <form action="death_process.php" method="post">
                
                <div class="form-group">
                    <p>Name of Deceased</p>
                    <input type="varchar" name="d_name" class="form-control " required>
                </div>
                <div class="form-group">
                    <p>ID of Deceased</p>
                    <input type="text" name="Id_name" class="form-control" required>
                </div>
                <div>
                    <p>Date of Death</p>
                    <input type="date" name="date_of_birth" class="form-control" required>

                </div>
                <div>
                    <p>Place Of Death<p>
                        <input type="text" name="p_Of_death" class="form-control" required>

                </div>
                <div>
                    <p>Permanent Address</p>
                    <input type="text" name="p_address" class="form-control" required>

                </div>
            
                

                <div>
                    <p>Father's Name
                    <p>
                        <input type="text" name="f_name" class="form-control" required>
                </div>
                <div>
                    <p>Wife/Husband's Name
                    <p>
                        <input type="text" name="hw_name" class="form-control" required>
                </div>
                <div>
                    <p>Informantant name
                    <p>
                        <input type="text" name="I_name" class="form-control" required>
                </div>
                <div>
                    <p>Informantant Id
                    <p>
                        <input type="text" name="Id_I_name" class="form-control" required>
                      
                </div>
                <input type="file" name ="file_name"  >
                

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