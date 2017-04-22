<?php
namespace Structural\Adapter;

interface ExamScoreInterface
{
    /**
     * @param float $points
     */
    public function setExamPoints($points);

    /**
     * @param float $points
     */
    public function setBonusPoints($points);

    /**
     * @return float
     */
    public function getOverallScore();
}