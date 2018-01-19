@extends('layouts.master')

@section('title','Άρθρα')

@section('content')

    {{--Heading + New Button + Search--}}
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">Άρθρα</h1>
                <form method="get" id="new-form" action="/articles/create">
                    <button class="btn btn-success">Προσθήκη Νέου</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="right">
                <form method="get" action="/articles">
                    <input type="text" placeholder="&#xF002;"
                           id="search_input" name="search" value="{{$search}}"
                           pattern="((\s*)[Α-ΩΆ-Ώα-ωά-ώA-Za-z0-9]+(\s*))+"
                           oninvalid="setCustomValidity('Εισάγετε μόνο αλφαριθμητικούς χαρακτήρες ή κενά')"
                           onchange="try{setCustomValidity('')}catch(e){}"
                           onkeydown="try{setCustomValidity('')}catch(e){}"/>

                    <button id="submit_search" class="btn btn-primary">Αναζήτηση Άρθρων</button>
                </form>
            </div>
        </div>



        {{--Index Table--}}
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table" border="1">
                        <thead>
                        <tr>
                            <th>Τίτλος</th>
                            <th>Εικονίδιο</th>
                            <th>Κατηγορία</th>
                            <th>Δημιουργήθηκε<i style="display:inline; color:gray" class="fa fa-sort-numeric-desc" aria-hidden="true" ></i></th>
                            <th>Τροποποιήθηκε</th>
                            <th colspan="3">Ενέργειες</th>

                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($articles as $article )
                            @if($articles->count()>0)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>@if($article->thumbnail)<img class="avatar" src="/images/thumbnails/{{$article->thumbnail}}">@else <span>-</span>@endif</td>
                                    <td>{{$article->viewtitle}}</td>{{--<td>{{$article->page->viewtitle}}</td>--}}
                                    <td>{{date('d/m/Y H:i', strtotime($article->created_at))}}</td>
                                    <td>{{date('d/m/Y H:i', strtotime($article->updated_at))}}</td>
                                    <td><form method="get" action="/articles/{{$article->id}}"><button class="btn btn-info">Προβολή</button></form></td>
                                    <td><form method="get" action="/articles/{{$article->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form></td>
                                    <td>
                                        <form method="post" action="/articles/{{$article->id}}">{{method_field('delete')}}
                                            <button onclick="return checkDelete()" class="btn btn-danger">Διαγραφή</button><input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                        @if($articles->count()<=0)
                            <tr><td colspan="8"><span class="recent_detail">Η αναζήτησή σας δεν ταιριάζει με κανένα άρθρο.</span></td></tr>
                        @endif
                        </tbody>

                    </table>
                </div>

                {{--Pagination--}}
                <div id="pagination">{{ $articles->appends(['search' => $search])->links()}}</div>
            </div>
        </div>
    </div>


@endsection