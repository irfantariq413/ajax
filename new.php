<?php
require('conn.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
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

</body>
</html>
