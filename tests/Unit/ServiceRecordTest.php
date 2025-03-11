<?php

namespace Tests\Unit;

use App\Models\ServiceRecord;
use Tests\TestCase;

class ServiceRecordTest extends TestCase
{
    public function test_create_service_record()
    {
        // Cria um registro no banco de dados
        $serviceRecord = ServiceRecord::create([
            'full_name' => 'João Silva',
            'address' => 'Rua das Flores, 123',
            'phone_number' => '11987654321',
            'date' => '2023-10-01',
        ]);

        // Verifica se o registro foi criado corretamente
        $this->assertDatabaseHas('service_records', [
            'full_name' => 'João Silva',
            'address' => 'Rua das Flores, 123',
        ]);
    }
}

