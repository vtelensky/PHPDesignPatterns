<?php
namespace Behavioral\State;

class Work implements RobotState
{

    /**
     * @param RobotInterface $robot
     */
    public function doAction(RobotInterface $robot)
    {
        echo "Robot is working..." . PHP_EOL;
        $robot->setState(new Shutdown());
    }
}