<body>
	<h4 class="">This is cool!!!</h4>
	
	<p>{{ $passed_in_message }}</p>

	<p>Thanks,</p>

	<p><b>{{ config('mail.from.name') }}</b><br>
	{{ config('mail.from.address') }}<br>
	<a href="{{ config('csp.site.url') }}"> {{ config('csp.site.name') }}</a></p>
</body>
