<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

if( isset( $_POST['email'] ) )
{
  
  $query = 'SELECT *
    FROM users
    WHERE email = "'.$_POST['email'].'"
    AND password = "'.md5( $_POST['password'] ).'"
    AND active = "Yes"
    LIMIT 1';
  $result = mysqli_query( $connect, $query );
  
  if( mysqli_num_rows( $result ) )
  {
    
    $record = mysqli_fetch_assoc( $result );
    
    $_SESSION['id'] = $record['id'];
    $_SESSION['email'] = $record['email'];
    
    header( 'Location: dashboard.php' );
    die();
    
  }
  else
  {
    
    set_message( 'Incorrect email and/or password' );
    
    header( 'Location: index.php' );
    die();
    
  } 
  
}

include( 'includes/header.php' );

?>
<?php
// Handle the link click and redirect to register.php
if (isset($_GET['register_link'])) {
    header('Location: register.php');
    exit(); // Make sure to include an exit() after the header() function to stop further script execution
}
?>

<div style="max-width: 400px; margin:auto">

  <form method="post">

    <label for="email">Email:</label>
    <input type="text" name="email" id="email">

    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <br>

    <input type="submit" value="Login">

  </form>
 
  <a href="?register_link=true">Click here to register</a>
</div>

<?php

include( 'includes/footer.php' );

?>