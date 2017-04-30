<?php
namespace Behavioral\State;

interface RobotInterface
{
    /**
     * @param RobotState $robotState
     */
    public function setState(RobotState $robotState);

    public function doActionAccordingInternalState();
}