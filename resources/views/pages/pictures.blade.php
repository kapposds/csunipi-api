@extends('layouts.master')

@section('title', 'Εικόνες')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">{{$disk_name}}</h1>
                <form method="get" id="new-form" action="/pictures/{{$disk}}/create">
                    <button class="btn btn-success">Προσθήκη Νέας</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table" border="1">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Εικόνα</th>
                            <th>Όνομα Αρχείου</th>
                            <th>URL</th>
                            <th>Μέγεθος</th>
                            <th>Τροποποιήθηκε</th>
                            <th colspan="2">Ενέργειες</th>
                        </tr>
                        </thead>


                        @foreach ($files as $file )
                            <tbody>
                            <tr>
                                <td>{{$file['id']}}</td>
                                <td><img class="picture" src="/images/{{$disk}}/{{$file['filename']}}"></td>
                                <td>{{$file['filename']}}</td>
                                <td>{{$file['url']}}</td>
                                <td>{{$file['size']}} KB</td>
                                <td>{{$file['updated_at']}}</td>
                                <td><form method="get" action="/pictures/{{$disk}}/{{$file['filename']}}"><button class="btn btn-info">Προβολη Μεγέθυνσης</button></form></td>
                                <td>
                                    <form method="post" action="/pictures/{{$disk}}/{{$file['filename']}}">{{method_field('delete')}}
                                        <button onclick="return checkDelete()" class="btn btn-danger">Διαγραφή</button><input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

{{--                {{$size}} {{$lastModified}}--}}

                {{--Pagination--}}
{{--                <div id="pagination">{{ $filenames_collection->links() }}</div>--}}


            </div>
        </div>

    </div>

@endsection
