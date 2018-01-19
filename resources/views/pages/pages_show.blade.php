@extends('layouts.master')

@section('title','Πληροφορίες Σελίδας')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Πληροφορίες Σελίδας</b></div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {{--title--}}
                            <div class="form-group">
                                <label for="title" class="col-md-2 control-label">Τίτλος</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="title" name="title" value="{{$page->title}}">
                                </div>
                            </div>

                            {{--alias--}}
                            <div class="form-group">
                                <label for="alias" class="col-md-2 control-label">Alias</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="alias" name="alias" value="{{$page->alias}}">
                                </div>
                            </div>

                            {{--category--}}
                            <div class="form-group">
                                <label for="category" class="col-md-2 control-label">Κατηγορία</label>

                                <div class="col-md-10">
                                    <select disabled id="category" name="category" >
                                        <option selected style="color:gray">
                                            {{$page->menuitem->title}}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            {{--views--}}
                            <div class="form-group">
                                <label for="views" class="col-md-2 control-label">Προβολές</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="views" name="views" value="{{$page->views}}">
                                </div>
                            </div>

                            {{--content--}}
                            <div class="form-group">
                                <label for="content_editor" class="col-md-2 control-label">Περιεχόμενο</label>

                                <div class="col-md-10">
                                    <textarea disabled cols="80" rows="15" class="form-control ckeditor" id="content_editor_show" name="content">{{$page->content}}</textarea>
                                </div>
                            </div>

                            {{--created at--}}
                            <div class="form-group">
                                <label for="created_at" class="col-md-2 control-label">Δημιουργήθηκε</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="created_at" name="created_at" value="{{date('d/m/Y H:i', strtotime($page->created_at))}}">
                                </div>
                            </div>

                            {{--updated at--}}
                            <div class="form-group">
                                <label for="updated_at" class="col-md-2 control-label">Τροποποιήθηκε</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="updated_at" name="updated_at" value="{{date('d/m/Y H:i', strtotime($page->updated_at))}}">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-1 col-md-offset-2">
                                    <a href="/pages" class="btn btn-info">OK</a>
                                </div>

                                <div class="col-md-7">
                                    <form method="get" action="/pages/{{$page->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection