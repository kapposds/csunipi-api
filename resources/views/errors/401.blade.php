@extends('layouts.master')

@section('title', 'Σφάλμα 401')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Σφάλμα <b>401</b></h1>
                <strong>Χωρίς εξουσιοδότηση. Δε σας επιτρέπεται πρόσβαση στη σελίδα που ζητήσατε!</strong>
                <br>
                <a href="{{ url('/') }}">Αρχική</a>
            </div>
        </div>

    </div>
@stop