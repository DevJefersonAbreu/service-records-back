# Service Records Backend

Este projeto foi desenvolvido em PHP Laravel, utilizando Docker Compose para orquestração de containers, MySQL como banco de dados e possui uma cobertura de testes consistente. O objetivo principal é agilizar o processo de registro de solicitações de atendimentos emergenciais home care, facilitando o trabalho de profissionais de saúde que necessitam atender casos de urgência.

## Objetivo do Projeto

O registro de solicitações de atendimentos emergenciais home care servirá para agilizar o processo de profissionais de saúde que trabalham com atendimento homecare e precisam atender casos de urgência conforme demanda solicitada. O processo de atendimento funciona da seguinte maneira:

1. Um paciente ou parente próximo a pessoa que necessita de cuidados telefona para a central de atendimentos e solicita com urgência um atendimento médico.
2. A central registra o atendimento gerando um número de protocolo de atendimento e imediatamente direciona um médico para a residência informada.

## Configuração do Ambiente

### Pré-requisitos

- Docker
- Docker Compose

### Configure as Variáveis de Ambiente

1. Crie um arquivo `.env` na raiz do projeto e configure as variáveis de ambiente necessárias. Você pode usar o arquivo `.env.example` como base:

    ```bash
    cp .env.example .env
    ```

2. Edite o arquivo `.env` e configure as seguintes variáveis:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=service_records
    DB_USERNAME=root
    DB_PASSWORD=secret
    ```

### Suba os Containers com Docker Compose

Execute o seguinte comando para subir os containers do Docker:

```bash
docker-compose up -d


Instale as Dependências do Projeto
Acesse o container do Laravel e instale as dependências do Composer:


docker-compose exec app bash
composer install


Execute as Migrações e Seeders
Dentro do container, execute as migrações e seeders para configurar o banco de dados:


php artisan migrate --seed


Execute os Testes
Para garantir que tudo está funcionando corretamente, execute os testes:


php artisan test

