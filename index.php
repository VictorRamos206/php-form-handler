<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <h1>The Worlds Smallest Form Handler</h1>

    <?php
// "if it is raining {bring a jacket} or else {dont bring a jacket}"
  if(isset($_POST["FirstName"])){//show data 
      
    echo $_POST["FirstName"];
                                 
  }else{//show form
    echo  
      '
<form method="post" action="">
    
   <p>First Name: <input type="text" name="FirstName" /></p>

    <p><input type="submit"/></p>
    
  </form>
          ';
  }

    ?>
  
  
  </body>
</html>
