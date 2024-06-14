<?php
include ('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <style>
        .button {
    width: 400px;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

.button:hover {
    background-color: #45a049;
}

#successfully {
    background-color: #dff0d8;
    color: #3c763d;
    border-radius: 5px;
    margin-top: 25px;
    margin-bottom: -20px;
    text-align: center;
    width: 400px;
}

#some_error {
    width: 400px;
    margin-top: 10px;
    background-color: rgb(180, 116, 116, 0.330);
    color: rgb(88, 37, 39, 0.800);
    border-radius: 6px;
    font-size: 15px;
    text-align: center;
}

p {
    text-align: center;
}


span {
    margin-bottom: 10px;
}
.error {
    color: rgb(88, 36, 36, 0.700);
    border-radius: 3px;
    font-size: 11px;
}

body {
font-family: Arial, sans-serif;
background-color: #f2f2f2;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;

}

.container {
background-color: white;
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
max-width: 400px;
width: 100%;
}
.container form .error-msg{
margin: 10px 0;
display: block;
background: crimson;
color: #fff;
border-radius: 5px;
font-size: 20px;
}

.registration-form {
display: flex;
flex-direction: column;
width: 10cm;
}

.registration-form h2 {
text-align: center;
margin-bottom: 20px;
}

.form-group {
margin-bottom: 15px;
}

.form-group label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}

.form-group input {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
}

button {
background-color: #30b434c2;
color: white;
padding: 10px;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 16px;
margin-left: 25px;
}

button:hover {
background-color: #36af3c8f;
}
.border{
border-color: rgb(255, 240, 242);
}
.login{
margin-left: 90px;
}

    </style>
</head>

<body>
<div class="border">
    <form class="registration-form" action="" method="POST">
    <div id="successfully"></div>
        <h2>Signup</h2>
        <div class="form-group">
            <label for="first name">First name</label>
            <!-- <input type="text" id="first name " name="firstname"> -->
            <input type="text" id="username first name " name="Fname" placeholder="Enter First Name">
            <span class="error" id="fname-error"></span><br>
        </div>
        <div class="form-group">
            <label for="Last name">Last name</label>
            <!-- <input type="text" id="Last name" name="Lastname"> -->
            <input type="text" id="lastName Last name" name="Lname" placeholder="Enter Last Name">
            <span class="error" id="lname-error"></span><br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="Email" placeholder="Enter Email">
            <span class="error" id="email-error"></span><br>
            <!-- <input type="email" id="email" name="email"> -->
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="Pass" placeholder="Enter Enter Password">
            <span class="error" id="pass-error"></span><br>
            <!-- <input type="password" id="password" name="password"> -->
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirmPassword confirm-password" name="Apass" placeholder="Confirm Password">
            <span class="error" id="cpass-error"></span><br>
            <!-- <input type="password" id="confirm-password" name="confirm" required> -->
        </div>
        <input class="button" type="submit" name="save" value="Sign Up">
        <div id="some_error"></div>
        <!-- <button type="submit" name="submit">Signup</button> -->
    </form>
</div>



    <?php
    if (isset($_POST['save'])) {
        $FNAME = $_POST['Fname'];
        $LNAME = $_POST['Lname'];
        $Email = $_POST['Email'];
        $password = $_POST['Pass'];
        $cpassword = $_POST['Apass'];
        if ($FNAME == NULL && $LNAME == NULL && $Email == NULL && $password == NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("some_error").innerHTML = "Pleace fill all field";</script>
            <?php
        } elseif ($FNAME != NULL && $LNAME == NULL && $Email == NULL && $password == NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("lname-error").innerHTML = "Pleace Enter Last Name";</script>
            <script>document.getElementById("email-error").innerHTML = "Pleace Enter Email";</script>
            <script>document.getElementById("pass-error").innerHTML = "Pleace Enter Password";</script>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm";</script>
            <?php
        } elseif ($FNAME != NULL && $LNAME != NULL && $Email == NULL && $password == NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("email-error").innerHTML = "Pleace Enter Email";</script>
            <script>document.getElementById("pass-error").innerHTML = "Pleace Enter Password";</script>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm";</script>
            <?php
        } elseif ($FNAME != NULL && $LNAME != NULL && $Email != NULL && $password == NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("pass-error").innerHTML = "Pleace Enter Password";</script>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm";</script>
            <?php
        } elseif ($FNAME != NULL && $LNAME != NULL && $Email != NULL && $password != NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm Password";</script>
            <?php
        } elseif ($FNAME == NULL && $LNAME == NULL && $Email == NULL && $password == NULL && $cpassword != NULL) {
            ?>
            <script>document.getElementById("fname-error").innerHTML = "Pleace Enter First Name";</script>
            <script>document.getElementById("lname-error").innerHTML = "Pleace Enter Last Name";</script>
            <script>document.getElementById("email-error").innerHTML = "Pleace Enter Email";</script>
            <script>document.getElementById("pass-error").innerHTML = "Pleace Enter Password";</script>
            <?php
        } elseif ($FNAME == NULL && $LNAME == NULL && $Email == NULL && $password != NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("fname-error").innerHTML = "Pleace Enter First Name";</script>
            <script>document.getElementById("lname-error").innerHTML = "Pleace Enter Last Name";</script>
            <script>document.getElementById("email-error").innerHTML = "Pleace Enter Email";</script>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm";</script>
            <?php
        } elseif ($FNAME == NULL && $LNAME == NULL && $Email != NULL && $password == NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("fname-error").innerHTML = "Pleace Enter First Name";</script>
            <script>document.getElementById("lname-error").innerHTML = "Pleace Enter Last Name";</script>
            <script>document.getElementById("pass-error").innerHTML = "Pleace Enter Password";</script>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm";</script>
            <?php
        } elseif ($FNAME == NULL && $LNAME != NULL && $Email == NULL && $password == NULL && $cpassword == NULL) {
            ?>
            <script>document.getElementById("fname-error").innerHTML = "Pleace Enter First Name";</script>
            <script>document.getElementById("email-error").innerHTML = "Pleace Enter Email";</script>
            <script>document.getElementById("pass-error").innerHTML = "Pleace Enter Password";</script>
            <script>document.getElementById("cpass-error").innerHTML = "Pleace Enter Confirm";</script>
            <?php
        }
        if ($password !== $cpassword && $password != NULL && $cpassword != NULL) {
            ?>
            <script>document.getElementById("cpass-error").innerHTML = "Password not match";</script>
            <?php
        }
    }
    ?>
    <?php
    if (isset($_POST['save']) && $password === $cpassword && $password != NULL) {
        $FNAME = $_POST['Fname'];
        $LNAME = $_POST['Lname'];
        $Email = $_POST['Email'];
        $pass1 = $_POST['Pass'];
        $PASS=password_hash($pass1,PASSWORD_BCRYPT);
        // ---------------------this box compaire if NewUser to=== OldUser---------------------------------
        try {
            $userExist = 0;
            $q = "SELECT `Firstname` FROM `customer`";
            $data = mysqli_query($con, $q);
            while ($result = mysqli_fetch_assoc($data)) {
                if ($result['Firstname'] === $FNAME) {
                    $userExist = 1;
                }
            }
            if ($userExist == 1) {
                echo '<script>document.getElementById("some_error").innerHTML = "User Already Exists Enter Unick Name ";</script>';
            }
        } catch (Exception) {
            echo "Database Not Found";
        }
        // <!------------------data Insert block ------------------->
        try {
            $q = "INSERT INTO `customer` (`Firstname`, `Lastname`,`Email`, `Password`) VALUES ('$FNAME','$LNAME','$Email','$PASS')";
            $query = mysqli_query($con, $q);
            if ($query) {
                ?>
                <script>document.getElementById('successfully').innerHTML = "You are SignUp Successfully..";</script>
                <?php
            }
        } catch (Exception $E) {

        }
    }
    ?>
    <script>
        function login() {
            window.open("LogIn.php");
            close();
        }
    </script>
</body>

</html>