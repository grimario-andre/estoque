<?php
namespace estoque\Http\Controllers;

use Illuminate\Routing\Controller;

#ProutoController
class ProdutoController extends Controller
{
     function lista()
    {
        return '<h1>Listagem de produtos com Laravel</h1>';
    }
}
