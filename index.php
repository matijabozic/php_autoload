<?php
	
	// Include Autoload
	
	require_once('src/Core/Autoload/Autoload.php');
	
	// Register class autoloading for PSR-0 compatible libraries	
	
	$psr0 = new Autoload();
	$psr0->addLibrary('path/to/vendor/', 'Doctrine');
	$psr0->addLibrary('path/to/vendor/', 'Zend');
	$psr0->register();	
	
	// Register class autoloading for PEAR compatible libraries
	
	$pear = new Autoload();
	$pear->setNamespaceSeparator('_');
	$pear->addLibrary('path/to/vendor/', 'Twig');
	$pear->register();
	
	// Thats it!
	
?>