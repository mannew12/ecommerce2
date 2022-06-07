@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('category/register') }}" role="button"> {{ __('New category') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('category List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
name
 </th>

 </tr>
 </thead>
 <tbody>
 @foreach($category as $category)
 <tr>
 <td> {{ $category->id }}</td>
 <td> {{ $category->name }}</td>

 
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/category/search/{{ $category->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/category/edit/{{$category->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/category/delete/{{ $category->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection