<?php 
include 'includes/header.php';
include 'includes/navbar-login.php';

?>

<div class="full-container">
<div class="container-login">
<form action="action_page.php" method="post">
  <div class="container">
  <h1>Login</h1>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <div class="login-btn">
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
  </div>

</form>
<form action="action_page.php">
  <div class="container">
    <h1>Sign Up</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="login-btn">
      <button type="submit" class="signupbtn">Sign Up</button>
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>
</div>
</div>

<?php 
include 'includes/script.php';
include 'includes/footer.php';

?>