<div class="e-card playing">
    <a href="{{ $url }}">
        <div class="image"></div>
        <div class="wave wave-{{ $id }}"></div>
        <div class="wave wave-{{ $id }}"></div>
        <div class="wave wave-{{ $id }}"></div>
        <div class="infotop">
            @if ($icon)
                <img class="mb-4" src="{{ $icon }}" alt="{{ $title }}">
            @endif
            <br>
            {{ $title }}
            <br>
            <div class="name">{{ $description }}</div>
        </div>
    </a>
</div>
