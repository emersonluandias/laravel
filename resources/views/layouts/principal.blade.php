<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
   <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
 </head>       
<body>
    <div class="row">
    <div class="col1">
    <div class="menu">
        <ul>
            <li><a class="{{request()->routeIs('cliente.index')? 'active': ''}}"href="{{route('clientes.index')}}">Clientes</a></li>
            <li><a class="{{request()->routeIs('produtos')? 'active': ''}}"href="{{route('produtos')}}">Produtos</a></li>
            <li><a class="{{request()->routeIs('departamentos')? 'active': ''}}"href="{{route('departamentos')}}">Departamentos</a></li>
            <li><a class="{{request()->routeIs('opcoes')? 'active': ''}}"href="{{route('opcoes')}}">Opcoes</a></li>
        </ul>
    </div>
    </div>
    </div>
            <div class="col2">
                @yield('conteudo')
            </div>
</body>
</html>