<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//
echo PHP_EOL,'-------------------- goutte bootsrap fichier '__DIR__.' '.__FILE__.PHP_EOL;
/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
//    public function __construct(array $parameters)
//    {
//        // Initialize your context here
//    }

	 /**
     * @Given /^I Wait "([^"]*)"$/
     */
    public function iWait2($arg1)
    {
        throw new \Exception("hello word");
    }



}
