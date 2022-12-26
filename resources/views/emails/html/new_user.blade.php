<body>
<h4>Welcome to LearningUkulele.com</h4>

<p>Thanks for registering on my <b><a href="//www.learningukulele.com">LearningUkulele.com</a></b> site.</p>

<p>You have registered using the email address <b>{{ $email }}</b> and now have access to all the lessons, books, songs, assets and goodies that are part of you membership level.</p>

<p>Any problems getting on to the site <a href="//www.learningukulele.com/pages/contact">let me know</a> and I can resolve them ASAP.</p>

<p>Thanks for Signing Up,</p>

<p><b>Curt Sheller</b></p>

<p><b>{{ config('mail.from.name') }}</b><br>
{{ config('mail.from.address') }}<br>
<a href="{{ config('csp.site.url') }}"> {{ config('csp.site.name') }}</a></p>
</body>