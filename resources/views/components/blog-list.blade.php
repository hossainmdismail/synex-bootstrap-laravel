<div class="mb-3 d-flex gap-3">
    <img src="{{ $image }}" class="rounded" loading="lazy" width="58px" height="58px" alt="title">
    <div>
        <a href="{{ route('blog.view', $slug) }}" class="card-title-sm font-600">{{ $title }}</a>
        <p>{{ $date }}</p>
    </div>
</div>
