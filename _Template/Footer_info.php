<table border="1" align="center" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td><b>Grupos: </b></td>
      <td><?= str_replace(","," ",$MM_authorizedUsers); ?>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Usuarios:</strong></td>
      <td><?php 
		  /*
$Grupos = explode("," , $MM_authorizedUsers);
foreach ( $Grupos as $Grupo ){
	$sql = "SELECT * FROM Usuario 
			 WHERE Privilegios = '$Grupo'";
	$RS = $mysqli->query($sql);
	while ($row = $RS->fetch_assoc()) {
		extract($row);
		echo " $Usuario ($Privilegios)  ";
    	echo "<br>";
	}
}

*/
	  
	  ?>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><?= $sql; ?></td>
    </tr>
    <tr>
      <td colspan="2"><?= $debug; ?></td>
    </tr>
  </tbody>
</table>
