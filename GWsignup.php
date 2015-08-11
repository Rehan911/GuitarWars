<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GWSignUp</title>
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
         <a href="GWlogin.php" class="btn btn-info" role="button">Log in</a>
       </div>
     </div>



     <div class="rowh">
       <div class="col-md-12 height">
       </div>
     </div>



     <form class="form-horizontal">
   <div class="form-group">
     <label for="inputEmail3" name="name" class="col-md-offset-1 col-sm-2 control-label">Name</label>
     <div class="col-sm-3">
       <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
     </div>
   </div>
   <div class="form-group">
     <label for="inputEmail3" name="username" class="col-md-offset-1 col-sm-2 control-label">UserName</label>
     <div class="col-sm-3">
       <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="User Name">
     </div>
   </div>
   <div class="form-group">
     <label for="inputEmail3" name="email" class="col-md-offset-1 col-sm-2 control-label">Email</label>
     <div class="col-sm-3">
       <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
     </div>
   </div>

   <div class="form-group">
     <label for="inputPassword3" name="pwd" class="col-md-offset-1 col-sm-2 control-label">Password</label>
     <div class="col-sm-3">
       <input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="******">
     </div>
   </div>

   <div class="form-group">
     <label for="inputEmail3" name="pwd2" class="col-md-offset-1 col-sm-2 control-label">Re-type Password</label>
     <div class="col-sm-3">
       <input type="password" name="pwd2" class="form-control" id="inputEmail3" placeholder="******">
     </div>
   </div>

   <div class="form-group">
     <label for="inputEmail3" name="uploadpic" class="col-md-offset-1 col-sm-2 control-label">Upload Picture</label>
     <div class="col-sm-3">
       <input type="file" name="uploadpic" >
     </div>
   </div>
   <div class="form-group">
     <div class="col-sm-offset-3 col-sm-8">
       <button type="submit" class="btn btn-default">SignUp</button>
     </div>
   </div>
 </form>

  </body>
</html>
