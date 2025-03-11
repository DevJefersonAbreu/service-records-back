<?php

return [
    'paths' => ['v1/*'], // Caminhos que devem ter CORS habilitado
    'allowed_methods' => ['*'], // Métodos permitidos (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => ['*'], // Domínios permitidos (use '*' para permitir todos)
    'allowed_origins_patterns' => [], // Padrões de domínios permitidos
    'allowed_headers' => ['*'], // Cabeçalhos permitidos
    'exposed_headers' => [], // Cabeçalhos expostos
    'max_age' => 0, // Tempo de cache do CORS (em segundos)
    'supports_credentials' => false, // Permitir credenciais (cookies, autenticação)
];
