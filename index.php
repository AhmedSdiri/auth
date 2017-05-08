
<?php
/*session_start();
if(!$_SESSION['auth'])
{
header('location:login.php');
}*/
?>

<form action="login.php" method="post" id="login_form">

  <div >
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="name" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="pwd" required>
    <button type="submit" id="login" name="login" value="Login">Login</button> 
  </div>
</form>
<script src="login.js"></script>

i am the addition that will be merged to the master brach from slave branch !!