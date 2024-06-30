<nav>
    <div class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="Image/logoempresa3.jpg" class="h-8" alt="Flowbite Logo"width="100" height="100"/>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Inmobiliaria Amaru</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                @if (Route::has('login'))
                <livewire:welcome.navigation />
                @endif
            </div>
        </div>
    </div >

    <div class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">

                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="{{ route('index') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('inmuebles') }}" class="text-gray-900 dark:text-white hover:underline">inmuebles</a>
                    </li>
                    <li>
                        <a href="{{ route('proyecto') }}" class="text-gray-900 dark:text-white hover:underline">proyectos</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
