	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <title>GWScoreBoard</title>
	  </head>
	  <body>
      <?php require_once "GWCSS.php"; ?>
	    <?php require_once "GWnavbar2.php"; ?>
      <br>
      <br>
    <br>
		<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1 nav3 ">
		  <p>Score Board</p>
		</div>
      <div class="container-fluid">

        <div class="col-sm-8 playerScoreBox">
          <div class="row playerScore">
              <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
              <div class="col-sm-4 player"><a href="#"> rehan911 </a></div>
              <div class="col-sm-4 player">8000</div>
              <div class="col-sm-2"><img class ="profilePic "src="/GuitarWars/logo.jpg" alt=""/></div>
          </div>
          <br>
            <div class="row playerScore">
                <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
								<div class="col-sm-4 player"><a href="#"> rehan911 </a></div>

                <div class="col-sm-4 player">8000</div>
                <div class="col-sm-2"><img class ="profilePic "src="/GuitarWars/logo.jpg" alt=""/></div>
            </div>
            <br>
              <div class="row playerScore">
                  <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
									<div class="col-sm-4 player"><a href="#"> rehan911 </a></div>
                  <div class="col-sm-4 player">8000</div>
                  <div class="col-sm-2"><img class ="profilePic "src="/GuitarWars/logo.jpg" alt=""/></div>
              </div>
              <br>
                <div class="row playerScore">
                    <div class="col-sm-2"><img class ="img-circle profilePic"src="/GuitarWars/logo.jpg" alt=""/></div>
										<div class="col-sm-4 player"><a href="#"> rehan911 </a></div>

                    <div class="col-sm-4 player">8000</div>
                    <div class="col-sm-2"><img class ="profilePic "src="/GuitarWars/logo.jpg" alt=""/></div>
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
      </div>

</div>
	  </body>
	</html>
