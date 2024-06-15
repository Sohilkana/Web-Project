<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

label {
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="number"],
input[type="file"],
textarea,
select {
    margin-bottom: 15px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

button {
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #28a745;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

</style>
<body>
    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <h2>Perfume input data</h2>    
            <label for="product-image">Perfume Image</label>
            <input type="file" id="product-image" name="product-image" accept="image/*">
            
            <label for="product-name">Perfume Name</label>
            <input type="text" id="product-name" name="product-name">
            
            <label for="product-price">Perfume Price</label>
            <input type="number" id="product-price" name="product-price" step="0.01">
            
            <label for="product-ml">(ml)</label>
            <input type="number" id="product-ml" name="product-ml">
            
            <label for="product-gender">Gender</label>
            <select id="product-gender" name="product-gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unisex">Unisex</option>
            </select>
            
            <label for="product-moreinfo">More Info</label>
            <textarea id="product-moreinfo" name="product-moreinfo" rows="4"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
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

