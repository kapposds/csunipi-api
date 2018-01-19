@extends('layouts.master')

@section('title', 'Νέα Εικόνα')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Νέο αρχείο εικόνας στον φάκελο: <b>{{$disk_name}}</b></div>
                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/pictures/{{$disk}}"  role="form" >
                            {{csrf_field()}}

                            {{--file--}}
                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-2 control-label required">Αρχείο</label>

                                <div class="col-md-8">
                                    <input type="file" name="file" id="file" />

                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--filename--}}
                            <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }}">
                                <label for="filename" class="col-md-2 control-label">Όνομα Αρχείου</label>

                                <div class="col-md-8">
                                    <input id="filename" type="text" class="form-control" name="filename" value="{{ old('filename') }}">

                                    @if ($errors->has('filename'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('filename') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--image preview--}}
                            <div class="form-group">
                                <label for="file" id="preview_label" class="col-md-2 control-label">Προεπισκόπηση</label>

                                <div class="col-md-8">
                                    <img class="picture_zoom" id="image_preview" hidden src="#" alt="Εικόνα" />
                                </div>
                            </div>

                            {{--submit--}}
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-success">
                                        Αποθήκευση Εικόνας
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
