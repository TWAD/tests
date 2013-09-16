<?php

class MyWebTest extends Silex\WebTestCase {

    public function createApplication() {
        return require __DIR__ . '/../../app.php';        
    }
        
    public function testWelcomePage() {
        //echo ">>>HELLO<<<";
        
        $client = $this->createClient();
        
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk(),'response failed');
        
        $this->assertTrue($crawler->filter('html:contains(welcome)')->count()>0, 'no welcome in page');     
        
    }


}

