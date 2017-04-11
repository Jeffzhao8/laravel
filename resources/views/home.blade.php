@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($data as $row)
                        <tr>
                            <td>{{$row ->leaveCountry }}</td>
                            <td>{{$row ->leaveCity }}</td>
                            <td>{{$row ->arriveCountry }}</td>
                            <td>{{$row ->arriveCity }}</td>
                            <td>{{$row ->leaveDate }}</td>
                            <td>{{$row ->arriveDate }}</td>
                            <td>{{$row ->email }}</td>
                            <td>{{$row ->mobile }}</td>
                            <td>{{$row ->description }}</td>
                            
                    @endforeach
                        </tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
