<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

if( isset( $_POST['scrip'] ) )
{
  
 
    
    $query = 'INSERT INTO orders (
        scrip,
        quantity,
        price,
        action,
        type,
        date
      ) VALUES (
         "'.mysqli_real_escape_string( $connect, $_POST['scrip'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['quantity'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['price'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['action'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['type'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['date'] ).'"
      )';
    mysqli_query( $connect, $query );
    
    set_message( 'order has been added' );
    
  
  
  header( 'Location: orders.php' );
  die();
  
}

include( 'includes/header.php' );

?>

<h2>Add order</h2>

<form method="post">
  
  <label for="scrip">Scrip:</label>
  <input type="text" name="scrip" id="scrip">
    
  <br>
  
  <label for="quantity">Quantity:</label>
  <input type="text" name="quantity" id="quantity">

  <br>

    
  <label for="price">Price:</label>
  <input type="text" name="price" id="price">
  
  <br>
  
  
  <br>

  <label for="type">Type:</label>
  <?php
  
  $types = array( 'intraday', 'delivery' );
  
  echo '<select name="type" id="type">';
  foreach( $types as $key => $value )
  {
    echo '<option value="'.$value.'"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>


  <label for="date">Date:</label>
  <input type="date" name="date" id="date">
  
  <br>
  
  <label for="action">Action:</label>
  <?php
  
  $actions = array( 'buy', 'sell' );
  
  echo '<select name="action" id="action">';
  foreach( $actions as $key => $value )
  {
    echo '<option value="'.$value.'"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>
  
  <input type="submit" value="Add Order">
  
</form>

<p><a href="orders.php"><i class="fas fa-arrow-circle-left"></i> Return to Order List</a></p>


<?php

include( 'includes/footer.php' );

?>