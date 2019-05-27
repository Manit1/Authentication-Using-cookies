<?php

//Delete the Cookie
setcookie('userid','',time()-60);

//User Logged Out, Redirect to Home Page
header('location:home.php');

?>