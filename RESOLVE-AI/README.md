# Resolve Aí — Aplicação

Este diretório contém a implementação do protótipo navegável do **Resolve Aí** em Laravel.

A documentação geral, descrição da proposta, requisitos atendidos e instruções completas estão no [README principal do repositório](../README.md).

## Arquivos principais

- `resources/views/app.blade.php` — telas do protótipo
- `resources/css/app.css` — identidade visual e layout mobile-first
- `resources/js/app.js` — navegação e interações simuladas
- `docs/fluxo.md` — fluxo do sistema
- `docs/casos-de-uso.md` — casos de uso
- `public/images/resolve-ai-icon.svg` — identidade visual

## Execução rápida

```bash
composer install
npm install
```

Crie o `.env`, gere a chave, compile os assets e inicie o Laravel:

```bash
php artisan key:generate
npm run build
php artisan serve
```

Acesse `http://127.0.0.1:8000`.

> Nesta etapa, a aplicação utiliza dados simulados e não depende de persistência em banco de dados para demonstrar os fluxos.
