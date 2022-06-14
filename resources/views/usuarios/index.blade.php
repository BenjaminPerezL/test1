@extends('/layouts/master')

@section('contenido-principal')
    
        <div class="formulario-usuarios">
            <form method="POST" action="{{route('usuarios.store')}}">
                @csrf
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" class="form-control" style="width: 300px"><br>
                <label for="correo">Correo:</label><br>
                <input type="text" id="correo" name="correo" value="" style="width: 300px"><br><br>
                <div>
                    <div style="display: inline-block; padding:8px;">
                        <button type="submit" style="padding:8px;">Aceptar</button>
                    </div>
                    <div style="display: inline-block; padding:8px;">
                        <button type="reset" style="padding:8px;">Cancelar</button>
                    </div>
                </div>
            </form> 
        </div>


        <div class="info tabla usuarios">
            <div class="tabla usuarios">
                <table>
                    <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    </tr>
        @foreach ($usuariosdb as $num=>$usuario)
        
                    <tr>
                    <td>{{$num+1}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->correo}}</td>
                    </tr>
            
        @endforeach
                </table>
            </div>
            
        </div>
    
@endsection