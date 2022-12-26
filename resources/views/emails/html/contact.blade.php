<body>
<p>
A message from named <b>{{ $name }}</b> (<em>{{ $email }}</em>) 
has submitted an inquiry through {{ config('ff.title') }}:
</p>
<p>
{{ $user_message }}
</p>
</body>