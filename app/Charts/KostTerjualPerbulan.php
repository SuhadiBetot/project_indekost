<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class KostTerjualPerbulan
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Kost Tersewa Perbulan')
            ->addData('Kost Tersewa', [1, 2, 2, 3, 2, 1])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni']);
    }
}
