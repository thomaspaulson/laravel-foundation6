<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">

      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1>Blog</h1>
        </div>
      </div>


      <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            @yield('content')
        </div>

        <div class="large-4 medium-4 cell">
          sidebar
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
