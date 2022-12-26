<div class="flex flex-wrap items-center justify-center mt-2">
    @auth
        <a class="" href="{{ Storage::disk('spaces')->url('workshops/'.$pdf) }}">
            <button type="button" class="btn btn-xs btn-main m-2 mb-3">
                @svg('download', 'text-brand-icon mr-1')
                Workshop Download: {{ $title }}
                @svg('file-pdf', 'text-brand-icon ml-1')
            </button>
        </a>
    @else
        <p class="text-sm text-grey-500 text-center">@svg('download', 'text-brand-icon mr-21') Visit LearningUkulele.com and SIGN-IN to Download the Workshop Handout: <strong>{{ $pdf }}</strong> @svg('file-pdf', 'text-brand-icon ml-1')</p>
    @endauth
</div>
