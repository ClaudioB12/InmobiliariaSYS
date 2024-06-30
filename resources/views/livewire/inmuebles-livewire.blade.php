<x-index-layout>
    {{-- <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
        @foreach ($noticias as $noticia)
            @livewire(Noticia::class,['noticia'=>$noticia])
        @endforeach
    </div>
    <div class="mt-2">
       {{$noticias->links()}}
    </div> --}}


    <div>
        <div class="text-center rounded bg-white p-4">
            <h2 class="font-bold">Alquiler De Inmuebles</h2>
        </div>

        <div class="flex justify-between items-center p-4 bg-gray-100 relative">
            <div class="text-sm text-gray-600">
                Mostrando {{ $inmuebles->firstItem() }} - {{ $inmuebles->lastItem() }} de {{ $inmuebles->total() }} resultados

            </div>
            <div class="relative">
                <button id="sortButton" class="px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none">
                    Ordenar por: Más antiguo ▼
                </button>
                <div id="sortOptions" class="hidden absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="sortButton">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Defecto</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Más reciente</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 bg-gray-100" role="menuitem">Más antiguo</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Menor Precio</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Mayor Precio</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Aleatorio</a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($inmuebles as $inmueble)
                <div class="relative mx-auto w-full">
                  <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="rounded-lg bg-white p-4 shadow">
                      <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                        <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                          <div class="absolute inset-0 bg-black bg-opacity-80">
                            <img src="img/foto1.jpg" alt="" />
                          </div>
                        </div>

                        <div class="absolute bottom-0 left-5 mb-3 flex">
                          <p class="flex items-center font-medium text-white shadow-sm">
                            <i class="fa fa-camera mr-2 text-xl text-white"></i>
                            {{ $inmueble->id }}
                          </p>
                        </div>
                        <div class="absolute bottom-0 right-5 mb-3 flex">
                          <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                          </p>
                        </div>

                        <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> {{ $inmueble->categoria}} </span>
                        <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                      </div>

                      <div class="mt-4">
                        <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">{{ $inmueble->titulo}}</h2>

                        <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                          <span class="text-sm uppercase"> {{ $inmueble->direccion}}  [more]</span>
                        </p>
                      </div>
                      <div class="mt-4">
                        <p class="line-clamp-1 mt-2 text-lg text-gray-800">{{ $inmueble->descripcion }} [more]</p>
                      </div>
                      <div class="justify-center">
                        <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                          <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bed mr-2 text-blue-900"></i>
                            2
                          </p>

                          <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bath mr-2 text-blue-900"></i>
                            3
                          </p>
                          <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-home mr-2 text-blue-900"></i>
                            2000 Yd<sup>2</sup>
                          </p>
                        </div>
                      </div>
                      <div class="mt-8 grid grid-cols-2">
                        <div class="flex items-center">
                          <div class="relative">
                            <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                            <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                          </div>

                          <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                        </div>

                        <div class="flex justify-end">
                          <button><i class="fa fa-sms mx-1 rounded-md bg-[#0174E1] py-1 px-3 text-2xl text-white"></i></button>
                          <button><i class="fa fa-phone rounded-md bg-[#0174E1] py-1 px-3 text-2xl text-white"></i></button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- paginate --}}

    <div class="mt-4">

        {{ $inmuebles->links() }}
    </div>


</x-index-layout>
<script>
    const sortButton = document.getElementById('sortButton');
    const sortOptions = document.getElementById('sortOptions');

    sortButton.addEventListener('click', () => {
        sortOptions.classList.toggle('hidden');
    });
</script>

