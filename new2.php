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
        <th>Cid</th>
        <th>CityName</th>
      </tr>
    </thead>
    <tbody>
     <?php
		$res="SELECT * from city";
		$a=mysqli_query($conn,$res);
		while($b=mysqli_fetch_assoc($a)){
			
		
		?>
      <tr>
        <td><?php  echo $b['cid']   ;?></td>
        <td><?php  echo $b['cityname']   ;?></td>
      </tr>
      <?php  }  ?>
    </tbody>
  </table>
</div>

</body>
</html>
