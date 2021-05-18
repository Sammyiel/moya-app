<html lang="en">

<head>
    <title>Chat room</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">

    <!-- User defined CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- font awesome -->
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
                    <input type="text" class="input-search" placeholder="Search chat..">
                </div>
            </div>
            <div class="contact-list"></div>
        </section>

        <section class="right" id="chat-screen">
            <div class="chat-head">
            <img src="<?php echo base_url(); ?>img/avatar/queen.jpg" width="100%" class="rounded-circle">
                <div class="chat-name">
                    <h1 class="font-name"></h1>
                    <p class="font-online"></p>
                </div>
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                <i class="fa fa-paperclip fa-lg" aria-hidden="true"></i>
                <i class="fa fa-bars fa-lg" aria-hidden="true" id="show-contact-information"></i>
                <i class="fa fa-times fa-lg" aria-hidden="true" id="close-contact-information"></i>
            </div>
            <div class="wrap-chat">
                <div class="chat"></div>
                <div class="information"></div>
            </div>
            <div class="wrap-message">
                <i class="fa fa-smile-o fa-lg" aria-hidden="true"></i>
                <div class="message">
                    <input type="text" class="input-message" placeholder="Chat..">
                </div>
                <i class="fa fa-microphone fa-lg" aria-hidden="true"></i>
            </div>
        </section>
    </div>
    
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/javascript.js"></script>


</body>

</html>