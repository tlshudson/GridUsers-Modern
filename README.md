🚀 GridUsers: Full Stack Evolution📝 DescriçãoO GridUsers é um ecossistema completo para gerenciamento de usuários, nascido da refatoração de um sistema legado procedural para uma arquitetura moderna e escalável. O projeto serve como um laboratório prático para implementação de uma API RESTful robusta em Laravel e uma interface SSR/SPA de alta performance com Next.js.Este projeto utiliza a estratégia de Monorepo, mantendo as responsabilidades de Backend e Frontend separadas, porém integradas em um único ciclo de desenvolvimento.🛠️ Stack TecnológicaCamadaTecnologiaVersãoBackendLaravel10.x / PHP 8.1.2FrontendNext.jsLTS (React 18+)Banco de DadosPostgreSQL14+Cache & NoSQLRedisEstudo de PerformanceAutenticaçãoJWT (Stateless)Feature Futura🏗️ Arquitetura do RepositórioPlaintext/grid-users
├── /backend     # API Laravel (Endpoints, Business Logic, Migrations)
├── /frontend    # Next.js App (Components, Hooks, Fetching)
├── /docs        # Documentação e prints da evolução
└── README.md    # Guia do projeto
🚀 Como executar o projeto1. Clonando o repositórioBashgit clone https://github.com/seu-usuario/grid-users.git
cd grid-users
2. Configurando o Backend (Laravel)Bashcd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
3. Configurando o Frontend (Next.js)Bashcd ../frontend
npm install
npm run dev
🎯 Roadmap de Estudos[x] Configuração do Ambiente WSL + Apache/Nginx.[x] Modelagem do Banco de Dados no PostgreSQL.[ ] Criação de API Resources no Laravel.[ ] Consumo de dados no Next.js com fetch / SWR.[ ] Implementação de Cache com Redis.[ ] Autenticação Stateless com JWT.👨‍💻 AutorHudson Dev Focando na transição Full Stack e dominando as ferramentas mais poderosas do mercado.
