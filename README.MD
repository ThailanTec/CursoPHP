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

for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL; }
Podemos definir o $contador ++;

## Breakpoint 

Utilizando break point podemos pular numeros. Ex:
for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL;
if($contatdor == 13) </br>{
echo "$contatdor" . PHP_EOL;
}
}
Assim o mesmo vai acabar pulando o numero 13 e vai direto para o 14. 

## Continue

Onde vamos passar a instrução e o codigo vai continuar. EX:
for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL;
if($contatdor == 13) </br>{
continue;
}
else </br>{
echo "$contador" . PHP_EOL;
}
}

##break 

Onde vamos passar a instrução e o codigo vai parar. EX:
for($contador = 1; $contador <=15; $contador = $contador + 1)</br>{ echo "$contador" . PHP_EOL;
if($contatdor == 13) </br>{
break;
}
else </br>{
echo "$contador" . PHP_EOL;
}
}

##Atividades 

- Para resolver a atividade relacionado a mostrar numeros apenas impares:

for ($contador %2 !=0)</br>{

if</br> 
{echo $contador . PHP_EOL;}
}

- Tabuada

for($i = 1; $i < 10; $i++){
</br>
$resultado = $multiplicador * $i;
echo "$multiplicador * $i = $resultado" . PHP_EOL;
</br>
}