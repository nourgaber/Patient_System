@if (Session::get('errors'))
    @if (Session::get('errors')->has($fieldtype))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <ul>
                @foreach (Session::get('errors')->get($fieldtype) as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endif