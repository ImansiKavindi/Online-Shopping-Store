<?php
    include '../../backend/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>SafeDrive - Registration</title>
    <script src="../js/signup.js" defer></script>
  </script>
</head>

<body>

    <div class="main-body">
        <a href="#" class="websiteName">
            <h1>Safe Drive</h1>
        </a>
        <div class="container">
            <header>Create an Account</header>
            <form action="../../backend/signup.inc.php" method="POST">
                <div class="form first">
                    <div class="detailspersonal">
                        <span class="title">Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Full Name</label>
                                <input type="text" name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" placeholder="Enter birth date" required>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Enter your email" id="emailInput" onblur="validateEmail()" required>
                            </div>

                            <div class="input-field">
                                <label>Home Address</label>
                                <input type="text" name="address" placeholder="Enter your home address" required>
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select name="gender" required>
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" name="mnumber" placeholder="Enter your mobile number" id="phoneInput" onblur="validatePhoneNumber()" required>
                            </div>
                        </div>
                    </div>

                    <div class="detailsID"><br>
                        <span class="title_identity">Identity Details</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>National ID</label>
                                <input type="text" name="nic" placeholder="Enter your NIC number" id="IdInput" onblur="validateIDNumber()" required>
                            </div>

                            <div class="input-field">
                                <label>Issued Date</label>
                                <input type="date" name="isdate" placeholder="Enter issued date of your NIC" required>
                            </div>

                            <div class="input-field">
                                <label>Nationality</label>
                                <select name="nationality" required>
                                    <option value="" disabled selected>Select your nationality</option>
                                    <option value="afghan">Afghanistan</option>
                                    <option value="bangladeshi">Bangladesh</option>
                                    <option value="bhutanese">Bhutan</option>
                                    <option value="indian">India</option>
                                    <option value="maldivian">Maldives</option>
                                    <option value="nepali">Nepal</option>
                                    <option value="pakistani">Pakistan</option>
                                    <option value="sri_lankan">Sri Lanka</option>
                                </select>
                            </div>



                            <span class="title">Account Details</span>
                            <div class="input-field">
                            </div>

                            <div class="input-field">
                            </div>

                            <div class="input-field">
                                <label>User Name</label>
                                <input type="text" name="uname" placeholder="Enter Username" required>
                            </div>

                            <div class="input-field">
                                <label>Password</label>
                                <input type="password" id="password" name="pwd" placeholder="Enter your password" required>
                                
                            </div>

                            <div class="input-field">
                                <label>Confirm Password</label>
                                <input type="password" id="confirmPassword" name="cpwd" placeholder="Confirm your password" required>
                                <span id="passwordIcon" class="password-match-icon"></span>
                            </div>

                            <div class="input-field">
                            </div>

                            
                            <button class="nextBtn" type="submit" name="submit">
                                <span class="btnText">SignUp</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                            <div class="input-field">
                            </div>
                            <!-- <div class="input-field">
                               
                            </div> -->

                            <div class="nav_reg">
                            Already have an account?<a href="./login.php"> Log in </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom-img">
        <img src="../images/login.png" alt="">
    </div>
</body>

</html>