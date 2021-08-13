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
  numero que é normalmente o 0.
ex de criação:

$contasC['40028922'] = [
"titular" => "Josemar",
"saldo" => 4855
];

foreach ($contasC as  $contasCorrentes) {

    echo $contasCorrentes['titular'] . PHP_EOL;

}

Assim, os dados do josemar seriam introduzidos no ultimo lugar no nosso array.


## Tipos de Chaves

  