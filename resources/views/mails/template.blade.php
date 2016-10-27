<!doctype html>
<html lang="{{Lang::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>
<body>
<h1>@yield('subject')</h1>

@yield('body')

<p>
    Team {{ config('app.name') }}<br />
    {{ config('app.address') }}<br />
    {{ config('app.address_complement') }}<br />
    Skype: {{ config('app.skype_id') }}
</p>

</body>
</html>