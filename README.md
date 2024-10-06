<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Estudos

Este repositório contém uma aplicação web construída com o framework **Laravel**, com o objetivo de continuar o aprendizado, testar novas funcionalidades e compartilhar o conhecimento adquirido com outros desenvolvedores.

## Pré-requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas em seu ambiente:

- **PHP**: v8.3.7
- **Composer**: v2.7.9
- **Node.js**: v20.14.0
- **NPM**: v10.7.0

## Funcionalidades

### Chat em Tempo Real

Este projeto inclui uma funcionalidade de **chat em tempo real**, utilizando o **Socket.io** para comunicação entre clientes. A seguir estão os passos para configurar e iniciar o chat.

#### Requisitos para o Chat

1. Abra um terminal na pasta raiz do projeto e rode a migration:
   ```bash
   php artisan migrate:fresh
   ```
2. Abra outro terminal na pasta raiz do projeto e inicie o servidor Laravel:
   ```bash
   php artisan serve
   ```
3. Abra outro terminal e inicialize as dependências JavaScript com o comando:
   ```bash
   npm run dev
   ```
4. Por fim, abra um terceiro terminal dentro da pasta node-server e rode o seguinte comando:
   ```bash
   npm run setup
   ```
   Após seguir corretamente esses passos, você pode acessar o chat em duas abas diferentes do navegador através do link: http://localhost:8000/chat.


<br></br>
### Envio de múltiplos e-mails através de fila.

Esta funcionalidade permite o envio múltiplo de e-mails utilizando **queues**, **jobs**, **Laravel Reverb**, **events**, e **broadcasting**.

#### Requisitos múltiplos e-mails através de fila.

1. Abra um terminal na pasta raiz do projeto e rode a migration:
   ```bash
   php artisan migrate:fresh
   ```
2. Abra outro terminal e inicie o servidor Laravel:
   ```bash
   php artisan serve
   ```
3. Abra outro terminal e inicialize as dependências JavaScript com o comando:
   ```bash
   npm run dev
   ```
4. Abra outro terminal para instalar o broadcasting (por trás dos panos, esse comando também instala o Reverb):
   ```bash
   php artisan install:broadcasting
   ```
5. Abra outro terminal e inicialize o reverb:
   ```bash
   php artisan reverb:start
   ```
6. Abra outro terminal e inicialize a fila:
   ```bash
   php artisan queue:listen --queue=emails
   ```
7. Crie uma conta no site Mailtrap para testar a funcionalidade ou utilize outro sistema de e-mails de sua preferência. Configure as variáveis de ambiente no arquivo ```.env```.
   ```
    MAIL_MAILER=
    MAIL_HOST=
    MAIL_PORT=
    MAIL_USERNAME=
    MAIL_PASSWORD=
    MAIL_ENCRYPTION=
   ```
9. Por fim, abra a aplicação no navegador na página http://127.0.0.1:8000/emails e teste a funcionalidade.