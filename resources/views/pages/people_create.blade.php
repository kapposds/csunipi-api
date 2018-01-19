@extends('layouts.master')

@section('title','Νέο Άτομο')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Νέο Άτομο</b></div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            <form class="form-horizontal" method="POST" action="/people" enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                {{--fullname--}}
                                <div class="form-group {{ $errors->has('fullname') ? ' has-error' : '' }}">
                                    <label for="people_fullname" class="col-md-2 control-label required">Ονοματεπώνυμο</label>

                                    <div class="col-md-10">
                                        <input placeholder="Επώνυμο Όνομα" type="text" class="form-control" id="people_fullname" name="fullname" value="{{ old('fullname') }}">

                                        @if ($errors->has('fullname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('fullname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{--alias--}}
                                <div class="form-group {{ $errors->has('alias') ? ' has-error' : '' }}">
                                    <label for="people_alias" class="col-md-2 control-label required">Alias</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="people_alias" name="alias" value="{{ old('alias') }}">

                                        @if ($errors->has('alias'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('alias') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                {{--category--}}
                                <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                                    <label for="people_category" class="col-md-2 control-label required">Κατηγορία</label>

                                    <div class="col-md-10">

                                        <select id="people_category" name="category" >
                                            <option selected disabled="disabled" style="color:gray" value="">
                                                - Επιλέξτε κατηγορία -
                                            </option>
                                            @foreach ($pages_with_people as $page)
                                                                                {{--if old filed matches the value of this option, this will be the selected --}}
                                                <option value="{{$page->alias}}" @if (old('category') == $page->alias) selected="selected" @endif >{{$page->viewtitle}}</option>

                                            @endforeach
                                        </select>

                                        @if ($errors->has('category'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--rank--}}
                                <div class="form-group {{ $errors->has('rank') ? ' has-error' : '' }}">
                                    <label for="rank" class="col-md-2 control-label required">Βαθμίδα</label>

                                    <div class="col-md-10">
                                        <select id="rank" name="rank" >
                                            <option disabled selected style="color:gray" value="">
                                                - Επιλέξτε βαθμίδα -
                                            </option>
                                            @foreach ($enums as $key => $value)

                                                <option value="{{$key}}" @if (old('rank') == $key) selected="selected" @endif >{{$value}}</option>

                                            @endforeach
                                        </select>

                                        @if ($errors->has('rank'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('rank') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--tags--}}
                                <div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
                                    <label for="tags" class="col-md-2 control-label">Ετικέτες</label>

                                    <div class="col-md-10">
                                        <input type="text" placeholder="π.χ. etiketa, ετικετα (χωρίς τόνους) ..." class="form-control" id="tags" name="tags" value="{{ old('tags') }}">
                                    </div>

                                    @if ($errors->has('tags'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tags') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form_image_area">

                                    {{--explanatory text for image--}}
                                    <div class="form-group" >

                                        <div class="col-md-12">
                                            <h3 align="center">Εικονίδιο</h3>
                                            <p class="explanatory_text"> Πληκτρολογήστε όνομα αρχείου από τα <a target="_blank" href="{{ url('/pictures/people') }}"> Εικονίδια Ατόμων (Αvatars)</a> π.χ. image.jpg</p>
                                            <p class="explanatory_text"> Εναλλακτικά μεταφορτώστε αρχείο.</p>
                                        </div>
                                    </div>

                                    {{--avatar--}}
                                    <div class="form-group {{ $errors->has('avatar') ? ' has-error' : '' }}">

                                        <label for="avatar" class="col-md-2 control-label">Εικονίδιο</label>

                                        <div class="col-md-8">
                                            <input type="text" placeholder="π.χ. image.jpg" class="form-control" id="avatar" name="avatar" value="{{ old('avatar') }}">

                                            @if ($errors->has('avatar'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('avatar') }}</strong>
                                        </span>
                                            @endif
                                        </div>

                                    </div>

                                    {{--image preview--}}
                                    <div class="form-group">
                                        <label for="image_preview" id="preview_label" class="col-md-2 control-label">Προεπισκόπηση</label>

                                        <div class="col-md-8">
                                            <img id="image_preview" class="avatar"  alt="Δε βρέθηκε"
                                                 src="/images/people/{{ (old('avatar')==null? 'default.jpg' : old('avatar')) }}"
                                            />
                                        </div>
                                    </div>


                                    {{--file--}}
                                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                        <label for="file" class="col-md-2 control-label">Μεταφόρτωση Αρχείου</label>

                                        <div class="col-md-8">
                                            <input type="file" name="file" id="file" />

                                            @if ($errors->has('file'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('file') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                    </div>

                                </div>

                                {{--location--}}
                                <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label for="location" class="col-md-2 control-label">Γραφείο</label>

                                    <div class="col-md-10">
                                        <input type="text" placeholder="Αριθμός Αίθουσας , Κτήριο"  class="form-control" id="location" name="location" value="{{ old('location') }}">

                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--office hours--}}
                                <div class="form-group {{ $errors->has('office_hours') ? ' has-error' : '' }}">
                                        <label for="office_hours" class="col-md-2 control-label">Ώρες Γραφείου</label>

                                    <div class="col-md-10">
                                        <input type="text" placeholder="ΩΩ:ΛΛ - ΩΩ:ΛΛ"  class="form-control" id="office_hours" name="office_hours" value="{{ old('office_hours') }}">

                                        @if ($errors->has('office_hours'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('office_hours') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--phone number--}}
                                <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <label for="phone_number" class="col-md-2 control-label">Τηλέφωνο</label>

                                    <div class="col-md-10">
                                        <input type="text" placeholder="π.χ. +30 210 4142322" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">

                                        @if ($errors->has('phone_number'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--email--}}
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-2 control-label">E-mail</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--website url--}}
                                <div class="form-group {{ $errors->has('website') ? ' has-error' : '' }}">
                                    <label for="website" class="col-md-2 control-label">Διεύθυνση Ιστοσελίδας</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">

                                        @if ($errors->has('website'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-success">
                                            Δημοσίευση
                                        </button>
                                    </div>
                                </div>

                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection