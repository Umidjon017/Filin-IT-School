
@if ($paginator->hasPages())
    @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

    <div class="pagination">
        <ul >
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())

                <li class="disabled"><button  id="page__prev"></button></li>
            @else

                <li class="page-item">
                    <button id="page__prev" type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')"></button>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    {{-- <li class="page-item " aria-disabled="true"><span class="page-link">{{ $element }}</span></li> --}}
                    <li class="disabled"><button>{{ $element }}</button></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li  wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}" aria-current="page">
                                <button class="page_active" >{{ $page }}</button>
                            </li>
                        @else
                            <li wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())

                <li><button id="page__next" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')" ></button></li>
            @else

                <li class="disabled"><button href="#next" id="page__next"></button></li>
            @endif
        </ul>
    </div>
@endif

