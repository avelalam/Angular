<html>
<h2 width ="200px"> ADMIN PANEL</p>
<p> <a href="logout">logout </a> </p>
<table>
<tr> 
<td width="150px"> USERS : </td> 
<td> Options : </td>
</tr>
<?php
session_start();
require('config.php');
   $query = mysql_query("SELECT `username` ,`key` FROM `user`");
   while($sql=mysql_fetch_array($query)){
	  $uname= $sql['username'];
      $key  = $sql['key'];	  	  
?>
<tr><td> <?php if($key!=1){echo $uname;} ?></td>
<td><?php
 if($key!=1){
   if($key==3){
	  echo" <a href='options.php?userid=$uname&key=$key'>Activate </a>";
   } else{
	   echo"<a href='options.php?userid=$uname&key=$key'>Deactivate </a>";
   }
 }
 }   
?>
</td>
</tr>
</table>
</html>