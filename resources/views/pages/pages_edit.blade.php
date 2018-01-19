@extends('layouts.master')

@section('title','Επεξεργασία Σελίδας')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Επεξεργασία Σελίδας</b></div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            <form class="form-horizontal" method="POST" action="/pages/{{$page->id}}" enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}        {{method_field('patch') }}

                                {{--title--}}
                                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="page_title" class="col-md-2 control-label required">Τίτλος</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="page_title" name="title" value="{{ (old('title') == null)? $page->title:old('title') }}">

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{--alias--}}
                                <div class="form-group {{ $errors->has('alias') ? ' has-error' : '' }}">
                                    <label for="page_alias" class="col-md-2 control-label required">Alias</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="page_alias" name="alias" value="{{ (old('alias') == null)? $page->alias:old('alias') }}">

                                        @if ($errors->has('alias'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('alias') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--content--}}
                                <div id="page_content_edit" class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    <div class="col-md-10 col-md-offset-2">
                                        <p  class="explanatory_text_uncentered col-md-10" > Τα URL εικόνων για το περιεχόμενο των σελίδων βρίσκονται στις: <a target="_blank" href="{{ url('/pictures/pages') }}"> Εικόνες σε περιεχόμενο Σελίδων</a></p>

                                        <div class="col-md-8" >
                                            <label class="unbold" for="languages" style="text-decoration:none; " >Γλώσσα Συντάκτη:</label>
                                            <select onchange="createEditor( this.value );" id="languages" title="Γλώσσα Συντάκτη">
                                                <option disabled value="">- Επιλέξτε γλώσσα συντάκτη -</option>
                                                <option value="en" >Αγγλικά</option>
                                                <option value="el">Ελληνικά</option>
                                            </select>
                                        </div>

                                    </div>

                                    <label for="content_editor" class="col-md-2 control-label required">Περιεχόμενο</label>

                                    <div class="col-md-10">
                                        <textarea cols="80" rows="10" class="form-control ckeditor" id="content_editor" name="ckeditor_content" >{{ (old('ckeditor_content') == null)? $page->content:old('ckeditor_content') }}</textarea>

                                        @if ($errors->has('ckeditor_content'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('ckeditor_content') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-warning">
                                            Ενημέρωση
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