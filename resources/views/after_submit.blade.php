@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Submission Confirmed</div>

                <div class="panel-body">
                    <label>Submitted Successfully </label>
                    <p>
                        <a href="{{URL::route('welcome')}}">
                            Click here 
                        </a> to go to home page.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection