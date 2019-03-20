<?php 

$time = date("l jS \of F Y H:i:s ", strtotime("+1 hours"));


?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../CSS/Navbar.css">
	<link rel="stylesheet" type="text/css" href="../CSS/date.css">
<body>
    <div id="date" class="container">
		<h5><?php echo $time ?></h5>
	</div>
</body>



