@extends('layouts.app')

@section('content')
    <h2>Результати підбору компонентів</h2>
    <h3>Введені дані</h3>
    <p><strong>Потужність споживача:</strong> {{ $consumptionPower }} Вт</p>
    <p><strong>Необхідний час роботи:</strong> {{ $operationTime }} Годин</p>

    <hr>

    <h3>Інвертор</h3>
    <p><strong>Назва:</strong> {{ $inverter->name }}</p>
    <p><strong>Потужність:</strong> {{ $inverter->power }} Вт</p>
    <p><strong>Напруга:</strong> {{ $inverter->voltage }} В</p>

    <h3>Батарея</h3>
    <p><strong>Назва:</strong> {{ $battery->name }}</p>
    <p><strong>Ємність:</strong> {{ $battery->capacity }} Ah</p>
    <p><strong>Напруга:</strong> {{ $battery->voltage }} В</p>
    <p><strong>Необхідна ємність:</strong> {{ $requiredCapacity }} Ah</p>

    <h3>Кабель</h3>
    <p><strong>Назва:</strong> {{ $cable->name }}</p>
    <p><strong>Максимальний струм:</strong> {{ $cable->max_current }} А</p>
    <p><strong>Потужність:</strong> {{ $cable->power_rating }} Вт</p>
@endsection
