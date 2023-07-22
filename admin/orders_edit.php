<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

if( !isset( $_GET['id'] ) )
{
  
  header( 'Location: orders.php' );
  die();
  
}

if( isset( $_POST['scrip'] ) )
{
  
 
    
    $query = 'UPDATE orders SET
      scrip = "'.mysqli_real_escape_string( $connect, $_POST['scrip'] ).'",
      quantity = "'.mysqli_real_escape_string( $connect, $_POST['quantity'] ).'",
      price = "'.mysqli_real_escape_string( $connect, $_POST['price'] ).'",
      action = "'.mysqli_real_escape_string( $connect, $_POST['action'] ).'",
      type = "'.mysqli_real_escape_string( $connect, $_POST['type'] ).'",
      date = "'.mysqli_real_escape_string( $connect, $_POST['date'] ).'"
      WHERE id = '.$_GET['id'].'
      LIMIT 1';
    mysqli_query( $connect, $query );
    
    set_message( 'Oredr has been updated' );
    
  

  header( 'Location: orders.php' );
  die();
  
}


if( isset( $_GET['id'] ) )
{
  
  $query = 'SELECT *
    FROM orders
    WHERE id = '.$_GET['id'].'
    LIMIT 1';
  $result = mysqli_query( $connect, $query );
  
  if( !mysqli_num_rows( $result ) )
  {
    
    header( 'Location: orders.php' );
    die();
    
  }
  
  $record = mysqli_fetch_assoc( $result );
  
}

include( 'includes/header.php' );

?>

<h2>Edit Order</h2>

<form method="post">
  
  <label for="scrip">scrip:</label>
  <input type="text" name="scrip" id="scrip" value="<?php echo htmlentities( $record['scrip'] ); ?>">
    
  <br>

  <label for="quantity">Quantity:</label>
  <input type="text" name="quantity" id="quantity" value="<?php echo htmlentities( $record['quantity'] ); ?>">

  <br>

  <label for="price">Price:</label>
  <input type="text" name="price" id="price" value="<?php echo htmlentities( $record['price'] ); ?>">
  
  <br>

  <label for="date">Date:</label>
  <input type="date" name="date" id="date" value="<?php echo htmlentities( $record['date'] ); ?>">
    
  <br>

  <label for="type">Type:</label>
  <?php
  
  $types = array( 'intraday', 'delivery' );
  
  echo '<select name="type" id="type">';
  foreach( $types as $key => $value )
  {
    echo '<option value="'.$value.'"';
    if( $value == $record['type'] ) echo ' selected="selected"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>

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
  
  <input type="submit" value="Edit order">
  
</form>

<p><a href="orders.php"><i class="fas fa-arrow-circle-left"></i> Return to order List</a></p>


<?php

include( 'includes/footer.php' );

?>