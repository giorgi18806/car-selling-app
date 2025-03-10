@props(['image_path' => ''])

<button
    class="btn btn-default flex justify-center items-center gap-1"
>
    <img src="/img/{{ $image_path }}" alt="" style="width: 20px" />
    {{ $slot }}
</button>