<?php

require_once "init/config.php";
$data = array();
	if($_GET == null)
	{
		include("include/petugas.php");
	}else
	{
		if($_GET['p'] == 'p')
		{
		include("include/petugas.php");
		}
		else if($_GET['p'] == 't')
		{
			include("include/tma.php");
		}
		else
		{
			include("include/petugas.php");
		}
	}
?>

	<main>
		<div class="row">
			<div class="col s12">
				<div class="card-panel">
					<?php
						if($_GET == null)
							{
								include("include/table-petugas.php");
							}else
							{
								if($_GET['p'] == 'p')
								{
								include("include/table-petugas.php");
								}
								else if($_GET['p'] == 't')
								{
									include("include/table-tma.php");
								}
								else
								{
									include("include/table-petugas.php");
								}
							}
					?>
				</div>
			</div>
		</div>
	</main>
<!-- <div class="row">
	  		<div class="col s2 hide-on-small-only side-left z-depth-1">
	  		<div class="card-panel">
	  			
	  		</div>
	  		<div class="row">
	  			<button class="btn waves-effect waves-light menu">Petugas</button>
	  		</div>
	  		<div class="row">
	  			<button class="btn waves-effect waves-light menu">TMA</button>
	  		</div>
	  		<div class="row">
	  			<button class="btn waves-effect waves-light menu">Logout</button>
	  		</div> -->
	  		
	  		<!-- floating -->
		       <!--  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			    <a class="btn-floating btn-large red">
			      <i class="large mdi-editor-mode-edit"></i>
			    </a>
			    <ul>
			      <li><a class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></a></li>
			      <li><a class="btn-floating yellow darken-1"><i class="large mdi-editor-format-quote"></i></a></li>
			      <li><a class="btn-floating green"><i class="large mdi-editor-publish"></i></a></li>
			      <li><a class="btn-floating blue"><i class="large mdi-editor-attach-file"></i></a></li>
			    </ul>
			  </div> -->
			  <!-- floating -->


	 <!--  		</div>
	  	
	   <nav class="teal">
		    <div class="nav-wrapper">
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		      <ul class="right hide-on-med-and-down">
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		      <li><a href="Logout.php">Petugas</a></li>
		      <li><a href="Logout.php">TMA</a></li>
		      <li><a href="Logout.php">Logout</a></li>
		      </ul>
		    </div>
	  	</nav>
	  	</div> -->

	  	


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/sweetalert.min.js"></script>
      <script type="text/javascript" src="js/jquery.dataTables.js"></script>
      <script type="text/javascript" src="js/skripsi.js"></script>
    </body>
  </html>