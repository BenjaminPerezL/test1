@extends('/layouts/master')

@section('contenido-principal')

                <div class="formulario usuarios">
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <div class="ingreso formulario">
                            <label for="titulo" >Titulo:</label><br>
                            <input type="text" id="titulo" name="titulo" class="form-control" style="width: 300px"><br>
                        </div>
                        <div class="ingreso formulario">
                            <label for="subtitulo" >Subtitulo:</label><br>
                            <input type="text" id="subtitulo" name="subtitulo" style="width: 300px"><br>
                        </div>
                        <div class="ingreso formulario">
                            <label for="tema" >Tema     :</label><br>
                            <input type="text" id="tema" name="tema" class="form-control" style="width: 300px"><br>
                        </div>
                        <div class="ingreso formulario">
                            <label for="link" >Link     :</label><br>
                            <input type="text" id="link" name="link" style="width: 300px"><br>
                        </div>
                        <div class="ingreso formulario">
                            <label for="imagen" >Imagen     :</label><br>
                            <input type="text" id="imagen" name="imagen" style="width: 300px"><br>
                        </div>
                        <div class="ingreso formulario">
                            <label for="usuario" >Usuario     :</label><br>
                            <select style="width: 150px" id="usuario" name="usuario">
                                @foreach ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        
                        
                        
                        
                        
                        
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


                <div class="postcontainer">

                    @foreach ($posts as $num=>$post)
                        
                    <article>
                        <img src="{{$post->imagen}}"  alt="ignar bergman 7 sellos">
                        <h2>{{$post->titulo}}</h2>
                        <p>{{$post->subtitulo}}</p>
                        <a href="{{$post->link}}" target="_blank">{{$post->tema}}</a>
                        <p>{{$post->usuario->nombre}}</p>
                    </article>
            
    @endforeach

                </div>    

                    {{-- formulario --}}

                
    
@endsection