@if ($paginator->hasPages())
    <nav class="mt-4">
        <ul class="pagination justify-content-end">
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif


                 @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item"><a class="page-link" href="#">{{$element}}</a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{$page}}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{$url}}">{{$page}}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

            @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" >
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
            @else
                    <li class="page-item">
                        <a class="page-link" href="#" >
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
            @endif
        </ul>
    </nav>
@endif
