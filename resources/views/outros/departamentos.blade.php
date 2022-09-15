@extends('layouts.principal') 
@section('titulo','Departamentos')
@section('conteudo')

<h3> Novo Departamento</h3>
<ul>
    <li>Computadores</li>
    <li>Eletronicos</li>
    <li>Acessorios</li>
    <li>Roupas</li>
</ul>

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'info'])
<p><strong>Erro inesperado</strong></p>  
<p>Ocorreu um erro inesperado</p>  
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'success'])
<p><strong>Erro inesperado</strong></p>  
<p>Ocorreu um erro inesperado</p>  
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'selected '])
<p><strong>Erro inesperado</strong></p>  
<p>Ocorreu um erro inesperado</p>  
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
<p><strong>Erro inesperado</strong></p>  
<p>Ocorreu um erro inesperado</p> 
@endcomponent

@alerta(['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
<p><strong>Erro inesperado</strong></p>  
<p>Ocorreu um erro inesperado</p>
@endalerta

@endsection
