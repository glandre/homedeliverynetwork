@yield('title')
@yield('subject')
@yield('body')

Team {{ config('app.name') }}
{{ config('app.address') }}
{{ config('app.address_complement') }}
Skype: {{ config('app.skype_id') }}