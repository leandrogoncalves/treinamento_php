# Treinamento de PHP

Este treinamento de PHP foi projetado para desenvolver habilidades avançadas na linguagem PHP, abordando conceitos fundamentais e práticos como a manipulação de datas, programação orientada a objetos (POO), acesso a diversos tipos de bancos de dados e testes unitários. Os participantes aprenderão a criar e formatar datas, aplicar os princípios da POO como encapsulamento, abstração, herança e polimorfismo, além de utilizar PDO para interagir com bancos de dados MySQL, SQL Server, Oracle, entre outros. O curso também inclui a implementação de testes unitários com PHPUnit para garantir a qualidade e a consistência do código, capacitando os desenvolvedores a escreverem aplicativos robustos e eficientes


[### 1. Introdução ao PHP](#introducao_ao_php)

* [Características do PHP](#caracterisca_do_php).

* [Padrões e boas práticas com PHP (PSR’s)](#padoes_com_php)

* [Configuração do ambiente de desenvolvimento (docker, composer).](#confiiguracao_do_ambiente)

[### 2. Manipulação de Datas em PHP](#manipulacao_de_datas)

* [Introdução às funções de datas no PHP.](#introducao_as_funcoes_de_datas)

* [Criação e formatação de datas com date() e DateTime](#criacao_formatacao_datas)

* [Cálculos com datas (adição, subtração, diferenças entre datas).](#calculos_com_datas)

* [Tratamento de fusos horários.](#tratamento_fusos_horarios)

[### 3. Programação Orientada a Objetos (POO)](#poo)

* [Conceitos básicos de POO: Classes, Objetos, Métodos, e Atributos](#conceitos_basicos_poo)

* [Os 4 pilares da POO: Encapsulamento, Abstração, Herança, e Polimorfismo](#quatro_pilares_poo)

* [Práticas de boas práticas e design patterns.](#boas_praticas_e_design_patterns)

[### 4. Acesso a Banco de Dados](#acesso_a_banco_de_dados)

* [Introdução ao MongoDB e ao uso do PHP para acessar bancos de dados.](#introducao_mongodb)

* [Operações CRUD (Create, Read, Update, Delete).](#operacoes_crud)

[### 5. Rodando php em container usando Docker](#rodando_php_com_docker)

* [Instalação do Docker](#instalacao_docker)

* [Criação do arquivo Dockerfile](#criacao_dockerfile)

* [Rodando containers com docker-composer](#rodando_containers_docker)

[### 6. Testes Automatizadados](#testes_automatizados)

* [Conceito e importância dos testes unitários.](#importancia_testes_automatizadados)

* [Configuração do Ambiente de Testes.](#ferranentas_testes_unitarios)

* [Implementação de testes unitários](#implementacao_testes_unitarios)

### 7. Projeto Final

* Desenvolvimento de uma aplicação web completa que integra todos os tópicos abordados.

* Implementação de funcionalidades de manipulação de datas.

* Estruturação do código utilizando POO.

* Acesso ao banco de dados para operações CRUD.

* Criação e execução de testes unitários para garantir a consistência da aplicação.


<a id="introducao_ao_php"></a>
## 1. Introdução ao PHP 

### História do PHP

PHP (Hypertext Preprocessor) foi criado em 1994 por Rasmus Lerdorf, inicialmente como um conjunto de scripts CGI (Common Gateway Interface) em C para acompanhar as visitas ao seu currículo online. Originalmente chamado de "Personal Home Page Tools", esses scripts evoluíram rapidamente devido à demanda e ao interesse de outros desenvolvedores.

Em 1995, Rasmus lançou o código-fonte do PHP ao público, permitindo que outros desenvolvedores utilizassem e contribuíssem para a ferramenta. Este lançamento marcou a transição do PHP de uma ferramenta pessoal para uma linguagem de programação colaborativa e open source.

Nos anos seguintes, o PHP passou por várias revisões e melhorias. Em 1997, Andi Gutmans e Zeev Suraski reescreveram o núcleo do PHP, resultando na versão PHP 3, que foi lançada oficialmente em 1998. Esta versão introduziu a base para o que se tornaria a linguagem PHP moderna, incluindo a mudança do nome para "PHP: Hypertext Preprocessor".

A colaboração entre Gutmans e Suraski levou à criação do Zend Engine, o núcleo de execução do PHP, que foi introduzido na versão PHP 4 em 2000. O Zend Engine trouxe melhorias significativas em desempenho e funcionalidades.

Desde então, o PHP continuou a evoluir, com lançamentos importantes como o PHP 5 em 2004, que introduziu suporte robusto para programação orientada a objetos, e o PHP 7 em 2015, que trouxe melhorias de desempenho dramáticas. Atualmente, o PHP é amplamente utilizado para o desenvolvimento de sites dinâmicos e aplicações web, sendo uma das linguagens de programação mais populares do mundo. A versão atual do PHP no dia da escrita deste documento é a versão 8.2, descreveremos abaixo as caracteristicas e evoluções da linguagem:

 

### Curiosidades sobre o PHP

O PHP usa programação procedural ou programação orientada a objetos e também uma mistura deles.

O PHP está instalado em mais de 20 milhões de sites e 1 milhão de servidores web. (PHP: sites 244M, endereços IP de 2.1M)

75% dos sites da Web 2.0 são criados em PHP. O PHP é usado por 81,7% de todos os sites cuja linguagem de programação do lado do servidor que conhecemos.

Existem mais de 5 milhões de desenvolvedores PHP em todo o mundo.

O último lançamento do PHP até agora é o PHP 8.2.

Algumas das maiores marcas online, como Facebook, ProProfs, Digg, Friendster, Flickr, Technorati e Yahoo! são alimentados pelo PHP.

O seu “mascote” é o ElePHPant

O interepretador da liguagem php é escrito na linguagem C, caso tenha curisidade de ver o código por trás da linguagem PHP o link a para o repositório do código fonte é este: https://github.com/php/php-src 

<a id="caracterisca_do_php"></a>
### Caracteristicas do PHP

PHP, sigla para "Hypertext Preprocessor", é uma das linguagens de programação mais populares para desenvolvimento web, especialmente no lado do servidor. Sua popularidade se deve a várias características, como por exemplo:

Simplicidade e Facilidade de Aprendizado: PHP é conhecido por sua sintaxe simples e intuitiva, que facilita o aprendizado para iniciantes. A linguagem foi projetada para ser fácil de entender e usar, permitindo que desenvolvedores criem rapidamente scripts funcionais;

Eficiência e Desempenho: PHP é altamente eficiente para a criação de páginas web dinâmicas. Ele é executado diretamente no servidor, o que permite uma rápida resposta às requisições do usuário. Além disso, o PHP é otimizado continuamente para melhorar o desempenho;

Multiplataforma: PHP pode ser executado em diferentes sistemas operacionais, como Windows, Linux e macOS. Esta característica torna a linguagem extremamente versátil e adequada para diversos ambientes de desenvolvimento;

Código Aberto: Sendo uma linguagem de código aberto, PHP tem uma enorme comunidade de desenvolvedores que contribuem com melhorias e bibliotecas, tornando a linguagem mais robusta e rica em recursos. Além disso, o fato de ser open source significa que não há custos associados ao seu uso;

Desenvolvimento Orientado a Objetos: PHP suporta programação orientada a objetos (POO), o que facilita a organização e reutilização do código. Este recurso é essencial para projetos maiores e mais complexos, permitindo a criação de aplicativos mais modularizados e manuteníveis;

Interpretação em Tempo Real: Diferente de algumas linguagens compiladas, PHP é uma linguagem interpretada. Isso significa que o código é executado diretamente, sem a necessidade de uma etapa de compilação, o que pode acelerar o desenvolvimento e a depuração;

Extensa Base de Bibliotecas e Frameworks: PHP possui uma vasta coleção de bibliotecas e frameworks, como Laravel, Symfony e CodeIgniter, que facilitam o desenvolvimento rápido e estruturado de aplicações web. Essas ferramentas ajudam a reduzir o tempo de desenvolvimento e a aumentar a qualidade do código;

Extensa Biblioteca de Funções: PHP vem com uma vasta biblioteca de funções nativas que simplificam tarefas comuns, como manipulação de strings, interação com bancos de dados, gerenciamento de arquivos e envio de e-mails;

Suporte a Bancos de Dados: PHP é compatível com uma ampla variedade de sistemas de gerenciamento de bancos de dados, incluindo MySQL, PostgreSQL, SQLite, e outros. Esta compatibilidade facilita a integração de bancos de dados em aplicações web;

Comunidade Ativa e Suporte: A comunidade PHP é extremamente ativa, oferecendo uma grande quantidade de recursos, como documentação detalhada, tutoriais, fóruns, e bibliotecas de terceiros. Isso facilita a resolução de problemas e o aprendizado contínuo; [2].

Flexibilidade e Facilidade de Integração: PHP pode ser facilmente integrado com outras tecnologias, como HTML, CSS, JavaScript e APIs RESTful, permitindo o desenvolvimento de aplicações web completas e dinâmicas;

### Evolução da linguagem PHP

Foram muitas as mudanças e evoluções da linguagem PHP até os dias de hoje, estas modificações demonstram a evolução contínua do PHP, focando em desempenho, segurança e facilidade de uso, garantindo que a linguagem se mantenha relevante e eficiente para o desenvolvimento web moderno.

PHP 3.x (1998)
Reescrito: PHP 3 foi um reescrito completo das versões anteriores (Personal Home Page Tools) e introduziu a base da linguagem PHP moderna.

Sintaxe Simples: Simplificou a integração com HTML, fazendo com que fosse popular para desenvolvimento web.

PHP 4.x (2000)
Zend Engine 1.0: Introdução do Zend Engine, melhorando a performance e a gestão de recursos.

Melhorias na POO: Suporte básico para programação orientada a objetos.

Extensibilidade: Melhoria no sistema de extensões, permitindo a adição de novas funcionalidades com mais facilidade.

PHP 5.x (2004-2014)
Zend Engine II: Aprimoramento significativo na POO, com suporte a visibilidade, herança, interfaces e métodos estáticos.

PDO: Introdução da extensão PDO (PHP Data Objects) para acesso a diferentes bancos de dados.

Namespaces: Introdução de namespaces em PHP 5.3, melhorando a organização e evitando conflitos de nome.

Funções Anônimas e Closures: PHP 5.3 introduziu funções anônimas e closures, permitindo programação funcional.

Generator: O conceito de "Generator" foi introduzido no PHP na versão 5.5, lançada em junho de 2013. Os Generators permitem a criação de iteradores simples utilizando a palavra-chave yield, proporcionando uma maneira eficiente de iterar sobre grandes conjuntos de dados sem a necessidade de armazená-los todos na memória de uma só vez. Isso trouxe benefícios significativos em termos de desempenho e consumo de recursos para aplicações que lidam com processamento de grandes volumes de dados de forma iterativa.

PHP 7.x (2015-2019)
Zend Engine 3.0: Grande aumento de desempenho (até duas vezes mais rápido que o PHP 5.6).

Tipagem Escalar e Declarações de Retorno: Introdução de tipagem escalar e declarações de tipo de retorno.

Null Coalesce Operator: Adição do operador ?? para simplificar operações com valores nulos.

Novos Operadores: Introdução do operador spaceship (<=>) e incremento no uso de classes anônimas e variáveis de captura em closures.

Libsodium: Adição da biblioteca para criptografia segura.

PHP 8.x (2020-presente)
JIT (Just-In-Time Compiler): Introdução do JIT em PHP 8.0 para melhorar ainda mais a performance.

Union Types: Suporte a union types, permitindo que uma variável possa ser de mais de um tipo.

Match Expression: Introdução do operador match, oferecendo uma alternativa mais poderosa ao switch.

Named Arguments: Suporte a argumentos nomeados, permitindo passar argumentos para funções com base no nome do parâmetro.

Aprimoramentos na POO: Novas funcionalidades como propriedades tipadas, construtores em interfaces e atributos (annotations).

Readonly Properties: PHP 8.2 introduziu propriedades somente leitura e tipos true, false, e null


Link para o manual do PHP: https://www.php.net/manual/pt_BR/index.php 


## Conheça mais sobre o PHP

### Lista de mudanças da lingauagem PHP desde a versão 5.x

#### PHP 5.x

PHP 5.0 (2004): Introduziu o Zend Engine II, suporte a programação orientada a objetos (POO) aprimorado, com visibilidade (public, private, protected), métodos e propriedades estáticas, e interfaces.

PHP 5.1 (2005): Adição da extensão PDO para acesso a bancos de dados, melhorias no sistema de manipulação de datas com a introdução da classe DateTime.

PHP 5.3 (2009): Introdução dos namespaces, suporte para closures (funções anônimas) e melhorias no suporte à POO.

PHP 5.4 (2012): Short array syntax, remoção de funcionalidades deprecated, como register_globals e magic quotes.

PHP 5.5 (2013): Introdução do generator com a palavra-chave yield, operador finally e a função password_hash.

PHP 5.6 (2014): Suporte a variadic functions e constantes escalares.

#### PHP 7.0 (2015)

Desempenho Melhorado: Zend Engine 3.0 introduzido, resultando em um aumento significativo de desempenho.

Operador Null Coalesce: Adição do operador ?? para facilitar operações com valores nulos.

Declarações de Tipo de Retorno: Suporte a declarações de tipo de retorno e tipos escalares.

Classes Anônimas: Introdução de classes anônimas.

Operador de Espaçonave: O operador <=> para comparações combinadas.

#### PHP 7.1 (2016)

Nullable Types: Permite que tipos aceitem valores nulos com a sintaxe ?.

Void Return Type: Introdução do tipo de retorno void.

Constant Visibility: Permite definir a visibilidade de constantes de classe.

Capturing Closures: Melhorias nas closures que capturam variáveis.

#### PHP 7.2 (2017)

Libsodium: Biblioteca para criptografia adicionada como padrão.

Object Type Hint: Novo tipo de dica de parâmetro object.

Argon2: Suporte para o algoritmo de hashing Argon2.

#### PHP 7.3 (2018)

Heredoc e Nowdoc: Melhorias na sintaxe dessas estruturas de string.

Array Destructuring: Expansão do suporte para desestruturação de arrays.

#### PHP 7.4 (2019)

Typed Properties: Propriedades tipadas em classes.

Arrow Functions: Funções de seta para simplificação de closures.

Preloading: Carregamento prévio de scripts para melhorar o desempenho.

FFI: Interface de Função Estrangeira para interagir com bibliotecas escritas em C

#### PHP 8.0

JIT Compiler: Introdução do compilador Just-In-Time para melhor desempenho.

Union Types: Suporte para tipos de união.

Named Arguments: Permissão para passar argumentos para funções com nome.

Attributes: Sistema de anotações nativo para metadados

#### PHP 8.1

Fibers: Implementação de fibras para melhor gerenciamento de fluxo de execução.

Enums: Introdução de enums nativos.

Readonly Properties: Suporte para propriedades somente leitura.

#### PHP 8.2

Readonly Classes: Classes que são totalmente somente leitura.

DNF Types: Suporte para tipos de formulário normal disjuntivo.

True, False, Null Types: Suporte para tipos true, false e null como tipos de retorno




### Paralelismo em PHP (Corrotinas e decorators)

Corrotinas em PHP são implementadas usando generators, que foram introduzidos na versão 5.5 da linguagem. Generators permitem a criação de iteradores de forma simples e eficiente, sendo essenciais para a implementação de corrotinas. Corrotinas permitem que uma função seja pausada e retomada posteriormente, permitindo operações assíncronas de maneira eficiente sem bloquear a execução de outras partes do código.

#### História e Utilização

História: Introduzidos inicialmente como parte das melhorias de desempenho e funcionalidade na versão 5.5 do PHP, generators simplificaram a criação de iteradores, o que posteriormente possibilitou o uso de corrotinas.

Utilização: São utilizados para implementar operações assíncronas, como execução de tarefas que podem ser pausadas e retomadas, ideal para processamento de grandes volumes de dados, operações de E/S (Input/Output) intensivas, entre outros.

Exemplo simples de corrotina em PHP usando generators:

```php
<?php
function minhaCorrotina() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}
foreach (minhaCorrotina() as $valor) {
    echo "$valor ";
}
// Saída: 1 2 3 4 5
```

A programação assíncrona foi introduzida de forma significativa no PHP com o advento do ReactPHP, que permitiu a execução de operações de forma não bloqueante e assíncrona diretamente na linguagem. Isso trouxe capacidades de programação reativa e melhor gerenciamento de tarefas de entrada e saída (I/O) intensivas sem bloquear o fluxo principal do programa. Esta abordagem começou a ganhar destaque nos últimos anos, proporcionando aos desenvolvedores PHP a capacidade de construir aplicações mais eficientes e responsivas.

O ReactPHP é baseado no conceito de loop de eventos (EventLoop), que permite a execução assíncrona de operações em PHP. Internamente, o ReactPHP utiliza o EventLoop para gerenciar múltiplas tarefas de forma eficiente, sem bloquear o fluxo principal do programa. Aqui estão os passos principais de funcionamento:

EventLoop: É o coração do ReactPHP, responsável por monitorar e despachar eventos conforme eles ocorrem.

Streams e Sockets: Utiliza streams para entrada e saída de dados, e sockets para comunicação de rede, permitindo operações assíncronas com esses recursos.

Callbacks e Promises: Usa callbacks para lidar com a conclusão de tarefas assíncronas e Promises para tratamento de resultados futuros, permitindo um código mais limpo e organizado.

Componentes Modulares: O ReactPHP é modular, permitindo que desenvolvedores escolham os componentes específicos necessários para suas aplicações, como HTTP server, client, e outros.

Não-bloqueante e Eficiente: Por ser não-bloqueante, o ReactPHP pode lidar com várias requisições concorrentes de forma eficiente, adequado para aplicações que exigem alta escalabilidade e baixa latência.

Para entender melhor, o ReactPHP é uma implementação de programação assíncrona em PHP, trazendo benefícios similares aos encontrados em linguagens como Node.js, mas adaptados ao ecossistema PHP.


#### Swoole

O Swoole é um framework PHP assíncrono que revolucionou a forma como aplicações web são desenvolvidas em PHP. Sua história começa com o crescente interesse por soluções que permitissem operações assíncronas e de alto desempenho diretamente em PHP, algo tradicionalmente desafiador devido à natureza sincrona da linguagem.

Origens e Desenvolvimento: Criado por Tianfeng Han em 2012, o Swoole inicialmente focava em melhorar o suporte para operações de rede assíncronas, como sockets TCP/UDP, e rapidamente ganhou popularidade pela sua eficiência e baixa latência.

Adoção e Evolução: Ao longo dos anos, o Swoole expandiu suas capacidades para incluir um servidor HTTP, servidor WebSocket, suporte a corrotinas e um EventLoop próprio, essencial para operações de I/O assíncronas.

Impacto na Comunidade: Com a demanda crescente por aplicações web mais rápidas e escaláveis, o Swoole se tornou uma escolha popular para desenvolvedores PHP, especialmente em cenários que exigem alta concorrência, como servidores de chat, jogos online e microsserviços.

Futuro: Continua sendo desenvolvido ativamente, com atualizações frequentes para melhorias de desempenho e novos recursos, mantendo-se como uma peça chave no ecossistema PHP para aplicações assíncronas e de alto tráfego.

O Swoole representa um marco importante no desenvolvimento PHP, possibilitando a criação de aplicações mais rápidas e eficientes, alinhando-se às demandas modernas por performance e escalabilidade. O Swoole é um framework PHP assíncrono que se diferencia pelo uso intensivo de corrotinas para permitir operações concorrentes eficientes. Internamente, o Swoole opera da seguinte forma:

Corrotinas: Utiliza corrotinas para realizar múltiplas tarefas simultaneamente dentro de um único processo PHP, sem a sobrecarga de múltiplas threads.

EventLoop: Baseado em um EventLoop próprio, gerencia operações de I/O de forma assíncrona, permitindo que o PHP manipule muitas requisições de forma eficiente.

Componentes Específicos: Oferece componentes específicos para tarefas como servidor HTTP, servidor WebSocket, e cliente assíncrono, todos otimizados para alto desempenho.

Canais e Defer: Usa canais para comunicação entre corrotinas e suporta o conceito de defer para adiar a execução de operações até o final da função corrente.

Integração com PHP: Apesar de ser um framework externo, integra-se profundamente com o PHP, permitindo que desenvolvedores tirem proveito de suas capacidades sem modificar drasticamente o código existente.

O Swoole é especialmente útil para aplicações que exigem alta concorrência e baixa latência, como servidores de aplicação e sistemas de mensagens em tempo real

Aqui está um exemplo básico de um servidor HTTP usando Swoole em PHP. Este exemplo mostra como configurar um servidor simples que responde a requisições HTTP:


```php
<?php
// Criando um servidor HTTP usando Swoole
$http = new Swoole\Http\Server("0.0.0.0", 8080);
// Configurando o callback para lidar com as requisições
$http->on('request', function ($request, $response) {
    $response->header('Content-Type', 'text/plain');
    $response->end("Olá, mundo!\n");
});
// Iniciando o servidor
$http->start();
?>
```

Links de referência
[Corrotinas e código assíncrono em PHP usando Generators](https://www.treinaweb.com.br/blog/corrotinas-e-codigo-assincrono-em-php-usando-generators)

[Trabalhando com corrotinas, canais e explorando um pouco mais o scheduler de corrotinas do Swoole](https://www.treinaweb.com.br/blog/trabalhando-com-corrotinas-canais-e-explorando-um-pouco-mais-o-scheduler-de-corrotinas-do-swoole) 


#### Exemplos das evoluções da linguagem ao longo do tempo 


PHP 5.x

Classes e Objetos

PHP 5 introduziu um modelo mais robusto de POO com visibilidade de métodos e propriedades.


```php
<?php
class MyClass {
    public $publicVar;
    protected $protectedVar;
    private $privateVar;
    public function publicMethod() {
        // Método público
    }
    protected function protectedMethod() {
        // Método protegido
    }
    private function privateMethod() {
        // Método privado
    }
}

```



PDO (PHP Data Objects)
Uma maneira segura e flexível de interagir com bancos de dados.

```php
<?php
$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
$statement = $pdo->query("SELECT * FROM users");
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'];
}
```

PHP 7.x

Declaração de Tipos de Retorno e Escalares

PHP 7 introduziu a capacidade de declarar tipos de retorno e parâmetros escalares.


```php
<?php
function sum(int $a, int $b): int {
    return $a + $b;
}
echo sum(2, 3); // 5
```

Operador Null Coalesce
Simplifica a verificação de valores nulos.


```php
<?php
$username = $_GET['user'] ?? 'default_user';
```

Operador Spaceship
Comparações de três vias.


```php
<?php
echo 1 <=> 1; // 0 
echo 1 <=> 2; // -1 
echo 2 <=> 1; // 1
```

PHP 8.x

Named Arguments
Permite passar argumentos baseados no nome do parâmetro.


```php
<?php
function foo(string $a, string $b, ?string $c = null) { 
  echo "$a - $b - $c"; 
} 
foo(b: 'second', a: 'first')
```


Match Expression
Uma alternativa mais poderosa ao switch.


```php
<?php
$age = 20; 
$result = match (true) { 
  $age >= 18 => 'Adult', 
  $age < 18 => 'Minor'
}; 
echo $result; // Adult
```


Union Types
Permite que uma variável tenha múltiplos tipos.


```php
<?php
function foo(int|float $number) {
    return $number;
}
echo foo(10); // 10
echo foo(10.5); // 10.5
```

Atributos (Annotations)
Metadados para classes e métodos.


```php
<?php
#[Attribute]
class Example {
    public function __construct(public string $name) {}
}
#[Example('test')]
class TestClass {}
```


<a id="padoes_com_php"></a>
## Padrões e boas práticas com PHP (PSR’s)

Boas práticas na linguagem PHP são fundamentais para garantir código claro, seguro e de fácil manutenção. As PSR's (PHP Standards Recommendations) são um conjunto de diretrizes estabelecidas pela comunidade PHP para promover consistência e interoperabilidade entre projetos. Elas abordam desde a estrutura de diretórios até a nomenclatura de classes e métodos.

Benefícios das Boas Práticas: Utilizar boas práticas como separação de lógica de negócio, segurança contra ataques de injeção SQL, e uso adequado de padrões de projeto como MVC, ajuda a criar aplicações mais robustas e escaláveis.

Importância das PSR's: As PSR's, como a PSR-1 (Basic Coding Standard) e PSR-4 (Autoloading Standard), são amplamente adotadas pela comunidade PHP. Elas promovem consistência no código, facilitando a colaboração entre desenvolvedores e a integração de bibliotecas de terceiros.

Impacto na Qualidade do Software: Seguir as PSR's não apenas melhora a legibilidade e manutenção do código, mas também contribui para a qualidade geral do software desenvolvido em PHP. Isso é crucial em ambientes de desenvolvimento colaborativo e projetos de longo prazo.


As PHP Standards Recommendations (PSR's) são diretrizes estabelecidas pelo PHP Framework Interop Group (PHP-FIG) para promover boas práticas e interoperabilidade entre projetos PHP. Aqui estão algumas das principais PSR's:

PSR-1 - Basic Coding Standard: Define diretrizes básicas de codificação, como o uso de tags PHP, a consistência na nomenclatura de classes e métodos, e a necessidade de não utilizar BOM (Byte Order Mark) nos arquivos PHP.

PSR-4 - Autoloading Standard: Estabelece um padrão para o carregamento automático de classes, facilitando a inclusão e o gerenciamento de dependências em projetos PHP.

PSR-12 - Extended Coding Style: Define um estilo de código estendido, baseado no PSR-1, com mais detalhes sobre a formatação e organização do código PHP, promovendo uma maior consistência entre diferentes projetos e desenvolvedores.

PSR-7 - HTTP Message Interface: Define interfaces comuns para representar mensagens HTTP, como requisições e respostas, facilitando a interoperabilidade entre componentes baseados em PSR-7.

PSR-17 - HTTP Factories: Define interfaces para a criação de objetos HTTP, como requisições, respostas e URIs, promovendo a interoperabilidade entre bibliotecas que manipulam mensagens HTTP.

Essas PSR's são amplamente adotadas pela comunidade PHP para garantir a qualidade, a legibilidade e a interoperabilidade do código, promovendo boas práticas de desenvolvimento.

Adotar boas práticas e seguir as PSR's não é apenas uma recomendação, mas uma necessidade para desenvolvedores PHP que buscam criar software de alta qualidade e com padrões aceitos pela comunidade.

Link para a documentação das PSR`s: https://www.php-fig.org/psr/ 

<a id="confiiguracao_do_ambiente">

## Configuração do ambiente de desenvolvimento (docker, composer).

### Passo a Passo para Instalar o PHP 8 .2 no Ubuntu 22.04

Atualizar o Sistema: Abra o terminal e execute os seguintes comandos para garantir que seu sistema esteja atualizado:


```sh
sudo apt-get update && sudo apt-get upgrade -y
 ```

Adicionar o Repositório do PHP: Adicione o repositório necessário para instalar o PHP 8:


```sh
sudo apt-get install software-properties-common -y && sudo add-apt-repository ppa:ondrej/php -y && sudo apt-get update
 ```

Instalar o PHP 8: Agora, instale o PHP 8. com o comando:

```sh
sudo apt-get install php8.2 -y
 ```

Verificar a Instalação: Para confirmar que o PHP 8 foi instalado corretamente, verifique a versão instalada:

```sh
php -v
```

Você deverá ver uma saída indicando a versão do PHP 8.2

Instalar Extensões Comuns: Instale as extensões do PHP necessárias para o seu desenvolvimento:


```sh
sudo apt-get install php8.2-cli php8.2-fpm php8.2-common php8.2-mongodb php8.2-zip php8.2-gd php8.2-mbstring php8.2-curl php8.2-xml php8.2-bcmath -y
```


Configurar o Apache (opcional): Se você estiver usando o Apache, ative o módulo PHP 8 e reinicie o servidor:

```sh
sudo a2enmod php8.2 sudo systemctl restart apache2
```

Configurar o Nginx (opcional): Se você estiver usando o Nginx, edite o arquivo de configuração para usar o PHP 8:

```sh
sudo nano /etc/nginx/sites-available/default
```

Encontre a linha fastcgi_pass e altere para:

```sh
fastcgi_pass unix:/run/php/php8.1-fpm.sock;
```

Salve o arquivo e reinicie o Nginx:

```sh
sudo systemctl restart nginx
```

Instalando o composer


Baixe o Composer mais recente: v2.7.7 Para instalar rapidamente o Composer no diretório atual, execute o seguinte script no seu terminal. Para automatizar a instalação, use o guia de instalação do Composer de forma programática.

```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Este script de instalação simplesmente verifica algumas configurações do php.ini, avisa se estiverem configuradas incorretamente, e então baixa o composer.phar mais recente no diretório atual. As 4 linhas acima farão, na ordem:

Baixar o instalador para o diretório atual

Verificar o SHA-384 do instalador, que você também pode conferir aqui

Executar o instalador

Remover o instalador

Provavelmente, você deseja colocar o composer.phar em um diretório no seu PATH, para que você possa simplesmente chamar o composer de qualquer diretório (instalação global), utilizando, por exemplo:


```sh
sudo mv composer.phar /usr/local/bin/composer
```


## Criando o primeiro projeto em PHP

Para criar um novo projeto PHP usando o Composer, siga os seguintes passos: 

Criar o projeto: Utilize o comando composer init para criar um novo projeto em php puro (sem utilização de frameworks)

```sh
composer init
```

Em seguida responda as perguntas que forem apresentadas no terminal

Inicializar um projeto básico:  Ao final será gerado um arquivo chamado composer.json na pasta atual. Este arquivo deve conter as dependências do seu projeto:

Após criar o arquivo composer.json, execute o comando:

```sh
composer install
```

Isso irá baixar e instalar as dependências especificadas no composer.json caso você tenha especificado.


Verificar o arquivo composer.json: Certifique-se de que todas as dependências e informações do seu projeto estão corretamente definidas no arquivo composer.json. Este arquivo é crucial para o gerenciamento de dependências no seu projeto PHP

Instale a biblioteca de testes do PHP (PHPUnit): Execute o comando a seguir

```sh
composer require --dev phpunit/phpunit
```

Crie um arquivo index.php


```php
<?php
echo "Hello world";
```

Execute usando o servidor built-in do PHP

```sh
php -S localhost:8000
```

Acesse o endereço em um navegador de sua preferencia o endereço localhost:8000


Link de referência: https://www.alura.com.br/artigos/primeiros-passos-com-composer 

### Uso do PHP no modo interativo

Para usar o PHP no modo interativo via linha de comando, siga os passos abaixo:

Abrir o Terminal: Inicie o terminal ou prompt de comando do seu sistema operacional.

Executar o PHP Interativo: Digite php -a e pressione Enter. Isso iniciará o PHP no modo interativo, onde você pode digitar código PHP diretamente.

Exemplo de Uso:


```sh
$ php -a
Interactive shell
php > echo "Olá, mundo!";
Olá, mundo!
php > $num1 = 10;
php > $num2 = 5;
php > echo $num1 + $num2;
15
php > exit;
```

<a id="manipulacao_de_datas"></a>

## Manipulação de Datas em PHP

<a id="introducao_as_funcoes_de_datas"></a>

### Introdução às funções de datas no PHP.

Objetivo: Compreender os conceitos básicos de datas e horas em PHP.

Conteúdo:

O que são timestamps

Funções básicas (time(), date(), mktime())

Exemplo de código:


```php
<?php
echo time(); // Exibe o timestamp atual 
echo date('Y-m-d H:i:s'); // Exibe a data e hora atual no formato 'YYYY-MM-DD HH:MM:SS'
```

Formatando Datas
Objetivo: Aprender a formatar datas e horas usando a função date().

Conteúdo:

Diferentes formatos de datas

Uso da função date_format()

Exemplo de código:

```php
<?php
$date = new DateTime();
echo $date->format('Y-m-d H:i:s'); // Formata a data atual
```

Trabalhando com DateTime
A Classe DateTime
Objetivo: Explorar a classe DateTime para manipulação avançada de datas.

Conteúdo:

Criação de objetos DateTime

Métodos da classe DateTime

Exemplo de código:


```php
<?php
$date = new DateTime('2024-06-27'); 
echo $date->format('Y-m-d'); // Exibe '2024-06-27'
```

Modificação de Datas
Objetivo: Aprender a modificar datas usando métodos da classe DateTime.

Conteúdo:

Métodos add(), sub(), modify()

Exemplo de código:


```php
<?php
$date = new DateTime('2024-06-27'); 
$date->add(new DateInterval('P1D')); // Adiciona um dia 
echo $date->format('Y-m-d'); // Exibe '2024-06-28'
```

<a id="calculos_com_datas"></a>

### Comparando e Calculando Datas


Diferença entre Datas
Objetivo: Calcular a diferença entre duas datas.

Conteúdo:

Uso do método diff()

Exemplo de código:


```php
<?php
$date1 = new DateTime('2024-06-27'); 
$date2 = new DateTime('2024-07-01');
$interval = $date1->diff($date2); 
echo $interval->days; // Exibe '4'
```

Comparação de Datas
Objetivo: Comparar datas utilizando operadores e métodos.

Conteúdo:

Uso de operadores (>, <, ==)

Métodos DateTime::getTimestamp()

Exemplo de código:


```php
<?php
$date1 = new DateTime('2024-06-27'); 
$date2 = new DateTime('2024-07-01'); 
if ($date1 < $date2) { 
echo 'A data 1 é anterior à data 2'; 
}
```

<a id="tratamento_fusos_horarios"></a>

### Trabalhando com Timezones


Configurando Timezones
Objetivo: Aprender a definir e manipular timezones.

Conteúdo:

Uso de DateTimeZone

Métodos para alterar timezones

Exemplo de código:


```php
<?php
$date = new DateTime('now', new DateTimeZone('America/Sao_Paulo')); 
echo $date->format('Y-m-d H:i:s'); // Exibe a data e hora em São Paulo
```

Funções Avançadas de Datas
Funções Úteis
Objetivo: Explorar funções adicionais para manipulação de datas.

Conteúdo:

Funções strtotime(), checkdate()

Exemplo de código:


```php
<?php
$timestamp = strtotime('next Monday'); 
echo date('Y-m-d', $timestamp); // Exibe a data da próxima segunda-feira


$mes = 2; // Fevereiro
$dia = 29;
$ano = 2024;
if (checkdate($mes, $dia, $ano)) {
    echo "A data $dia/$mes/$ano é válida.";
} else {
    echo "A data $dia/$mes/$ano é inválida.";
}
```


<a id="poo"></a>

## Programação Orientada a Objetos (POO)

<a id="conceitos_basicos_poo"></a>

### Introdução à Programação Orientada a Objetos (POO). Conceitos Básicos de POO

O que é POO

POO, ou Programação Orientada a Objetos, é um paradigma de programação que utiliza "objetos" e suas interações para projetar e programar aplicativos. Um objeto é uma instância de uma classe, que pode conter dados (atributos) e métodos (funções).

Vantagens da POO

Reutilização de Código: Classes e objetos podem ser reutilizados em diferentes partes de um programa ou em diferentes projetos.

Modularidade: Código é organizado em módulos (classes), facilitando a manutenção e o entendimento.

Facilidade de Manutenção: Alterações em uma parte do código têm menos probabilidade de afetar outras partes.

Encapsulamento: Protege os dados e só permite que sejam alterados através de métodos específicos, aumentando a segurança e integridade dos dados.

Herança: Permite que novas classes herdem características de classes existentes, promovendo a reutilização de código

<a id="quatro_pilares_poo"></a>

### Os 4 pilares da POO: Encapsulamento, Abstração, Herança, e Polimorfismo

#### Classes e Objetos

Classe: É um molde para criar objetos. Define um conjunto de atributos e métodos que os objetos criados a partir da classe terão.

Objeto: É uma instância de uma classe. Quando uma classe é definida, nenhum espaço de memória é alocado até que os objetos dessa classe sejam criados.

Exemplos:


```php
<?php
class Car {
    public $brand;
    public $color;
    public function drive() {
        echo "The car is driving";
    }
}
$car = new Car();
$car->brand = "Toyota";
$car->color = "Red";
$car->drive();
```

#### Encapsulamento

Definição e importância

Métodos getters e setters

Métodos getters e setters são usados na programação orientada a objetos para acessar e modificar os atributos privados de uma classe. Eles permitem encapsular os dados de uma classe, fornecendo um controle adicional sobre como esses dados são acessados e modificados.

Getters: Também conhecidos como métodos de acesso, são usados para retornar o valor de um atributo privado.

Setters: Também conhecidos como métodos de modificação, são usados para definir ou atualizar o valor de um atributo privado.


Exemplos:


```php
<?php
class Car {
    private $brand;
    private $color;
    public function setBrand($brand) {
        $this->brand = $brand;
    }
    public function getBrand() {
        return $this->brand;
    }
}
$car = new Car();
$car->setBrand("Toyota");
echo $car->getBrand();
```

#### Abstração e Herança

##### Abstração

Definição

Abstração é um conceito fundamental na programação orientada a objetos que envolve a simplificação de sistemas complexos através da modelagem de classes que representam entidades do mundo real, ignorando os detalhes mais específicos para focar nas características essenciais e comportamentos relevantes desses objetos.

Classes abstratas e métodos abstratos

Uma classe abstrata é uma classe que não pode ser instanciada diretamente. Ela serve como um modelo para outras classes, definindo métodos que devem ser implementados pelas classes derivadas. As classes abstratas podem conter tanto métodos concretos (com implementação) quanto métodos abstratos (sem implementação)

Exemplos:


```php
<?php
abstract class Animal {
    abstract public function makeSound();
}
class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}
$dog = new Dog();
$dog->makeSound();
```

##### Herança

Conceitos de herança

Herança é um dos principais pilares da programação orientada a objetos (POO) que permite que uma classe herde propriedades e métodos de outra classe. Isso facilita a reutilização de código e a criação de uma hierarquia de classes. Em PHP, a herança é implementada usando a palavra-chave extends.

Superclasse e subclasse

Superclasse

Uma superclasse (ou classe base) é a classe que fornece propriedades e métodos que podem ser herdados por outras classes. Ela é o ponto de partida na hierarquia de herança. Por exemplo, uma classe Animal pode ser a superclasse para várias subclasses como Cachorro e Gato.

Subclasse
Uma subclasse (ou classe derivada) é uma classe que herda propriedades e métodos de uma superclasse. Ela pode adicionar novos comportamentos ou modificar os comportamentos existentes. Por exemplo, a classe Cachorro pode herdar da classe Animal e adicionar métodos específicos para cachorros.


Exemplos:

```php
<?php
class Vehicle {
    public $make;
    public $model;
    public function drive() {
        echo "Driving";
    }
}
class Car extends Vehicle {
    public $doors;
    public function honk() {
        echo "Honk!";
    }
}
$car = new Car();
$car->make = "Toyota";
$car->model = "Corolla";
$car->doors = 4;
$car->drive();
$car->honk();
```

#### Polimorfismo e Interfaces

Polimorfismo

Definição 

Polimorfismo é um princípio da programação orientada a objetos (POO) que permite que objetos de diferentes classes sejam tratados como objetos de uma classe comum. Isso é possível através de interfaces ou classes base que definem métodos que podem ser sobrescritos pelas classes derivadas. Em PHP, o polimorfismo permite que métodos com o mesmo nome em classes diferentes sejam chamados de forma uniforme, proporcionando flexibilidade e reutilização de código.


```php
<?php
class Shape {
    public function draw() {
        echo "Drawing shape";
    }
}
class Circle extends Shape {
    public function draw() {
        echo "Drawing circle";
    }
}
$shape = new Circle();
$shape->draw();
```

#### Sobrecarga de métodos

A sobrecarga de métodos em PHP se refere à capacidade de definir múltiplos métodos com o mesmo nome, mas com diferentes parâmetros. No entanto, PHP não suporta sobrecarga de métodos de maneira nativa como outras linguagens (Java, C++). Em vez disso, a sobrecarga é simulada usando métodos mágicos como __call e __callStatic, que permitem manipular chamadas de métodos que não existem na classe.


```php
<?php
class Exemplo {
    public function __call($name, $arguments) {
        if ($name == 'metodo') {
            if (count($arguments) == 1) {
                echo "Método com um argumento: " . $arguments[0] . "\n";
            } elseif (count($arguments) == 2) {
                echo "Método com dois argumentos: " . $arguments[0] . ", " . $arguments[1] . "\n";
            }
        }
    }
}
$obj = new Exemplo();
$obj->metodo('a');        // Saída: Método com um argumento: a
$obj->metodo('a', 'b');   // Saída: Método com dois argumentos: a, b
```

#### Interfaces

O que são Interfaces em PHP

Interfaces em PHP são estruturas que definem um contrato que outras classes devem seguir. Uma interface declara um conjunto de métodos que uma classe deve implementar, mas não fornece a implementação desses métodos. Interfaces são usadas para garantir que diferentes classes sigam uma estrutura específica, permitindo que sejam intercambiáveis e garantindo a consistência do código.

Para que servem as Interfaces em PHP
Garantir Consistência: As interfaces garantem que diferentes classes que implementam a mesma interface tenham os mesmos métodos. Isso assegura que você pode usar qualquer classe que implementa a interface de maneira uniforme.

Facilitar a Manutenção e Extensibilidade: Ao definir interfaces, você facilita a manutenção e a extensão do código. Mudanças nas implementações das classes concretas não afetam outras partes do sistema, desde que a interface permaneça a mesma.

Permitir Polimorfismo: Com interfaces, você pode usar polimorfismo, permitindo que diferentes objetos sejam tratados da mesma forma. Isso é útil ao passar objetos para funções ou métodos que esperam uma interface específica.

Separar a Definição da Implementação: Interfaces ajudam a separar a definição da funcionalidade da sua implementação, promovendo um design de código mais limpo e modular.

Exemplos:

```php
<?php
interface Logger {
    public function log($message);
}
class FileLogger implements Logger {
    public function log($message) {
        echo "Logging message to a file: $message";
    }
}
$logger = new FileLogger();
$logger->log("An error occurred.");
```

<a id="boas_praticas_e_design_patterns"></a>

## Padrões de Projeto


### Factory

Conceito e aplicação

O padrão de projeto Factory em PHP é um padrão criacional que se concentra na criação de objetos. Ele define uma interface para criar objetos, mas permite que as subclasses decidam qual classe instanciar. Isso é útil quando uma classe não pode antecipar o tipo exato de objetos que precisa criar durante a execução.

Características principais do Factory Method:
Interface Comum: Define uma interface para criar objetos, mas deixa a escolha da classe concreta para as subclasses.

Desacoplamento: Ajuda a desacoplar o código que usa o objeto criado do código que o instancia, promovendo um código mais flexível e de fácil manutenção.

Subclasses Decidem a Implementação: As subclasses decidem como criar instâncias do objeto, permitindo a flexibilidade na criação de diferentes tipos de objetos.

Utilização do Factory Method:
Criação de Objetos Complexos: Útil quando a criação de um objeto envolve lógica complexa ou depende de condições específicas.

Encapsulamento da Lógica de Criação: Ajuda a encapsular a lógica de criação de objetos em uma única classe ou método.


Exemplo:


```php
<?php
interface Vehicle {
    public function drive();
}
class Car implements Vehicle {
    public function drive() {
        echo "Driving a car...\n";
    }
}
class Bike implements Vehicle {
    public function drive() {
        echo "Riding a bike...\n";
    }
}
class VehicleFactory {
    public static function createVehicle($type) {
        switch ($type) {
            case 'car':
                return new Car();
            case 'bike':
                return new Bike();
            default:
                throw new InvalidArgumentException("Invalid vehicle type.");
        }
    }
}
$car = VehicleFactory::createVehicle('car');
$car->drive(); // Saída: Driving a car...
$bike = VehicleFactory::createVehicle('bike');
$bike->drive(); // Saída: Riding a bike...
```

<a id="acesso_a_banco_de_dados"></a>

## Acesso a Banco de Dados

### Introdução ao PHP e MongoDB

Configuração do Ambiente

Instalação do MongoDB

https://www.mongodb.com/docs/php-library/current/tutorial/install-php-library/ 

Comandos:

```sh
sudo pecl install mongodb
composer require mongodb/mongodb
```

<a id="introducao_mongodb"></a>

### Introdução ao MongoDB e ao uso do PHP para acessar bancos de dados.

Conceitos básicos de banco de dados

MongoDB é um sistema de gerenciamento de banco de dados NoSQL, orientado a documentos, de código aberto. Diferente dos bancos de dados relacionais tradicionais, que utilizam tabelas e linhas, o MongoDB armazena dados em documentos flexíveis no formato BSON (uma forma binária do JSON), permitindo uma estrutura mais dinâmica e menos rígida.

Principais Conceitos:
Documentos: A unidade básica de dados no MongoDB é o documento, que é um conjunto de pares chave-valor similar a JSON. Os documentos podem variar em estrutura, permitindo campos diferentes para diferentes registros.

Coleções: Conjuntos de documentos. Equivalente a tabelas nos bancos de dados relacionais, mas sem um esquema fixo.

Escalabilidade Horizontal: MongoDB é projetado para fácil escalabilidade horizontal através de sharding, permitindo a distribuição de dados em múltiplos servidores.

Alta Disponibilidade: Suporta replicação através de replica sets, garantindo redundância e alta disponibilidade dos dados.

Consultas Flexíveis: Possui uma linguagem de consulta poderosa e flexível, permitindo buscas complexas e agregações.

Índices: Assim como em bancos relacionais, o MongoDB permite a criação de índices para acelerar a recuperação de dados.

 
Utilizando o MongoDB Compass para gerenciar bancos de dados

Conectando ao Banco de Dados

Estabelecendo a conexão com MongoDB

https://www.mongodb.com/docs/php-library/current/tutorial/connecting/ 

Gerenciamento de erros na conexão

Exemplos:


```php
<?php
require __DIR__ . '/vendor/autoload.php';
try {
  $client = new MongoDB\Client('mongodb://admin:pass@localhost:27019');
  $database = $client->test;
  //Testa o banco de dados
  $database->command(['ping' => 1]);
} catch (\Exception $e) {
  echo "Erro: " . $e->getMessage();
}
```

<a id="operacoes_crud"></a>

### Operações CRUD

Create (Inserção de Dados)

Inserindo dados no banco de dados

Exemplos:

```php
<?php
require __DIR__ . '/vendor/autoload.php';
try {
  $mongo = new MongoDB\Client('mongodb://admin:pass@localhost:27019');
  //Cria uma collection "user" no banco de dados "test"
  $collection = $mongo->test->user;
  //Insere um novo documento na collection "user"
  $insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
  ]);
  //Conta quantos documentos foram inseridos
  printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
  //Pega o ID do documento inserido
  var_dump($insertOneResult->getInsertedId());
} catch (\Exception $e) {
  echo "Erro: " . $e->getMessage();
}
```

Read (Leitura de Dados)

Recuperando dados do banco

https://www.mongodb.com/docs/php-library/current/tutorial/crud/ 

Manipulação de resultados

Exemplos:

```php
<?php
require __DIR__ . '/vendor/autoload.php';
try {
  $client = new MongoDB\Client('mongodb://admin:pass@localhost:27019');
  //Cria uma collection "user" no banco de dados "test"
  $collection = $client->test->user;
  //Busca o usuário "admin" na collection "user"
  $cursor = $collection->find(['username' => 'admin', 'email' => 'admin@example.com']);
  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }
} catch (\Exception $e) {
  echo "Erro: " . $e->getMessage();
}
```

Update (Atualização de Dados)

Atualizando registros existentes

https://www.mongodb.com/docs/php-library/current/tutorial/crud/ 

Exemplos:

```php
<?php
require __DIR__ . '/vendor/autoload.php';
try {
  $client = new MongoDB\Client('mongodb://admin:pass@localhost:27019');
  $database = $client->test;
  //Testa o banco de dados
  $database->command(['ping' => 1]);
  //Cria uma collection "user" no banco de dados "test"
  $collection = $client->test->user;
  //Limpa a collection "user" no banco de dados
  $collection->drop();
  //Insere um novo documento na collection "user"
  $insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
  ]);
  //Conta quantos documentos foram inseridos
  printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
  //Pega o ID do documento inserido
  var_dump($insertOneResult->getInsertedId());
  //Busca o usuário "admin" na collection "user"
  $cursor = $collection->find(['username' => 'admin', 'email' => 'admin@example.com']);
  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }
  //Atualiza o nome do usuário "admin" para "editor"
  $updateResult = $collection->updateOne(
    ['username' => 'admin'],
    ['$set' => ['name' => 'editor']]
  );
  printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
  printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
  $cursor = $collection->find(['name' => 'editor', 'email' => 'admin@example.com']);
  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }
} catch (\Exception $e) {
  echo "Erro: " . $e->getMessage();
}
```

Delete (Exclusão de Dados)

Removendo registros do banco

https://www.mongodb.com/docs/php-library/current/tutorial/crud/ 

Exemplos:

```php
<?php
require __DIR__ . '/vendor/autoload.php';
try {
  $client = new MongoDB\Client('mongodb://admin:pass@localhost:27019');
  $database = $client->test;
  //Testa o banco de dados
  $database->command(['ping' => 1]);
  //Cria uma collection "user" no banco de dados "test"
  $collection = $client->test->user;
  //Limpa a collection "user" no banco de dados
  $collection->drop();
  //Insere um novo documento na collection "user"
  $insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
  ]);
  //Conta quantos documentos foram inseridos
  printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
  //Pega o ID do documento inserido
  var_dump($insertOneResult->getInsertedId());
  //Busca o usuário "admin" na collection "user"
  $cursor = $collection->find(['username' => 'admin', 'email' => 'admin@example.com']);
  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }
  //Atualiza o nome do usuário "admin" para "editor"
  $updateResult = $collection->updateOne(
    ['username' => 'admin'],
    ['$set' => ['name' => 'editor']]
  );
  printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
  printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
  $cursor = $collection->find(['name' => 'editor', 'email' => 'admin@example.com']);
  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }
  //deleta o usuário "editor"
  $deleteResult = $collection->deleteOne(['name' => 'editor']);
  printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
  $cursor = $collection->find([]);
  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }
} catch (\Exception $e) {
  echo "Erro: " . $e->getMessage();
}
```

Links de referência
https://www.devmedia.com.br/utilizando-a-dupla-mongodb-e-php/27798 

## Boas práticas


### Introdução às Boas Práticas de Programação

Importância e benefícios de seguir boas práticas em desenvolvimento de software

Seguir boas práticas em desenvolvimento de software é crucial para garantir a qualidade, eficiência e sucesso dos projetos. Aqui estão alguns pontos chave sobre a importância e os benefícios:

#### Qualidade do Código:

Boas práticas promovem código mais limpo, estruturado e fácil de entender. Isso facilita a manutenção, reduzindo o tempo necessário para correções e melhorias.

#### Redução de Bugs e Problemas:

Ao seguir padrões e técnicas bem estabelecidas, há uma menor incidência de erros e bugs durante o desenvolvimento. Isso resulta em produtos mais estáveis e confiáveis .

#### Produtividade e Eficiência:

Processos bem definidos e boas práticas ajudam a equipe a trabalhar de forma mais eficiente, economizando tempo e recursos na correção de problemas e no desenvolvimento de novos recursos.

#### Facilidade de Escalabilidade:

Projetos desenvolvidos com boas práticas são mais fáceis de escalar conforme as necessidades do negócio crescem. Isso proporciona flexibilidade para adaptar o software a novas demandas sem grandes alterações na estrutura inicial.

#### Segurança e Conformidade:

Boas práticas incluem diretrizes de segurança, ajudando a proteger o software contra vulnerabilidades. Isso é essencial para manter a confiança dos usuários e garantir conformidade com regulamentações.

Seguir boas práticas não só melhora a qualidade do software, mas também contribui para a satisfação do cliente e o sucesso do projeto como um todo.

### Padrões PSR

A aplicação dos Padrões de Recomendação do PHP (PSRs), como PSR-1, PSR-2 e PSR-4

Os Padrões de Recomendação do PHP (PSRs) são diretrizes desenvolvidas pela comunidade PHP para promover práticas consistentes e padronizadas no desenvolvimento de código. Aqui estão exemplos de aplicação dos PSRs mais conhecidos:

#### PSR-1 - Basic Coding Standard:

Define diretrizes básicas para o código PHP, como o uso de tags PHP, declaração de namespaces e classes, além de evitar erros comuns como a mistura de espaços e tabs.

Exemplo: Utilização correta das tags PHP <?php ?> e <?= ?> para garantir compatibilidade entre diferentes interpretações do PHP .

#### PSR-2 - Coding Style Guide:

Estabelece um guia de estilo para a formatação do código PHP, incluindo indentação, quebra de linhas, espaçamento entre elementos e nomeação de variáveis.

Exemplo: Uso consistente de indentação de 4 espaços para melhorar a legibilidade e manutenção do código.

#### PSR-4 - Autoloading Standard:

Define um padrão para o carregamento automático de classes PHP com base na estrutura de diretórios do projeto. Isso simplifica o processo de inclusão de arquivos e aumenta a eficiência do carregamento de classes.

Exemplo: Organização dos namespaces e diretórios de acordo com o PSR-4 para garantir que as classes sejam carregadas automaticamente sem a necessidade de declarações manuais de inclusão.


### Princípios SOLID

Detalhamento dos princípios SOLID (Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion)

Os princípios SOLID são um conjunto de diretrizes de design de software que visam facilitar a manutenção, extensão e reutilização do código. Aqui está o detalhamento de cada um desses princípios aplicados em PHP:

#### Single Responsibility Principle (SRP):

Uma classe deve ter apenas uma única responsabilidade.

Exemplo: Uma classe User deve ser responsável apenas por gerenciar dados de usuário, sem misturar lógica de autenticação ou persistência.


```php
// Exemplo de uma classe que viola o SRP
class User {
    public function create() {
        // Lógica para criar um novo usuário no banco de dados
    }
    public function sendEmail() {
        // Lógica para enviar um e-mail de boas-vindas ao usuário
    }
    public function logActivity() {
        // Lógica para registrar a atividade do usuário
    }
}
// Refatoração para respeitar o SRP
class User {
    public function create() {
        // Lógica para criar um novo usuário no banco de dados
    }
}
class EmailService {
    public function sendWelcomeEmail() {
        // Lógica para enviar um e-mail de boas-vindas ao usuário
    }
}
class ActivityLogger {
    public function logActivity() {
        // Lógica para registrar a atividade do usuário
    }
```

#### Open/Closed Principle (OCP):

Entidades de software devem estar abertas para extensão, mas fechadas para modificação.

Exemplo: Usar herança ou interfaces para permitir que novos tipos de autenticação sejam adicionados sem modificar o código existente.


```php
// Exemplo inicial sem respeitar o OCP
interface Shape {
    public function calculateArea();
}
class Rectangle implements Shape {
    public $width;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
class Circle implements Shape {
    public $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
// Versão refatorada respeitando o OCP
interface Shape {
    public function calculateArea();
}
class Rectangle implements Shape {
    public $width;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
class Circle implements Shape {
    public $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
// Versão refatorada respeitando o OCP
interface Shape {
    public function calculateArea();
}
class Rectangle implements Shape {
    public $width;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
class Circle implements Shape {
    public $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
// Versão refatorada respeitando o OCP
interface Shape {
    public function calculateArea();
}
class Rectangle implements Shape {
    public $width;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
class Circle implements Shape {
    public $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
```

#### Liskov Substitution Principle (LSP):

Objetos de um tipo derivado devem poder ser substituídos por objetos de seu tipo base sem alterar a corretude do programa.

Exemplo: Substituir uma classe base Animal por suas subclasses Cachorro ou Gato sem afetar a funcionalidade esperada do código.

```php
// Exemplo inicial sem respeitar o LSP
class Bird {
    public function fly() {
        return "Flying...";
    }
}
class Ostrich extends Bird {
    public function fly() {
        return "Ostrich can't fly!";
    }
}
// Versão refatorada respeitando o LSP
interface Bird {
    public function canFly();
}
class Sparrow implements Bird {
    public function canFly() {
        return "Flying...";
    }
}
class Ostrich implements Bird {
    public function canFly() {
        return "Ostrich can't fly!";
    }
}
Interface Segregation Principle (ISP):
```

Uma classe não deve ser forçada a implementar interfaces que não utiliza.

Exemplo: Dividir uma interface grande em interfaces menores e mais específicas, implementadas apenas por classes que realmente necessitam desses métodos.


```php
// Exemplo inicial violando o ISP
interface Worker {
    public function work();
    public function eat();
}
class Robot implements Worker {
    public function work() {
        return "Robot working...";
    }
    public function eat() {
        return "Robot eating...";
    }
}
// Refatoração seguindo o ISP
interface Workable {
    public function work();
}
interface Feedable {
    public function eat();
}
class HumanWorker implements Workable, Feedable {
    public function work() {
        return "Human working...";
    }
    public function eat() {
        return "Human eating...";
    }
}
class Dog implements Feedable {
    public function eat() {
        return "Dog eating...";
    }
}
```


#### Dependency Inversion Principle (DIP):

Dependa de abstrações, não de implementações concretas.

Exemplo: Injeção de dependência, onde classes recebem suas dependências por meio de interfaces ou abstrações, facilitando testes e reduzindo o acoplamento.


```php
// Exemplo inicial violando o DIP
class LightBulb {
    public function turnOn() {
        return "LightBulb: on";
    }
    public function turnOff() {
        return "LightBulb: off";
    }
}
class Switch {
    private $bulb;
    public function __construct() {
        $this->bulb = new LightBulb(); // Violação do DIP: depende diretamente da implementação concreta LightBulb
    }
    public function operate() {
        return $this->bulb->turnOn();
    }
}
// Refatoração seguindo o DIP
interface Switchable {
    public function turnOn();
    public function turnOff();
}
class BetterLightBulb implements Switchable {
    public function turnOn() {
        return "BetterLightBulb: on";
    }
    public function turnOff() {
        return "BetterLightBulb: off";
    }
}
class AdvancedSwitch {
    private $device;
    public function __construct(Switchable $device) {
        $this->device = $device; // Segue o DIP: depende de uma abstração (interface Switchable)
    }
    public function operate() {
        return $this->device->turnOn();
    }
}
// Uso
$bulb = new BetterLightBulb();
$switch = new AdvancedSwitch($bulb);
echo $switch->operate(); // Saída: BetterLightBulb: on
```

## Clean Code e Refatoração

### Técnicas para escrever código limpo, legível e de fácil manutenção.

#### Práticas de refatoração para melhorar a estrutura e a qualidade do código

#### Segurança e Boas Práticas de Segurança

#### Medidas para proteger aplicações PHP contra vulnerabilidades comuns.

#### Práticas de validação de entrada de dados e prevenção de ataques.

<a id="rodando_php_com_docker"></a>

## Rodando php em container usando Docker CE

<a id="instalacao_docker"></a>

### Instalação do docker CE

Configuração do docker

```sh
# Add Docker's official GPG key:
sudo apt-get update
sudo apt-get install ca-certificates curl
sudo install -m 0755 -d /etc/apt/keyrings
sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc
sudo chmod a+r /etc/apt/keyrings/docker.asc
# Add the repository to Apt sources:
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu \
  $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
  sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
sudo apt-get update
```

### Instala última versão do Docker

```sh
 sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
```

### Testa o docker com a imagem de “Hello world”

```sh
 sudo docker run hello-world
```

<a id="criacao_dockerfile"></a>

### Criação do arquivo Dockerfile

Crie um arquivo na pasta do projeto chamdo “Dockerfile” com o conteúdo abaixo:


```yaml
FROM php:8.2-fpm-alpine
# Instale dependências necessáris
RUN apk --no-cache add autoconf build-base libtool
# Instale a extensão PCOV
RUN pecl install pcov && docker-php-ext-enable pcov
# Instale a extensão MongoDB
RUN pecl install mongodb && docker-php-ext-enable mongodb
# Limpe o cache
RUN apk del autoconf build-base libtool
# Defina o diretório de trabalho
WORKDIR /app
# Copie o código fonte para o container
COPY / /app
# Exponha a porta 9000 para o PHP-FPM
EXPOSE 9000
# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
```

<a id="rodando_containers_docker"></a>

### Rodando containers com docker-composer

Crie um arquivo na raiz do projeto chamado “docker-composer.yml” com o seguinte conteúdo:


```yaml
version: '3.8'
services:
  nginx:
    image: nginx:latest
    container_name: nginx
    ports:
      - "8080:80"
    volumes:
      - ./nginx/conf.d:/etc/nginx/conf.d
      - .:/app
    networks:
      - local
    depends_on:
      - php82

  php82:
    container_name: php82
    build:
      context: .
      dockerfile: Dockerfile
      args:
        APP_STAGE: 'dev'
    volumes:
      - .:/app
    networks:
      - local
    ports:
      - "9000:9000"

  mongodb:
    image: mongo:latest
    container_name: mongodb
    restart: always
    environment:
      MONGO_INITDB_ROOT_USERNAME: admin
      MONGO_INITDB_ROOT_PASSWORD: pass
    command: mongod --maxConns 10000
    ports:
      - "27017:27017"
    networks:
      - local
    volumes:
      - mongo:/data/db

volumes:
  mongo:
networks:
  local:
    driver: bridge
```

Crie a seguinte estrutura de pastas na raiz o projeto:

```sh
mkdir -p nginx/conf.d 
```

Dentro da pasta “nginx/conf.d " Crie o seguinte arquivo de configuração do servidor Nginx:


```sh
server {
  listen 80;
  index index.php index.html;
  root /app/public;
  underscores_in_headers on;
  location / {
      try_files $uri /index.php?$args;
  }
  location ~ \.php$ {
      fastcgi_split_path_info ^(.+\.php)(/.+)$;
      fastcgi_pass php82:9000;
      fastcgi_index index.php;
      include fastcgi_params;
      fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
      fastcgi_param PATH_INFO $fastcgi_path_info;
  }
}
```

Crie uma pasta para o salvar localmente o volume do banco de dados Mongodb:

```sh
mkdir mongodb
```

Rodando os containers
Rode os containers com o Docker-compose usando o comando abaixo:

```sh
docker-compose run
```

Rodando o projeto
Para rodar o projeto use o comando abaixo:

```sh
docker-compose up
```

<a id="testes_automatizados"></a>

## Testes Automatizados

### Introdução aos testes unitários e funcionais em PHP.

Utilização de frameworks de teste como PHPUnit para garantir a qualidade do código.

<a id="importancia_testes_automatizadados"></a>

### Introdução aos Testes Automatizados em PHP

#### Fundamentos dos Testes Automatizados

Os testes automatizados desempenham um papel fundamental na garantia da qualidade do código de software. Aqui estão os principais motivos que destacam sua importância:

Detecção Precoce de Problemas: Os testes automatizados permitem identificar bugs e falhas no código logo após sua implementação, facilitando correções imediatas.

Garantia de Funcionalidade: Eles asseguram que as funcionalidades desenvolvidas continuem operando conforme o esperado, mesmo com novas modificações ou integrações.

Redução de Erros e Problemas de Produção: Ao validar automaticamente o código, reduz-se significativamente a ocorrência de erros em produção, melhorando a estabilidade do sistema

Facilita Refatorações e Manutenções: Testes automatizados fornecem uma rede de segurança ao realizar refatorações, permitindo mudanças no código com confiança

Integração Contínua e DevOps: São essenciais para práticas ágeis como integração contínua e entrega contínua, acelerando o ciclo de desenvolvimento sem comprometer a qualidade

Melhoria da Qualidade Geral do Software: Ao garantir que todos os aspectos do código sejam testados sistematicamente, os testes automatizados contribuem para a melhoria da qualidade geral do software 

#### Visão geral dos tipos de testes: unitários, de integração e de aceitação

Os testes de software são fundamentais para garantir a qualidade e o funcionamento adequado de uma aplicação. Existem três tipos principais de testes que desempenham papéis específicos no processo de desenvolvimento:

Testes Unitários: São focados em verificar unidades individuais de código, como funções ou métodos, isoladamente. O objetivo é validar se cada unidade funciona conforme o esperado, detectando erros o mais cedo possível durante o desenvolvimento.

Testes de Integração: Verificam se diferentes módulos ou componentes de um sistema funcionam corretamente em conjunto. Esses testes são realizados para garantir a interoperabilidade entre as partes integradas e identificar falhas nas interfaces e na comunicação entre os componentes.

Testes de Aceitação: Também conhecidos como testes de aceitação do usuário (TAU), são realizados para validar se o sistema atende aos requisitos do usuário final e se comporta conforme as expectativas do cliente. Esses testes geralmente envolvem simulações de cenários reais de uso da aplicação.

<a id="ferranentas_testes_unitarios"></a>

### Configuração do Ambiente de Testes

Instalação e configuração do PHPUnit, o framework de testes mais utilizado em PHP .

Exemplos de setup de ambiente para execução de testes.

Para configurar um ambiente de teste em PHP, especialmente utilizando PHPUnit, siga estes passos básicos:

Instalação do Composer: O Composer é um gerenciador de dependências essencial para instalar o PHPUnit e outras bibliotecas PHP.

Instale o Composer se ainda não tiver: PHP.com.br - Testes unitários com a PHPUnit

Instalação do PHPUnit: Utilize o Composer para instalar o PHPUnit em seu projeto.

Execute o seguinte comando no terminal:

```sh
sudo apt-get install libpcre2-dev && \
pecl install pcov && \
composer require --dev phpunit/phpunit ^9.5.10
```

Estrutura de diretórios: Organize seus arquivos de teste e de código fonte de maneira clara.

Exemplo de estrutura básica:

```sh
projeto/
├── src/
│   └── MinhaClasse.php
├── tests/
│   └── MinhaClasseTest.php
└── composer.json
```

Configuração do PHPUnit: Crie um arquivo de configuração phpunit.xml na raiz do projeto para configurar opções como diretórios de teste, cobertura de código, entre outros.

Exemplo de phpunit.xml básico:


```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/11.3/phpunit.xsd"
bootstrap="vendor/autoload.php" 
cacheResultFile=".phpunit.cache/test-results" 
executionOrder="depends,defects" 
beStrictAboutOutputDuringTests="true" 
beStrictAboutTodoAnnotatedTests="true" 
failOnRisky="true" 
failOnWarning="true" 
colors="true"
printerClass="Sempro\\PHPUnitPrettyPrinter\\PrettyPrinter"
>

  <testsuites>
    <testsuite name="default">
      <directory suffix="Test.php">./tests</directory>
    </testsuite>
  </testsuites>

  <logging>
    <junit outputFile="phpunit.report.xml"/>
  </logging>

  <coverage cacheDirectory=".phpunit.cache/code-coverage" processUncoveredFiles="true">
    <include>
        <directory suffix=".php">src/</directory>
    </include>
    <report>
        <clover outputFile="phpunit.coverage.xml" />
    </report>
  </coverage>

  <php>
    <env name="PHPUNIT_PRETTY_PRINT_PROGRESS" value="true"/>
  </php>

</phpunit>
```

<a id="implementacao_testes_unitarios"></a>

### Escrevendo Testes Unitários

Implementação de testes para classes e métodos isolados utilizando PHPUnit.

Crie um arquivo chamado “DogTest.php” na pasta /tests/Unit/Entities do seu projeto com o seguinte conteúdo:


```php
<?php
namespace Unit\Entities;
use PHPUnit\Framework\TestCase;
use App\Entities\Dog;
class DogTest extends TestCase {
  protected Dog $Dog;
  protected function setUp(): void
  {
    parent::setUp();
    $this->Dog = new Dog();
  }
  /**
   * @testdox O teste deve retornar o som do animal
   */
  public function testShouldMakeSoundSuccessfuly(): void
  {
    $this->assertEquals("auau!", $this->Dog->makeSound());
  }
  /**
   * @testdox O teste deve retornar o resultado do metodo run com sucesso
   */
  public function testShouldDoRunningSuccessfuly(): void
  {
    $this->assertEquals("Corre!", $this->Dog->run());
  }
}
```

Execução dos testes: Para executar os testes, utilize o comando do PHPUnit no terminal.

Antes de executar os testes acesse o container php82 do nosso arquivo docker-composer.yml usando o comando abaixo:

```php
docker exec -it php82 sh
```

Em seguida dentro do container rode os testes com o seguinte comando:

```php
./vendor/bin/phpunit --testdox --colors --coverage-text
```

--

[Treinamento de criação de APIs REST com Laravel](/laravel/README.md)