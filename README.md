# 🚀 GridUsers: Full Stack Evolution

### 📝 Descrição
O **GridUsers** é um ecossistema completo para gerenciamento de usuários, nascido da refatoração de um sistema legado procedural para uma arquitetura moderna e escalável. O projeto serve como um laboratório prático para implementação de uma **API RESTful robusta em Laravel** e uma interface **SSR/SPA de alta performance com Next.js**.

Este projeto utiliza a estratégia de **Monorepo**, mantendo as responsabilidades de Backend e Frontend separadas, porém integradas em um único ciclo de desenvolvimento.

---

### 🛠️ Stack Tecnológica

| Camada             | Tecnologia                                    | Versão           |
| :----------------- | :-------------------------------------------- | :--------------- |
| **Backend** | [Laravel](https://laravel.com/)               | 10.x / PHP 8.1.2 |
| **Frontend** | [Next.js](https://nextjs.org/)                | LTS (React 18+)  |
| **Banco de Dados** | [PostgreSQL](https://www.postgresql.org/)     | 14+              |
| **Cache & NoSQL** | [Redis](https://redis.io/)                    | Estudo           |
| **Autenticação** | JWT (Stateless)                               | *Feature Futura* |

---

### 🏗️ Arquitetura do Repositório

```text
/grid-users
├── /backend     # API Laravel (Endpoints, Business Logic, Migrations)
├── /frontend    # Next.js App (Components, Hooks, Fetching)
├── /docs        # Documentação e prints da evolução
└── README.md    # Guia do projeto
```

### 🚀 Como executar o projeto

#### 1\. Clonando o repositório

Bash

```
git clone [https://github.com/seu-usuario/grid-users.git](https://github.com/seu-usuario/grid-users.git)
cd grid-users

```

#### 2\. Configurando o Backend (Laravel)

Bash

```
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

```

#### 3\. Configurando o Frontend (Next.js)

Bash

```
cd ../frontend
npm install
npm run dev

```

* * * * *

### 🎯 Roadmap de Estudos

-   [x] Configuração do Ambiente WSL + Apache.

-   [x] Modelagem inicial do Banco de Dados no PostgreSQL.

-   [ ] Refatoração para API REST com Laravel.

-   [ ] Implementação de Service Pattern no Backend.

-   [ ] Consumo de dados no Next.js com Axios/SWR.

-   [ ] Implementação de Cache com Redis.

-   [ ] Autenticação Stateless com JWT.