<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Water Footprint Calculator</title>
    <style>
        body {
            margin: 0;
            top: 0;
            padding: 0;


        }
       
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropbtn {
            background-color: transparent;
            color: #fff;
            padding: 12px;
            font-size: 20px;
            border: none;
            cursor: pointer;
            font-weight: 500;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: transparent;
            min-width: 160px;
            box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
          color:white;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown:hover .dropbtn {
            background-color: white;
            color: #000;
        }
        .button{
            border-radius: 160px;
        }
.image-container {
    display: grid;
    align-content: center;
    gap: 20px; 
    margin-top: 50px;
}

.row {
    display: flex;
    justify-content: center;
    gap: 20px; /* Space between columns */
}

.column {
    background-color: #f9f9f9; /* Light background for the box */
    border: 1px solid #ddd; /* Border around each box */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    overflow: hidden; /* Ensure child elements don't overflow */
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for hover effect */
}

.column:hover {
    transform: translateY(-10px); /* Move slightly upward on hover */
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Enhance shadow on hover */
}

.column img {
    width: 100%; /* Ensure the image fits the container */
    height: auto; /* Maintain aspect ratio */
    border-bottom: 1px solid #ddd; /* Separate image from text */
}

.column p {
    margin: 10px;
    font-size: 16px;
    color: #333;
}
        .theme {
            font-size: 16px;
            font-weight: 900;
            height: 180px;
            margin: 2px 20px -10px 20px;
        }
        
        .main-text{
            font-size: 18px;
            margin: 50px 80px 20px 80px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 400;
        }
       .main img{
        padding-left: 50px; 
       }
       .main ul{
        padding-right: 50px;
       }
       
        @media (max-width: 768px) {
            .logo img {
                max-width: 80px;
                max-height: 80px;
            }
            .main {
                max-width: 100%;
            }
            .active {
                display: inline;
            }
            .dropdown {
                display: contents;
            }
            .title {
                top: 55%;
                max-width: 100%;
            }
            .button {
                top: 80%;
                display: flex;
                max-width: 100%;
            }
            .theme {
                width: 100%;
                height: 50%;
                font-size: medium;
            }
            .image {
                padding-left: 10px;
            }
            .content-1 {
                margin-top:20px;
                padding-right: 10px;
                width: 100%;
                height: 100px;
                font-size: small;
            }
            .image-container {
                flex-direction: column;
            }
            .column {
                width: 100%;
                flex-direction: column;
            }
            .row {
                flex-direction: column;
            }
            .footer {
                width: 100%;
                height: 900px;
                display: inline-flex;
            }
            .footer .footer-content .contact-form .contact-input {
                width: calc(80% - 10px);
                padding: 4px;
            }
            .footer .footer-bottom {
                background: transparent;
                width: 100%;
                color: black;
                height: 50px;
                text-align: center;
                position: absolute;
                bottom: -542%;
            }
            .footer .footer-content .links ul {
                padding: 0;
                margin-right: 170px;
                margin-left: 40px;
                padding-left: 30px;
            }
        }
        .circle-button {
            text-align: center;
            margin: 20px;
        }
        .circle-button a {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #14677C;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 20px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .circle-button a:hover {
            background-color: #0F4A59;
            transform: scale(1.05);
        }
        @media (max-width: 768px) {
            .circle-button a {
                font-size: 16px;
                padding: 10px 20px;
            }
        }
        @media (max-width: 768px) {
        header {
            padding: 10px 5px;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            padding: 10px;
        }

        .theme h2 {
            font-size: 1em;
        }

        .image-container {
            grid-template-columns: 1fr; /* Single column for small screens */
        }

        .button button {
            font-size: 14px;
            padding: 8px 15px;
        }
    }
    </style>
</head>
<body>
    <header>
        <div class="main">
                <img src="https://tse4.mm.bing.net/th?id=OIP.0RODd56oOiqIR_o1Njo0awHaHa&pid=Api&P=0&h=180">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li ><a href="action.html">Time for Action!</a></li>
                <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn">Water footprint</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="wtr1.html">Water footprint?</a>
                        <a href="wtr2.html">Water footprint assessment?</a>
                        <a href="wtr3.html">Climate & Environment</a>
                    </div>
                </div>
            </ul>
        </div>
        <div class="title">
            <h2>WHAT’S YOUR WATER FOOTPRINT?</h2>
            <p style="color: rgb(113, 223, 231);">It includes your tap water use and the “virtual water” used to produce your food, electricity, gas and home goods.</p>
        </div>
        <div class="button">
            <a href="form.php" class="btn1">Login</a>
         <a href="page.html" class="btn1">Find your footprint</a>
        </div>
    </header>
    <section>
        <div class="theme">
            <h2 style="margin-top: 70px;">The Water Footprint Network is a platform for collaboration between companies, organizations and individuals to solve the world’s water crises by advancing fair and smart water use. We are a dynamic, global network that drives innovation and inspires the changes we must all make to share fresh water fairly amongst all people to sustain thriving communities and nature’s diversity.</h2>
        </div>
        <div style="width: 700px; height: 300px; float:right; margin: 60px; font-weight:600px; font-size: 26px;">
            <p >Conservation of water is a necessity to save life. All living organisms on this planet need water to survive. If we do not give importance to saving or conservation of water, then our future generations will face water scarcity.</p>
        </div>
        <div class="image">
            <img src="3.jpg" alt="save water" width="350px" height="350px">
        </div>
    </section>
    <section>
        <div class="image-container">
            <div class="row">
                <div class="column">
                    <img src="4.jpg" alt="" width="300px" height="300px">
                    <p>“Water is life, treat it right...”</p>
                </div>
                <div class="column">
                    <img src="10.jpg" alt="" width="300px" height="300px">
                    <p>Life starts with water. “Water is not just the source of life; it is life.<br> Without water,everything withers”</p>

                </div>
                <div class="column">
                    <img src="6.jpg" alt="" width="300px" height="300px">
                    <p>“Pure water runs life! Water, precious in design.”</p>
                </div>
                <div class="column">
                    <img src="5.jpg" alt="" width="300px" height="300px">
                    <p>“Every drop of water is precious....”</p>
                </div>
            </div>    
            <div class="row">
                <div class="column">
                    <img src="https://th.bing.com/th/id/OIP.zR9ZF8ga64voW7WBrL6uqwHaFj?w=249&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="300px" height="300px">
                </div>
                <div class="column">
                    <img src="drop.jpg" alt="" width="300px" height="300px">
                </div>
                <div class="column">
                    <img src="13.jpg" alt="" width="300px" height="300px">
                </div>
            </div>
        </div>
        <div class="main-text">
            <h1 style="text-align: center;color: navy;text-shadow: 0px 0px 10px pink;">How the Water Footprint Calculator Works</h1>
          <p>Through a series of simple questions about daily routines, this innovative and interactive tool accounts for notonly the “direct” water you use from the tap, but also the “virtual” water it takes to produce the food you eat,the energy you use and the products you buy. The calculator’s engaging design functions seamlessly on mobile,tablets and desktop computers.</p>
        <h3>Why Water Footprints Are Important:</h3>
        <p>Many people in the India take for granted the large quantities of both direct and virtual water they usedaily, which can greatly affect water resources locally and in other places near or far where goods and servicesare produced. Individuals who better understand their water use know that even small changes can have a bigimpact on personal water footprints. This is especially true for the food people eat, which often makes up thebiggest part of their water footprint. A deeper understanding of water footprints can help make people betterstewards of our shared water resources.</p>
        </div>
        <h2 style="text-align: center">Let's calculate your footprint?</h2>
        <div class="circle-button">
            <a href="page.html">Find your footprint &#8250;</a>
        </div>
    </section>
    <section>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logo-text"><span>Water</span>Footprint</h1>
                    <p>We are a dynamic, global network that drives innovation and inspires the changes we must all make to share fresh water fairly amongst all people to sustain thriving communities and nature’s diversity.</p>
                    <div class="contact">
                        <span><i class="fas fa-map-marker"></i>&nbsp;Corporate Office: 2nd floor Central Facilities for Research & Development, Osmania University, Hyderabad, Telangana, INDIA</span><br>
                        <span><i class="fas fa-map-marker"></i>&nbsp;197/A, Kushaiguda, ECIL, Hyderabad - 500062.</span><br>
                        <span><i class="fas fa-phone"></i>&nbsp;+91-1234567890</span><br>
                        <span><i class="fas fa-envelope"></i>&nbsp;support@apexsdg.com</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2 style="text-align: center;">Quick Links</h2>
                    <br>
                    <ul>
                        <a href="index.php">
                            <li style="text-align: center;">Home</li>
                        </a>
                        <a href="contact.php">
                            <li style="text-align: center;">Contact us</li>
                        </a>
                    </ul>
                </div>
                <div class="footer-section contact-form">
                    <h2>Contact us</h2>
                    <br>
                    <form action="" method="post">
                      <input type="name" name="name"class="text-input contact-input"placeholder="your name.." required>
                        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address.." required>
                        <br>
                        <textarea name="message" class="text-input contact-input" placeholder="Your message..." required></textarea>
                        <button type="submit" name="footer_contact" class="btn btn-big contact-btn">
                            <i class="fas fa-envelope"></i>
                            Send
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                © Copy 2024. Water Footprint. All Rights Reserved
            </div>
        </div>
    </section>
    <script>
        function toggleDropdown() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
