<?php include('header.php')?>
  <div class="container">
    
  <a class="btn btn-primary" href="orders/addorder.php">Add Person</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Birthplace</th>
      
    </tr>
  </thead>
  
 
    <tbody>
    <?php
    $query= $conn->query("SELECT * FROM persons");
    while ($person = $query->fetch_assoc()) {

       echo "<tr>
         <td>" . $person['id'] . "</td>
         <td>" . $person['name'] . "</td>
         <td>" . $person['gender'] . "</td>
         <td>" . $person['birthday'] . "</td>
         <td>" . $person['place_of_birth'] . "</td>
         <td></td>
      </tr>";

    }
    $conn->close();
       
    ?>
    </div>
<?php include('footer.php')?>

    
</table>



 


