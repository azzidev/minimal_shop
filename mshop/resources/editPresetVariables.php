<?php
	$variable = $_POST['variable'];;
	$variable_content = $_POST['variable_content'];;

	$file = '../includes/preset.php'; 

	function change_config_file_settings ($filePath, $newSettings) {
	    $old = get_defined_vars();
	    include($filePath);
	    $new = get_defined_vars();
	    $fileSettings = array_diff($new, $old);
	    $fileSettings = array_merge($fileSettings, $newSettings);
	    $newFileStr = "<?php\n\n";
	    foreach ($fileSettings as $name => $val) {
	        $newFileStr .= "\${$name} = " . var_export($val, true) . ";\n";
	    }
	    file_put_contents($filePath, $newFileStr);
	}

	$newSettings = array(
	    "$variable" => "$variable_content"
	);
	change_config_file_settings($file, $newSettings);
?>