<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
@hasSection('title')
<title>@yield('title') - {{ config('app.name') }}</title>
@else
<title>{{ config('app.name') }}</title>
@endif
