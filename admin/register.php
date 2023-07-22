<!doctype html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
  <title>Website Admin</title>
  
  <link href="styles.css" type="text/css" rel="stylesheet">
  
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  
</head>

<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

//secure();

if( isset( $_POST['first'] ) )
{
  
  if( $_POST['first'] and $_POST['last'] and $_POST['email'] and $_POST['password'] )
  {
    
    $query = 'INSERT INTO users (
        first,
        last,
        email,
        password,
        active
      ) VALUES (
        "'.mysqli_real_escape_string( $connect, $_POST['first'] ).'",
        "'.mysqli_real_escape_string( $connect, $_POST['last'] ).'",
        "'.mysqli_real_escape_string( $connect, $_POST['email'] ).'",
        "'.md5( $_POST['password'] ).'",
        "'.$_POST['active'].'"
      )';
    mysqli_query( $connect, $query );
    
    set_message( 'User has been added' );
    
  }

  /*
  // Example of debugging a query
  print_r($_POST);
  print_r($query);
  die();
  */

  header( 'Location: index.php' );
  die();
  
}

//include( 'includes/header.php' );

?>

<body>
  
  <h1>Register Page</h1>
  
    <hr>
  
  <?php echo get_message(); ?>
  
  <div style="max-width: 1500px; margin: auto; padding: 0 1%;">

<h2>Add User</h2>

<form method="post">
  
  <label for="first">First Name:</label>
  <input type="text" name="first" id="first">
  
  <br>
  
  <label for="last">Last Name:</label>
  <input type="text" name="last" id="last">
  
  <br>
  
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  
  <br>
  
  <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  
  <br>
  
  <label for="active">Active:</label>
  <?php
  
  $values = array( 'Yes', 'No' );
  
  echo '<select name="active" id="active">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>
  
  <input type="submit" value="Add User">
  
</form>
<!-- 
<p><a href="users.php"><i class="fas fa-arrow-circle-left"></i> Return to User List</a></p>

-->
<?php

include( 'includes/footer.php' );

?>