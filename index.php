<?php
/*session_start();
if(!$_SESSION['auth'])
{
header('location:login.php');
}*/
?>
<form action="login.php" method="post">

  <div >
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    
  </div>

 
  
</form>