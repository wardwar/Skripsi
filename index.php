 <?php
 session_start();
 if($_SESSION != null)
 {
  if($_SESSION['id'] != null)
    {
      Header("Location:dashboard.php");
    }
 } 
 ?>
 <!DOCTYPE html>
  <html>
    <head>

    <title>Aplikasi Digitasi Grafik</title>

    <link rel="icon" type="icon/ico" href="img/icon.ico">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body id="log-body">

 <div class="row">
 <div id="login" class="col s12 m8 l4 offset-m2 offset-l4 ">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/asu.png">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Silahkan login terlebih dahulu <i class="mdi-navigation-more-vert right"></i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Login <i class="mdi-navigation-close right"></i></span>
          
          <!-- loading -->
          <div class="row">
          <div class="col s12 center">
          	
          	<div id="load" class="preloader-wrapper big">
      			<div class="spinner-layer spinner-blue">
	        		<div class="circle-clipper left">
	          			<div class="circle"></div>
	        		</div>
	        		<div class="gap-patch">
			        	<div class="circle"></div>
			       	</div>
			       	<div class="circle-clipper right">
			        	<div class="circle"></div>
			        </div>
      			</div>

      			<div class="spinner-layer spinner-red">
	        		<div class="circle-clipper left">
	          			<div class="circle"></div>
	        		</div>
	        		<div class="gap-patch">
			        	<div class="circle"></div>
			       	</div>
			       	<div class="circle-clipper right">
			        	<div class="circle"></div>
			        </div>
      			</div>

      			<div class="spinner-layer spinner-yellow">
	        		<div class="circle-clipper left">
	          			<div class="circle"></div>
	        		</div>
	        		<div class="gap-patch">
			        	<div class="circle"></div>
			       	</div>
			       	<div class="circle-clipper right">
			        	<div class="circle"></div>
			        </div>
      			</div>

      			<div class="spinner-layer spinner-green">
	        		<div class="circle-clipper left">
	          			<div class="circle"></div>
	        		</div>
	        		<div class="gap-patch">
			        	<div class="circle"></div>
			       	</div>
			       	<div class="circle-clipper right">
			        	<div class="circle"></div>
			        </div>
      			</div>
    		</div>

    		<div id="error" class="card-panel red lighten-2 visibility-hidden">
          		<span class="card-content white-text message" >Error Message</span>
          	</div>

    		</div>
      	  </div>

          <!-- end loading -->
          <!-- login form -->

          <div id="margin-form">
          <form id="login" method="post">
          <div class="row">
        	<div class="input-field col s12">
          <i class="mdi-action-face-unlock prefix"></i>
	          <input id="username" type="text" class="validate">
	          <label for="username">Username</label>
        	</div>
      	</div>

         <div class="row">
        	<div class="input-field col s12">
          <i class="mdi-action-lock prefix"></i>
	          <input id="password" type="password" class="validate">
	          <label for="password">Password</label>
        	</div>
      	</div>
      	</form>

      	<div class="row">
      		<button id="btn-login"class="btn waves-effect waves-light right" name="login">Login</button>
      	</div>
      	
      	</div>



          <!-- login form end -->

        </div>
      </div>
      </div>
      </div>

	

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/sweetalert.min.js"></script>
      <script type="text/javascript" src="js/skripsi.js"></script>
    </body>
  </html>