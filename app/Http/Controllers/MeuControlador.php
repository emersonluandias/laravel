<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SeriesController;

class MeuControlador extends Controller
{
    public function produtos(){

    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";

    }
    public function getNome(){
           return "Jose da silva";
    }
    public function getIdade(){
           return "19";
    }
    public function Multiplicar($n1,$n2){  
          return $n1 * $n2;
    }
}