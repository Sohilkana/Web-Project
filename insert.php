<?php
include('ownerconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Input Data </title>
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
    width: 500px;
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    margin-bottom: 20px;
    color: brown;
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
    height: 25px;
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
#error {
        background-color: rgb(180, 116, 116, 0.330);
        color: rgb(190, 37, 39, 0.800);
        border-radius: 5px;
        margin-top: 5px;
        text-align: center;
    }
    #successfully {
        background-color: #dff0d8;
        color: #3c763d;
        border-radius: 5px;
        margin-top: 5px;
        text-align: center;
    }
    .redio{
        height: 50px;
    }
</style>
<body>
    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <div id="error"></div>
            <div id="successfully"></div>
            <h2>Perfume Input Data</h2>    
            <label for="product-image">Perfume Image</label>
            <input type="file" id="product-image" name="image" accept="image/*">
            
            <label for="product-name">Perfume Name</label>
            <input type="text" id="product-name" name="pname">
            
            <label for="product-price" style=color:green>Perfume Price</label>
            <input type="number" id="product-price" name="price" step="0.01">
            
            <label for="product-ml">Ml</label>
            <input type="number" id="product-ml" name="ml">
            
            <label for="product-gender">Gender</label>
            <select class="redio" id="product-gender" name="gender1">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unisex">Childe</option>
            </select>
            
            <label for="product-moreinfo">More Info</label>
            <textarea id="product-moreinfo" name="moreinfo" rows="4"></textarea>
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "image/" . $filename;
    move_uploaded_file($tempname, $folder);
        $name = $_POST['pname'];
        $price = $_POST['price'];
        $ml = $_POST['ml'];
        $gdr = $_POST['gender1'];
        $moreinfo = $_POST['moreinfo'];
        if($name!=null && $price!=null && $ml!=null && $gdr!=null && $moreinfo!=null && $folder!=null){
           try{
            $in="INSERT INTO `shopdata` (`IMG`, `name`,`price`, `ml`,`gender`, `moreinfo`) VALUES ('$folder','$name','$price','$ml','$gdr','$moreinfo');";
            $result=mysqli_query($conn,$in);
            ?>
                <script>
                    document.getElementById("successfully").innerHTML = "Data Submited Successfully";
                    setTimeout(function () {
                        close();
                    }, 2000);
                </script>
                <?php
           }
           catch(exception $insertE){}
        }
        else{
            ?>
            <script>
                document.getElementById("error").innerHTML = "Data Not Submit Please Try Again";
                // location.reload();
                setTimeout(function () {
                    document.getElementById("error").innerHTML =null;
                    }, 2000);
            </script>
            <?php
        }
        }
    ?>
