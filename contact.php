<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connect.php");

$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_us'])) {
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO form1 (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = "Thank you for contacting us!";
    } else {
        $errorMessage = "There was an error sending your message. Please try again later.";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Contact Us</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background-image: linear-gradient(to left, #000, #278690);
}
.contact{
    min-height: 100vh;
    background-color: #e8f0e8;
    padding: 50px;
    text-align: center;
}
.container{
    max-width: 800px;
    margin: 0 auto;
}
.container h1{
    margin-top: 20px;
    font-size: 40px;
    margin-bottom: 40px;
    color: #333;
}
.contact-wrapper{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 40px;
}
.contact-form{
    text-align: left;
}
.contact-form h3{
    margin-top: 30px;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}
.form-group{
    margin-bottom: 20px;
}
input, textarea{
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    background-color: #f8f9fa;
    color: #333;
}
input:focus, textarea:focus{
    outline: none;
    text-shadow: 0 0 8px #bbb;
}
button{
    display: inline-block;
    padding: 12px 24px;
    background-color: #4ca;
    color: #fff;
    border: 1px solid black;
    cursor: pointer;
    transition: .3s ease;
}
button:hover{
    background-color: black;
}
.contact-info{
    text-align: center;
}
.contact-info h3{
    margin-top: 30px;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}
.contact-info p{
    margin-bottom: 10px;
    margin-right: 10px;
}
.contact-info i{
    color: #4ca;
    margin-right: 10px;
}
@media screen and (max-width: 768px){
    .container{
        padding: 20px;
    }
    .contact-wrapper{
        grid-template-columns: 1fr;
    }
}
</style>
<body>
    <section class="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>Send us a message</h3>
                    <form method="POST" action="">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="Email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your message" required></textarea>
                        </div>
                        <button type="submit" name="contact_us">Send Message</button>
                    </form>
                    <?php
                    if (!empty($successMessage)) {
                        echo "<p style='color: green; margin-top: 20px;'>$successMessage</p>";
                    }
                    if (!empty($errorMessage)) {
                        echo "<p style='color: red; margin-top: 20px;'>$errorMessage</p>";
                    }
                    ?>
                </div>
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-phone"></i>+91-9987572334</p>
                    <p><i class="fas fa-envelope"></i> support@apexsdg.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Corporate Office: 2nd floor Central Facilities for Research & Development, Osmania University, Hyderabad, Telangana, INDIA.</p>
                    <p><i class="fas fa-map-marker-alt"></i>197/A, Kushaiguda, ECIL, Hyderabad - 500062.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
