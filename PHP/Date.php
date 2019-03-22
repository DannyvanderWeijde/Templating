<?php 

$time = date("l jS \of F Y H:i:s ", strtotime("+1 hours"));


?>
  	<link rel="stylesheet" type="text/css" href="../CSS/Navbar.css">
  	<link rel="stylesheet" type="text/css" href="../CSS/date.css">
<body>
    <div id="date" class="container">
		<h5><?php echo $time ?></h5>
	</div>
</body>



