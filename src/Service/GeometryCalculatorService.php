<?php

namespace App\Service;

class GeometryCalculatorService
{
    
    /**
     * Find surfaceArea
     */
    public function surfaceArea($data1 = [], $data2 = []) {

        $result = [];

        foreach ($data1 as $i => $k) {

            if(isset($data1[$i]) && isset($data2[$i]){
                $result[] = $data1[$i] + $data2[$i];
            }
            
        }

        $data = array_sum($result);

        return $data;
    }


    /**
     * Find surfaceArea
     */
    public function sumDiameters(float $radius1, float $radius2) {

        $data = (2 * $radius1) + (2 * $radius1);

        return $data;
    }
}