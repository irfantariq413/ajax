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
        <th>President</th>
        <th>Prime</th>
      </tr>
    </thead>
    <tbody>
     <?php
		$res="SELECT * from country";
		$a=mysqli_query($conn,$res);
		while($b=mysqli_fetch_assoc($a)){
			
		
		?>
      <tr>
        <td><?php  echo $b['id']   ;?></td>
        <td><?php  echo $b['name']   ;?></td>
        <td><?php  echo $b['president']   ;?></td>
        <td><?php  echo $b['prime']   ;?></td>
      </tr>
      <?php  }  ?>
    </tbody>
  </table>
</div>

</body>
</html>
