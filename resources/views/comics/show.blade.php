@extends('layouts.app')

@section('metaTitle', $comic->title)

@section('content')

<div>
  <div class="hero">
  </div>
  <div class="line__blue">
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
  </div>
  <div class="container__sm">
    <div class="principal__info">
      <div class="principal__info__text">
        <h1>{{$comic->title}}</h1>
        <div class="info__price">
          <div>
            U.S. Price:
          </div>
          <div>
            {{$comic->price}}
          </div>
          <div class="av">
            available
          </div>
        </div>
        <div class="description">
          {{$comic->description}}
        </div>
      </div>
      <div>
        <img class="apply" src="/img/adv.jpg" alt="">
      </div>
      <div class="operations">
        <a href="{{ route('comics.edit',$comic) }}">Edit</a>
        <form action="{{ route('comics.destroy',$comic) }}" method="POST">
          @csrf
          @method('DELETE')
          <input class="btn__delete" type="submit" value="delete">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection