@extends('layouts.master')

@section('title','Πληροφορίες Άρθρου')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Πληροφορίες Άρθρου</b></div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            {{--title--}}
                            <div class="form-group">
                                <label for="title" class="col-md-2 control-label">Τίτλος</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="title" name="title" value="{{$article->title}}">
                                </div>
                            </div>

                            {{--alias--}}
                            <div class="form-group">
                                <label for="alias" class="col-md-2 control-label">Alias</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="alias" name="alias" value="{{$article->alias}}">
                                </div>
                            </div>

                            {{--category--}}
                            <div class="form-group">
                                <label for="category" class="col-md-2 control-label">Κατηγορία</label>

                                <div class="col-md-10">
                                    <select disabled id="category" name="category" >
                                        <option selected style="color:gray">
                                            {{$article->page->title}}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            {{--thumbnail--}}
                            <div class="form-group">
                                <label for="thumbnail" class="col-md-2 control-label">Εικονίδιο</label>

                                <div class="col-md-8">
                                    <input type="text" disabled class="form-control" id="thumbnail" name="thumbnail" @if($article->thumbnail) value="{{$article->thumbnail}}" @else value="-"  @endif >
                                </div>

                                @if($article->thumbnail)
                                    <div class="col-md-2">
                                        <img class="avatar" src="/images/thumbnails/{{$article->thumbnail}}" alt="Δε βρέθηκε">
                                    </div>
                                @endif
                            </div>

                            {{--attachement--}}
                            <div class="form-group">
                                <label for="attachement" class="col-md-2 control-label">Συνημμένο</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="attachement" name="attachement"
                                           @if($article->attachement == 1) value="ΝΑΙ" @else value="OXI"  @endif >
                                </div>
                            </div>

                            @if ($article->attachement == 1)
                            {{--downloads--}}
                            <div class="form-group">
                                <label for="downloads" class="col-md-2 control-label">Λήψεις</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="downloads" name="downloads" value="{{$article->downloads}}">
                                </div>
                            </div>
                            @endif

                            {{--views--}}
                            <div class="form-group">
                                <label for="views" class="col-md-2 control-label">Προβολές</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="views" name="views" value="{{$article->views}}">
                                </div>
                            </div>

                            {{--content--}}
                            <div class="form-group">
                                <label for="content_editor" class="col-md-2 control-label">Περιεχόμενο</label>

                                <div class="col-md-10">
                                    <textarea disabled cols="80" rows="15" class="form-control ckeditor" id="content_editor_show" name="content">{{$article->content}}</textarea>

                                    {{--<input type="text" disabled class="form-control" id="content" name="content" value="{{$article->content}}">--}}
                                </div>
                            </div>

                            {{--created at--}}
                            <div class="form-group">
                                <label for="created_at" class="col-md-2 control-label">Δημιουργήθηκε</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="created_at" name="created_at" value="{{date('d/m/Y H:i', strtotime($article->created_at))}}">
                                </div>
                            </div>

                            {{--updated at--}}
                            <div class="form-group">
                                <label for="updated_at" class="col-md-2 control-label">Τροποποιήθηκε</label>

                                <div class="col-md-10">
                                    <input type="text" disabled class="form-control" id="updated_at" name="updated_at" value="{{date('d/m/Y H:i', strtotime($article->updated_at))}}">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-1 col-md-offset-2">
                                    <a href="/articles" class="btn btn-info">OK</a>
                                </div>

                                <div class="col-md-7">
                                    <form method="get" action="/articles/{{$article->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection