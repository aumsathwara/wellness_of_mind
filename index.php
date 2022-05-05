<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login.php");
}


?>

<!-- things to be done: 
        fa icons linking
        diagnostic test page
        therapist page
        login page
        footer pages-->



        <!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <title>WoM</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='script.js'></script>
</head>


<body>

    <!--___________ HEADER ______________-->
    <header class="header">

        <a href="#" class="logo"><i class="fa-solid fa-sun"></i>WoM</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="article.html">Articles</a>
            <a href="map.html">map</a>
            <a href="#about">About</a>
            <a href="#review">review</a>
            <a href="logout.php"><?php echo "Welcome ". $_SESSION['username']?> </a>
        </nav>
        
    </header>
  

    <!--___________ HEADER ENDS ______________-->


    <!--___________ HOME ______________-->
    <section class="home" id="home">


        <div class="image">
            <img src="https://th.bing.com/th/id/R.569aca30544a48015d3198e3327b1f1c?rik=j9A8uzIIci5XWA&riu=http%3a%2f%2fimages.clipartpanda.com%2fsunrise-clipart-sunset.svg&ehk=fXz60S2O5%2bWJvV%2bUmFA9gA8RoixP1uV%2fWZ3rkxNSzVc%3d&risl=&pid=ImgRaw&r=0" alt="bloom">
        </div>

        <div class="content">
            <h3>Wellness of Mind</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!</p>
            <a href="login.html" class="btn">login</a>
            <a href="#explore" class="btn"> Explore </a>
        </div>

    </section>
    <!--___________ HOME ENDS ______________-->


    <!--___________ EXPLORE ______________-->
    <section class="explore" id="explore">

        <h1 class="heading">I want to...</h1>

        <div class="box-container">


            <a href="diagnosṭic.html">
                <div class="box">
                    <h3>Take diagnostic test</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                </div>
            </a>

            <a href="therapist.html">
                <div class="box">
                    <h3>book an online session</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                </div>
            </a>

            <a href="article.html">
                <div class="box">
                    <h3>read some related articles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                </div>
            </a>

            <a href="map.html">
                <div class="box">
                    <h3>Find nearby therapist</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                </div>
            </a>

        </div>

    </section>
    <!--___________ EXPLORE ENDS ______________-->



    <!--___________ ARTICLES ______________-->
    <section class="article" id="article">

        <h1 class="heading">articles</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="https://cdn.shopify.com/s/files/1/0162/2116/files/person-1317601_1280.jpg?v=1591693329" alt="article 1">
                </div>
                <div class="content">
                    <h3>title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.healthyplace.com/sites/default/files/uploads/2017/06/Calm-5-healthyplace.jpg" alt="article2">
                </div>
                <div class="content">
                    <h3>title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://live.staticflickr.com/6117/6252894597_92c29aca55_c.jpg" alt="article3">
                </div>
                <div class="content">
                    <h3>title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more </a>
                </div>
            </div>
            <div><a href="article.html" class="btn"> More </a></div>

        </div>

    </section>
    <!--___________ ARTICLE ENDS ______________-->


    <!--___________ ABOUT ______________-->
    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="https://avisantcms.co.uk/wp-content/uploads/2020/07/shutterstock_758299132-1536x1229.jpg" alt="us">
            </div>

            <div class="content">
                <h3>We make your safe space</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>
    <!--___________ ABOUT ENDS ______________-->



    <!--___________ REVIEW ______________-->
    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="client3">
                <h3>Client1</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

            <div class="box">
                <img src="https://images.pexels.com/photos/762020/pexels-photo-762020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client1">
                <h3>Client2</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

            <div class="box">
                <img src="https://images.pexels.com/photos/709188/pexels-photo-709188.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="client3">
                <h3>client3</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

        </div>

    </section>
    <!--___________ REVIEW ENDS ______________-->


<footer class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our services</h3>
            <a href="#explore"> <i class="fas fa-chevron-right"></i> Free diagnosis </a>
            <a href="#explore"> <i class="fas fa-chevron-right"></i> Online therapy sessions </a>
            <a href="#explore"> <i class="fas fa-chevron-right"></i> verified articles </a>
            <a href="#explore"> <i class="fas fa-chevron-right"></i> maps </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +098-765-4321 </a>
            <a href="#"> <i class="fas fa-envelope"></i> abc@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> xyz@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Vadodara, india - 300300 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

</footer>


</body>

</html>