<?php $pageName = ""; // dummary variable to avoid errors ?>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background:#337ab7;color:white;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="index.php" style="padding:0;padding-left:10px;"><h1 style="padding:0; margin:0;"><img src="images/isl-logo-without-background.png" style="height:55px;"></h1></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
<li <?php if($pageName=='index.php') echo 'class="active"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<!-- <li <?php if($pageName=='team.php') echo 'class="active"'; ?>><a href="team.php">Team</a></li> -->
<li <?php if($pageName=='objective.php') echo 'class="active"'; ?>><a href="objective.php">Objective</a></li>
        <!-- <li <?php if($pageName=='##') echo 'class="active"'; ?>><a href="#">Workshop</a></li> -->
        <!-- <li <?php if($pageName=='contact-piratica.php') echo 'class="active"'; ?>><a href="#">Contact</span></a></li> -->
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
