<?php

namespace jroy\HTMLReport\Classes;

class Scenario
{
    /**
     * @var int
     */
    private $id;
    private $name;
    private $line;
    private $tags;
    private $loopCount;

    /** @var  bool */
    private $screenshotExists;

    /** @var  string */
    private $screenshotPath;

    /** @var  int */
    private $failureStep;

    /**
     * @var bool
     */
    private $passed;

    /**
     * @var Step[]
     */
    private $steps;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $base_path
     * @param string $screenshotFolder
     * @param string $featureName
     *
     * This function will set the properties required for a screenshot
     * It should be called if a scenario is failed, and in an afterScenario method
     * (this will ensure that the failure step has been set in an afterStep method)
     */
    public function setScreenshotProperties($base_path, $screenshotFolder, $featureName)
    {
        $this->screenshotPath = $screenshotFolder . str_replace(' ', '', $featureName . '/' . $this->getFailureStep() . '.png');
        $absolutePath = $base_path . '/' . $this->screenshotPath;
        $this->screenshotExists = file_exists($absolutePath);
    }

    /**
     * @return bool
     */
    public function doesScreenshotExist()
    {
        return $this->screenshotExists;
    }

    /**
     * @return string
     */
    public function getScreenshotPath()
    {
        return $this->screenshotPath;
    }

    /**
     * @param int $stepNumber
     */
    public function setFailureStepNumber($stepNumber)
    {
        $this->failureStep = $stepNumber;
    }

    public function getFailureStep()
    {
        return $this->failureStep;
    }

    /**
     * @return int
     */
    public function getLoopCount()
    {
        return $this->loopCount;
    }

    /**
     * @param int $loopCount
     */
    public function setLoopCount($loopCount)
    {
        $this->loopCount = $loopCount;
    }
    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return boolean
     */
    public function isPassed()
    {
        return $this->passed;
    }

    /**
     * @param boolean $passed
     */
    public function setPassed($passed)
    {
        $this->passed = $passed;
    }

    /**
     * @return Step[]
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Step[] $steps
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;
    }

    /**
     * @param Step $step
     */
    public function addStep($step)
    {
        $this->steps[] = $step;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLoopSize()
    {
        //behat
        return $this->loopCount > 0 ? sizeof($this->steps)/$this->loopCount : sizeof($this->steps);
    }
}
