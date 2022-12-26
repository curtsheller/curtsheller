<!-- Social media -->
<div class="space-x-4">
    {{-- <a href="//www.facebook.com/curtsheller/">
         @svg('brands/facebook-square', 'icon-4x mx-2')
    </a> --}}
    <a href="//www.twitter.com/curtsheller/">
        @svg('brands/twitter-square', 'icon-4x text-twitter')
    </a>
    <a href="//www.meetup.com/funkyfrets/">
        @svg('brands/meetup', 'icon-4x text-meetup')
    </a>
    <a href="//www.vimeo.com/curtsheller">
        @svg('brands/vimeo-square', 'icon-4x text-csp')
    </a>
    <a href="//www.youtube.com/curtyourtube">
        @svg('brands/youtube-square', 'icon-4x text-youtube')
    </a>
    @if (isset($show_email) && $show_email)
        <a href="/contact">
            @svg('at', 'icon-4x text-brand')
        </a>
    @endif
</div>
