<?php
include("connect.php");

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];
    
    if ($password == $conpassword) {
        $query = "INSERT INTO form (fname, lname, email, phone, password, gender) VALUES ('$fname', '$lname', '$email', '$phone', '$password', '$gender')";
        $data = mysqli_query($conn, $query);
    
        if ($data) {
            echo "";
        } else {
            echo "error";
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(#380036, #0CBABA);
        }
        .container {
            max-width: 650px;
            padding: 28px;
            margin: 0 28px;
            border-radius: 10px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.2);
        }
        h2 {
            font-size: 26px;
            font-weight: bold;
            text-align: left;
            color: #fff;
            padding-bottom: 8px;
            border-bottom: 1px solid silver;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 0;
        }
        .input-box {
            display: flex;
            flex-wrap: wrap;
            width: 50%;
            padding-bottom: 15px;  
        }
        .input-box:nth-child(2n) {
            justify-content: end;
        }
        .input-box label, .gender-title {
            width: 95%;
            color: #fff;
            font-weight: bold;
            margin: 5px 0;
        }
        .gender-title {
            font-size: 16px;
        }
        .input-box input {
            height: 40px;
            width: 95%;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        .input-box input:is(:focus, :valid) {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }
        .gender-category label {
            padding: 0 20px 0 5px;
            font-size: 15px;
        }
        .gender-category {
            color: gainsboro;
        }
        .gender-category label, .gender-category input {
            cursor: pointer;
        }
        .alert p {
            font-size: 14px;
            font-style: italic;
            color: #fff;
            margin: 5px 0;
            padding: 10px;
            line-height: 1.5;
        }
        .alert a {
            font-weight: bold;
            text-decoration: none;
            color: skyblue;
        }
        .alert a:hover {
            font-weight: bold;
            text-decoration: underline;
            color: #380036;
        }
        .button-container {
            margin: 15px 0;
        }
        .button-container button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            display: block;
            font-size: 20px;
            color: #fff;
            border: none;
            border-radius: 5px;
            background-image: linear-gradient(to right, #aa076b, #61045f);
            cursor: pointer;
            transition: 0.3s;
        }
        .button-container button:hover {
            background-image: linear-gradient(to right, #61045f, #aa076b);
        }
        @media (max-width: 600px) {
            .container {
                min-width: 280px;
            }
            .content {
                max-height: 380px;
                overflow: auto;
            }
            .input-box {
                margin-bottom: 12px;
                width: 100%;
            }
            .input-box:nth-child(2n) {
                justify-content: space-between;
            }
            .gender-category {
                display: flex;
                justify-content: space-between;
                width: 60%;
            }
            .content::-webkit-scrollbar {
                width: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Registration form</h2>
            <div class="content">
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" class="input" name="email" required>
                </div>
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phone" required>
                </div>
                <div class="input-box">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required>
                </div>
                <div class="input-box">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="conpassword" required>
                </div>
                <div class="input-box">
                    <label>Gender</label>
                    <div class="custom-select">
                        <select name="gender" required>
                            <option value="Not Selected">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="alert">
                    <p>By clicking signup, you agree to our Terms, Privacy policy, and Cookies policy.</p>
                </div>
                <div class="button-container">
                    <button type="submit" name="register" class="btn">Register</button> 
                </div>
            </div>
        </form>
    </div>
</body>
</html>
