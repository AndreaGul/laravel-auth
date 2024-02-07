@extends('layouts.admin')

@section('content')
 <form class="row g-3 my-3" action="{{route('admin.projects.store')}}" method="POST">
  @csrf
  <div class="col-12">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control" id="title" name="title" required>
  </div>
  <div class="col-12">
    <label for="author" class="form-label">Autore</label>
    <input type="text" class="form-control" id="author" name="author" required>
  </div>
  <div class="col-6">
    <label for="creation_date" class="form-label">Data creazione</label>
    <input type="date" class="form-control" id="creation_date" >
  </div>
  <div class="col-6">
    <label for="last_update" class="form-label">Ultimo commit</label>
    <input type="date" class="form-control" id="last_update" name="last_update">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" class="form-control" rows="3" id="description" name="description"></textarea>
  </div>
  <div class="col-12">
    <label for="contributors" class="form-label">Collaboratori</label>
    <textarea type="text" class="form-control" rows="2" id="contributors" name="contributors"></textarea>
  </div>
  <div class="col-12">
    <label for="lang" class="form-label">Linguaggi di programmazione</label>
    <textarea type="text" class="form-control" id="lang" name="lang"></textarea>
  </div>
   <div class="col-12">
    <label for="link_github" class="form-label">Link github</label>
    <input type="text" class="form-control" id="link_github" name="link_github">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Invia</button>
  </div>
</form>
@endsection