<?php include("includes/header.php"); ?>

  <div class="container" >

    <?php 
      echo "<form class='form-signin' name='form1' method='post' action='checkLogin.php'>";
      echo "<h2 class=\"form-signin-heading\">Please sign in</h2>";
    ?>
      <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
      <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
      
      <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      <div id="message"></div>
    </form>

  </div> <!-- /container -->
  <?php include("includes/footer.php"); ?>