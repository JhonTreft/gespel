<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./static/css/login.css" />
    <title>Sign in & Admin User</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../auth/login_auth.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>
          <form action="../auth/login_auth_user_admin.php" class="sign-up-form" method="POST">
            <h2 class="title">User Admin</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" class="btn" value="Login" />
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              User Admin
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>


    
    <?php session_start() ?>
    <?php if(isset($_SESSION['mensaje_login'])): ?>
    <script>
        console.log("notificacion");
        toastr.error('<?php echo $_SESSION['mensaje_login']?>', 'Message')
    </script>
    <?php unset($_SESSION['mensaje_login']); ?>
    <?php endif; ?>

        
    <?php if(isset($_SESSION['titulo_notificacion'])): ?>
    <script>
        console.log("notificacion");
        toastr.success('<?php echo $_SESSION['notificacion']?>', '<?php echo $_SESSION['titulo_notificacion'] ?>')
    </script>
    <?php unset($_SESSION['titulo_notificacion']); ?>
    <?php unset($_SESSION['notificacion']); ?>
    <?php endif; ?>


    <script src="./static/js/login.js"></script>
  </body>
</html>