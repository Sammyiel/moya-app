<html lang="en">
<head>

   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
</head>
<body>
  <div class="container">
    <form action="#" method="POST" class="form" autocomplete="off">
    <div class="avatar">
      <img src="https://res.cloudinary.com/merobusts/image/upload/v1518264117/head-659651_640.png" alt="avatar">
    </div>
      <div class="form-item">
        <label for="email">Email</label>
        <input type="text" name="email" class="is-input" placeholder="Email" id="email" autocomplete="off">
      </div>
      <div class="form-item">
        <label for="password">Password</label>
       <input type="password" name="password" class="is-input" placeholder="Password" id="password">
      </div>
      <div class="form-item">
        <button type="submit" class="button is-button">Sign in</button>
      </div>
     <div class="form-item">
       <a href="#" class="button is-link">Forgot Password?</a>
     </div>
    </form>
  </div>
</body>
</html>