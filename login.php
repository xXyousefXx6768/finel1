<?php
session_start();
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="form-box box">

      <?php
      include "connection.php";

      if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM proudcts WHERE email='$email'";
        $res = mysqli_query($conn, $sql);

        if ($res) {
          $row = mysqli_fetch_assoc($res);

          if ($row) {
            $password = $row['password'];
            $decrypt = password_verify($pass, $password);

            if ($decrypt) {
              $_SESSION['id'] = $row['id'];
              $_SESSION['username'] = $row['username'];
              header("location: index.php");
              exit;
            } else {
              echo "<div class='message'>
                      <p>Wrong Password</p>
                    </div><br>";
              echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
            }
          } else {
            echo "<div class='message'>
                    <p>Email not found</p>
                  </div><br>";
            echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
          }
        } else {
          echo "<div class='message'>
                  <p>" . mysqli_error($conn) . "</p>
                </div><br>";
          echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
        }

      } else {
      ?>
      <header>Login</header>
      <hr>
      <form action="#" method="POST">
        <div class="form-box">
          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="email" placeholder="Email Address" name="email">
          </div>
          <div class="input-container">
            <i class="fa fa-lock icon"></i>
            <input class="input-field password" type="password" placeholder="Password" name="password">
            <i class="fa fa-eye toggle icon"></i>
          </div>
          <div class="remember">
            <input type="checkbox" class="check" name="remember_me">
            <label for="remember">Remember me</label>
            <span><a href="forgot.php">Forgot password</a></span>
          </div>
        </div>
        <button type="submit" name="login" id="submit"  class="button3 "> login </button>
        <div class="links">
          Don't have an account? <a href="signup.php">Signup Now</a>
        </div>
      </form>
    </div>
    <?php
      }
    ?>
  </div>
  <script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    })
  </script>
</body>

</html>
