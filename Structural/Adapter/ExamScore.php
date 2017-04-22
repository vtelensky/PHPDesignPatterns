<?php
namespace Structural\Adapter;

class ExamScore implements ExamScoreInterface
{
    /**
     * @var string $subject
     */
    private $subject;

    /**
     * @var float $examPoints
     */
    private $examPoints;

    /**
     * @var float $bonusPoints
     */
    private $bonusPoints;

    public function __construct($subject, $examPoints, $bonusPoints = 0.0)
    {
        $this->subject = $subject;
        $this->examPoints = $examPoints;
        $this->bonusPoints = $bonusPoints;
    }

    /**
     * @param float $points
     */
    public function setExamPoints($points)
    {
        $this->examPoints = $points;
    }

    /**
     * @param float $points
     */
    public function setBonusPoints($points)
    {
        $this->bonusPoints = $points;
    }

    /**
     * @return float
     */
    public function getOverallScore()
    {
        return $this->examPoints + $this->bonusPoints;
    }
}