<?php
namespace Behavioral\State;

class Shutdown implements RobotState
{

    /**
     * @param RobotInterface $robot
     */
    public function doAction(RobotInterface $robot)
    {
        echo "Robot's system shutting down..." . PHP_EOL;
        $robot->setState(new Startup());
    }
}