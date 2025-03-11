# Service Records Back

Este repositório contém a aplicação backend para o sistema de **Registro de Solicitações de Atendimentos Emergenciais Home Care**. O projeto foi desenvolvido utilizando **PHP Laravel 11**, com suporte a **Docker** e banco de dados **MySQL**.

## 📌 Objetivo do Projeto

O sistema tem como finalidade agilizar o processo de solicitação e atendimento emergencial home care para profissionais de saúde. O fluxo de atendimento funciona da seguinte maneira:

1. Um paciente ou um parente próximo solicita, via telefone, um atendimento emergencial.
2. A central de atendimentos registra a solicitação, gerando um **número de protocolo** e registrando:
   - Data da solicitação
   - Nome do paciente
   - Contato de celular (WhatsApp)
   - Endereço completo
3. A central direciona imediatamente um profissional de saúde para a residência informada.

---

## 🚀 Tecnologias Utilizadas

- **PHP 8.2** (Laravel 11)
- **Docker**
- **MySQL**
- **Composer**
- **Nginx (para deploy)**

---

## 🛠️ Como Configurar o Projeto

### 1️⃣ Clonar o Repositório
```sh
git clone https://github.com/DevJefersonAbreu/service-records-back.git
cd service-records-back
```

### 2️⃣ Criar o Arquivo de Configuração
Copie o arquivo de exemplo `.env.example` e renomeie para `.env`:
```sh
cp .env.example .env
```
Edite as configurações do banco de dados no arquivo `.env`, se necessário:
```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=service_records
DB_USERNAME=root
DB_PASSWORD=root
```

### 3️⃣ Subir o Ambiente com Docker
```sh
docker-compose up -d
```
Isso iniciará os containers do Laravel, MySQL e Nginx.

### 4️⃣ Instalar Dependências
```sh
docker exec -it service-records-app composer install
```

### 5️⃣ Gerar a Key do Laravel
```sh
docker exec -it service-records-app php artisan key:generate
```

### 6️⃣ Rodar as Migrações do Banco de Dados
```sh
docker exec -it service-records-app php artisan migrate
```

### 7️⃣ Rodar o Servidor Laravel (se não estiver usando Nginx)
```sh
docker exec -it service-records-app php artisan serve --host=0.0.0.0 --port=8000
```
A aplicação estará acessível em: [http://localhost:8000](http://localhost:8000)

---

## 🔗 Endpoints da API

### **Registro de Solicitação de Atendimento**
`POST /api/solicitacoes`

**Parâmetros:**
```json
{
  "nome_paciente": "João da Silva",
  "telefone": "11999999999",
  "endereco": "Rua das Flores, 123, São Paulo, SP",
  "data_solicitacao": "2024-03-11 14:30:00"
}
```

**Resposta:**
```json
{
  "protocolo": "12345678",
  "status": "Atendimento registrado com sucesso"
}
```

### **Listar Solicitações**
`GET /api/solicitacoes`

**Resposta:**
```json
[
  {
    "id": 1,
    "nome_paciente": "João da Silva",
    "telefone": "11999999999",
    "endereco": "Rua das Flores, 123, São Paulo, SP",
    "data_solicitacao": "2024-03-11 14:30:00",
    "protocolo": "12345678"
  }
]
```

---

## 📌 Comandos Adicionais

### Executar as Seeders
```sh
docker exec -it service-records-app php artisan db:seed
```

### Rodar Testes
```sh
docker exec -it service-records-app php artisan test
```

### Parar os Containers
```sh
docker-compose down
```

---

## 📜 Licença
Este projeto está sob a licença **MIT**. Consulte o arquivo [LICENSE](LICENSE) para mais informações.

---

## 📞 Contato

- **Desenvolvedor:** Jeferson Abreu  
- **GitHub:** [DevJefersonAbreu](https://github.com/DevJefersonAbreu)  
- **LinkedIn:** [Jeferson Abreu](https://www.linkedin.com/in/jeferson-da-silva-abreu/)  
- **E-mail:** devjefersonabreu10@gmail.com


