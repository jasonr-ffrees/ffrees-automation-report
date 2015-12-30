<?php

namespace jroy\HTMLReport\Renderer;

use Twig_Environment;
use Twig_Loader_Filesystem;

class TwigRenderer implements RendererInterface
{

    /**
     * Renders before an exercice.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderBeforeExercise($obj)
    {
        return '';
    }

    /**
     * Renders after an exercice.
     * @param object : HTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderAfterExercise($obj)
    {
        $templatePath = dirname(__FILE__).'/../../templates';
        $loader = new Twig_Loader_Filesystem($templatePath);
        $twig = new Twig_Environment($loader, array());
        $print = $twig->render('index.html.twig',
            array(
                'suites'          => $obj->getSuites(),
                'failedScenarios' => $obj->getFailedScenarios(),
                'passedScenarios' => $obj->getPassedScenarios(),
                'failedSteps'     => $obj->getFailedSteps(),
                'passedSteps'     => $obj->getPassedSteps(),
                'failedFeatures'  => $obj->getFailedFeatures(),
                'passedFeatures'  => $obj->getPassedFeatures(),
                'printStepArgs'   => $obj->getPrintArguments(),
                'printStepOuts'   => $obj->getPrintOutputs(),
                'printLoopBreak'  => $obj->getPrintLoopBreak(),
            )
        );

        return $print;
    }

    /**
     * Renders before a suite.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderBeforeSuite($obj)
    {
        // TODO: Implement renderBeforeSuite() method.
    }

    /**
     * Renders after a suite.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderAfterSuite($obj)
    {
        // TODO: Implement renderAfterSuite() method.
    }

    /**
     * Renders before a feature.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderBeforeFeature($obj)
    {
        // TODO: Implement renderBeforeFeature() method.
    }

    /**
     * Renders after a feature.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderAfterFeature($obj)
    {
        // TODO: Implement renderAfterFeature() method.
    }

    /**
     * Renders before a scenario.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderBeforeScenario($obj)
    {
        // TODO: Implement renderBeforeScenario() method.
    }

    /**
     * Renders after a scenario.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderAfterScenario($obj)
    {
        // TODO: Implement renderAfterScenario() method.
    }

    /**
     * Renders before an outline.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderBeforeOutline($obj)
    {
        // TODO: Implement renderBeforeOutline() method.
    }

    /**
     * Renders after an outline.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderAfterOutline($obj)
    {
        // TODO: Implement renderAfterOutline() method.
    }

    /**
     * Renders before a step.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderBeforeStep($obj)
    {
        // TODO: Implement renderBeforeStep() method.
    }

    /**
     * Renders after a step.
     * @param object : BehatHTMLFormatter object
     * @return string  : HTML generated
     */
    public function renderAfterStep($obj)
    {
        // TODO: Implement renderAfterStep() method.
    }

    /**
     * To include CSS
     * @return string  : HTML generated
     */
    public function getCSS()
    {
        // TODO: Implement getCSS() method.
    }

    /**
     * To include JS
     * @return string  : HTML generated
     */
    public function getJS()
    {
        // TODO: Implement getJS() method.
    }
}