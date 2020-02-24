@extends ('layout')


@section('content')
<section style="background:grey; color: white;" id="three" class="wrapper align-center">
  <div class="container">
    <div style="display: flex; flex-direction: column">
      @foreach($articals as $artical)
      <div style="text-align: left">
        <header>
          <h3>
            <a href="/articals/{{$artical->id}}">{{$artical->title}}</a>
          </h3>
        </header>
        <p>{{$artical->excerpt}}</p>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection