<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use App\Models\Cable;
use App\Models\Inverter;
use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function selectComponents(Request $request)
    {
        $consumptionPower = $request->input('consumptionPower');
        $operationTime = $request->input('operationTime');

        // 1. Підбір інвертора
        $inverter = $this->selectInverter($consumptionPower);
        if (!$inverter) {
            return redirect()->route('home')->with('error', 'Інвертор не знайдений для такої потужності.');
        }

        // 2. Підбір батареї
        $battery = $this->selectBattery($inverter, $consumptionPower, $operationTime);
        if (!$battery) {
            $text = 'Необхідна батарея не знайдена. Потрібна ємність: ' . $this->calculateBatteryCapacity($consumptionPower, $operationTime, $inverter) . ' А*год' . ' Інвертор: ' . $inverter->name;
            return redirect()->route('home')->with('error', $text);
        }

        $requiredCapacity = $this->calculateBatteryCapacity($consumptionPower, $operationTime, $inverter);

        // 3. Підбір кабеля
        $cable = $this->selectCable($inverter, $consumptionPower);
        if (!$cable) {
            // show selected inverter and battery
            $text = 'Необхідний кабель не знайдений. Інвертор: ' . $inverter->name . ' Батарея: ' . $battery->name;

            return redirect()->route('home')->with('error', $text);
        }

        // Повертаємо дані на єдину сторінку
        return view('result', compact('consumptionPower','operationTime', 'inverter', 'battery', 'cable', 'requiredCapacity'));
    }

    // Функція для підбору інвертора
    private function selectInverter($consumptionPower)
    {
        // Запас по потужності 20%
        $consumptionPower = $consumptionPower * 1.2;

        return Inverter::where('power', '>=', $consumptionPower)
            ->orderBy('power')
            ->first();
    }

    // Функція для підбору батареї
    private function selectBattery($inverter, $consumptionPower, $operationTime)
    {
        $requiredCapacity = $this->calculateBatteryCapacity($consumptionPower, $operationTime, $inverter);

        return Battery::where('voltage', $inverter->voltage)
            ->where('capacity', '>=', $requiredCapacity)
            ->orderBy('capacity')
            ->first();
    }

    // Функція для обчислення ємності батареї
    private function calculateBatteryCapacity($consumptionPower, $operationTime, $inverter)
    {
        return round(($consumptionPower * $operationTime) / $inverter->voltage); // в А*год
    }

    // Функція для підбору кабеля
    private function selectCable($inverter, $consumptionPower)
    {
        $maxCurrent = $consumptionPower / $inverter->voltage;

        return Cable::where('max_current', '>=', $maxCurrent)
            ->where('power_rating', '>=', $consumptionPower)
            ->orderBy('power_rating')
            ->first();
    }
}
