@if ($paginator->hasPages())
    <ul class="pagination shop-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage() && !$paginator->hasMorePages())
                <li >
                    <a href="#"><i class="fa fa-angle-left"></i>Previous products</a>
                </li>

        {{-- Next Page Link --}}
        @elseif ($paginator->hasMorePages() && !$paginator->onFirstPage())
            <li class="visible">
                <a href="{{ $paginator->nextPageUrl() }}">Следующие товары<i class="fa fa-angle-right"></i></a>
            </li>
        @elseif ($paginator->hasMorePages() && $paginator->onFirstPage())
            <li class="visible">
                <a href="{{ $paginator->nextPageUrl() }}">Следующие товары<i class="fa fa-angle-right"></i></a>
            </li>

        @else
                <li class="visible" >
                    <a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i>Previous products</a>
                </li>
        @endif
    </ul>
@endif
