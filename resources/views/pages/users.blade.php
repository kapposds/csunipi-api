@extends('layouts.master')

@section('title','Χρήστες')

@section('content')

    {{--Heading + New Button + Search--}}

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">Χρήστες</h1>
                <form method="get" id="new-form" action="/users/create">
                    <button class="btn btn-success">Προσθήκη Νέου</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="right">
                <form method="get" action="/users">
                    <input type="text" placeholder="&#xF002;"
                           id="search_input" name="search" value="{{$search}}"
                           pattern="((\s*)[Α-ΩΆ-Ώα-ωά-ώA-Za-z0-9]+(\s*))+"
                           oninvalid="setCustomValidity('Εισάγετε μόνο αλφαριθμητικούς χαρακτήρες ή κενά')"
                           onchange="try{setCustomValidity('')}catch(e){}"
                           onkeydown="try{setCustomValidity('')}catch(e){}"/>

                    <button id="submit_search" class="btn btn-primary">Αναζήτηση Χρηστών</button>
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
                            <th>Όνομα Χρήστη</th>
                            <th>E-mail</th>
                            <th>Δημιουργήθηκε <i class="fa fa-sort-numeric-desc" aria-hidden="true" style="display:inline; color:gray" ></i></th>
                            <th>Τροποποιήθηκε</th>
                            <th colspan="2">Ενέργειες</th>

                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user )
                                @if($users->count()>0)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{date('d/m/Y H:i', strtotime($user->created_at))}}</td>
                                        <td>{{date('d/m/Y H:i', strtotime($user->updated_at))}}</td>
                                        @if(!$user->super_admin)
                                        <td><form method="get" action="/users/{{$user->id}}/edit"><button class="btn btn-warning">Επεξεργασία</button></form></td>
                                        <td>
                                            <form method="post" action="/users/{{$user->id}}">{{method_field('delete')}}
                                                <button onclick="return checkDelete()" class="btn btn-danger">Διαγραφή</button><input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </td>
                                        @endif
                                        @if($user->super_admin)
                                        <td class="super_admin" colspan="2"><b>SUPER ADMIN</b></td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach

                            @if($users->count()<=0)
                                <tr><td colspan="8"><span class="recent_detail">Η αναζήτησή σας δεν ταιριάζει με κανέναν χρήστη.</span></td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                {{--Pagination--}}
                <div id="pagination">{{ $users->appends(['search' => $search])->links() }}</div>

            </div>
        </div>
    </div>


@endsection