@props(['employer', 'width' => 90])

{{--<img src="https://picsum.photos/seed/{{ rand(1, 2000) }}/{{ $width }}" alt="" class="rounded-xl">--}}
<img src="{{asset($employer->logo)}}" alt="" class="rounded-xl" width="{{$width}}">
