<?php
session_start();
?>


<html>
<head>
<title>HOME
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </meta>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="memo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 

</head>
<body>
<div class="container">

<div class="row">

<div class="col-sm-12">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
        <li><a href="#">LOGIN</a></li>
		 <li><a href="#">SIGN UP</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEMO TYPE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Query</a></li>
            <li><a href="#">Purchase Memo</a></li>
            <li><a href="#">Reimbursement Memo</a></li>
            <li><a href="#">Huma Resources Memo</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Leave Memo</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Accounting</a></li>
            <li><a href="#">Human Resources</a></li>
            <li><a href="#">Legal</a></li>
            <li><a href="#">Inventory</a></li>
			 <li><a href="#">Technican Research and Testing</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Chairman's Office</a></li>
			<li><a href="#">Vice-Chairman's Office</a></li>
          </ul>
        </li>
		
      </ul>
	  
	  
      <form class="navbar-form navbar-left">
        
      </form>
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#">SIGN OUT</a></li>
      <li class="alert">  <button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Alerts<span class="badge">4</span>
</button></div></li>
	 
		 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="full-profile">
<div class="profile">
<p><img src="images/user-5.png" width="50px" height="50px"></p>
<p> USERNAME </p>

</div>

<h3><span class="label label-warning">LEVEL<span class="badge"> 4</span></span></h3>
<span type="button" class="btn btn-success btn-md">MEMO HISTORY</span>
<span type="button" class="btn btn-danger btn-md">CURRENT MEMO</span>



</div>
 

























</div>
</div>
</div>


<script type="text/javascript" src="bootstrap/js/bootstrap.js">
</script>
<script src="jquery/jquery.js" type="text/javascript">
</script>
</body>
</html>