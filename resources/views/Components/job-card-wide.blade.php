@props(['job'])
<x-panel class="flex gap-6">
    <div class="mt-4">
    @if($job->employer && $job->employer->logo)
    <img src="{{ asset('storage/' . $job->employer->logo) }}" alt="{{ $job->employer->name }} Logo" width="99" class="object-contain rounded" />
@else
    <img src="{{ asset('images/logo.svg') }}" alt="Default Logo" width="99" class="object-contain rounded" />
@endif

    </div>

    <div class="flex-1 flex flex-col">
        <div class="flex items-center gap-3">
            {{-- <x-employer-logo :employer="$job->employer" :width="32" /> --}}
            <a href="#"
                class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>
        </div>

        <h3 class="font-bold mt-3 text-xl group-hover:text-blue-800">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div>
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach
        </div>
    </div>
</x-panel>
