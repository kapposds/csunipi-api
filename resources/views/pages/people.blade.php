@extends('layouts.master')

@section('title','Άτομα')

@section('content')

    {{--Heading + New Button + Search--}}
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">Άτομα</h1>
                <form method="get" id="new-form" action="/people/create">
                    <button class="btn btn-success">Προσθήκη Νέου</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="right">
                <form method="get" action="/people">
                    <input type="text" placeholder="&#xF002;"
                           id="search_input" name="search" value="{{$search}}"
                           pattern="((\s*)[Α-ΩΆ-Ώα-ωά-ώA-Za-z0-9]+(\s*))+"
                           oninvalid="setCustomValidity('Εισάγετε μόνο αλφαριθμητικούς χαρακτήρες ή κενά')"
                           onchange="try{setCustomValidity('')}catch(e){}"
                           onkeydown="try{setCustomValidity('')}catch(e){}"/>

                    <button id="submit_search" class="btn btn-primary">Αναζήτηση Ατόμων</button>
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
                            <th>Ονοματεπώνυμο</th>
                            <th>Εικονίδιο</th>
                            <th>Κατηγορία</th>
                            <th>Βαθμίδα</th> {{--<i class="fa fa-sort-alpha-asc" aria-hidden="true" style="display:inline; color:gray" ></i>--}}
                            <th>Δημιουργήθηκε<i style="display:inline; color:gray" class="fa fa-sort-numeric-desc" aria-hidden="true" ></i></th>
                            <th>Τροποποιήθηκε</th>
                            <th colspan="3">Ενέργειες</th>

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($people as $person )
                                @if($people->count()>0)
                                <tr>
                                    <td>{{$person->fullname}}</td>
                                    <td><img class="avatar" src="/images/people/{{$person->avatar}}"></td>
                                    <td>{{$person->page->viewtitle}}</td>
                                    <td @if($person->rank=='president') style="color:red;" @endif>{{$person->getRankName($person->rank)}}</td>
                                    <td>{{date('d/m/Y H:i', strtotime($person->created_at))}}</td>
                                    <td>{{date('d/m/Y H:i', strtotime($person->updated_at))}}</td>
                                    <td><form method="get" action="/people/{{$person->id}}"><button class="btn btn-info">Προβολή</button></form></td>
                                    <td><form method="get" action="/people/{{$person->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form></td>
                                    <td>
                                        <form method="post" action="/people/{{$person->id}}">{{method_field('delete')}}
                                             <button onclick="return checkDelete()" class="btn btn-danger">Διαγραφή</button><input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach

                            @if($people->count()<=0)
                                <tr><td colspan="8"><span class="recent_detail">Η αναζήτησή σας δεν ταιριάζει με κανένα άτομο.</span></td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                {{--Pagination--}}
                <div id="pagination">{{ $people->appends(['search' => $search])->links() }}</div>

            </div>
        </div>
    </div>


@endsection