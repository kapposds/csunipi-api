@extends('layouts.master')

@section('title','Πληροφορίες Ατόμου')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Πληροφορίες Ατόμου</b></div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {{--fullname--}}
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Ονοματεπώνυμο</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="name" name="name" value="{{$person->fullname}}">
                                </div>
                            </div>

                            {{--alias--}}
                            <div class="form-group">
                                <label for="alias" class="col-md-2 control-label">Alias</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="alias" name="alias" value="{{$person->alias}}">
                                </div>
                            </div>

                            {{--category--}}
                            <div class="form-group">
                                <label for="category" class="col-md-2 control-label">Κατηγορία</label>

                                <div class="col-md-10">
                                    <select disabled id="category" name="category" >
                                        <option selected style="color:gray">
                                            {{$person->page->viewtitle}}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            {{--rank--}}
                            <div class="form-group">
                                <label for="rank" class="col-md-2 control-label">Βαθμίδα</label>

                                <div class="col-md-10">
                                    <select disabled id="rank" name="rank" >
                                        <option selected style="color:gray">
                                            {{$person->getRankName($person->rank)}}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            {{--tags--}}
                            <div class="form-group">
                                <label for="tags" class="col-md-2 control-label">Ετικέτες</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="tags" name="tags" value="{{$person->tags}}">
                                </div>
                            </div>

                            {{--avatar--}}
                            <div class="form-group">
                                <label for="avatar" class="col-md-2 control-label">Εικονίδιο</label>

                                <div class="col-md-8">
                                    <input type="text" disabled class="form-control" id="avatar" name="avatar" value="{{$person->avatar}}">
                                </div>
                                <div class="col-md-2">
                                    <img class="avatar" src="/images/people/{{$person->avatar}}" alt="Δε βρέθηκε">
                                </div>
                            </div>

                            {{--location--}}
                            <div class="form-group">
                                <label for="location" class="col-md-2 control-label">Γραφείο</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="location" name="location" value="{{$person->location}}">
                                </div>
                            </div>

                            {{--office hours--}}
                            <div class="form-group">
                                <label for="office_hours" class="col-md-2 control-label">Ώρες Γραφείου</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="office_hours" name="office_hours" value="{{$person->office_hours}}">
                                </div>
                            </div>

                            {{--phone number--}}
                            <div class="form-group">
                                <label for="phone_number" class="col-md-2 control-label">Τηλέφωνο</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="phone_number" name="phone_number" value="{{$person->phone_number}}">
                                </div>
                            </div>

                            {{--email--}}
                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">E-mail</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="email" name="email" value="{{$person->email}}">
                                </div>
                            </div>

                            {{--website url--}}
                            <div class="form-group">
                                <label for="website" class="col-md-2 control-label">Διεύθυνση Ιστοσελίδας</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="website" name="website" value="{{$person->website}}">
                                </div>
                            </div>

                            {{--created at--}}
                            <div class="form-group">
                                <label for="created_at" class="col-md-2 control-label">Δημιουργήθηκε</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="created_at" name="created_at" value="{{date('d/m/Y H:i', strtotime($person->created_at))}}">
                                </div>
                            </div>

                            {{--updated at--}}
                            <div class="form-group">
                                <label for="updated_at" class="col-md-2 control-label">Τροποποιήθηκε</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="updated_at" name="updated_at" value="{{date('d/m/Y H:i', strtotime($person->updated_at))}}">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-1 col-md-offset-2">
                                    <a href="/people" class="btn btn-info">OK</a>
                                </div>

                                <div class="col-md-7">
                                    <form method="get" action="/people/{{$person->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection