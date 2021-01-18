@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> Registra una nuova spesa </h1>
        <form action="{{ URL::action('ExpenseController@store') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="paid_at">Data</label>
                <input type="date" class="form-control" name="paid_at">
                <small class="form-text text-muted">Inserisci la data del pagamento</small>
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" name="description">
                <small class="form-text text-muted">Inserisci una breve descrizione</small>
            </div>

            <div class="form-group">
                <label for="amount">Importo</label>
                <input type="number" class="form-control" name="amount">
                <small class="form-text text-muted">Inserisci l'importo della spesa</small>
            </div>

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <button type="submit" class="btn btn-primary">Salva</button>
            <a href="{{ URL::action('ExpenseController@index') }}" class="btn btn-secondary">Indietro</a>
        </form>
    </div>
    
@endsection