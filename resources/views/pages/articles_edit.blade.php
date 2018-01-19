@extends('layouts.master')

@section('title','Επεξεργασία Άρθρου')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Επεξεργασία Άρθρου</b></div>
                    <div class="panel-body">
                        <div class="form-horizontal">

                            <form class="form-horizontal" method="POST" action="/articles/{{$article->id}}" enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}        {{method_field('patch') }}

                                {{--title--}}
                                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="article_title" class="col-md-2 control-label required">Τίτλος</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="article_title" name="title" value="{{ (old('title') == null)? $article->title:old('title') }}">

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{--alias--}}
                                <div class="form-group {{ $errors->has('alias') ? ' has-error' : '' }}">
                                    <label for="article_alias" class="col-md-2 control-label required">Alias</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="article_alias" name="alias" value="{{ (old('alias') == null)? $article->alias:old('alias') }}">

                                        @if ($errors->has('alias'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('alias') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form_category_area">

                                    {{--explanatory text for category--}}
                                    <div class="form-group" >

                                        <div class="col-md-12">
                                            <h3 align="center">Κατηγορία</h3>
                                            <p class="explanatory_text">Σελίδα στην οποία θα εμφανίζεται το άρθρο. Επιλέξτε μόνο από ένα πεδίο κατηγορίας αφήνοντας το άλλο κενό. </p>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-4 col-md-offset-2">
                                            <p class="explanatory_text_uncentered"> Για σελίδες που έχουν ήδη άρθρα <b>(συνίσταται)</b>. </p>
                                        </div>
                                        <div class="col-md-1">
                                            <p class="explanatory_text_uncentered"> ή</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="explanatory_text_uncentered"> Για σελίδες που δεν έχουν άρθρα προς το παρόν.</p>
                                        </div>
                                    </div>


                                    {{--category--}}
                                    <div class="form-group">
                                        <label for="category_with_articles" class="col-md-2 control-label required">Κατηγορία</label>

                                        {{--(pages with articles)--}}
                                        <div class="col-md-5 {{ $errors->has('category_with_articles') ? ' has-error' : '' }}">

                                            <select id="category_with_articles" name="category_with_articles" >
                                                <option selected disabled="disabled" style="color:gray" value="">
                                                    - Επιλέξτε κατηγορία (σελίδα με άρθρα) -
                                                </option>
                                                @foreach ($pages_with_articles as $page)

                                                    <option value="{{$page->alias}}"
                                                            @if(old('category_with_articles') == null && $article->category == $page->alias)
                                                               selected="selected"
                                                            @elseif(old('category_with_articles') == $page->alias)
                                                                selected="selected"
                                                            @endif >{{$page->viewtitle}}
                                                    </option>

                                                @endforeach
                                            </select>

                                            @if ($errors->has('category_with_articles'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('category_with_articles') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        {{--(pages without articles)--}}
                                        <div class="col-md-5 {{ $errors->has('category_without_articles') ? ' has-error' : '' }}">

                                            <select id="category_without_articles" name="category_without_articles" >
                                                <option selected disabled="disabled" style="color:gray" value="">
                                                    - Επιλέξτε κατηγορία (σελίδα χωρίς άρθρα) -
                                                </option>
                                                @foreach ($pages_without_articles as $page)

                                                    <option value="{{$page->alias}}"
                                                            @if(old('category_without_articles') == null && $article->category == $page->alias)
                                                            selected="selected"
                                                            @elseif(old('category_without_articles') == $page->alias)
                                                            selected="selected"
                                                            @endif >{{$page->viewtitle}}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('category_without_articles'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('category_without_articles') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-5 col-md-offset-2">
                                            <button id="clear_category_with_articles" type="button" class="btn btn-danger" >Άδειασμα</button>
                                        </div>

                                        <div class="col-md-5">
                                            <button id="clear_category_without_articles" type="button" class="btn btn-danger" >Άδειασμα</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form_image_area">

                                    {{--explanatory text for image--}}
                                    <div class="form-group" >

                                        <div class="col-md-12">
                                            <h3 align="center">Εικονίδιο</h3>
                                            <p class="explanatory_text"> Πληκτρολογήστε όνομα αρχείου από τα <a target="_blank" href="{{ url('/pictures/thumbnails') }}"> Εικονίδια Άρθρων (Thumbnails)</a> π.χ. image.jpg</p>
                                            <p class="explanatory_text"> Εναλλακτικά μεταφορτώστε αρχείο.</p>
                                        </div>
                                    </div>

                                    {{--thumbnail--}}
                                    <div class="form-group {{ $errors->has('thumbnail') ? ' has-error' : '' }}">

                                        <label for="thumbnail" class="col-md-2 control-label">Εικονίδιο</label>

                                        <div class="col-md-8">
                                            <input type="text" placeholder="π.χ. image.jpg" class="form-control" id="thumbnail" name="thumbnail" value="{{ (old('thumbnail') == null)? $article->thumbnail:old('thumbnail') }}">

                                            @if ($errors->has('thumbnail'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('thumbnail') }}</strong>
                                        </span>
                                            @endif
                                        </div>

                                    </div>

                                    {{--image preview--}}
                                    <div class="form-group">
                                        <label for="image_preview" id="preview_label" class="col-md-2 control-label">Προεπισκόπηση</label>

                                        <div class="col-md-8">
                                            <img hidden id="image_preview" class="avatar"  alt="Δε βρέθηκε"
                                                 src="/images/thumbnails/{{ (old('thumbnail') == null)? '':old('thumbnail') }}"
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

                                {{--attachement--}}
                                <div class="form-group {{ $errors->has('attachement') ? ' has-error' : '' }}">
                                    <label for="article_attachement" class="col-md-2 control-label required">Συνημμένο</label>

                                    <div class="col-md-10">
                                        <select id="article_attachement" name="attachement" >
                                            <option selected disabled="disabled" style="color:gray" value="" >
                                                - Άρθρο συνημμένο σε σύνδεσμο; -
                                            </option>
                                            <option value="0"
                                                    @if(old('attachement') == null && $article->attachement == 0)
                                                        selected="selected"
                                                    @elseif (old('attachement') == '0')
                                                        selected="selected"
                                                    @endif >
                                                    ΟΧΙ
                                            </option>
                                            <option value="1"
                                                    @if(old('attachement') == null && $article->attachement == 1)
                                                        selected="selected"
                                                    @elseif (old('attachement') == '1')
                                                        selected="selected"
                                                    @endif>
                                                    ΝΑΙ
                                            </option>
                                        </select>
                                        @if ($errors->has('attachement'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('attachement') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--attachement url--}}
                                <div id="article_attachement_url" class="form-group {{ $errors->has('attachement_url') ? ' has-error' : '' }}">
                                    <label for="attachement_url" class="col-md-2 control-label required">URL Συνημμένου</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="attachement_url" name="attachement_url" value="{{ old('attachement_url') }}">

                                        @if ($errors->has('attachement_url'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('attachement_url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--content--}}

                                <div id="article_content_edit" class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    <div class="col-md-10 col-md-offset-2">
                                        <p  class="explanatory_text_uncentered col-md-10" > Τα URL εικόνων για το περιεχόμενο των άρθρων βρίσκονται στις: <a target="_blank" href="{{ url('/pictures/articles') }}"> Εικόνες σε περιεχόμενο Άρθρων</a></p>

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
                                        <textarea cols="80" rows="10" class="form-control ckeditor" id="content_editor" name="ckeditor_content" >{{ (old('content') == null)? $article->content:old('content') }}</textarea>

                                        @if ($errors->has('content'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('content') }}</strong>
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