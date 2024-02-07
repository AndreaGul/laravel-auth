@extends('layouts.admin')

@section('content')

  <div class="my-3">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="list-unstyled">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
  </div>
   
 <form class="row g-3 my-3" action="{{route('admin.projects.store')}}" method="POST">
  @csrf
  <div class="col-12">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control" id="title" name="title" value="{{old('title')}}" required>
  </div>
  <div class="col-12">
    <label for="author" class="form-label">Autore</label>
    <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}"  required>
  </div>
  <div class="col-6">
    <label for="creation_date" class="form-label">Data creazione</label>
    <input type="date" class="form-control"  value="{{old('creation_date')}}"  id="creation_date" name="creation_date" >
  </div>
  <div class="col-6">
    <label for="last_update" class="form-label">Ultimo commit</label>
    <input type="date" class="form-control" id="last_update" value="{{old('last_update')}}"  name="last_update">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text" class="form-control"  id="description" value="{{old('description')}}"   name="description">
  </div>
  <div class="col-12">
    <label for="contributors" class="form-label">Collaboratori</label>
    <input type="text" class="form-control" id="contributors" value="{{old('contributors')}}"  name="contributors">
  </div>
  <div class="col-12">
    <label for="lang" class="form-label">Linguaggi di programmazione</label>
    <input type="text" class="form-control" id="lang" value="{{old('lang')}}"  name="lang">
  </div>
   <div class="col-12">
    <label for="link_github" class="form-label">link_github</label>
    <input type="text" class="form-control" id="link_github" value="{{old('link_github')}}"  name="link_github">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Invia</button>
  </div>
</form>
@endsection