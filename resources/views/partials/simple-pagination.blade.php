@if ($paginator->hasPages())
    <nav class="flex justify-between items-center mb-1">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-disabled" aria-disabled="true">
                @lang('pagination.previous')
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn">
                @lang('pagination.previous')
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn">
                @lang('pagination.next')
            </a>
        @else
            <button class="btn btn-disabled" aria-disabled="true">
                @lang('pagination.next')
            </button>
        @endif

    </nav>
@endif
