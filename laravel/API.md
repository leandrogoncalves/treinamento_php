

[## Trabalhando com Banco de Dados e Eloquent ORM](#Trabalhando_com_Banco_Dados_e_Eloquent_ORM)



[### Introdução ao Eloquent ORM](#Introducao_ao_Eloquent_ORM)

[#### O que é Eloquent?](#O_que_e_Eloquent)

[##### Definindo modelos e relacionamentos](#Definindo_modelos_e_relacionamentos)


[## Operações CRUD com APIs Rest](#Operações_CRUD_com_APIs_Rest)


[### Criando Endpoints de Leitura](#Criando_Endpoints_de_Leitura)

[#### Implementação do método GET](#Implementacao_do_metodo_GET)

[##### Filtros e Paginação](#Filtros_e_Paginacao)


[### Criando Endpoints de Criação](#Criando_Endpoints_de_Criacao)

[#### Implementação do método POST](#Implementacao_do_metodo_POST)

[##### Validação de dados com Request](#Validacao_de_dados_com_Request)


[### Criando Endpoints de Atualização](#Criando_Endpoints_de_Atualizacao)

[#### Implementação do método PUT/PATCH](#Implementação_do_método_PUT_PATCH)

[##### Manipulação de dados parciais e completos](#Manipulacao_de_dados_parciais_e_completos)


[### Criando Endpoints de Exclusão](#Criando_Endpoints_de_Exclusao)

[#### Implementação do método DELETE](#Implementação_do_método_DELETE)

[##### Tratamento de erros e respostas apropriadas](#Tratamento_de_erros_e_respostas_apropriadas)


[## Autenticação e Autorização](#Autenticação_e_Autorizacao)


[### Introdução ao Passport e Sanctum](#Introdução_ao_Passport_e_Sanctum)

[#### Escolhendo o pacote de autenticação adequado](#Escolhendo_o_pacote_de_autenticação_adequado)

[##### Configurando o Laravel Passport](#Configurando_o_Laravel_Passport)


[### Implementando Autenticação JWT](#Implementando_Autenticacao_JWT)

[#### Configurando e utilizando JSON Web Tokens](#Configurando_e_utilizando_JSON_Web_Tokens)

[##### Protegendo rotas com middleware de autenticação](#Protegendo_rotas_com_middleware_de_autenticacao)


[## Tratamento de Erros e Respostas](#Tratamento_de_Erros_e_Respostas)


[### Tratamento de Erros](#Tratamento_de_Erros)

[#### Personalizando respostas de erro](#Personalizando_respostas_de_erro)

[##### Centralizando o tratamento de exceções](#Centralizando_o_tratamento_de_exceções)


[### Formatação de Respostas JSON](#Formatacao_de_Respostas_JSON)

[#### Utilização de resources no Laravel](#Utilizacao_de_resources_no_Laravel)

[##### Serialização de dados e inclusão de metadados](#Serializacao_de_dados_e_inclusão_de_metadados)


[## Documentação da API](#Documentacao_da_API)


[### Introdução ao Swagger](#Introducao_ao_Swagger)

[#### Configurando o Swagger no Laravel](#Configurando_o_Swagger_no_Laravel)

[##### Documentando endpoints e modelos](#Documentando_endpoints_e_modelos)


[### Utilizando o Laravel API Documentation Generator](#Utilizando_o_Laravel_API_Documentation_Generator)

[#### Automatizando a documentação com o pacote Laravel API Documentation Generator](#Automatizando_a_documentacao_com_o_pacote_Laravel_API_Documentation_Generator)

[##### Boas práticas na escrita de documentação](#Boas_práticas_na_escrita_de_documentacao)


[## Testes de APIs](#Testes_de_APIs)


[### Testes Unitários](#Testes_Unitarios)

[#### Introdução aos testes no Laravel](#Introducao_aos_testes_no_Laravel)

[##### Escrevendo testes unitários para controladores e modelos](#Escrevendo_testes_unitarios_para_controladores_e_modelos)


[### Testes de Integração](#Testes_de_Integracao)

[#### Escrevendo testes de integração para APIs Rest](#Escrevendo_testes_de_integracao_para_APIs_Rest)

[##### Utilizando o PHPUnit para testes automatizados](#Utilizando_o_PHPUnit_para_testes_automatizados)


[## Desempenho e Segurança](#Desempenho_e_Segurança)


[### Otimizando Desempenho](Otimizando_Desempenho)

[#### Caching no Laravel](#Caching_no_Laravel)

[##### Melhorando a performance da API](#Melhorando_a_performance_da_API)


[### Segurança em APIs](#Segurança_em_APIs)

[#### Protegendo contra ataques comuns (SQL Injection, XSS, CSRF)](#Protegendo_contra_ataques_comuns)

[##### Implementando políticas de segurança e boas práticas](#Implementando_politicas_de_seguranca_e_boas_praticas)

<a id="Trabalhando_com_Banco_Dados_e_Eloquent_ORM"></a>

## Trabalhando com Banco de Dados e Eloquent ORM

<a id="Introducao_ao_Eloquent_ORM"></a>

### Introdução ao Eloquent ORM

<a id="O_que_e_Eloquent"></a>

#### O que é Eloquent?

<a id="Definindo_modelos_e_relacionamentos"></a>

##### Definindo modelos e relacionamentos

<a id="Operações_CRUD_com_APIs_Rest"></a>

## Operações CRUD com APIs Rest

<a id="Criando_Endpoints_de_Leitura"></a>

### Criando Endpoints de Leitura

<a id="Implementacao_do_método_GET"></a>

#### Implementação do método GET

<a id="Filtros_e_Paginacao"></a>

##### Filtros e Paginação

<a id="Criando_Endpoints_de_Criacao"></a>

### Criando Endpoints de Criação

<a id="Implementacao_do_metodo_POST"></a>

#### Implementação do método POST

<a id="Validacao_de_dados_com_Request"></a>

##### Validação de dados com Request

<a id="Criando_Endpoints_de_Atualizacao"></a>

### Criando Endpoints de Atualização

<a id="Implementação_do_método_PUT_PATCH"></a>

#### Implementação do método PUT/PATCH

<a id="Manipulacao_de_dados_parciais_e_completos"></a>

##### Manipulação de dados parciais e completos

<a id="Criando_Endpoints_de_Exclusao"></a>

### Criando Endpoints de Exclusão

<a id="Implementação_do_método_DELETE"></a>

#### Implementação do método DELETE

<a id="Tratamento_de_erros_e_respostas_apropriadas"></a>

##### Tratamento de erros e respostas apropriadas

<a id="Autenticação_e_Autorizacao"></a>

## Autenticação e Autorização

<a id="Introdução_ao_Passport_e_Sanctum"></a>

### Introdução ao Passport e Sanctum

<a id="Escolhendo_o_pacote_de_autenticação_adequado"></a>

#### Escolhendo o pacote de autenticação adequado

<a id="Configurando_o_Laravel_Passport"></a>

##### Configurando o Laravel Passport

<a id="Implementando_Autenticacao_JWT"></a>

### Implementando Autenticação JWT

<a id="Configurando_e_utilizando_JSON_Web_Tokens"></a>

#### Configurando e utilizando JSON Web Tokens (JWT)

<a id="Protegendo_rotas_com_middleware_de_autenticacao"></a>

##### Protegendo rotas com middleware de autenticação

<a id="Tratamento_de_Erros_e_Respostas"></a>

## Tratamento de Erros e Respostas

<a id="Tratamento_de_Erros"></a>

### Tratamento de Erros

<a id="Personalizando_respostas_de_erro"></a>

#### Personalizando respostas de erro

<a id="Centralizando_o_tratamento_de_exceções"></a>

##### Centralizando o tratamento de exceções

<a id="Formatacao_de_Respostas_JSON"></a>

### Formatação de Respostas JSON

<a id="Utilizacao_de_resources_no_Laravel"></a>

#### Utilização de resources no Laravel

<a id="Serializacao_de_dados_e_inclusão_de_metadados"></a>

##### Serialização de dados e inclusão de metadados

<a id="Documentacao_da_API"></a>

## Documentação da API

<a id="Introducao_ao_Swagger"></a>

### Introdução ao Swagger

<a id="Configurando_o_Swagger_no_Laravel"></a>

#### Configurando o Swagger no Laravel

<a id="Documentando_endpoints_e_modelos"></a>

##### Documentando endpoints e modelos

<a id="Utilizando_o_Laravel_API_Documentation_Generator"></a>

### Utilizando o Laravel API Documentation Generator

<a id="Automatizando_a_documentacao_com_o_pacote_Laravel_API_Documentation_Generator"></a>

#### Automatizando a documentação com o pacote Laravel API Documentation Generator

<a id="Boas_práticas_na_escrita_de_documentacao"></a>

##### Boas práticas na escrita de documentação

<a id="Testes_de_APIs"></a>

## Testes de APIs

<a id="Testes_Unitarios"></a>

### Testes Unitários

<a id="Introducao_aos_testes_no_Laravel"></a>

#### Introdução aos testes no Laravel

<a id="Escrevendo_testes_unitarios_para_controladores_e_modelos"></a>

##### Escrevendo testes unitários para controladores e modelos

<a id="Testes_de_Integracao"></a>

### Testes de Integração

<a id="Escrevendo_testes_de_integracao_para_APIs_Rest"></a>

#### Escrevendo testes de integração para APIs Rest

<a id="Utilizando_o_PHPUnit_para_testes_automatizados"></a>

##### Utilizando o PHPUnit para testes automatizados

<a id="Desempenho_e_Segurança"></a>

##  Desempenho e Segurança

<a id="Otimizando_Desempenho"></a>

### Otimizando Desempenho

<a id="Caching_no_Laravel"></a>

#### Caching no Laravel

<a id="Melhorando_a_performance_da_API"></a>

##### Melhorando a performance da API

<a id="Segurança_em_APIs"></a>

### Segurança em APIs

<a id="Protegendo_contra_ataques_comuns"></a>

#### Protegendo contra ataques comuns (SQL Injection, XSS, CSRF)

<a id="Implementando_politicas_de_seguranca_e_boas_praticas"></a>

##### Implementando políticas de segurança e boas práticas
