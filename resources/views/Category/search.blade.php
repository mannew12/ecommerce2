@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('category Detail') }}
 </div>
 <div class="card-body">
 id : {{ $category->id }}
 <br>
 <br>
 category : {{ $category->name }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('category/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection