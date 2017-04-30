<?php
namespace Behavioral\State;

interface RobotState
{
    /**
     * @param RobotInterface $robot
     */
    public function doAction(RobotInterface $robot);
}