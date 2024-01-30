@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-bordered dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @foreach($use as $bir)
                        <tr>
                            <td>{{$bir -> id}}</td>
                            <td>{{$bir -> name}}</td>
                            <td>{{$bir -> email}}</td>
                            <td>
                               <a href="/delete/{{$bir->id}}"><i class='bx bx-trash' style="color:black; font-size:24px;"></i></a>
                            </td>
                            <td>
                                <a href="/edit{{$bir->id}}"><i class='bx bx-edit' style="color:white; font-size:24px;"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
