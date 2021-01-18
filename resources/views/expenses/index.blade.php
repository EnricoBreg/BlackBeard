@extends('layouts.app');

@section('content')

<div class="container">
    <h1> Tutte le Spese </h1>   
    <a  href="{{ URL::action('ExpenseController@create') }}" class="btn btn-light float-md-right mb-2">+</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Importo</th>
            <th scope="col">Portafoglio</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $e)
                <tr>
                    <th scope="row">{{ date('d/m/Y', strtotime($e->paid_at)) }}</th>
                    <td>{{ $e->amount }} €</td>
                    <td>{{ $e->user->name }}</td>
                    <td>{{ $e->description }}</td>
                    <td><a href="{{ URL::action('ExpenseController@edit', $e) }}" class="btn btn-outline-primary btn-sm">Modifica</a></td>
                </tr>    
            @endforeach
        </tbody>
      </table>


</div>

@endsection