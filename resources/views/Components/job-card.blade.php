@props(['job'])
<x-panel>
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-sm mt-4 gap-1">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>

        @if($job->employer && $job->employer->logo)
    <img src="{{ asset('storage/' . $job->employer->logo) }}" alt="{{ $job->employer->name }} Logo" width="32" class="object-contain rounded" />
@else
<img src="{{ asset('images/logo.svg') }}" alt="Default Logo" width="32" class="object-contain rounded" />
@endif

    </div>
</x-panel>
