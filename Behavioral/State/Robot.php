<?php
namespace Behavioral\State;

class Robot implements RobotInterface
{
    /**
     * @var RobotState
     */
    private $state;

    /**
     * @param RobotState $state
     */
    public function __construct(RobotState $state)
    {
        $this->state = $state;
    }

    /**
     * @param RobotState $state
     */
    public function setState(RobotState $state)
    {
        $this->state = $state;
    }

    public function doActionAccordingInternalState()
    {
        $this->state->doAction($this);
    }
}