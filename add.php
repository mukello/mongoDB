<html>
<head>
	<title>Add Data</title>
</head>
<body>

<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$data = array (
			'namacpu' => $_POST['namacpu'],
			'tipe' => $_POST['tipe'],
			'platform' => $_POST['platform'],
			'rilis' => $_POST['rilis'],
			'ramsisa' => $_POST['ramsisa'],
			'ramtotal' => $_POST['ramtotal']
		);
		
	$errorMessage = '';
	foreach ($data as $key => $value) {
		if (empty($value)) {
			$errorMessage .= $key . ' field is empty<br />';
		}
	}
	
	if ($errorMessage) {
		echo '<span style="color:red">'.$errorMessage.'</span>';
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	} else {
		
		$db->users->insert($data);
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
