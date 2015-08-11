<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GW Profile Page</title>
  </head>
  <body>
    <?php require_once "GWCSS.php" ?>
    <?php require_once "GWnavbar2.php" ?>

    <div class=" col-sm-offset-1 col-sm-10 col-sm-offset-1 nav3 ">
      <p>My Profile</p>
    </div>

    <div class="container-fluid">
      <div class="col-sm-8 profileBox">
        <div class="col-sm-4">
          <img class="img-responsive" src="logo.jpg" alt="" />
        </div>
        <div class="col-sm-8 tsize">
          <p>Name:Rehan</p>
          <p>UName:<a href="#"> rehan911 </a></p>
          <p>score:19000</p>
          <!-- Rank:120 <br> -->
        </div>
        <div class="col-sm-12">
        <hr>
          <p class="tsize">Activities</p><br>
          <p class="tsize2">Added Bhanu</p>
          <p class="tsize2">Added New High Score</p>
          <p class="tsize2" >Changed Profile Picture</p>
          <p class="tsize2">Added New High Score</p>
          <p></p>


        </div>
    </div>


    <div class="col-sm-4">
      <form class="form-horizontal  addScoreBox">
        <p class="col-sm-offset-2 col-sm-8 highScore">Add Score</p>
    <div class="form-group">
      <label for="inputEmail3" class=" col-sm-4 control-label">Score</label>
      <div class="col-sm-7">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Score">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class=" col-sm-4 control-label">Upload SS</label>
      <div class="col-sm-7">
        <input type="file" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-default">Add</button>
      </div>
    </div>
    </form>
    <br>
    <div class="col-sm-12 player">Friends</div>
   <br><br>
    <div class="col-sm-12">
      <div class="row playerScore">
          <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
          <div class="col-sm-4 player"><a href="#"> rehan911 </a></div>

          <div class="col-sm-4 player">8000</div>
      </div>

      <div class="row playerScore">
          <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
          <div class="col-sm-4 player"><a href="#"> rehan911 </a></div>

          <div class="col-sm-4 player">8000</div>
      </div>
      <div class="row playerScore">
          <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
          <div class="col-sm-4 player"><a href="#"> rehan911 </a></div>

          <div class="col-sm-4 player">8000</div>
      </div>

    </div>
    </div>

  </div>
  </body>
</html>
