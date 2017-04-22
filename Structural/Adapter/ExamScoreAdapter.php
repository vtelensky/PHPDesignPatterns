<?php
namespace Structural\Adapter;

class ExamScoreAdapter implements GradeInterface
{
    /**
     * @var ExamScoreInterface
     */
    private $examScore;

    public function __construct(ExamScoreInterface $examScore)
    {
        $this->examScore = $examScore;
    }

    public function setExamScore(ExamScoreInterface $examScore)
    {
        $this->examScore = $examScore;
    }

    /**
     * @return string
     */
    public function getGrade()
    {
        $overallScore = floor($this->examScore->getOverallScore());

        $result = "F";
        if ($overallScore >= 10 && $overallScore  < 20) {
            $result = "E";
        }

        if ($overallScore  >= 20 && $overallScore  < 30) {
            $result = "D";
        }

        if ($overallScore  >= 30 && $overallScore  < 40) {
            $result = "C";
        }

        if ($overallScore  >= 40 && $overallScore  < 50) {
            $result = "B";
        }

        if ($overallScore  >= 50) {
            $result = "A";
        }
        return $result;
    }
}