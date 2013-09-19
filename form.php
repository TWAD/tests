<?php 
if(isset($_POST['name'])){
	echo "Welcome ".$_POST['name'];
}else{
	echo "Merci de remplir le champ";
}
?>
<form action="#" method="post">	
	<input type="text" name="name"/>
	<input type="submit" value="Valider"/>
</form>