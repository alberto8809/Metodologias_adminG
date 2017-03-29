<?php

require("class/ludoteca.php");    
$select_ = $_REQUEST['value'];
$values=Ludoteca::Recover_Tipo2(utf8_decode($select_));
?>
	
		<?php  foreach ($values as $value) {	?>
	<option value="<?php echo  utf8_encode($value['nombre']);?>"><?php echo  utf8_encode($value['nombre']);?>&nbsp;&nbsp;<?php echo  utf8_encode($value['total']);?></option>
		<?php 	}?>



