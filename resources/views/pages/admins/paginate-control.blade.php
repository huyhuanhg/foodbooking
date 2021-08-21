@if($lastPage > 1)
    <nav aria-label="Page navigation example" class="mt-3">
        <ul class="pagination justify-content-end pagination-sm">
            @if($currentPage > 1)
                <li class="page-item">
                    <a class="page-link"
                       href="{{$path}}?page={{$currentPage - 1}}"
                       aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif
            @for($i = 1; $i <= $lastPage; $i++)
                <li class="page-item {{$currentPage === $i ? 'active' : ''}}">
                    <a class="page-link" href="{{$path}}?page={{$i}}">{{$i}}</a>
                </li>
            @endfor
            @if($currentPage < $lastPage)
                <li class="page-item">
                    <a class="page-link"
                       href="{{$path}}?page={{$currentPage + 1}}"
                       aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
