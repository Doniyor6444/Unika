@extends('layouts.app')
@section('content')
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card-header">Edit</div>
                <div class="card"> 
                <form action="/saveedit{{$edit->id}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="name" name="name"   value="{{$edit->name}}" class="form-control" id="" placeholder="Ismni Kiriting">
                     </div>
                     <div class="mb-3"> 
                         <label for="" class="form-label">Email</label>
                         <input type="email" name="email" value="{{$edit->email}}" class="form-control" id="" placeholder="Emailni Kiriting">
                     </div>
                     <div class="mb-3">
                         <label for="" class="form-label">Password</label>
                         <input type="password" name="password" class="form-control" id="" placeholder="Parolni Kiriting">
                     </div>
                     <div class="mb-3">
                         <button class="btn btn-dark">Saqlash</button>
                    </div>
                </form>
             </div>
         </div>
     </div>
</div>
@endsection