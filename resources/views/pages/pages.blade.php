@extends('layouts.master')

@section('title','Σελίδες')

@section('content')

    {{--Heading + Search--}}
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">Σελίδες</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="right">
                <form method="get" action="/pages">
                    <input type="text" placeholder="&#xF002;"
                           id="search_input" name="search" value="{{$search}}"
                           pattern="((\s*)[Α-ΩΆ-Ώα-ωά-ώA-Za-z0-9]+(\s*))+"
                           oninvalid="setCustomValidity('Εισάγετε μόνο αλφαριθμητικούς χαρακτήρες ή κενά')"
                           onchange="try{setCustomValidity('')}catch(e){}"
                           onkeydown="try{setCustomValidity('')}catch(e){}"/>

                    <button id="submit_search" class="btn btn-primary">Αναζήτηση Σελίδων</button>
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
                            <th>Κατηγορία</th>
                            <th>Δημιουργήθηκε<i style="display:inline; color:gray" class="fa fa-sort-numeric-desc" aria-hidden="true" ></i></th>
                            <th>Τροποποιήθηκε</th>
                            <th colspan="2">Ενέργειες</th>

                            </th>
                        </tr>
                        </thead>
                            <tbody>

                            @foreach ($pages as $page )
                                @if($pages->count()>0)
                                    <tr>
                                        <td>{{$page->title}}</td>
                                        <td>{{$page->menuitem->title}}</td>
                                        <td>{{date('d/m/Y H:i', strtotime($page->created_at))}}</td>
                                        <td>{{date('d/m/Y H:i', strtotime($page->updated_at))}}</td>
                                        <td><form method="get" action="/pages/{{$page->id}}"><button class="btn btn-info">Προβολή</button></form></td>
                                        <td><form method="get" action="/pages/{{$page->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form></td>
                                    </tr>
                                @endif
                            @endforeach

                            @if($pages->count()<=0)
                                <tr><td colspan="8"><span class="recent_detail">Η αναζήτησή σας δεν ταιριάζει με καμία σελίδα.</span></td></tr>
                            @endif
                            </tbody>
                    </table>
                </div>

                {{--Pagination--}}
                <div id="pagination">{{ $pages->appends(['search' => $search])->links() }}</div>

            </div>
        </div>
    </div>


@endsection