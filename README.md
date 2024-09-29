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

1. Abra um terminal na pasta raiz do projeto e inicie o servidor Laravel:
   ```bash
   php artisan serve
   ```
2. Abra outro terminal e inicialize as dependências JavaScript com o comando:
   ```bash
   npm run dev
   ```
3. Por fim, abra um terceiro terminal dentro da pasta node-server e rode o seguinte comando:
   ```bash
   npm run setup
   ```
   Após seguir corretamente esses passos, você pode acessar o chat em duas abas diferentes do navegador através do link: http://localhost:8000/chat.