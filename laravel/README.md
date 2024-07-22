# Treinamento de criação de API Rest com Laravel

[## Introdução ao Laravel e APIs Rest](#Introducao_ao_Laravel_e_APIs_Rest)


[### Introdução ao Laravel](#Introducao_ao_Laravel)

[#### O que é Laravel?](#O_que_e_Laravel)

[##### História e filosofia do Laravel](#Historia_e_filosofia_do_Laravel)

[##### Instalação do Laravel](#Instalacao_do_Laravel)


[### Fundamentos de APIs Rest](#Fundamentos_de_APIs_Rest)

[#### O que é uma API Rest?](#O_que_e_uma_API_Rest)

[##### Principais conceitos: Recursos, Verbo HTTP, Status Codes](#principais_conceitos_Recursos_Verbo_HTTP_Status_Codes)

[##### Boas práticas no design de APIs](#Boas_praticas_no_design_de_APIs)


[### Estrutura do Projeto Laravel](#Estrutura_do_Projeto_Laravel)

[#### Estrutura de pastas e arquivos do Laravel](#Estrutura_de_pastas_e_arquivos_do_Laravel)

[##### Configurações iniciais do Laravel](#Configurações_iniciais_do_Laravel)


[## Primeiros Passos com Rotas e Controladores](#Primeiros_Passos_com_Rotas_e_Controladores)


[### Introdução às Rotas no Laravel](#Introducao_as_Rotas_no_Laravel)

[#### Definindo rotas básicas](#Definindo_rotas_básicas)

[##### Uso de rotas para APIs](#Uso_de_rotas_para_APIs)


[### Criando Controladores](#Criando_Controladores)

[#### Criando um controlador](#Criando_um_controlador)


<a id="Introducao_ao_Laravel_e_APIs_Rest"></a>

## Introdução ao Laravel e APIs Rest

<a id="Introducao_ao_Laravel"></a>

### Introdução ao Laravel

<a id="O_que_e_Laravel"></a>

#### O que é Laravel?

Laravel é um framework de código aberto para desenvolvimento de aplicações web em PHP, criado por Taylor Otwell em 2011. Ele é conhecido por sua sintaxe elegante e expressiva, que visa tornar o desenvolvimento web mais simples e rápido, sem sacrificar a funcionalidade. Laravel adota a arquitetura MVC (Model-View-Controller), o que promove a separação de responsabilidades no código, facilitando a manutenção e a escalabilidade das aplicações.
Principais Características do Laravel:

Eloquent ORM (Object-Relational Mapping):
    O Eloquent é um ORM simples e intuitivo que facilita a interação com bancos de dados. Ele permite que os desenvolvedores definam modelos e seus relacionamentos de forma expressiva e fluida.

Rotas Simples e Flexíveis:
    Laravel oferece uma abordagem simples e poderosa para definir rotas, permitindo a criação de rotas para APIs e aplicações web de maneira fácil.

Blade Templating Engine:
    Blade é o motor de templates do Laravel, que permite criar layouts reutilizáveis e incluir lógica de exibição dentro das views de forma segura e eficiente.

Sistema de Migrations e Seeders:
    Laravel inclui um sistema robusto para gerenciar versões do banco de dados, facilitando a criação, atualização e rollback de tabelas e registros.

Middleware:
    Middleware oferece uma maneira conveniente de filtrar requisições HTTP que entram na aplicação, permitindo a implementação de camadas de lógica antes que as requisições alcancem os controladores.

Autenticação e Autorização:
    Laravel facilita a implementação de sistemas de autenticação e autorização, oferecendo ferramentas e pacotes, como o Laravel Passport e o Laravel Sanctum, para gerenciar tokens de autenticação e permissões de usuários.

Filas e Jobs:
    O suporte a filas e jobs permite que tarefas demoradas sejam processadas de forma assíncrona, melhorando a performance e a experiência do usuário.

Eventos e Listeners:
    Laravel suporta o uso de eventos e listeners, permitindo a implementação de sistemas reativos onde ações podem disparar eventos que são capturados e processados por listeners.

Artisan Command Line Interface:
    O Artisan é a interface de linha de comando do Laravel, que fornece uma série de comandos úteis para tarefas comuns de desenvolvimento, como criação de modelos, controladores, migrações, entre outros.

Testing:
    Laravel é construído com foco em testes, facilitando a criação de testes unitários e de integração para garantir a qualidade e a estabilidade da aplicação.

Laravel tem uma grande comunidade de desenvolvedores e uma vasta coleção de pacotes e recursos adicionais disponíveis através do Composer, tornando-o uma escolha popular para o desenvolvimento de aplicações web modernas e robustas.

<a id="Historia_e_filosofia_do_Laravel"></a>

##### História e filosofia do Laravel

Laravel foi criado por Taylor Otwell em 2011 com o objetivo de proporcionar uma alternativa mais avançada e moderna ao framework CodeIgniter, que na época não oferecia certas funcionalidades desejadas por Otwell, como suporte nativo a injeção de dependência e um sistema de autenticação robusto. Desde seu lançamento, Laravel passou por diversas versões, cada uma introduzindo novas funcionalidades e melhorias significativas:

Laravel 1.0 (2011):
    Primeira versão do framework, com recursos básicos de rotas, controle de views e modelos simples.

Laravel 2.0 (2011):
    Introdução do suporte ao sistema de pacotes (Bundles), facilitando a adição de funcionalidades extras.

Laravel 3.0 (2012):
    Grande atualização que incluiu o Artisan CLI, sistema de migrations, suporte a eventos e filas, e o mecanismo de templating Blade.

Laravel 4.0 (2013):
    Reescrito do zero usando componentes do Symfony. Introduziu o Eloquent ORM, sistema de pacotes Composer e melhorias no Artisan.

Laravel 5.0 (2015):
    Reformulação da estrutura de diretórios, introdução de middleware, service providers e contrato (contracts), além do sistema de comandos e eventos.

Laravel 6.0 (2019):
    Introdução do Semantic Versioning (SemVer), suporte a Jobs, e integração com o Laravel Vapor, plataforma serverless.

Laravel 7.0 e 8.0 (2020):
    Melhorias contínuas, incluindo componentes de UI atualizados, melhorias no Eloquent ORM, e novas funcionalidades como Job Batching.

Laravel 9.0 (2022):
    Últimas atualizações e melhorias de desempenho, novos helpers, suporte a PHP 8.x e outras otimizações.

Filosofia do Laravel

A filosofia do Laravel é centrada em três pilares principais: Elegância, Simplicidade e Funcionalidade. Taylor Otwell criou o framework com a intenção de simplificar o desenvolvimento web, ao mesmo tempo que oferecia ferramentas poderosas para criar aplicações robustas e escaláveis. Aqui estão alguns dos princípios que guiam o Laravel:

Expressividade:
    Laravel busca fornecer uma sintaxe clara e expressiva, permitindo que os desenvolvedores escrevam código legível e fácil de entender. A ideia é que o código Laravel seja intuitivo e direto, facilitando a colaboração e a manutenção.

Ecosistema Rico:
    O framework vem com uma ampla gama de ferramentas e bibliotecas integradas que cobrem muitas das necessidades comuns no desenvolvimento web, desde a autenticação até a manipulação de filas e eventos. Isso reduz a necessidade de depender de pacotes externos para funcionalidades básicas.

Desenvolvimento Ágil:
    Laravel promove um desenvolvimento ágil, fornecendo uma estrutura que permite prototipagem rápida e a construção de funcionalidades de maneira eficiente. Ferramentas como o Artisan CLI e o Eloquent ORM são exemplos de recursos que aceleram o desenvolvimento.

Modularidade:
    A arquitetura modular do Laravel permite que os desenvolvedores construam aplicações de maneira modular, utilizando pacotes e service providers para adicionar funcionalidades conforme necessário.

Comunidade e Contribuição:
    Laravel possui uma comunidade ativa e engajada, que contribui com pacotes, tutoriais, e suporte. O framework é open-source e incentivando a contribuição e o compartilhamento de conhecimento.

Foco na Experiência do Desenvolvedor:
    A experiência do desenvolvedor é uma prioridade para Laravel. Desde a documentação detalhada até a API amigável, tudo é projetado para tornar o desenvolvimento uma experiência agradável e produtiva.

Em resumo, a história e a filosofia do Laravel refletem um compromisso contínuo com a criação de um framework que não apenas atende às necessidades técnicas, mas também aprimora a experiência do desenvolvedor, tornando o desenvolvimento web uma tarefa mais simples, rápida e agradável.

<a id="Instalacao_do_Laravel"></a>

##### Instalação do Laravel

A instalação do Laravel pode ser realizada de diversas maneiras, dependendo do seu ambiente de desenvolvimento e das suas preferências. A seguir, descreverei os métodos mais comuns: utilizando o Composer e o Laravel Installer.
Requisitos

Antes de iniciar, certifique-se de ter os seguintes requisitos instalados no seu sistema:

PHP (versão 8.0 ou superior)
Composer (gerenciador de dependências para PHP)
Servidor web como Apache ou Nginx
Banco de dados (MySQL, PostgreSQL, SQLite, etc.)

Método 1: Instalando com o Composer

O Composer é o gerenciador de dependências para PHP, e é a maneira mais direta de instalar o Laravel.

Instale o Composer

Se ainda não tiver o Composer instalado, você pode baixá-lo em getcomposer.org e seguir as instruções para a instalação.

Criando um Novo Projeto Laravel

Abra o terminal e execute o seguinte comando para criar um novo projeto Laravel:

```sh
composer create-project --prefer-dist laravel/laravel nome-do-projeto
```

Substitua nome-do-projeto pelo nome que deseja dar ao seu projeto. Esse comando baixa e instala a última versão do Laravel, juntamente com todas as suas dependências.

Acessando o Diretório do Projeto

Navegue até o diretório do projeto recém-criado:

```sh
cd nome-do-projeto
```

Executando o Servidor de Desenvolvimento

Laravel vem com um servidor de desenvolvimento embutido, que pode ser iniciado com o Artisan CLI:

```sh
php artisan serve
```

Você verá uma saída indicando que o servidor está rodando, geralmente em http://127.0.0.1:8000. Acesse esse endereço no navegador para ver a página de boas-vindas do Laravel.

Método 2: Instalando com o Laravel Installer

Outra maneira de instalar o Laravel é utilizando o Laravel Installer, que é uma ferramenta CLI própria do Laravel.

Instalando o Laravel Installer

Primeiro, instale o Laravel Installer globalmente via Composer:

```sh
composer global require laravel/installer
```

Certifique-se de que o diretório global do Composer esteja no PATH do seu sistema para que o comando laravel seja reconhecido. Normalmente, o diretório global é ~/.composer/vendor/bin no macOS e no GNU/Linux ou %USERPROFILE%\AppData\Roaming\Composer\vendor\bin no Windows.

Criando um Novo Projeto Laravel

Com o Laravel Installer instalado, você pode criar um novo projeto Laravel executando:

```sh
laravel new nome-do-projeto
```

Esse comando cria um novo diretório com o nome especificado, e instala uma nova aplicação Laravel dentro dele.

Acessando o Diretório do Projeto

Navegue até o diretório do projeto:

```sh
cd nome-do-projeto
```

Executando o Servidor de Desenvolvimento

Inicie o servidor de desenvolvimento do Laravel:

```sh
php artisan serve
```

Como no método anterior, o servidor estará disponível em http://127.0.0.1:8000.

Configurações Adicionais

Após a instalação, você pode precisar configurar o ambiente, o banco de dados e outras opções no arquivo .env que é criado na raiz do seu projeto Laravel.

Configurando o Banco de Dados

Abra o arquivo .env e configure as informações do seu banco de dados:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

Gerando a Chave da Aplicação

Laravel requer uma chave única para a aplicação, que pode ser gerada com o comando:

```sh
php artisan key:generate
```

Esse comando atualiza o valor APP_KEY no arquivo .env.

Com esses passos, você terá uma nova aplicação Laravel instalada e pronta para o desenvolvimento. A partir daí, você pode começar a construir sua aplicação utilizando os diversos recursos que o Laravel oferece.

<a id="Fundamentos_de_APIs_Rest"></a>

### Fundamentos de APIs Rest

<a id="O_que_e_uma_API_Rest"></a>

#### O que é uma API Rest?

APIs (Application Programming Interfaces) REST (Representational State Transfer) são uma maneira de permitir que sistemas diferentes se comuniquem entre si pela internet utilizando o protocolo HTTP. O conceito de REST foi introduzido por Roy Fielding em sua tese de doutorado em 2000 e se tornou uma das arquiteturas mais populares para o desenvolvimento de APIs devido à sua simplicidade e eficiência.

<a id="principais_conceitos_Recursos_Verbo_HTTP_Status_Codes"></a>

##### Principais conceitos: Recursos, Verbo HTTP, Status Codes

Aqui estão os principais conceitos e fundamentos das APIs REST:

1. Recursos

Os recursos são a peça central do REST. Cada recurso é um objeto ou uma representação de dados que pode ser acessado e manipulado através da API. Exemplos de recursos incluem usuários, produtos, pedidos, etc. Em uma API REST, cada recurso é identificado por uma URL única.

Exemplo:

https://api.exemplo.com/usuarios (coleção de usuários)
https://api.exemplo.com/usuarios/1 (usuário específico com ID 1)

2. Verbo HTTP

As operações sobre os recursos são realizadas utilizando os verbos HTTP. Os principais verbos HTTP utilizados em APIs REST são:

    GET: Recupera dados de um recurso.
    POST: Cria um novo recurso.
    PUT: Atualiza completamente um recurso existente.
    PATCH: Atualiza parcialmente um recurso existente.
    DELETE: Remove um recurso.

Exemplo:

    GET /usuarios - Recupera uma lista de usuários.
    POST /usuarios - Cria um novo usuário.
    PUT /usuarios/1 - Atualiza o usuário com ID 1.
    PATCH /usuarios/1 - Atualiza parcialmente o usuário com ID 1.
    DELETE /usuarios/1 - Remove o usuário com ID 1.

3. Status Codes

As APIs REST utilizam códigos de status HTTP para indicar o resultado das operações. Alguns dos códigos de status mais comuns são:

    200 OK: A requisição foi bem-sucedida.
    201 Created: Um novo recurso foi criado com sucesso.
    204 No Content: A requisição foi bem-sucedida, mas não há conteúdo para retornar.
    400 Bad Request: A requisição é inválida ou malformada.
    401 Unauthorized: A autenticação é necessária e falhou ou não foi fornecida.
    404 Not Found: O recurso solicitado não foi encontrado.
    500 Internal Server Error: Ocorreu um erro no servidor.

4. Headers

Os headers HTTP fornecem informações adicionais sobre a requisição ou a resposta. Em APIs REST, alguns headers comuns são:

    Content-Type: Indica o tipo de mídia do corpo da requisição ou resposta (por exemplo, application/json).
    Authorization: Contém credenciais de autenticação para a API.
    Accept: Especifica quais tipos de respostas são aceitáveis pelo cliente.

5. Corpo da Requisição e Resposta

O corpo da requisição (request body) contém os dados enviados para a API, geralmente em formato JSON. O corpo da resposta (response body) contém os dados retornados pela API, também geralmente em JSON.

Exemplo de corpo de requisição (JSON):

```json
{
  "nome": "João Silva",
  "email": "joao.silva@example.com"
}
```

Exemplo de corpo de resposta (JSON):

```json
{
  "id": 1,
  "nome": "João Silva",
  "email": "joao.silva@example.com",
  "created_at": "2024-06-30T12:00:00Z",
  "updated_at": "2024-06-30T12:00:00Z"
}
```

6. Statelessness

Uma das principais características do REST é que ele é "stateless" (sem estado). Isso significa que cada requisição da API deve conter todas as informações necessárias para ser compreendida e processada, sem depender de informações armazenadas no servidor entre as requisições. Isso simplifica a escalabilidade e a gestão da API.
7. HATEOAS (Hypermedia as the Engine of Application State)

HATEOAS é um princípio de REST que sugere que a resposta da API deve incluir links para outros recursos e ações possíveis. Isso ajuda os clientes a navegar na API de maneira dinâmica e descobrir funcionalidades disponíveis.

Exemplo de HATEOAS:

```json
{
  "id": 1,
  "nome": "João Silva",
  "email": "joao.silva@example.com",
  "links": [
    { "rel": "self", "href": "https://api.exemplo.com/usuarios/1" },
    { "rel": "edit", "href": "https://api.exemplo.com/usuarios/1" },
    { "rel": "delete", "href": "https://api.exemplo.com/usuarios/1" }
  ]
}
```

8. Cache

As APIs REST podem utilizar caching para melhorar a performance e reduzir a carga no servidor. Cabeçalhos HTTP como Cache-Control e ETag são usados para controlar o caching de respostas.

Exemplo Completo de uma API REST

Imagine que estamos construindo uma API para gerenciar usuários. Aqui está um exemplo de como seria a interação com essa API:

Criar um novo usuário:

Requisição:

```http

POST /usuarios
Content-Type: application/json

{
  "nome": "João Silva",
  "email": "joao.silva@example.com"
}
```

Resposta:

```http

    HTTP/1.1 201 Created
    Content-Type: application/json

    {
      "id": 1,
      "nome": "João Silva",
      "email": "joao.silva@example.com",
      "created_at": "2024-06-30T12:00:00Z",
      "updated_at": "2024-06-30T12:00:00Z"
    }
```

Listar usuários:

Requisição:

```http

GET /usuarios
```

Resposta:

```http

HTTP/1.1 200 OK
Content-Type: application/json

    [
      {
        "id": 1,
        "nome": "João Silva",
        "email": "joao.silva@example.com",
        "created_at": "2024-06-30T12:00:00Z",
        "updated_at": "2024-06-30T12:00:00Z"
      }
    ]
```

Atualizar um usuário:

Requisição:

```http

PUT /usuarios/1
Content-Type: application/json

{
  "nome": "João Pedro Silva",
  "email": "joao.pedro.silva@example.com"
}
```

Resposta:

```http

HTTP/1.1 200 OK
Content-Type: application/json

    {
      "id": 1,
      "nome": "João Pedro Silva",
      "email": "joao.pedro.silva@example.com",
      "created_at": "2024-06-30T12:00:00Z",
      "updated_at": "2024-06-30T13:00:00Z"
    }
```

Excluir um usuário:

Requisição:

```http

DELETE /usuarios/1
```

Resposta:

```http

HTTP/1.1 204 No Content
```

Com esses fundamentos e exemplos, você tem uma base sólida para começar a trabalhar com APIs REST, tanto no design quanto na implementação.

<a id="Boas_praticas_no_design_de_APIs"></a>

##### Boas práticas no design de APIs

O design de APIs é fundamental para garantir que elas sejam fáceis de usar, eficientes, seguras e escaláveis. Aqui estão algumas das melhores práticas recomendadas ao projetar APIs:

1. Use Nomes de Recursos Noun (Substantivos)

Os endpoints da API devem representar recursos e usar substantivos, não verbos. Cada recurso deve ser identificado por uma URL única.

Exemplo:

    Correto: /usuarios
    Incorreto: /getUsuarios

2. Utilize os Verbs HTTP Apropriadamente

Utilize os métodos HTTP (verbo) corretos para as operações realizadas:

    GET: Para recuperar recursos.
    POST: Para criar novos recursos.
    PUT: Para atualizar recursos existentes de forma completa.
    PATCH: Para atualizar parcialmente recursos existentes.
    DELETE: Para excluir recursos.

Exemplo:

    GET /usuarios - Retorna a lista de usuários.
    POST /usuarios - Cria um novo usuário.
    PUT /usuarios/1 - Atualiza completamente o usuário com ID 1.
    PATCH /usuarios/1 - Atualiza parcialmente o usuário com ID 1.
    DELETE /usuarios/1 - Remove o usuário com ID 1.

3. Use Status Codes HTTP Significativos

Os status codes HTTP ajudam os clientes da API a entenderem o resultado das operações realizadas. Use códigos apropriados para indicar sucesso, erros do cliente e erros do servidor.

Exemplo:

    200 OK: Requisição bem-sucedida.
    201 Created: Novo recurso criado.
    204 No Content: Requisição bem-sucedida, mas sem corpo de resposta.
    400 Bad Request: Requisição inválida ou malformada.
    401 Unauthorized: Autenticação necessária.
    404 Not Found: Recurso não encontrado.
    500 Internal Server Error: Erro no servidor.

4. Endpoints Bem Definidos

Os endpoints devem ser claros e concisos, utilizando uma estrutura hierárquica para representar relações entre recursos.

Exemplo:

    /usuarios - Lista de usuários.
    /usuarios/1 - Detalhes do usuário com ID 1.
    /usuarios/1/pedidos - Pedidos do usuário com ID 1.

5. Filtragem, Paginação e Ordenação

Para listas de recursos, implemente filtragem, paginação e ordenação para melhorar a eficiência e a experiência do usuário.

Exemplo:

    GET /usuarios?idade=30 - Filtra usuários com idade 30.
    GET /usuarios?page=2&per_page=10 - Paginação.
    GET /usuarios?sort=nome - Ordenação.

6. Utilize JSON para Formatação de Dados

JSON é o formato de dados preferido para APIs REST devido à sua simplicidade e compatibilidade com a maioria das linguagens de programação.

7. Versionamento da API

Implemente versionamento na sua API para permitir mudanças e melhorias sem quebrar a compatibilidade com clientes existentes. Existem várias maneiras de versionar APIs, como em headers ou na URL.

Exemplo:

    URL Versioning: /v1/usuarios
    Header Versioning: Accept: application/vnd.example.v1+json

8. Segurança

Proteja a API contra ameaças comuns, como injeção de SQL, XSS e CSRF. Use HTTPS para criptografar dados em trânsito e autenticação para proteger endpoints sensíveis.

    HTTPS: Utilize HTTPS para todas as requisições.
    Autenticação: Implemente autenticação utilizando tokens, OAuth ou outros mecanismos seguros.
    Validação de Dados: Valide todos os dados de entrada para prevenir injeção de SQL e outros ataques.

9. Tratamento de Erros

Forneça mensagens de erro claras e informativas que ajudam os clientes a entenderem e corrigirem problemas. Padronize a estrutura de resposta de erro.

Exemplo de resposta de erro:

```json
{
  "error": {
    "code": 400,
    "message": "Requisição inválida",
    "details": "O campo 'email' é obrigatório"
  }
}
```

10. Documentação

Documente sua API de forma abrangente e mantenha a documentação atualizada. Use ferramentas como Swagger ou Postman para criar documentação interativa.

    Swagger: Ferramenta para gerar documentação interativa.
    Postman: Ferramenta para testar e documentar APIs.

11. Consistência

Mantenha a consistência em todos os aspectos do design da API, incluindo nomenclatura, estrutura de resposta, e convenções de uso de verbos HTTP e status codes.

<a id="Estrutura_do_Projeto_Laravel"></a>

### Estrutura do Projeto Laravel

<a id="Estrutura_de_pastas_e_arquivos_do_Laravel"></a>

#### Estrutura de pastas e arquivos do Laravel

A estrutura de pastas e arquivos de um projeto Laravel é organizada de maneira a facilitar o desenvolvimento de aplicações web, seguindo o padrão MVC (Model-View-Controller). Aqui está uma visão geral da estrutura padrão de diretórios e arquivos:

Raiz do Projeto
app/: Contém o código principal da aplicação.

|---Console/: Contém os comandos Artisan.

|---Exceptions/: Contém os handlers para exceções.

|---Http/: Contém controladores, middleware e requests.

|-------Controllers/: Controladores da aplicação.

|-------Middleware/: Middleware da aplicação.

|-------Requests/: Requests customizados (form requests).

|---Models/: Modelos da aplicação.

bootstrap/: Contém os arquivos para inicialização do framework.

|---cache/: Armazena arquivos de cache gerados pelo framework.

config/: Contém todos os arquivos de configuração da aplicação.

database/: Contém migrações, factories e seeders.

|---factories/: Contém as factories para gerar dados fictícios.

|---migrations/: Contém as migrações de banco de dados.

|---seeders/: Contém os seeders para popular o banco de dados.

public/: Diretório acessível publicamente. Contém o arquivo index.php, assets (CSS, JavaScript, imagens).

resources/: Contém views, arquivos de idioma, e assets não compilados.

|---views/: Contém as views Blade da aplicação.

|---lang/: Contém arquivos de tradução.

routes/: Contém todos os arquivos de rotas da aplicação.

web.php: Rotas da aplicação acessíveis via web.

api.php: Rotas da API.

console.php: Rotas para comandos Artisan.

channels.php: Rotas para canais de broadcast.

storage/: Contém arquivos gerados pela aplicação.

|---app/: Armazena arquivos gerados pela aplicação.

|---framework/: Contém arquivos gerados pelo framework (cache, sessões, views compiladas).

|---logs/: Contém arquivos de log.

tests/: Contém testes unitários e de funcionalidade.

|---Feature/: Testes de funcionalidade.

|---Unit/: Testes unitários.

vendor/: Contém os pacotes e dependências instaladas via Composer.

Arquivos Importantes na Raiz do Projeto

.env: Arquivo de configuração de ambiente. Contém variáveis de ambiente sensíveis.

.env.example: Exemplo do arquivo de configuração de ambiente.

artisan: Interface de linha de comando do Laravel.

composer.json: Arquivo de configuração do Composer. Lista as dependências do projeto.

package.json: Arquivo de configuração do NPM. Lista as dependências JavaScript do projeto.

webpack.mix.js: Arquivo de configuração do Laravel Mix para compilação de assets.

Essa estrutura modulariza e organiza o código, facilitando a manutenção e escalabilidade da aplicação.

<a id="Configurações_iniciais_do_Laravel"></a>

##### Configurações iniciais do Laravel

Após feita a instação e configuração do banco de dados do Laravel execute os passos abaixo:

* Executar Migrações
Crie as tabelas necessárias no banco de dados executando as migrações:

```bash
php artisan migrate
```

* Instalar Dependências Frontend
Instale as dependências JavaScript e compile os assets:


```bash
npm install
npm run dev
```

* Servir a Aplicação
Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

A aplicação estará disponível no endereço http://127.0.0.1:8000.

Passos Adicionais (Opcional)

Configuração de Autenticação

Para adicionar autenticação à sua aplicação, você pode usar o Laravel Breeze ou Laravel Jetstream. Vamos usar o Laravel Breeze como exemplo:

Instale o Breeze via Composer:

```bash
composer require laravel/breeze --dev
```

Execute o instalador do Breeze:

```bash
php artisan breeze:install
```

Compile os assets novamente:

```bash
npm install
npm run dev
```

Execute as migrações novamente para criar as tabelas necessárias para autenticação:

```bash
php artisan migrate
```

Configuração do Versionamento de Código

Se você estiver usando Git para controle de versão, inicialize um repositório Git no diretório do seu projeto:

```bash
git init
git add .
git commit -m "Initial commit"
```

Adicione um repositório remoto (por exemplo, no GitHub):

```bash
git remote add origin https://github.com/seu-usuario/nome-do-repositorio.git
git push -u origin master
```


<a id="Primeiros_Passos_com_Rotas_e_Controladores"></a>

## Primeiros Passos com Rotas e Controladores

<a id="Introducao_as_Rotas_no_Laravel"></a>

### Introdução à API REST no Laravel

Vamos criar um exemplo completo de API Rest para gestão de usuários, para isto siga os passos a seguir:

1. Crie um modelo e uma migração para o recurso User:

```bash
php artisan make:model User -m
```

No arquivo de migração criado em database/migrations/xxxx_xx_xx_create_users_table.php, defina a estrutura da tabela users:

```php
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->timestamps();
    });
}
```

2. Execute a migração dentro do container:

```bash
docker exec -it <nome-do-container> sh -c "php artisan migrate"
```
<a id="Criando_Controladores"></a>

#### Criando Controladores


Crie um controlador de API para gerenciar as operações CRUD do recurso User:

```bash
php artisan make:controller API/UserController --api
```
Esse comando irá criar o Controller com todos os métodos necessários no Crud


<a id="Definindo_rotas_básicas"></a>

#### Definindo rotas básicas

Abra o arquivo routes/api.php e adicione as rotas para o controlador UserController:

```php
use App\Http\Controllers\API\UserController;

Route::apiResource('users', UserController::class);
```

#### Criar Serviço de Usuário
Crie uma pasta Services dentro de app e adicione um arquivo UserService.php:

```bash
mkdir app/Services
touch app/Services/UserService.php
```

No arquivo app/Services/UserService.php, defina o serviço:

```php
<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::find($id);
    }

    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return null;
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:8',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('email')) {
            $user->email = $request->email;
        }

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return null;
        }

        $user->delete();

        return $user;
    }
}
```

#### Implementar Controlador

No arquivo app/Http/Controllers/API/UserController.php, injete o serviço UserService e use-o para implementar os métodos CRUD:

```php
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return response()->json($this->userService->getAllUsers(), 200);
    }

    public function store(Request $request)
    {
        $result = $this->userService->createUser($request);

        if (is_array($result) && array_key_exists('email', $result)) {
            return response()->json($result, 400);
        }

        return response()->json($result, 201);
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);

        if (is_null($user)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $result = $this->userService->updateUser($request, $id);

        if (is_null($result)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        if (is_array($result) && array_key_exists('email', $result)) {
            return response()->json($result, 400);
        }

        return response()->json($result, 200);
    }

    public function destroy($id)
    {
        $result = $this->userService->deleteUser($id);

        if (is_null($result)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(null, 204);
    }
}
```

#### Testar as Rotas da API

Para testar as rotas, você pode usar ferramentas como Postman, Insomnia ou cURL.

Listar Usuários

```http
GET /api/users
```

Criar Usuário

```http
POST /api/users
Content-Type: application/json

{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "secret123"
}
```

Mostrar Usuário

```http
GET /api/users/{id}
```

Atualizar Usuário

```http
PUT /api/users/{id}
Content-Type: application/json

{
    "name": "Jane Doe"
}
```

Deletar Usuário

```http
DELETE /api/users/{id}
```

#### Conclusão

Seguindo esses passos, você configurou um recurso de API em Laravel com operações CRUD completas para o modelo User, utilizando uma camada de serviço. Essa abordagem melhora a organização e a manutenção do código, separando a lógica de negócios dos controladores.


## Criando Testes Unitários para o Serviço UserService Usando Mock no Projeto Laravel

1. Instalar PHPUnit
Se ainda não estiver instalado, instale o PHPUnit, que já vem por padrão com Laravel:

```bash
composer require --dev phpunit/phpunit '^9.5.19'
composer require --dev mockery/mockery
```

2. Configurar PHPUnit
Certifique-se de que o arquivo phpunit.xml está configurado corretamente para o ambiente de teste.

3. Criar Teste para UserService
Crie um diretório Services dentro de tests/Unit e adicione um arquivo UserServiceTest.php:

```bash
mkdir -p tests/Unit/Services
touch tests/Unit/Services/UserServiceTest.php
```

No arquivo tests/Unit/Services/UserServiceTest.php, defina os testes unitários para cada método do serviço UserService:

```php
<?php

namespace Tests\Unit\Services;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mockery;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $userService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = new UserService();
    }

    public function testGetAllUsers()
    {
        User::factory()->count(3)->create();

        $result = $this->userService->getAllUsers();

        $this->assertCount(3, $result);
    }

    public function testGetUserById()
    {
        $user = User::factory()->create();

        $result = $this->userService->getUserById($user->id);

        $this->assertEquals($user->id, $result->id);
    }

    public function testCreateUser()
    {
        $request = Request::create('/api/users', 'POST', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'secret123'
        ]);

        $result = $this->userService->createUser($request);

        $this->assertInstanceOf(User::class, $result);
        $this->assertEquals('John Doe', $result->name);
        $this->assertEquals('john@example.com', $result->email);
        $this->assertTrue(Hash::check('secret123', $result->password));
    }

    public function testCreateUserValidationFails()
    {
        $request = Request::create('/api/users', 'POST', [
            'name' => '',
            'email' => 'invalid-email',
            'password' => 'short'
        ]);

        $result = $this->userService->createUser($request);

        $this->assertIsArray($result);
        $this->assertArrayHasKey('email', $result);
        $this->assertArrayHasKey('password', $result);
    }

    public function testUpdateUser()
    {
        $user = User::factory()->create();

        $request = Request::create('/api/users/' . $user->id, 'PUT', [
            'name' => 'Jane Doe'
        ]);

        $result = $this->userService->updateUser($request, $user->id);

        $this->assertEquals('Jane Doe', $result->name);
    }

    public function testUpdateUserNotFound()
    {
        $request = Request::create('/api/users/999', 'PUT', [
            'name' => 'Jane Doe'
        ]);

        $result = $this->userService->updateUser($request, 999);

        $this->assertNull($result);
    }

    public function testDeleteUser()
    {
        $user = User::factory()->create();

        $result = $this->userService->deleteUser($user->id);

        $this->assertEquals($user->id, $result->id);
        $this->assertDeleted($user);
    }

    public function testDeleteUserNotFound()
    {
        $result = $this->userService->deleteUser(999);

        $this->assertNull($result);
    }
}
```

4. Criar Fabrica de Usuários
Se você ainda não tiver uma fábrica de usuários, crie uma para gerar dados de teste:

```bash
php artisan make:factory UserFactory --model=User
```

No arquivo database/factories/UserFactory.php, defina a fábrica:

```php
<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // senha padrão
            'remember_token' => Str::random(10),
        ];
    }
}
```

5. Executar Testes
Finalmente, execute os testes com o PHPUnit:

```bash
vendor/bin/phpunit
```

#### Conclusão
Seguindo esses passos, você configurou testes unitários para o serviço UserService em Laravel, utilizando mocks para o banco de dados e validando a funcionalidade de cada método do serviço. Isso garante que a lógica de negócios no seu serviço funcione conforme esperado.
