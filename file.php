


<?php
  try
{
	$data = new PDO('mysql:host=localhost;dbname=testphp;charset=utf8', 'root', 'your_password_root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


  
  $request= $data->prepare('INSERT INTO student(name, lastename, email) VALUES(?, ?, ?) ');
  
  $request->execute(array($_POST['name'], $_POST['lastename'], $_POST['email'])) ;

  echo 'your raquest has been registered successfully  thank you sir  ' . $_POST['name'] ;
  
 ?>

