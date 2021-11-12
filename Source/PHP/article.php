<?php
include ('config.php');
?>


<html>
    <head>
        <title>

            Add article
        </title>
        <link rel="stylesheet" href="../css/styles.css">
        


        <!--icons from font awesome.com-->
        <script src="https://kit.fontawesome.com/f658ac2203.js" crossorigin="anonymous"></script>
        <!--fonts from google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Piazzolla&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">


        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
            }
            body{
                
                background-position: center;
                
            }
            .addarticle{
                width: 800px;
                background-color: rgb(0, 0, 0,0.6);
                margin: auto;
                color: #ffffff;
                padding: 10px 0px 10px 0px;
                text-align: center;
                border-radius: 15px 15px 0px opx;
            }
            .main{
                background-color: rgb(0, 0, 0,0.5);
                width: 800px;
                margin: auto;
            }
            .form{
                padding: 10px;
            }
            #name{
                width: 100%;
                height: 100px;
            }
            .name{
                margin-left: 25px;
                margin-top: 30px;
                width: 125px;
                color: white;
                font-size: 18px;
                font-weight: 700;
                
            }
            .day{
                margin-left: 25px;
                margin-top: 30px;
                width: 250px;
                color: white;
                font-size: 18px;
                font-weight: 700;
            }
            
            .about{
                margin-left: 25px;
                margin-top: 30px;
                width: 455px;
                color: white;
                font-size: 18px;
                font-weight: 700;
            }
            .addimg{
                margin-left: 25px;
                margin-top: 30px;
                width: 455px;
                color: white;
                font-size: 18px;
                font-weight: 700;
            }
            .firstname{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: black;
                width: 300px;
            }
            

            
            .topic{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 480px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: black;
            }

            .email{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 482px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: black;
            }
            
            .article{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 550px;
                border-radius: 6px;
                padding: 0 10px;
                font-size: 16px;
                color: black;
                margin-right: 25px;            
            }
            .date{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 300px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: whitesmoke;
            }
           
    
            #file{
                position: relative;
                left: 240px;
                top: -37px;
                line-height: 40px;
            }
            .btnp{
                background-color: turquoise;
                display: block;
                margin: 20px 0px 0px 20px;
                text-align: center;
                border-radius: 12px;
                border: 2px solid #366473;
                padding: 14px 110px;
                outline: none;
                color: white;
                cursor: pointer;
                transition: 0.25px;
                
            }
            .btnp:hover{
                background-color:#5390F5 ;
            }
            </style>
    </head>
    <body>

        <!--header-->
        <header>
            <div>
                <img src="../img/Logo-white.png" class="logo">
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li><a href="../html/Home.html">Home</a></li>
                <li><a href="../html/Hotel.html">Hotels</a></li>
                <li><a href="../html/Article.html">Articles</Article></a></li>
                <li><a href="Signup.html">Sign Up</a></li>
                <li><a href="Login.html">Login</a></li>
                <li><a href="#">
                    <i class="fa fa-user"></i>  &nbsp;  
                    Maneeshi Weemansa
                </a>
                <ul>
                    <li><a href="My Profile.html">My profile</a></li>
                    <li><a href="Login.html">Logout</a></li>
                </ul>
                </li>
            </ul>        
            </header>
        <!--/header-->    



        <div class="container" style="height: 110%;">
            
            <div class="addarticle"><h1>Add Your Article</h1></div>
        <div class="main">
            <form class="form" action = "article connect.php" method="POST" enctype="multipart/form-data">
                <div id="name">
                    <br><h2 class="name">Name</h2>
                    <input class="firstname" type="text" name="a_name"><br>
                    
                </div>
                
                <h2 class="day">Date</h2>
                <input class="date" type="text" name="date">

                <h2 class="name">Topic</h2>
                <input class="topic" type="text" name="topic">

                <h2 class="name">Email</h2>
                <input class="email" type="text" name="email">

                <h2 class="about">Article</h2>
                <textarea type="text" input class = "article" name="content" rows = "5" cols="" placeholder= "Write your article" required   ></textarea>
                
                <h2 class="addimg">Add Images</h2>
                <input type="file" id ="file" name="file" accept="images/*" multiple>
                

                <button class="btnp" onclick="myFunction()" name="submit" type="submit">Submit</button>
                <script>
                    function myFunction() {
                      alert("Submitted successfully!");
                    }
                </script>

            </form>
        </div>
            
        </div>





        <!--footer-->
        <div class="footer">
            <div class="footer-up">
                <div class="footer-section about">
                    <img src="../img/Logo-coloured.png" class="logo">
                    
                    
                    <p class="aboutp">
                        tripceylon.com built-up in 2020 by Team-Pentagon to fulfil a major shortcome of SriLankan tourism system. 
                        tripceylon.com is a user-friendly and simple platform which tourists can reserve hotels.
                    </p>
                    <div class="contact">
                        <i class="fas fa-phone"></i> &nbsp;  +9478829607 / +9420629233
                        <br>
                        <i class="fas fa-envelope"></i> &nbsp;  info@pentagon.com
                    </div>
                    <br><br>
                    <div class="social">
                        <a href="https://web.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    </div>
                    
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    
                    <ul class="qlinks">
                        <a href="Gallery.html">
                            <li>Gallery</li>
                        </a>

                        <a href="About Us.html">
                            <li>About Us</li>
                        </a>

                        <a href="Contact Us.html">
                            <li>Contact Us</li>
                        </a>

                        <a href="privacypolicy.html">
                            <li>Policy</li>
                        </a>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h2>Contact us</h2>
                    <form action="index-html" method="post">
                    <input type="email" name="email" class="contact-input" placeholder="Your email address...">
                    <br><br>
                    <textarea name="message" class="text-input" placeholder="Your message..."></textarea>
                    <br><br><br>
                    <button type="Submit" class="btn">
                        <i class="fas fa-paper-plane"></i>
                        send
                    </button>
                </form>
                
                </div>
            </div>
            <div class="footer-bottom">
                Copyright &copy 2020 by Team Pentagon
            </div>
        </div>
        <!--/footer-->   
        
        
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>
    

    <!--Slick slider-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custom script-->
    <script src="../js/scripts.js"></script>
    </body>
</html>