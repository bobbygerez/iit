<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logos/logo.ico') }}" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta charset="utf-8">
    <meta name="google-site-verification" content="a096MhEyuLCzFKqtl3Ry7j5qVMzgUkl38EwE7CQSA2w" />

    <title>IIT Cebu</title>

</head>
<body>
    <div id="app">
        <master></master>
    </v-app>
</div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
</body>
</html>