<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full inline-flex justify-center items-center px-4 py-2 bg-teal border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#0A2827] focus:outline-none focus:ring-2 focus:ring-teal-300 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>


