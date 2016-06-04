<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-plus"></span>Foodiliver</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#howto">HOW-TO</a></li>
        <li><a href="#contact">CONTACT US</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a target="_blank" href="registration.php">Sign Up</a></li>
				<li><a data-toggle="modal" data-target="#myModal">Login</a></li> 
			</ul>
		</li>
	  </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
				<form role="form">
				<div class="form-group">
				<label>Username: </label>
				<input type="username" class="form-control" id="username" placeholder="Enter username">
				</div>
				<div class="form-group">
				<label>Password: </label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
				<small>Not a member yet?(<a href="registration.php">click here</a>)<small>
				<button class="btn btn-default" id="login"><a href="member.php">Login</a></button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div> 
    </div>
</div>

