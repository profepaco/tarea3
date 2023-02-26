<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="md:flex md:justify-center">
                        <form
                            action="{{route('productos.store')}}"
                            method="post" 
                            class="md:w-1/2 space-y-5"
                            novalidate>
                            @csrf
                            <div>
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input 
                                    id="nombre" 
                                    name="nombre"
                                    class="block mt-1 w-full" 
                                    type="text" 
                                    value="{{old('nombre')}}" 
                                    placeholder="Nombre del producto"/>
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="descripcion" :value="__('Descripción del producto')" />
                                <textarea
                                    id = "descripcion" 
                                    name="descripcion" 
                                    placeholder="Descripción del producto" 
                                    class="block mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                ></textarea>
                                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="categoria_id" :value="__('Categoria')" />
                                <select
                                    id="categoria_id"
                                    name="categoria_id"
                                    class="block mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                >
                                    <option>-- Seleccione --</option>
                                    @foreach ( $categorias as $categoria )
                                        <option value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('categoria_id')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="precio" :value="__('Precio')" />
                                <x-text-input 
                                    id="precio" 
                                    name="precio"
                                    class="block mt-1 w-full" 
                                    type="number"
                                    value="{{old('precio')}}" 
                                    placeholder="Precio del producto"/>
                                <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                            </div>
                            <x-primary-button class="justify-center">
                                {{ __('Registrar producto') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>