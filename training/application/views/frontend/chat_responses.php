<?php
    print_r($_POST)
?>

<html lang="en" class="responsive">

<head>
    <title>Chat room</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">

    <!-- User defined CSS --> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/chat_room.css">
    
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- <script src="https://use.fontawesome.com/1c6f725ec5.js"></script> -->

    <!-- font awesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="pink-background"></div>
    <div class="wrap">
        <section class="left">
            <div class="profile">
                <img src="<?php echo base_url(); ?>img/avatar/queen.jpg" width="100%" class="rounded-circle">
                <div class="icons">
                    <i class="fa fa-commenting fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </div>
            </div>
            <div class="wrap-search">
                <div class="search">
                    <i class="fa fa-search fa" aria-hidden="true"></i>
                    <input type="text" class="input-search" placeholder="Search chat...">
                </div>
            </div>
             <div class="contact-list"></div>   <!-- <= Conversational screen appears here -->
        </section>

        <section class="right" id="chat-screen">
            <div class="chat-head">
            <img src="<?php echo base_url(); ?>img/avatar/queen.jpg" width="100%" class="rounded-circle">
                <div class="chat-name">
                    <h1 class="name-top"></h1>
                    <p class="font-online"></p>
                </div>
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                <i class="fa fa-paperclip fa-lg" aria-hidden="true"></i>
                <i class="fa fa-bars fa-lg" aria-hidden="true" id="show-contact-information"></i>
                <i class="fa fa-times fa-lg" aria-hidden="true" id="close-contact-information"></i>
                <i class="fa fa-close fa-lg" aria-hidden="true" onclick="showProfile()"></i>
            </div>
            <div class="wrap-chat">
                <div class="chat"></div>
                <div class="information"></div>
            </div>
            <div class="wrap-message">
                <i class="fa fa-smile-o fa-lg" aria-hidden="true"></i>
                <!-- <form class="message" method="post" action="<?php echo base_url();?>Crud/savedata"> -->
                    <input type="text" class="input-message" name="text" autocomplete="off" placeholder="Chat..">
                </form>
                <i class="fa fa-microphone fa-lg" aria-hidden="true"></i>
            </div>
        </section>
        <section class="profile-sliders right" id="show-profile">
            <!-- <i class="fa fa-close fa-lg" aria-hidden="true" onclick="hideProfile()" id="close-profile" style="left:90%;"></i> -->
                <div class="w3-content w3-display-container">
                    <img class="mySlides" src="<?php echo base_url(); ?>img/avatar/queen.jpg" width="100%" class="dis-pic" style="width:50%">
                    <!-- <div class="about-user">Hello, I'm Yvette from Kigali. I love music and sports. I want a reasonable man between 18-25years to love me the way I am</div> -->
                    <img class="mySlides" src="<?php echo base_url(); ?>img/avatar/male-avatar.jpg" width="100%" class="dis-pic" style="width:50%">
                    <img class="mySlides" src="<?php echo base_url(); ?>img/avatar/female-avatar.jpg" width="100%" class="dis-pic" style="width:50%">
                    <img class="mySlides" src="<?php echo base_url(); ?>img/avatar/male-avatar.jpg" width="100%" class="dis-pic" style="width:50%">
                    <!-- <button class="float-left" onclick="plusDivs(-1)">Previous</button>
                    <button style="left:50%;" onclick="plusDivs(1)">Next</button> -->
                </div>

                <div class="hearts col">
                    <i class="fas fa-chevron-left hearted" onclick="plusDivs(-1)" style="font-size:48px;color:#3192beef;"></i>
                    <i class="fas fa-heart-broken hearted" onclick="plusDivs(1)" style="font-size:48px;color:black;"></i>
                    <i class="fa fa-heart hearted" onclick="plusDivs(1)" style="font-size:48px;color:#fd63e3"></i>
                    <i class="fas fa-star hearted" onclick="plusDivs(1)" style="font-size:48px;color:#3192beef"></i>
                    <i class="fas fa-chevron-right hearted" onclick="plusDivs(1)" style="font-size:48px;color:#3192beef"></i>
                    <i class="fas fa-times hearted" onclick="hideProfile()" style="font-size:48px;color:grey;" id="close-profile"></i>
                </div>
                <!-- <div class="hearts col">
                    <i class="fas fa-undo hearted" onclick="plusDivs(-1)" style="font-size:38px;color:#3192beef;"></i>
                    <i class="fas fa-heart-broken hearted" onclick="plusDivs(1)" style="font-size:48px;color:black;"></i>
                    <i class="fa fa-heart hearted" onclick="plusDivs(-1)" style="font-size:48px;color:#fd63e3"></i>
                    <i class="fa fa-close hearted" onclick="hideProfile()" style="font-size:48px;color:#3192beef;" id="close-profile"></i>
                </div> -->
        </section>
    </div>
    
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/javascript.js"></script>


</body>

</html>