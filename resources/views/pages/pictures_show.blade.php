@extends('layouts.master')

@section('title', 'Μεγέθνυση Εικόνας')

@section('content')
    <div class="container">

        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Προβολή Μεγέθυνσης Εικόνας</b></div>
                <div class="panel-body">
                    <div class="form-horizontal">

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Φάκελος</label>

                            <div class="col-md-10">
                                <input type="text" disabled class="form-control" id="filename" value="{{$disk_name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Όνομα Αρχείου</label>

                            <div class="col-md-10">
                                <input type="text" disabled class="form-control" id="filename" value="{{$file_name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Μεγέθυνση Εικόνας</label>

                            <div class="col-md-10">
                                <img class="picture_zoom" src="/images/{{$disk}}/{{$file_name}}">
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<img src="/images/{{$disk}}/{{$file_name}}">--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <a href="/pictures/{{$disk}}" class="btn btn-info">OK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
