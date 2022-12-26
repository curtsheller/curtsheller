<div class="flex flex-wrap items-center justify-between mt-2">
    @auth
        <a class="" href="{{ Storage::disk('spaces')->url('workshops/'.$pdf_file_name) }}">
            <button type="button" class="btn btn-xs btn-main m-2 mb-3">
                @svg('download', 'text-brand-icon mr-1')
                Workshop Download: {{ $pdf_title }}
                @svg('file-pdf', 'text-brand-icon ml-1')
            </button>
        </a>
    @else
        <p class="text-sm text-grey-500 text-center">@svg('download', 'text-brand-icon mr-21') Visit LearningUkulele.com and SIGN-IN to Download the Workshop Handout: {{ $pdf_file_name }} @svg('file-pdf', 'text-brand-icon ml-1')</p>
    @endauth
</div>
