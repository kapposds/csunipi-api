
@if (Session::has('flash_message'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <span>{{Session::get('flash_message')}}</span>
                </div>
            </div>
        </div>
    </div>
@endif

{{--@if (Session::has('flash_message_red'))--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="alert-red"></div>--}}
                    {{--<i class="fa fa-check" aria-hidden="true"></i>--}}
                    {{--<span>{{Session::get('flash_message_red')}}</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endif--}}