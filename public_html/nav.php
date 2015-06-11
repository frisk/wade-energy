<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <?php 
                  $nav_items = array('Home' => 'index.php', 'About Us' => 'company.php', 'Team' => 'firm.php', 'Title 24' => 'title24.php', 'LEED' => 'leed.php', 'Energy Engineering' => 'energyEngineering.php', 'Contact' => 'contact.php'); 
                  foreach($nav_items as $title => $href)
                  {
                    //echo $_SERVER['REQUEST_URI'];
                ?>
                  <li <?php if($title == 'Team' || $title == 'LED Lighting'){ echo 'id="'.strtolower(str_replace(' ', '_', $title)).'"'; } if($_SERVER['REQUEST_URI'] == '/'.$href){ echo 'class="active"'; } ?>><a href="<?= $href ?>"><?= $title ?></a></li>
              <?php
                  }
              ?>
              </ul>
            </div><!--/.nav-collapse -->
            <div class="logo">
	            <a href="index.php"><img src="assets/img/logo.png" width="100px" alt="logo"></a>
	            <h3 class="title">Wade Energy</h3>
        	 </div>
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
		
      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->