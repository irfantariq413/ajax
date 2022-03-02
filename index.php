<?php
require('conn.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" id="personal" href="#">Personal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="city" href="#">City</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="country" href="#">Country</a>
    </li>
  </ul>
</nav>
<h1 class="text-center">AJAX Learning</h1>
	<div id="new">
		<div class="container">          
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>name</th>
        <th>Percentage</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
     <?php
		$res="SELECT * from personal";
		$a=mysqli_query($conn,$res);
		while($b=mysqli_fetch_assoc($a)){
			
		
		?>
      <tr>
        <td><?php  echo $b['id']   ;?></td>
        <td><?php  echo $b['name']   ;?></td>
        <td><?php  echo $b['percentage']   ;?></td>
        <td><?php  echo $b['city']   ;?></td>
      </tr>
      <?php  }  ?>
    </tbody>
  </table>
</div>
	</div>
	<script>
	$('#personal').click(function(){
		$.ajax({
			url:"new.php",
			type:"post",
			success:function(data){
				$('#new').html(data);
			}
		})
	});
		$('#city').click(function(){
		$.ajax({
			url:"new2.php",
			type:"post",
			success:function(data){
				$('#new').html(data);
			}
		})
	});
		$('#country').click(function(){
		$.ajax({
			url:"new3.php",
			type:"post",
			success:function(data){
				$('#new').html(data);
			}
		})
	});
	</script>
</body>
</html>