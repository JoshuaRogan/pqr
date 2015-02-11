<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home"><img src="img/LogoV0_1.png" height="40px" alt='logo'></a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    	<!-- Search for molecules --> 
		<form class="navbar-form navbar-right" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
		<!-- Search for molecules --> 

          <ul class="nav navbar-nav">
            <li <?php if(substr($page, 0, strlen($page)-4) == "home") echo "class='active'"; ?> ><a href="/home">Home</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "browse") echo "class='active'"; ?> ><a href="/browse">Browse</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "news") echo "class='active'"; ?> ><a href="/news">News</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li<?php if(substr($page, 0, strlen($page)-4) == "acknowledgments") echo "class='active'"; ?>><a href="/acknowledgments">Acknowledgments</a></li>
              <li<?php if(substr($page, 0, strlen($page)-4) == "acknowledgments") echo "class='active'"; ?>><a href="/acknowledgments">About Us</a></li>
              <li class="divider"></li>
              <li<?php if(substr($page, 0, strlen($page)-4) == "bugreport") echo "class='active'"; ?>><a href="#">Report a Problem</a></li>
            </ul>
          </li>
          </ul> 


        </div>
  </div>
</nav>