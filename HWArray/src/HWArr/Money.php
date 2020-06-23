<?php

namespace HWArr;

class Money
{
    protected $money;
    // protected $course;
    // protected $rub;
    // protected $usd;
    // protected $eur;

public function __construct($money=0)
{
    $this->setMoney($money);
}
    public function setMoney(float $money)
    {
        $this->money = $money;
        return $this;
    }
    // public function setСourse(float $course)
    // {
    //     $this->course = $course;
    //     return $this;
    // }
    // public function setСourseRub(float $rub)
    // {
    //     $this->rub = $rub;
    //     return $this;
    // }
    // public function setСourseUsd(float $usd)
    // {
    //     $this->usd = $usd;
    //     return $this;
    // }
    // public function setСourseEur(float $eur)
    // {
    //     $this->eur = $eur;
    //     return $this;
    // }
    // public function Val()
    // {
    //     return $this->money / $this->course;
    // }
    public function toUsd($usd)
    {
        return $this->money / $usd;
    }
    public function toRub($rub)
    {
        return $this->money / $rub * 100;
    }
    public function toEur($eur)
    {
        return $this->money / $eur;
    }
}
