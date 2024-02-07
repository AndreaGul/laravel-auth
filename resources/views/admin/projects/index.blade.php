@extends('layouts.admin')

@section('content')
  
  <button class="btn btn-primary m-2">
          <a class="text-white text-decoration-none" href="{{ route('admin.projects.create')}}">Create</a>
  </button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Autore</th>
      <th scope="col">Linguaggio</th>
      <th class="text-center" scope="col">Link progetto</th>
      <th class="text-center" scope="col">info</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
    <tr class="align-middle">
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->title}}</td>
      <td>{{$project->lang}}</td>
      <td class="text-center">
        <button class="btn  btn-success ">
          <a class="text-white text-decoration-none " href="{{$project->link_github}}"><i class="fa-brands fa-github"></i></a>
        </button>
      </td>
      <td class="text-center" >
        <button class="btn  btn-info">
          <a class="text-white text-decoration-none" href="{{ route('admin.projects.show', $project->id)}}">Info</a>
        </button>
       
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection