<?php include('header.php')?>
  <div class="container">
  <a class="btn btn-primary" href="product/addproduct.php">Add product</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
    </div>

    <tbody>
    <?php
    $query= $conn->query("SELECT * FROM products");
    while ($products = $query->fetch_assoc()) {

       echo "<tr>
         <td>" . $products['id'] . "</td>
         <td>" . $products['name'] . "</td>
         <td>" . $products['quantity'] . "</td>
         <td>" . $products['price'] . "</td>
         <td></td>
      </tr>";

    }
    $conn->close();
       
    ?>
    </div>
<?php include('footer.php')?>

    
</table>




 


