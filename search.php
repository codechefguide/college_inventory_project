<body>
<table>
<tr>
  <th>Products</th>
  <th>Quantity</th>

</tr>
  <?php
    $conn=mysqli_connect("localhost","root","","oswa_inv");
    $set=$_POST['valueToSearch'];
    if($set){
      $show="SELECT * FROM products where name='$set'";
      $result=mysqli_query($conn,$show);
      while($rows=mysqli_fetch_array($result)){
        echo "<tr><td>".$rows['name']."</td><td>".$rows['quantity']."</td></tr>";

      }
    }
   ?>
</table>
</body>
