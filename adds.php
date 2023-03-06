<?php 
   session_start();
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-image: url('photo/add.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<?php 
       include("include/header.php");
	 ?>
    <div class="container">
        <header style="text-align: center; font-size:20px;">
            <h1 style="color: crimson;">Contact Us</h1>
            <p style="color: black;">Nursing is defined by caring. At Redlands Community Hospital, nursing has embraced the theory of Jean Watson’s Caring Science. Caring Science helps us to embrace the positive energy that flows from an integrated mind, body and spirit and is mutually rewarding to both the patient and the nurse..</p>
        </header>
        <div class="content">
            <div class="content-form">
                <div class="row">
                    <div class="col-6">
                        <section class="card m-4" style="background: transparent;">
                            <div class="card-body">
                                <i class="fa fa-map-marker fa-2x" style="color: green;" aria-hidden="true"></i>
                                <h2>address</h2>
                                <p style="color:green">
                                     Hospital Road, Pabna 6600. <br>
                                    Pabna Sadar. <br>
                                    Pabna
                                </p>
                            </div>
                        </section>

                        <section class="card m-4" style="background: transparent;">
                            <div class="card-body">
                                <i class="fa fa-phone fa-2x" style="color: red;" aria-hidden="true"></i>
                                <h2>Phone</h2>
                                <p>+8801789672827</p>
                            </div>
                        </section>
                    </div>

                    <div class="col-6">

                         <section class="card m-4" style="background: transparent;">
                            <div class="card-body">
                                <i class="fa fa-envelope fa-2x my-2" style="color: crimson;" aria-hidden="true"></i>
                                <h2>E-mail</h2>
                                <p>rmjahidhassan139@gmail.com</p>
                            </div>
                        </section>

                        <section class="media card m-4" style="background: transparent;">
                            <div class="card-body">
                                <ul>
                                <li><i class="fab fa-facebook-square fa-2x" style="color: blue;" aria-hidden="true"></i>  The Mujahid Hospital</li>
                                <li><i class="fab fa-instagram-square fa-2x" style="color: brown;" aria-hidden="true"></i>  themujahidhospital250</li>
                                <li><i class="fab fa-whatsapp-square fa-2x" style="color: green;" aria-hidden="true"></i>  Jahid HMS</li>
                                <li><i class="fab fa-twitter-square fa-2x" style="color: blue;" aria-hidden="true"></i>  @Mujahid_HMS</li>
                                </ul>
                            </div>
                        </section>
                       
                    </div>
                </div>
            </div>
        </div>
        
        <div class="empty">

        </div>
    </div>    
</body>
</html>