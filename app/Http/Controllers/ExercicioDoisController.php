<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDoisController extends Controller
{
    public function index()
    {
        //cria um array
        $array = [];

        //popula o array com 7 numeros aleatorios
        for ($i = 0; $i < 7; $i++) {
            $array[] = rand(1, 100);
        }

        //imprime a posicao 3 do array
        $primeira = $array[3];

        //cria uma string com os números do array separados por vírgula
        $string = implode(',', $array);

        //cria um segundo array baseado na string
        $array2 = explode(',', $string);

        //destroi o array anterior
        unset($array);

        //verifica se existe o numero 14 no array2
        if (in_array(14, $array2)) {
            $segunda =  "O valor 14 existe no array";
        } else {
            $segunda = "O valor 14 não existe no array";
        }

        //Faça uma busca em cada posição. Se o número da posição atual for menor que o
        //da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta
        //posição
        for ($i = 0; $i < count($array2); $i++) {
          //verifica se existe uma posicao anterior considerando que a anterior pode nao ser apenas atual -1
          if(isset($array2[$i-1])){
            //verifica se o valor atual é menor que o anterior
            if($array2[$i] < $array2[$i-1]){
              //exclui a posicao atual
              unset($array2[$i]);
            }
          }
        }

        //remove a última possicao do array2
        array_pop($array2);

        //conta quantidade de elementos no array2
        $terceira = count($array2);

        //invert2 o array2
        $array2 = array_reverse($array2);

        //retorna a view com os dados
        return view('exercicios.exercicio-dois', compact('primeira', 'segunda', 'terceira', 'array2'));
    }
}
