
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='ala.hamed@esprit.tn';
											$sujet='test mail en local';
											$texte=$_POST['texte'];
											$header='From :  test@gmail.com';
											mail($to,$sujet,$texte,$header);
									     	}

									     	header('Location: mailingala.php');

		?>

	
													
</form>
</body>
</html>