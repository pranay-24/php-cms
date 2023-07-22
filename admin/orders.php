<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

if( isset( $_GET['delete'] ) )
{
  
  $query = 'DELETE FROM orders
    WHERE id = '.$_GET['delete'].'
    LIMIT 1';
  mysqli_query( $connect, $query );
    
  set_message( 'Order has been deleted' );
  
  header( 'Location: orders.php' );
  die();
  
}

include( 'includes/header.php' );

$query = 'SELECT *
  FROM orders
  ORDER BY date DESC';
$result = mysqli_query( $connect, $query );

?>

<h2>Manage orders</h2>

<table>
  <tr>
    <th></th>
    <th align="center">ID</th>
    <th align="left">Scrip</th>
    <th align="center">Qty</th>
    <th align="center">Price</th>
    <th align="center">Action</th>
    <th align="center">Type</th>
    <th align="center">Date</th>
  </tr>
  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
    <tr>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left"><?php echo $record['scrip']; ?></td>
      <td align="center"><?php echo $record['quantity'] ; ?></td>
      <td align="center"><?php echo $record['price']; ?></td>
      <td align="center"><?php echo $record['action']; ?></td>
      <td align="center"><?php echo $record['type']; ?></td>
      <td align="center"><?php echo $record['date']; ?></td>
    
    </tr>
  <?php endwhile; ?>
</table>

<p><a href="orders_add.php"><i class="fas fa-plus-square"></i> Add order</a></p>


<?php

include( 'includes/footer.php' );

?>