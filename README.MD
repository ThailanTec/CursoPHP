# O que é o PHP? #

Um linguagem de programação interpretada, ela não precisa ser sempre compilada após ter uma alteração no seu codigo.

Além de funcionar bem na web, o php consegue rodar bem também na linha de comando.

Sempre no PHP, demovemos utilizar o ";", para uqe o codigo seja compilado.

- Variaveis no PHP, definimos atraves do *$*.

## Caracteres Especiais no PHP

- Para quebrar linha no PHP podemos utilizar:
  echo "Olá mundo! \n "
  echo "\n "

Ou echo "Olá mundo!" . PHP_EOL

- \t, serve para dar um espaçamento.

- *https://www.php.net/manual/pt_BR/language.types.string.php*
  Nesse link podemos encontrar mais exemplos.

# Comandos PHP

- php -a

Utilizado para utilizar o php no terminal.

- gettype fala o tipo da variável.

Podemos utilizar o metodo count($exemplo), para pegar a quantidade de itens nessa lista.

- exit()
  Para o codigo onde o exit foi executado.

- mb_strtoupper() ou caso a extensão não tenha sido habilitada: strtououpper();

Serve para colocar todas as strings em letras maisculas.

# Estrutura de Repetição

Uma boa pratica é chamar a variavel de 'i'.

## While

- While Utilizado quando sabemos onde queremos que o numero chegue. Ex: Queremos que o numero va até no maximo 15. Então
  podemos utilizar da seguinte forma. Melhor utilizado quando não sabemos quando o loop se encerrará. Quando é uma
  decisão um pouco mais complexa

$contador = 10;

while ($contador < 15){ $contador = $contador +1; }

## For

- Podemos utilizar com a mesma base na logica do while. Que ainda sim, vamos conseguir trabalhar com o mesma estrutura
  logica. Melhor utilizado quando já sabemos o limite onde queremos chegar.

for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL; } Podemos definir o
$contador ++;

## Breakpoint

Utilizando break point podemos pular numeros. Ex:
for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL; if($contatdor ==

13) </br>{ echo "$contatdor" . PHP_EOL; } } Assim o mesmo vai acabar pulando o numero 13 e vai direto para o 14.

## Continue

Onde vamos passar a instrução e o codigo vai continuar. EX:
for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL; if($contatdor ==

13) </br>{ continue; } else </br>{ echo "$contador" . PHP_EOL; } }

## break

Onde vamos passar a instrução e o codigo vai parar. EX:
for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL; if($contatdor ==

13) </br>{ break; } else </br>{ echo "$contador" . PHP_EOL; } }

## Atividades

- Para resolver a atividade relacionado a mostrar numeros apenas impares:

for ($contador %2 !=0)</br>{

if</br>
{echo $contador . PHP_EOL;} }

- Tabuada

for($i = 1; $i < 10; $i++){
</br>
$resultado = $multiplicador * $i; echo "$multiplicador * $i = $resultado" . PHP_EOL;
</br>
}

# Arrays

Nada mais é do que uma lista de informações normalmente do mesmo tipo : int. Podendo ser criada da forma:

Forma antiga:
$idade = array(12,24,145); Forma nova:
$anos = [21,21,31 ];

Acessamos atraves dos indices, começando sempre do 0. Ex:

$idades = [21,23,45,41];

echo $idades[0];

## Loop em listas

Para criar um loop podemos utilizar a seguinte sintaxe:

$idades = [21,23,45,41,23,43,63];

for ($i = 0; $i < 7; $i++){ echo $idades[$i] . PHP_EOL; }

Assim, vamos conseguir pegar e exibir todos os dados do array.

Obs: para saber a quantidade de dados que tem na lista, podemos utlizar o count, o mesmo consegue nós trazer a
quantidade de caracateres presente na variavel. ex:
$idades = [21,23,45,41,23,43,63];

count($idades);

for ($i = 0; $i < count($idades); $i++){ echo $idades[$i] . PHP_EOL; }

assim, ainda vamos conseguir pegar de forma dinamica os dados vindo do banco por exemplo.

## Array assosiativo

É uma forma de mapa de indices. Podendo assosiar um indice a um valor. Ex:

$conta1 = ["Nome"=>"Thailan",
"Saldo"=>2.000
];

## Loop foreach

Podemos trabalhar com o mesmo na hora de trabalhar com arrays e quando queremos pegar algum dado dessa array, então
chamamos o mesmo da seguinte forma:

foreach ($contasC as $contasCorrentes) {

    echo $contasCorrentes['Saldo'] . PHP_EOL;

}

Dessa forma, podemos chamar atraves de um loop as informações contidas em tal array.

- Mas podemos trabalhar de outra forma com o mesmo, na qual ele vai trazer um indice passado e trabalhar com o indice:
  ex:

$contasC = [
84948949 => [
"titular" => "Thailan",
"saldo" => 2000], 4565165161 => [
"titular" => "Luan",
"saldo" => 1500
], 484654654 => [
"titular" => "Milena",
"saldo" => 5400
]
];

foreach ($contasC as $cpf => $contasCorrentes) {

    echo $cpf . PHP_EOL;

}

Estamos dizendo que o cpf (indice), armazena os dados e assim conseguimos chamar depois esse indice de uma forma mais
facil para trabalhos futuros e para manipular os dados.

foreach ($contasC as $cpf => $contasCorrentes) {

    echo $cpf['titular'] . PHP_EOL;

}

- Utilizando foreach podemos percorrer arrays associativos sem nenhum problema. Podemos inclusive recuperar o valor de
  seus índices dentro do loop.

## Adicionando itens no array

A primeira forma de fazermos isso e não passando um indice, assim o mesmo vai pegar o ultimo indice e adicionar. ex:

$idade = [19,92,20];

$idade[] = 30;

Assim vamos adicionar ao indice mais um dado, que seria o 30.

- Quando não temos um indice no formato numerico, temos que passar a chave, pois se não ele vai substituir pelo primeiro
  numero que é normalmente o 0. ex de criação:

$contasC['40028922'] = [
"titular" => "Josemar",
"saldo" => 4855
];

foreach ($contasC as $contasCorrentes) {

    echo $contasCorrentes['titular'] . PHP_EOL;

}

Assim, os dados do josemar seriam introduzidos no ultimo lugar no nosso array.

## Tipos de Chaves

Para verificar como vai ser o comportamente quando declaramos o tipo, podemos consultar:

https://www.php.net/manual/pt_BR/types.comparisons.php

## Funções

Quando trabalhamos com funções, podemos utilizar a seguinte sintaxe:

function exemplo(){

    return ex;

}

Nesse caso, nossa função teria um retorno. E não tem parametros "pre-passados".

Ou podemos fazer também assim:

function sacar($conta, $valorSaque){

    if ($valorSaque > $conta['saldo']){
        echo "Você não pode sacar esse valor";
    }
    else{
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;

}

Que nesse caso vai ter um retorno e podemos utilizar essa função mais a frente, criando assim uma facilidade na
utilização do codigo.

- Obs: Quando estamos trabalhando com funções utilizamos as chaves na linha de baixo, e estrutura de repetição na mesma
  linha.

## Interpolação & Require

# String complexas

Quando se temos dados mais complexos, podemos envolver os dados em chaves. {}

Deixando o codigo da seguinte forma:

echo $cpf{$contasCorrentes['titular']} {$contasCorrentes['saldo']};

Na documentação temos essas informações sobre strings:

https://www.php.net/manual/pt_BR/language.types.string.php

## Arquivos separados

Para incluir arquivos externos no php, podemos utilizar o include. Assim:

include(nome_do_arquivo.php)

ou

include 'nome_do_arquivo.php';

Mas a melhor de forma de chamar esse arquivo é através do require, onde, caso esse arquivo não seja encontrado, vai
parar a execução do codigo sem muitos problemas.

require 'nome_do_arquivo.php';

Para verificar se o nome do arquivo, já foi inserido podemos utilizar o require_onde, assim ele verificar se o arquivo
em algum momento do codigo já foi inserido alguma outra vez.

require_onde 'nome_do_arquivo.php';

## Valor Vs Referencia

Referencia é quando passamos um valor e queremos que o valor exato seja alterado e não a sua "copia". Ex:

Sendo assim o valor que foi chamado na variavel vai refletir no valor da chamada da função.

Mas tem problema, pois não temos muita segurança com isso. Pois ela tem acesso a muitos dados no nosso caso.

## Função list

Esse é o nome da função que recebe variaveis e essa função vai fazer com que essa função que foi atribuida a ela seja
passado indices. ex

list('titular'=>$titular , 'saldo' => $saldo) = $contasCorrentes;

Ou

['titular'=> $titular , 'saldo' => $saldo] = $contasCorrentes;

## Removendo Itens/Variaveis do Array e outros

Para removar um variavel da memoria do php, podemos utilizar o unset, assim o mesmo vai deletar esse dado da memoria do
php.

## PHP e HMTMl

Para trabalhar com o PHP e HTMl, podemos utilizar as seguintes funcionalidades:

- < ? = ?>

Utilizado como se dissese-mos 'echo', assim agilizamos na hora de informar no html que queremos exibir uma mensagem.

< dt >
< ?= $contasCorrentes['titular']; ?> - <?= $cpf ?>;
</ dt>

Para criarmos uma chamada de exibição como um foreach, podemos utilizar:

< ?php foreach(exemplos){ ?>
*Codigo HTMl*
< ? } ?>

Assim conseguimos exibir o codigo php junto com o html sem mais problemas. Exemplo completo abaixo:
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta Corrente</title>

</head>
<body>
<h1>Contas Correntes</h1>

    <?php foreach ($contasC as $cpf => $contasCorrentes){ ?>
        <dl>
            <dt>
               <?= $contasCorrentes['titular']; ?> - <?= $cpf ?>;
            </dt>
            <dt>
                <?=  $contasCorrentes['saldo']; ?>
            </dt>
        <?php  }  ?>
        </dl>

</body>
</html>

# ----------- Orientação a Objetos ------------

- Arquivos OO, encontra-se no src.

## Classes e Objetos

- Classe é o modelo utilizado para criar um objeto.

Utilizamos Classes como 'formas', assim conseguimos moldar os dados como nós queremos. Sempre iniciando com as letras
das suas frases maiusculas.  
Então, a partir dessa classe conseguimos criar com o tipo da classe que criamos e definimos qual o seu modelo.

< ? php

class Conta { public $cpfTitular; public $nomeTitular; public $saldo;

}

Para chamar a classe em questão criada, chamamos da seguinte forma de exemplo:

    $novaConta = new Conta(); 

Dessa forma dizemos que o tipo de do dado sera baseado na 'forma'/Classe, Conta.

## Definindo os Dados

Primeiro temos que informar para o php quem pode acessar os dados que estamos disponibilizando. Para isso podemos
utilizar 2 definições: *public* ou *private*.

Quando qualquer 'pessoal' puder acessar esse dado, ou quando quisermos disponilizar esse dado, utilizamos o public.
Quando esse dado pode ser acesso apenas pelo objeto em questão utilizamos o private. EX:

public $cpfTitular; public $nomeTitular; public $saldo;

OBs: Se o projeto for acima do PHP 7.4, podemos utilizar da seguinte forma:

public string $cpfTitular; public string $nomeTitular; public float $saldo;

Assim, chamamos o mesmo de atributos da classe/objetos.

Para acesssar os dados criados, utilizamos uma -> , para simboliar o que queremos acessar.

$primeiraConta -> saldo;

Ou para enviarmos dados:

$primeiraConta -> saldo = 1000;

De qualquer forma, vamos conseguir acessar esses dados e passar dados para o mesmo.

## Valor vs Referencia

Quando criamos uma variavel x = 5, sabemos que x tem o valor de 5. Mas quando passamos y = x, estamos dizendo que y, tem
a referencia do y. Logo, quando atualizarmos o valor de x, y também vai receber o valor, pois esse dado esta utilizando
a referencia de x, para 'se manter'.

## Metodos

São funções que criamos dentro da classe, para assim conseguirmos efetuar operações no código.

Ex:
public function sacar (float $valorSaque)
{
if ($valorSaque > $this->saldo){

    echo 'Saldo indisponivel para saque';

}else{

    $this->saldo -= $valorSaque;

}
}

Utilizamos $this->exemplo, para pegar as referencias dos dados. Assim, conseguindo acessar o mesmo quando for chamado.

Após a criação do codigo, utilizamos o mesmo assim:

$Conta1 ->sacar(800);

Passando a conta de onde queremos remover o dados e em seguida chamados pelo ->  o nome do metodo e em seguida o valor
entre parenteses que queremos sacar. 

- OBS: IDEAL NÃO UTILIZAR ELSE, NO CASO PODEMOS UTILIZAR O *return*, para retornar um erro. 




