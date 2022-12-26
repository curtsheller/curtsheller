<body>
<h4>Welcome to LearningUkulele.com</h4>

<p>Thanks for registering on my <b><a href="//www.curtsheller.com">CurtSheller.com</a></b> site. I've transfered you user info minus your password to the new <b><a href="//www.learningukulele.com">LearningUkulele.com</a></b> site and you have access to all the lessons, books, songs and assets that are part of you membership level on this new LearningUkulele.com site. All you need to do is go to the <a href="//www.learningukulele.com/auth/login">login page</a> and click on the <a href="//www.learningukulele.com/password/email"><b>Forgot Your Password?</b></a> link and request a password reset.</p>

<p>You have registered using the email address <b>{{ $email }}</b>.</p>

<p>Any problems getting on to the new site <a href="//www.learningukulele.com/pages/contact">let me know</a> and I can resolve them ASAP.</p>

<p>Thanks for Signing Up,</p>

<p><b>Curt Sheller</b></p>

<p><b>{{ config('mail.from.name') }}</b><br>
{{ config('mail.from.address') }}<br>
<a href="{{ config('csp.site.url') }}"> {{ config('csp.site.name') }}</a></p>
</body>