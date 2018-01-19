@extends('layouts.master')

@section('title', 'Φάκελοι Εικόνων')

@section('content')
    <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Φάκελοι Εικόνων</div>
                        <div class="panel-body">
                            <ul class="vertical">
                                <li>
                                    <a href="{{ url('/pictures/thumbnails') }}"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Εικονίδια Άρθρων (Thumbnails)</a>
                                    <span class="disk_description">: μικρά εικονίδια που εμφανίζονται στην <b>προεπισκόπιση</b> του άρθρου και στην κορυφή του περιεχομένου του.</span>
                                </li>
                                <li>
                                    <a href="{{ url('/pictures/articles') }}"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Εικόνες σε περιεχόμενο Άρθρων </a>
                                    <span class="disk_description">: εικόνες που τοποθετούνται κατά τη συγγραφή του άρθρου και συναντώνται στο <b>περιεχόμενό</b> του.</span>
                                </li>
                                <li>
                                    <a href="{{ url('/pictures/pages') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Εικόνες σε περιεχόμενο Σελίδων</a>
                                    <span class="disk_description">: εικόνες που τοποθετούνται κατά τη συγγραφή της σελίδας και συναντώνται στο <b>περιεχόμενό</b> της.</span>
                                </li>
                                <li>
                                    <a href="{{ url('/pictures/people') }}"><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-female" aria-hidden="true"></i> Εικονίδια Ατόμων (Avatars)  </a>
                                    <span class="disk_description">: μικρά εικονίδια που εμφανίζονται δίπλα από κάθε άτομο ως <b>άβαταρ</b>.</span>
                               </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection
