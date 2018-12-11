<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	
	
	<style> 

	#carousel-example-generic {
		height: 400px;
		overflow:hidden;
	}
.carousel-inner > .item > img, .carousel-inner > .item > a > img {
    line-height: 1;
    background-size: cover;
	    background-position: bottom;
    width: 100%;
}
	
	</style>
	

	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:	#000080">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>ONLINE NOTICE BOARD</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=noticelist"><span class="glyphicon glyphicon-envelope"></span> Notice List</a></li>
<?php if(!empty($_SESSION['name']) && $_SESSION['name']) {
	echo '<li><a href="user"><span class="glyphicon glyphicon-user"></span>Dashboard</a></li>'; 
	} else {
      echo '<li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
       echo '<li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
}?>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/diu.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/parlament.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/bangladesh2.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>


  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="noticelist")
			{
			include('display_notification.php');
			}
		}
		else
		{
		echo "<h2></h2>
		<h1>Welcome to online notice board</h1>  
		
		<p><h4> This is the system where you can find all your notice. It is a place where people can leave any types of messages and notifications, for example, to advertise things, announce events or provide any information.
Notice board online it can be placed on digital devices such computers, tabs, mobile phones etc.</h> </p>
		";
		}
		?>
		
		
		
		
		</div>
	
		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body">
    <div class="container-fluid">
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <iframe width="300" height="250" src="https://www.youtube.com/watch?v=R16ZL-E5OO0">
</iframe>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <iframe width="300" height="250" src="https://youtu.be/4Ce011sZcq0">
</iframe>
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <iframe width="300" height="250" src="https://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1">
</iframe>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="rightlyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="g="sr-only">Next</span>
  </a>
</div>

</div>

  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background: #000080">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="http://www.mehedee.com/"> Developed by  Mehedee</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>