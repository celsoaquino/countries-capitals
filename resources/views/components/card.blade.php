@props(['title'])

<div
    class="rounded-lg bg-gray-800 font-bold text-2xl text-center text-surface shadow-secondary-1">
    <div
        class="border-b-2 border-neutral-100 px-6 py-3 ">
       {{ $title }}
    </div>
    <div class="p-6">
       {{ $slot }}
    </div>
</div>
