<?php
/**
 * Created by PhpStorm.
 * User: nikita.fl
 * Date: 29.03.2019
 * Time: 11:30
 */

namespace SweetBrides\Dates;


class Birthdays
{
    private $birthDate;
    private $todayDate;

    public function __construct($birthDate)
    {
        $this->birthDate = $birthDate;
        $this->todayDate = date('Y-m-d');
    }

    public function findTotalDays()
    {
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);

        $totalSecs = $todayTime - $birthTime;
        $totalHours = floor($totalSecs / 3600);
        $totalDays = floor($totalHours / 24);
        return $totalDays;
    }

    public function findTotalHours()
    {
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);

        $totalSecs = $todayTime - $birthTime;
        $totalHours = floor($totalSecs / 3600);
        return $totalHours;
    }

    public function findTotalSecs()
    {
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);

        $totalSecs = $todayTime - $birthTime;
        return $totalSecs;
    }

}