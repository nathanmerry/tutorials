@extends ('layout')


@section('content')
<!-- Banner -->
<section id="banner">
  <div class="inner">
    <header>
      <h1>This is the about page</h1>
    </header>

    <div class="flex ">

      <div>
        <span class="icon fa-car"></span>
        <h3>Aliquam</h3>
        <p>Suspendisse amet ullamco</p>
      </div>

      <div>
        <span class="icon fa-camera"></span>
        <h3>Elementum</h3>
        <p>Class aptent taciti ad litora</p>
      </div>

      <div>
        <span class="icon fa-bug"></span>
        <h3>Ultrices</h3>
        <p>Nulla vitae mauris non felis</p>
      </div>

    </div>

    <footer>
      <a href="#" class="button">Get Started</a>
    </footer>
  </div>
</section>

<!-- Three -->
<section id="three" class="wrapper align-center">
  <div class="inner">
    <div class="flex flex-2">
      @foreach($articals as $artical)
      <article>
        <div class="image round">
          <img src="images/pic01.jpg" alt="Pic 01" />
        </div>
        <header>
          <h3>
            <a href="/articals/{{$artical->id}}">{{$artical->title}}</a>
          </h3>
        </header>
        <p>{{$artical->excerpt}}</p>
        <footer>
          {{-- <a href="#" class="button">Learn More</a> --}}
        </footer>
      </article>
      @endforeach
    </div>
  </div>
</section>
@endsection