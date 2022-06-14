<!DOCTYPE html>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/style.css')}}" rel=" stylesheet" >
        <script src="D:\3er semestre\prog web\elblok\js\script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="cuerpo">
            {{-- <a href="https://www.bing.com/ck/a?!&&p=0ef4a1a0e6a590ba58ce4390e061876bec720e78661844b360674b211741fc35JmltdHM9MTY1Mzk1NTc2NSZpZ3VpZD03M2U5NzQ4ZC0zNjAxLTRkY2EtYmQ4OS0yOGNlMGRhZmNjNzEmaW5zaWQ9NTE0MA&ptn=3&fclid=edc1e60f-e075-11ec-bcbd-75578cd49c9f&u=a1aHR0cHM6Ly9tZW93bWFydC5tYWlsY2hpbXAuY29tLw&ntb=1" target="_blank">
                <div id="izq"> 
                    <img src="{{asset('img/adgatito.jpg')}}"> 
                </div>
            </a> --}}
            <div id="centro">
                <header id="encabezado">
                    <h1>😈😈😈😈😈</h1>
                </header>
                <div class="menu">
                    <div class="itemmenu @if(Route::current()->getName()=='home.index')active @endif">
                        <a class="nombremenu @if(Route::current()->getName()=='home.index')active @endif" href="{{route('home.index')}}">Home</a>
                    </div>
                    <div class="itemmenu">
                        <a class="nombremenu " href="{{route('posts.index')}}">Posts</a>
                    </div>
                    <div class="itemmenu">
                        <a class="nombremenu" href="{{route('usuarios.index')}}">Usuarios</a>
                    </div>
                    <div class="itemmenu">
                        <a class="nombremenu" href="/contacto">Contacto</a>
                    </div>
                    <div class="itemmenu @if(Route::current()->getName()=='home.login')active @endif">
                        <a class="nombremenu @if(Route::current()->getName()=='home.login')active @endif" href="{{route('home.login')}}">Login</a>

                    </div>

                </div>
                
                @yield('contenido-principal')
                
                <footer>
                    <div>
                    
                        <a href="#encabezado">2022 el blok</a>
                    </div>
                    <p>Prog Web</p>
                </footer>
            </div>
        </div>
    </body>
</html>



