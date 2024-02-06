@extends('layouts.admin')

@section('content')
  <ul >
    @foreach ($projects as $project)
        <li>Titolo: {{$project->title}}</li>
        <li>Autore: {{$project->author}}</li>
        <li>Data creazione: {{$project->creation_date}}</li>
        <li>Ultima commit: {{$project->last_update}}</li>
        <li>Linguaggi di programmazione: {{$project->lang}}</li>
        <li>Link: {{$project->link_github}}</li>
        <br>
    @endforeach
  </ul>
@endsection