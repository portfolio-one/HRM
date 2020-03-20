<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
  font-family: "Lato", sans-serif;
}
    </style>
</head>
<body>
<div id="app">
    <v-app>
    <router-view />
    </v-app>
</div>
</body>
<script src="{{asset('js/app.js') }}" ></script>
</html>