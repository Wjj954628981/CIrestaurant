<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>Test Title</title>
</head>
<body>
    <h1>Users</h1> 

    

    
<?php 
	
       	foreach ($users as $row)
       	{
           echo "id: ".$row->idUser;
           echo '  type:'.$row->user_type;
           echo '  name:'.$row->username;
           echo '<br>';

       	}

       	echo "<br> WAITERS:  ";

       	foreach ($waiters as $row)
       	{
           echo "id: ".$row->idUser;
           echo '  type:'.$row->user_type;
           echo '  name:'.$row->username;
           echo '<br>';

       	}
?>

   <p>The end of the VIEW </p>

   <form name="input" action="test/insert" method="post">
   Username: <input type="text" name="user">
   <input type="submit" value="Submit">
   </form>

</body>
</html>