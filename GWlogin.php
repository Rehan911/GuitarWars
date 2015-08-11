<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GWLogin</title>
  </head>
  <body>

    <?php
    require_once "GWCSS.php";
     ?>
   <?php
   require_once "GWnavbar.php"
    ?>

     <div class="form-group">
       <div class="col-sm-offset-10 col-sm-2">
         <a href="GWsignup.php" class="btn btn-info" role="button">SignUp</a>
       </div>
     </div>

     <div class="rowh">
       <div class="col-md-12">

       </div>
     </div>
     <form class="form-horizontal">
   <div class="form-group">
     <label for="inputEmail3" class="col-md-offset-1 col-sm-2 control-label">Email</label>
     <div class="col-sm-3">
       <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
     </div>
   </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-1 col-sm-2 control-label">Password</label>
     <div class="col-sm-3">
       <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
     </div>
   </div>

   <div class="form-group">
     <div class="col-sm-offset-3 col-sm-8">
       <button type="submit" class="btn btn-default">Log in</button>
     </div>
   </div>
 </form>

  </body>
</html>
