<?php
require 'vendor/autoload.php';

$app=new \Silex\Application(array('debug'=>true));


$app->get('/welcome',function(){

	return file_get_contents('index.tpl.html');
	return 'welcome';	
});

$app->get('/hello/{name}',function($name){ 
	return 'hello '.$name;
});


$app->get('/calcul/{nb1}/{nb2}',function($nb1,$nb2){
	$calculette=new Calculette();
	return $nb1.' + '.$nb2.' = '.$calculette->add($nb1,$nb2);
});

return $app;
