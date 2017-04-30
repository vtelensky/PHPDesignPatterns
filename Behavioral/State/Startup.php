<?php
namespace Behavioral\State;

class Startup implements RobotState
{

    /**
     * @param RobotInterface $robot
     */
    public function doAction(RobotInterface $robot)
    {
        echo "Robot's system starting up..." . PHP_EOL;
        $robot->setState(new Work());
    }
}