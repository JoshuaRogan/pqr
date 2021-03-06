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
      <div class="input-group">
        <input type="text" id="header-molecule-search" class="form-control typeahead" autocomplete="off"  placeholder="Molecule Search">
        <span class="input-group-btn">
             <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
             </button>
        </span>
      </div>
		</form>
		<!-- Search for molecules --> 

          <ul class="nav navbar-nav">
            <!-- <li <?php if(substr($page, 0, strlen($page)-4) == "home") echo "class='active'"; ?> ><a href="/home">Home</a></li> -->
            <li <?php if(substr($page, 0, strlen($page)-4) == "browse") echo "class='active'"; ?> ><a href="/browse">Browse</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "molecule") echo "class='active'"; ?> ><a href="/molecule">Molecule (Ex)</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "news") echo "class='active'"; ?> ><a href="/news">News</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li <?php if(substr($page, 0, strlen($page)-4) == "contact") echo "class='active'"; ?> ><a href="/contact">Contact</a></li>

<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accessibility<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li>       
					<p class="">
						<a href="#" class="navbdar-link" data-container="body" data-toggle="tooltip" title="Decrease overall font size" id="reducefont">A</a>
						<a href="#" class="navbadr-link" data-container="body" data-toggle="tooltip" title="Increase overall font size" id="increasefont">A</a>
						<a href="#" class="navdbar-link" data-container="body" data-toggle="tooltip" title="Revert to the default font size" id="defaultfont"><i class="fa fa-undo"></i></a>
					</p> 
				</li>
				<li> <a href="#">Test</a> </li>

              </ul>
            </li> -->

            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li<?php if(substr($page, 0, strlen($page)-4) == "acknowledgments") echo "class='active'"; ?>><a href="/acknowledgments">Acknowledgments</a></li>
					<li<?php if(substr($page, 0, strlen($page)-4) == "about") echo "class='active'"; ?>><a href="/about">About Us</a></li>
					<li class="divider"></li>
					<li<?php if(substr($page, 0, strlen($page)-4) == "contact") echo "class='active'"; ?>><a href="/contact">Report a Problem</a></li>
				</ul>
            </li>

<!-- 			       <li>       
              <p class="navbar-text">
                <a href="#" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Decrease overall font size" id="reducefont">A</a>
                <a href="#" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Increase overall font size" id="increasefont">A</a>
                <a href="#" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Revert to the default font size" id="defaultfont"><i class="fa fa-undo"></i></a>
              </p> 
            </li>  -->

            <li> 
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-primary navbar-btn" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Decrease overall font size" id="reducefont"><i class="fa fa-font"></i> <i class="fa fa-arrow-down"></i></button>
                <button type="button" class="btn btn-primary navbar-btn" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Increase overall font size" id="increasefont"><i class="fa fa-font"></i> <i class="fa fa-arrow-up"></i></button>
                <button type="button" class="btn btn-primary navbar-btn" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Revert to the default font size" id="defaultfont"><i class="fa fa-undo"></i></button>
              </div>
            </li>


          </ul> 


        </div>
  </div>
</nav>