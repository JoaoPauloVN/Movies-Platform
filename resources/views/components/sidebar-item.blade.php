@props(['route', 'icon', 'title'])

<div class="relative my-1 py-2">
    <a href="{{ route($route) }}" class="my-4"><i
            class="{{ $icon }} {{ request()->routeIs($route) ? 'text-blue-800' : '' }}"></i>
        {{ $title }}</a>
    <div class="{{ request()->routeIs($route) ? 'bg-blue-800' : '' }} absolute top-0 -left-10 h-full w-[.2rem]">
    </div>
</div>
