<!-- Language Switcher -->
<a href="{{ url('lang/en') }}">English</a>
<a href="{{ url('lang/fr') }}">Français</a>

<!-- Display a translated string -->
  <!-- Using translation helper in Blade templates -->
<h1>{{ __('messages.hello') }}</h1>
  <!-- using the `@lang` directive -->
<h1>@lang('messages.hello')</h1>