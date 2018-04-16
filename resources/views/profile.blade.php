@extends('layouts.master')

@section('title', 'Perfil')

@section('main-content')
<div class="profile">
  <h1 class="page-header">{{ $profile->user->name }}</h1>
  <div class="row">
    <div class="col-md-4">
      <img src="{{ Voyager::image($profile->user->avatar) }}" class="img-thumbnail" alt="">
    </div>
    <div class="col-md-8">
      <ul>
        <li><strong>Nome:</strong> {{ $profile->user->name }}</li>
        <li><strong>E-mail:</strong> {{ $profile->user->email }}</li>
        <li><strong>Cidade:</strong> {{ $profile->city }}</li>
        <li><strong>Estado:</strong> {{ $profile->state }}</li>
        <li><strong>País:</strong> {{ $profile->country }}</li>
        <li><strong>Gênero:</strong> @if($profile->gender == 0) Não Informado @elseif($profile->gender == '1') Masculino @else Feminino @endif</li>
        <li><strong>Data de Nascimento:</strong> {{ $profile->birthday->format('d/m/Y') }}</li>
      </ul>
    </div>
  </div><br><br>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Profile Wall</h3>
        </div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <textarea class="form-control" placeholder="Write on the wall"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <div class="pull-right">
              <div class="btn-toolbar">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i>Text</button>
                <button type="button" class="btn btn-default"><i class="fa fa-file-image-o"></i>Image</button>
                <button type="button" class="btn btn-default"><i class="fa fa-file-video-o"></i>Video</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection