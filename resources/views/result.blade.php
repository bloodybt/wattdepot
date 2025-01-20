@extends('layouts.app')

@section('content')
    <h2>Результати підбору компонентів</h2>
    <h3>Введені дані</h3>
    <p><strong>Потужність споживача:</strong> {{ $consumptionPower }} Вт</p>
    <p><strong>Необхідний час роботи:</strong> {{ $operationTime }} Годин</p>

    <hr>

    @if(isset($inverter->image) && !empty($inverter->image))
    <img height="150" width="150" src="{{ $inverter->image }}" alt="">
    @endif
    
    <h3>Інвертор</h3>
    @if(isset($inverter->url) && !empty($inverter->url))
    <p><strong>Посилання:</strong>{{ $inverter->url }}</p>
    @endif
    <p><strong>Назва:</strong> {{ $inverter->name }}</p>
    <p><strong>Потужність:</strong> {{ $inverter->power }} Вт</p>
    <p><strong>Напруга:</strong> {{ $inverter->voltage }} В</p>

    @if(isset($battery->image) && !empty($battery->image))
    <img height="150" width="150" src="{{ $battery->image }}" alt="">
    @endif
    <h3>Батарея</h3>
    @if(isset($battery->url) && !empty($battery->url))
    <p><strong>Посилання:</strong>{{ $battery->url }}</p>
    @endif
    <p><strong>Назва:</strong> {{ $battery->name }}</p>
    <p><strong>Ємність:</strong> {{ $battery->capacity }} Ah</p>
    <p><strong>Напруга:</strong> {{ $battery->voltage }} В</p>
    <p><strong>Необхідна ємність:</strong> {{ $requiredCapacity }} Ah</p>

    @if(isset($cable->image) && !empty($cable->image))
    <img height="150" width="150" src="{{ $cable->image }}" alt="">
    @endif
    <h3>Кабель</h3>
    @if(isset($cable->url) && !empty($cable->url))
    <p><strong>Посилання:</strong>{{ $cable->url }}</p>
    @endif
    <p><strong>Назва:</strong> {{ $cable->name }}</p>
    <p><strong>Максимальний струм:</strong> {{ $cable->max_current }} А</p>
    <p><strong>Потужність:</strong> {{ $cable->power_rating }} Вт</p>
@endsection
