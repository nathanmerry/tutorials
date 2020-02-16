@extends ('layout')


@section('content')
<section style="background:grey" id="three" class="wrapper align-center">
  <div class="inner">
    <div class="flex">
      <article>
        <h1 style="font-size: 30px;">{{$artical->title}}</h1>
        <p style="color:white">{{$artical->body}}</p>
        <footer>
          {{-- <a href="#" class="button">Learn More</a> --}}
        </footer>
      </article>
    </div>
  </div>
</section>
@endsection