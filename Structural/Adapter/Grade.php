<?php
namespace Structural\Adapter;

class Grade implements GradeInterface
{
    /**
     * @var int $examPoints
     */
    private $examPoints;

    /**
     * @var string $subject
     */
    private $subject;

    /**
     * @param int $examPoints
     * @param string $subject
     */
    public function __construct($examPoints, $subject)
    {
        $this->examPoints = $examPoints;
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getGrade()
    {
        $result = "F";
        if ($this->examPoints >= 10 && $this->examPoints < 20) {
            $result = "E";
        }

        if ($this->examPoints >= 20 && $this->examPoints < 30) {
            $result = "D";
        }

        if ($this->examPoints >= 30 && $this->examPoints < 40) {
            $result = "C";
        }

        if ($this->examPoints >= 40 && $this->examPoints < 50) {
            $result = "B";
        }

        if ($this->examPoints >= 50) {
            $result = "A";
        }
        return $result;
    }
}