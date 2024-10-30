<?php
 
class HomeController extends Controller{
 
 
    public function index(){
 
 
       $dados = array();
     

       $dados['mensagem'] = 'Bem-vindo a Kioficina';
       $dados['nome'] = 'Gabriel';

    //    var_dump($dados);

    $this->carregarViews('home', $dados);

    }
 
 
 
 
}