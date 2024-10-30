<?php
// TUDO QUE TIVER DENTRO DA CLASS É UM MÉTEDO -> ATRIBUTO
class Core {
    //Métedo - inicializar o processo de ROTAS
    public function executar (){
       // $url - como criar variável no php
         $url = '/';
         
         // Verificar se variável URL está definida na $_GET 'ela existe dentro da URL'
         
         if(isset($_GET['url'])){ //determina se uma variável foi declarada
         
          $url .= $_GET['url'];  //está matendo o valor da barra
         
         
        }
        // var_dump - ele serve para mostrar o tipo da variavel o conteúdo que ela está vinculada
        // var_dump($url);
 
        $parametro = array();//definindo um array para armarzenar os paramentros 'array= estrutura de dados que permit armazenar múltiplos valore em uma única variável.'
        // var_dump($parametro);
 
      //  // Verifica se a URL não está vazia e não é apenas uma barra '/'
      //  //determina se uma variável está vazia, mas coloquei o ponto de exclamação perguntao se não está vazia
     
       if(!empty($url) && $url != '/'){
 
       //servicos/especialidade/nomeServico
       //controller/ação/parametro
 
        $url = explode('/', $url); // explode o php toda vez que encontra uma barra '/'
        //var_dump($url);
        //servicos [0]
        //especialidade[1]
        //nomeServico[2]
 
        array_shift($url); // pegue a url e remove os primeiros elementos vazios da url
        //var_dump($url);
        //Obter o controller atual
        //ucfirst - Colocar a primeira letra em maiúscula
        // Concatenar 'Controller' ao nome para seguir o padrão
        $controladorAtual = ucfirst($url[0]) . 'Controller';
        //controladorAtual = ServicosController
       
        //var_dump($controladorAtual);
       
        array_shift($url);
        //especialidade[0]
        //nomeServico=[1]
 
        //Verificar se existe uma ação na URL
        //Isset - Determina se uma variavpel está declarada e é diferente de
        //empty - Dermina se uma variável está vazia
        if(isset($url[0]) && !empty ($url[0])){
         
          $acaoAtual = $url[0];
           //$acaoAtual = especialiade
          //var_dump("Nome de ação atua: " . $acaoAtual);
          array_shift($url);
 
 
        }else{
          $acaoAtual = 'index';
          //var_dump($acaoAtual);
        }
 
        // Os parametros
        if(count($url) > 0){ // conta todos  os elementos de um array ou de objeto Countable
          $parametro = $url;
 
        }
       
      }else{
        $controladorAtual = 'HomeController';
        $acaoAtual = 'index';
        // var_dump('Controldaro Atual: ' . $controladorAtual);
        // var_dump('Ação Atual:  ' . $acaoAtual);
      }
        //verificando se o arquivo do CONTROLLER existe  e SE  o métedo existe
      if(!file_exists('../app/controllers/' . $controladorAtual . '.php') || !method_exists($controladorAtual, $acaoAtual)){
 
        // Se não existir defina o controller como ErroController
        $controladorAtual = 'ErroController';
        $acaoAtual = 'index';
       
       }
 
 
    //    var_dump('Controlador Atual: '. $controladorAtual);
    //    var_dump('Ação Atual:  ' . $acaoAtual);
 
       
      // // Instância do controller atual
      $controller = new $controladorAtual();
      // var_dump($controller);
 
      // // Chama uma função de retorno com um array de parâmentros
      call_user_func_array(array($controller, $acaoAtual),$parametro);
 
 
 
    }
     
}
 
//metedo public quero que sejar encontrado por todo eco sistema na minha aplicação '/ o public fica solto em qualquer pasta/
//private só vai ser enxergado na própria calsse 'ele fica preso dentro da class'
 