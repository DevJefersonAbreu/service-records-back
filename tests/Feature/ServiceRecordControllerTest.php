<?php

namespace Tests\Feature;

use App\Models\ServiceRecord;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceRecordControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_service_records()
    {
        // Cria um registro no banco de dados
        $serviceRecord = ServiceRecord::factory()->create();

        // Faz uma requisição GET para a rota de listagem
        $response = $this->get('/api/service-records');

        // Verifica se a resposta tem status 200 e contém o registro criado
        $response->assertStatus(200)
                 ->assertJson([$serviceRecord->toArray()]);
    }

    public function test_create_service_record()
    {
        // Dados para criar um novo registro
        $data = [
            'full_name' => 'Maria Oliveira',
            'address' => 'Avenida Paulista, 1000',
            'phone_number' => '11987654321',
            'date' => '2023-10-02',
        ];

        // Faz uma requisição POST para a rota de criação
        $response = $this->post('/api/service-records', $data);

        // Verifica se a resposta tem status 201 e se o registro foi criado no banco de dados
        $response->assertStatus(201);
        $this->assertDatabaseHas('service_records', $data);
    }

    public function test_show_service_record()
    {
        // Cria um registro no banco de dados
        $serviceRecord = ServiceRecord::factory()->create();

        // Faz uma requisição GET para a rota de exibição
        $response = $this->get('/api/service-records/' . $serviceRecord->id);

        // Verifica se a resposta tem status 200 e contém o registro criado
        $response->assertStatus(200)
                 ->assertJson($serviceRecord->toArray());
    }

    public function test_update_service_record()
    {
        // Cria um registro no banco de dados
        $serviceRecord = ServiceRecord::factory()->create();

        // Dados para atualizar o registro
        $data = [
            'full_name' => 'João Silva Atualizado',
            'address' => 'Rua das Flores, 456',
        ];

        // Faz uma requisição PUT para a rota de atualização
        $response = $this->put('/api/service-records/' . $serviceRecord->id, $data);

        // Verifica se a resposta tem status 200 e se o registro foi atualizado no banco de dados
        $response->assertStatus(200);
        $this->assertDatabaseHas('service_records', $data);
    }

    public function test_delete_service_record()
    {
        // Cria um registro no banco de dados
        $serviceRecord = ServiceRecord::factory()->create();

        // Faz uma requisição DELETE para a rota de exclusão
        $response = $this->delete('/api/service-records/' . $serviceRecord->id);

        // Verifica se a resposta tem status 204 e se o registro foi removido do banco de dados
        $response->assertStatus(204);
        $this->assertDatabaseMissing('service_records', ['id' => $serviceRecord->id]);
    }
}
