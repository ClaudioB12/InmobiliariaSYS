<button {{ $attributes->merge(['type' => 'submit', 'class' =>' w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#333] hover:bg-[#222] focus:outline-none']) }}>
    {{ $slot }}
</button>
