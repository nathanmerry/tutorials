@extends ('layout')


@section('content')
<section style="background:grey; color: white; display: flex; justify-content: space-around" id="three"
  class="wrapper align-center">
  @foreach($articals as $artical)
  <div style="">
    <header>
      <h3>
        <a href="/articals/{{$artical->id}}">{{$artical->title}}</a>
      </h3>
    </header>
    <p>{{$artical->excerpt}}</p>
  </div>
  @endforeach
</section>
@endsection