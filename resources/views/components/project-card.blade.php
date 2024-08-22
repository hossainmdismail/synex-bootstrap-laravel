<div class="card-1">
    <div class="card-body">
        <div class="position-relative">
            <img src="{{ asset('Frontend/images/' . $image) }}" width="100%" style="border-radius: 0.5rem;"
                alt="Synex Digital">
            <a href="#" class="badge-default service-badge">{{ $status }}</a>
        </div>
        <div class="pt-3">
            <a href="#" class="card-title font-700 mb-0">{{ $title }}</a>
            <p class="pt-2">{{ $description }}</p>
        </div>
    </div>
</div>
