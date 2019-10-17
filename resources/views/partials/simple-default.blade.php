@if ($paginator->hasPages())
    <ul class="pagination shop-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!--li class="disabled"><span style="color:red">@lang('pagination.previous')</span></li-->

        @else

            <li class="visible">
                <a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i>Предыдущие товары</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="visible">
                <a href="{{ $paginator->nextPageUrl() }}">Следующие товары<i class="fa fa-angle-right"></i></a>
            </li>

        @else

        @endif
    </ul>
@endif
