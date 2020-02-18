@extends ('layout')

@section('content')
<section style="background:grey; color: white;" id="three" class="">
  <div style="display: block; background: grey; height: 200px; width: 100%"></div>
  <div class="wrapper">
    <div class="container">
      <div class="container">
        <h1 style="font-size: 30px; color: white;">New Artical</h1>
        <form method="POST" action="/articals">
          @csrf
          <label>Title</label>
          <input type="text" name="title" required>
          <label for="excerpt">Excerpt</label>
          <textarea name="excerpt" required></textarea>
          <label for="excerpt">Body</label>
          <textarea name="body" required></textarea>
          <button style="margin-top: 40px;" type="submit" value="Submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection