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


$app->match('fill',function(\Symfony\Component\HttpFoundation\Request $request){

	if($request->getMethod()=='POST'){
			
		$value=$request->get('name');

		return 'you filled the form with '.$value;

	}

	return '<form method="post" ><input type="text" name="name"><button type="text" >GO</button></form>';

});

return $app;
