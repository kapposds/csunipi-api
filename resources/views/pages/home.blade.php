@extends('layouts.master')

@section('title', 'CS Unipi Author')

@section('content')
<div class="container">


    {{--testing button will be deleted--}}
    {{--<button><a href="{{ url('/push') }}">Push </a></button>--}}


    {{--With a glance--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Με μια ματιά</div>
                <div class="panel-body">
                    <ul class="horizontal">
                        <li><a href="{{ url('/articles') }}"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Άρθρα: {{$articles_count}}</a></li>
                        <li><a href="{{ url('/pages') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Σελίδες:  {{$pages_count}}</a></li>
                        <li><a href="{{ url('/people') }}"><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-female" aria-hidden="true"></i> Άτομα: {{$people_count}} </a></li>
                        <li><a href="{{ url('/pictures') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> Εικόνες</a></li>
                        {{--only for super admins--}}
                        @if(Auth::user() && Auth::user()->super_admin == 1)
                            <br>
                            <li><a href="{{ url('/users') }}"><i class="fa fa-users" aria-hidden="true"></i> Χρήστες: {{$users_count}}</a></li>
{{--                            <li><a href="{{ url('/menu') }}"><i class="fa fa-bars" aria-hidden="true"></i> Μενού</a></li>--}}
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--Recent Activity--}}
    <div class="row">
        {{--Articles--}}
        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Πρόσφατα Άρθρα</div>

                <div class="panel-body">
                    @foreach ($recently_updated_articles as $article)
                        <a href="/articles/{{$article->id}}" class="recent_title"><b>Τίτλος άρθρου:</b> {{$article->title}}</a><br>
                        <span class="recent_detail"><b>Τροποποιήθηκε:</b> {{date('d/m/Y H:i', strtotime($article->updated_at))}}</span>
                        {{--hr is not displayed for the last item--}}
                        <hr  @if ( $article == $recently_updated_articles->last()) style="display:none;" @endif>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Pages--}}
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-file-text" aria-hidden="true"></i> Πρόσφατες Σελίδες</div>

                <div class="panel-body">
                    <div>
                        @foreach ($recently_updated_pages as $page)
                            <a href="/pages/{{$page->id}}" class="recent_title"><b>Τίτλος σελίδας:</b> {{$page->title}}</a><br>
                            <span class="recent_detail"><b>Τροποποιήθηκε:</b> {{date('d/m/Y H:i', strtotime($page->updated_at))}}</span>
                            {{--hr is not displayed for the last item--}}
                            <hr  @if ( $page == $recently_updated_pages->last()) style="display:none;" @endif>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{--People--}}
        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-female" aria-hidden="true"></i> Πρόσφατα Άτομα</div>

                <div class="panel-body">
                    <div>
                        @foreach ($recently_updated_people as $person)
                            <a href="/people/{{$person->id}}" class="recent_title"><b>Ονοματεπώνυμο: </b> {{$person->fullname}}</a><br>
                            <span class="recent_detail"><b>Τροποποιήθηκε:</b> {{date('d/m/Y H:i', strtotime($person->updated_at))}}</span>
                            {{--hr is not displayed for the last item--}}
                            <hr  @if ( $person == $recently_updated_people->last()) style="display:none;" @endif>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--only for super admins--}}
        @if(Auth::user() && Auth::user()->super_admin == 1)
            {{--Users--}}
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-users" aria-hidden="true"></i> Πρόσφατοι Χρήστες</div>

                    <div class="panel-body">
                        <div>
                            @foreach ($recently_updated_users as $user)
                                <span class="recent_detail"><b>Όνομα: </b> {{$user->name}}</span><br>
                                {{--if user is super admin, it is displayed--}}
                                <span class="recent_detail"><b>Τροποποιήθηκε:</b> {{date('d/m/Y H:i', strtotime($user->updated_at))}}</span><br>
                                {{--hr is not displayed for the last item--}}
                                @if( $user->super_admin == '1')<span class="recent_detail super_admin"><b>Super Admin</b></span>@endif
                                <hr  @if ( $user == $recently_updated_users->last()) style="display:none;" @endif>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

</div>

@endsection
