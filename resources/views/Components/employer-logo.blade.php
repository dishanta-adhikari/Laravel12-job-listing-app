@props(['employer', 'width' => 90])
<img src="{{ asset($employer->logo) }}" alt="Company Logo" class="rounded-xl" width="{{ $width }}">
