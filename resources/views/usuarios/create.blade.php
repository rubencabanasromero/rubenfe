<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade una nuevo Usuario') }}
        </h2>
    </x-slot>

        <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
            @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name"  id="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email"  id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password"  id="password" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" name="edad"  id="edad" placeholder="Edad">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>



        </form>

</x-app-layout>
