# Configurando ambiente


### Compilando a aplicação no Docker
```bash
docker-compose build
```

### Executando a aplicação em background
```bash
docker-compose up -d
```

### Instalando as dependências do aplicativo
```bash
docker-compose exec app_clickweb composer install
```

### Gerando chave do app
```bash
docker-compose exec app app_clickweb artisan key:generate
```

### Criando as tabelas
```bash
docker-compose exec app app_clickweb artisan migrate
```

### Executando o Seeder
```bash
docker-compose exec app app_clickweb artisan db:seed
```

### Executando aplicação
```bash
http://localhost
```

