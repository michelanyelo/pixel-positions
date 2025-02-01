@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-gray-400">
        {{ $job->employer->name }}
    </div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 transition duration-300 text-xl font-bold">
            <a href="{{$job->url}}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-sm mt-4">{{ $job->schedule }} anual: {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1.5">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>
</x-panel>
