
<a href="{{ route('answer', Crypt::encryptString($capital)) }}"
   class="group relative flex items-center justify-center w-full h-12 rounded border border-gray-100 bg-gray-800  px-12 py-3 text-xl font-normal text-white hover:text-[#FF2D20] focus:outline-none focus:ring active:bg-[#FFE184] active:text-white">
    <p class="">{{ $capital }}</p>
    <span
        class="ease absolute left-0 top-0 h-0 w-0 border-t-4 border-[#FFE184] transition-all duration-200 group-hover:w-full"></span>
    <span
        class="ease absolute right-0 top-0 h-0 w-0 border-r-4 border-[#FFE184] transition-all duration-200 group-hover:h-full"></span>
    <span
        class="ease absolute bottom-0 right-0 h-0 w-0 border-b-4 border-[#FFE184] transition-all duration-200 group-hover:w-full"></span>
    <span
        class="ease absolute bottom-0 left-0 h-0 w-0 border-l-4 border-[#FFE184] transition-all duration-200 group-hover:h-full"></span>
</a>

