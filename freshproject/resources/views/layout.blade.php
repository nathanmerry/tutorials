<!DOCTYPE HTML>
<html>
	<head>
		<title>Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/css/app.css" />
	</head>
	<body>

    <header id="header">
      <div class="inner">
        <a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a>
        <nav id="nav">
          <a class="{{ Request::path() === '/' ? 'nav-active' : '' }}" href="/">Home</a>
          <a class="{{ Request::path() === 'about' ? 'nav-active' : '' }}" href="/about">About</a>
          <a class="{{ Request::path() === 'articals' ? 'nav-active' : '' }}" href="/articals">Articals</a>
        </nav>
        <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
      </div>
    </header>

    @yield('content')

    <footer id="footer">
      <div class="inner">
  
        <h3>Get in touch</h3>
  
        <form action="#" method="post">
  
          <div class="field half first">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" placeholder="Name">
          </div>
          <div class="field half">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="Email">
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
          </div>
          <ul class="actions">
            <li><input value="Send Message" class="button alt" type="submit"></li>
          </ul>
        </form>
  
        <div class="copyright">
          &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
        </div>
  
      </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="/js/app.js"></script>
	</body>
</html>