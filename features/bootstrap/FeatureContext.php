<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given /^I generate a simple report$/
     */
    public function iGenerateASimpleReport()
    {
        printf('generating...');
    }

    /**
     * @Given /^I fail the test$/
     */
    public function iFailTheTest()
    {
        PHPUnit_Framework_Assert::fail('This test has failed');
    }
}
