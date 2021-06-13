<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>


        <form action="{{url('perfil/'.$miperfil->id)}}" method="POST" enctype="multipart/form-data">
            @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
            @method('PUT') {{-- se pone porque es put de metodo --}}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{$miperfil->name}}"  id="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" value="{{$miperfil->email}}"  id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" value="{{$miperfil->password}}"  id="password" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <label for="name">Edad</label>
                <input type="number" class="form-control" name="edad" value="{{$miperfil->edad}}"  id="edad" placeholder="Edad">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>



        </form>



</x-app-layout>
