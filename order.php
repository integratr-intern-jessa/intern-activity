<?php include('header.php')?>
  <div class="container">
  <a class="btn btn-primary" href="orders/addorder.php">Add order</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Person ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
    </div>

    <tbody>
    <?php
    $query= $conn->query("SELECT * FROM orders");
    while ($orders = $query->fetch_assoc()) {

       echo "<tr>
         <td>" . $orders['id'] . "</td>
         <td>" . $orders['person_id'] . "</td>
         <td>" . $orders['product_id'] . "</td>
         <td>" . $orders['quantity'] . "</td>
         <td>" . $orders['amount'] . "</td>
         <td></td>
      </tr>";

    }
    $conn->close();
       
    ?>
    </div>
<?php include('footer.php')?>

    
</table>
   


 


