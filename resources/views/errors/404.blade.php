@extends('layouts.master')

@section('title', 'Σφάλμα 404')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Σφάλμα <b>404</b></h1>
                <strong>Η σελίδα δε βρέθηκε.</strong>
                <br>
                <a href="{{ url('/') }}">Αρχική</a>
            </div>
        </div>

    </div>
@stop