<?php
?>

<html>
 <body>
  <h1>Register</h1>
  <form action="<?php echo base_url();?>index.php/mycontroller/signupdo" method="POST">
   Name:<input type="text" name="name"><br>
   Email:<input type="text" name="email"><br>
   Phone:<input type="text" name="phone"><br>
   Password:<input type="password" name="password"><br>
   <input type="submit" value="Signup">
  </form>
 </body>
</html> 
