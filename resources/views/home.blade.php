@extends('layouts.app')

@section('content')
    <div class="row">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="col-md-12">
            <h1 class="text-center">Автоматичний підбір обладнання</h1>
            <form method="POST" action="{{ route('select.components') }}">
                @csrf
                <div class="mb-3" style="margin-bottom: 20px">
                    <label for="consumptionPower" class="form-label">Потужність споживача (Вт):</label>
                    <input type="number" class="form-control" id="consumptionPower" min="0" name="consumptionPower" required>
                </div>
                <div class="mb-3" style="margin-bottom: 20px">
                    <label for="operationTime" class="form-label">Час роботи (години):</label>
                    <input type="number" class="form-control" id="operationTime" min="0" name="operationTime" required>
                </div>
                <button type="submit" class="btn btn-primary">Підібрати компоненти</button>
            </form>
        </div>
    </div>
@endsection
