<ul class="nav nav-stacked">
    @foreach($items as $item)
        <li role="presentation"><a href="{{ $item->url }}">{{ $item->title }}</a></li>
    @endforeach
</ul>