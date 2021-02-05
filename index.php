<!doctype html>
<html lang="en">

<head>
    <title>Template 01</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/alert.css">

</head>

<body>
    <!-- Navigation Bar Starts Here -->
    <nav>
        <ul>
            <div class="left-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Browse</a></li>
            </div>
            <div class="center-nav">
                <li><a href="#">Coffee Bistro</a></li>
            </div>
            <div class="right-nav">
                <li><a href="#">Review us</a></li>
            </div>
        </ul>
    </nav>
    <!-- Navigation Bar Ends Here -->
    <main>
        <div id="dialogoverlay">
            <div id="dialogbox">
                <div>
                    <div id="dialogboxhead"></div>
                    <div id="dialogboxbody"></div>
                    <div id="dialogboxfoot"></div>
                </div>
            </div>
        </div>
        <!-- Carousel and banners -->
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Images/slide1.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>The place where magic happends</h5>
                                <p>Visit us</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/slide2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ever wanted to feel like a superhero?</h5>
                                <p>Drink some cappuccino !</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/slide3.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Enjoy</h5>
                                <p><i class="fas fa-mug-hot"></i></p>
                            </div>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-2 content_1">
                <h2 id="order_feedback">Top beans</h2>
                <ol>
                    <li>Typica, Bourbon, Arabica</li>
                    <li>Gesha Arabica</li>
                    <li>Canephora, Mauritania, Liberica</li>
                    <li>Charrieriana </li>
                    <li>Robusta — Original variety.</li>
                </ol>
                <img class="img-logo" src="Images/logo.jpg" style="width:200px;">
                <br>
                <div class="borders"></div>
                <div class="borders"></div>
                <div class="borders"></div>
                <div class="borders"></div>
            </div>
            
            
            <div class="col-md-2 content_2"><img src="" alt="">
                <form method="POST">
                    <h2>Order</h2>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                    <label for="message" style="margin-top: 50px;">Your Order</label>
                    <input type="text" name="message" style="height: 200px;"> <br>
                    <button  onclick="Alert.render('We will get started right away :)')" class="btn btn-light" name="submitOrder">Place Order</button>
                </form>

            </div>
        </div>
+

     <script>   setTimeout(() => {    
    <?php 
    if(isset($_POST['submitOrder'])) {
        include 'includes/config.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $fullname = "$fname $lname";
        $email = $_POST['email'];
        $message = $_POST['message'];

       $newClient = "INSERT INTO clients(firstname, lastname, email)
       VALUES('$fname','$lname','$email')";
       $qry = $conn->query($newClient);

       $newOrder = "INSERT INTO order_list(client_name,client_email,client_order,client_status)
       VALUES('$fullname','$email','$message','Not Deliverd')";
       $qry = $conn->query($newOrder);
     }
    ?>
     }, 2000); 
     </script>

        <!-- Showcase Starts Here -->
        <div class="showcase text-center">
            <h2>Coffee Showcase</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="Images/cappucino.jpg"><br>
                    <label for="Cappuccino">Cappuccino</label> <br>
                    <strong>13.99$</strong>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quae sunt tenetur veritatis,
                        consequatur minus.</p>
                </div>
                <div class="col-md-4">
                    <img src="Images/black.jpg"><br>
                    <label for="Black Coffee">Black Coffee</label> <br>
                    <strong>4.99$</strong>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quae sunt tenetur veritatis,
                        consequatur minus.</p>
                </div>
                <div class="col-md-4">
                    <img src="Images/cappucino.jpg"><br>
                    <label for="Cappuccino">Cappuccino</label> <br>
                    <strong>13.99$</strong>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quae sunt tenetur veritatis,
                        consequatur minus.</p>
                </div>
            </div>

        </div>
        <!-- Showcase Ends Here -->

        <!-- Parallax  Effect -->
        <div class="parallax-window" data-parallax="scroll" data-image-src="images/para-pic.jpg">
    <a href="admin/login.php">Admin</a></div>
    </main>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/parallax.js"></script>
    <script src="js/app.js"></script>
</body>

</html>