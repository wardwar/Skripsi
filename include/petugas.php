 <?php
 session_start();
 if($_SESSION == null)
 {
  if($_SESSION['id'] == null)
    {
      Header("Location:index.php");
    }
 } 
 ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <link rel="icon" type="icon/ico" href="img/icon.ico">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
      <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body id="page-das">

    <header>
    	<nav class="top-nav">
    		<div class="nav-wrapper">
    		<span class="brand-logo right">Petugas</span>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		      <ul class="right hide-on-med-and-down">
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
          <li><a href="dashboard.php?p=p">Petugas</a></li>
          <li><a href="dashboard.php?p=t">Tinggi Muka Air</a></li>
		      <li><a href="Logout.php">Logout</a></li>
		      </ul>
		    </div>
    	</nav>
    	<nav class="side-nav fixed teal side-left" style="width=240px;">
    	<div class="row">
    	<center>
    		<img class="z-depth-1 center logo-pu" src="img/asu.png" width="200" height="200">
    	</center>
    	</div>

    	<ul class="ul-menu">
    		<li><a href="dashboard.php?p=p"><button class="btn menu waves-effect waves-light" >Petugas</button></a></li>
        <li><a href="dashboard.php?p=t"><button class="btn menu waves-effect waves-light">Tinggi Muka Air</button></a></li>
        <li><a href="logout.php" ><button class="btn menu waves-effect waves-light">Logout</button></a></li>
    	</ul>
    
    	</nav>
    </header>