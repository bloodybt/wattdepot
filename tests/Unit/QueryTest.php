<?php

namespace Tests\Unit;


use App\Http\Controllers\SelectionController;
use App\Models\Inverter;
use Tests\TestCase;

class QueryTest extends TestCase
{
    public function testSelectInverter()
    {
        $controller = new SelectionController();


        $consumptionPower = 1;
        $result = $controller->selectInverter($consumptionPower);
        
        $name = $result->name;

        $this->assertEquals("Inverter",$name);
    }

    public function testSelectBattery()
    {
        $controller = new SelectionController();
        
        $consumptionPower = 1;
        $operationTime = 1;
        $inverter = $controller->selectInverter($consumptionPower);

        $result = $controller->selectBattery($inverter, $consumptionPower, $operationTime);
        
        $name = $result->name;

        $this->assertEquals("Battery",$name);
    }

}