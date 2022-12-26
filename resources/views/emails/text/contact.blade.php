A message from named {{ $name }} ({{ $email }}) 
has submitted an inquiry through {{ config('ff.title') }}:

{{ $user_message }}

{{ config('mail.from.name') }}
{{ config('mail.from.address') }}
{{ config('csp.site.name') }}
