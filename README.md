#  Laravel Starter Kit (with Docker & Makefile)

This is a **ready-to-use starter kit** for Laravel, built with Docker and Makefile commands to simplify your development setup.

---

## Installation Steps

### 1️⃣ Clone the repository
```bash
git clone https://github.com/yourusername/laravel-starter-kit.git
cd laravel-starter-kit
```

### 2️⃣ Create `.env` file
Copy `.env.example` and rename it to `.env`, then set your own environment variables:
```bash
cp .env.example .env
```

### 3️⃣ Build Docker containers
```bash
make build
```

### 4️⃣ Start the containers
```bash
make up
```

### 5️⃣ Generate the application key
```bash
make artisan cmd="key:generate"
```

### 6️⃣ Install PHP dependencies
```bash
make composer-install
```

### 7️⃣ Run migrations and seeders
This will create database tables and insert default users, roles, and permissions:
```bash
make artisan cmd="migrate --seed"
```

✅ Your project is now ready to use!

---

## 🐘 pgAdmin Connection Settings

If you are using **pgAdmin**, you can add the following configuration to connect to your PostgreSQL container:

```json
{
    "Servers": {
        "1": {
            "Name": "Local PostgreSQL",
            "Group": "Servers",
            "Host": "postgres",
            "Port": 5432,
            "MaintenanceDB": "db-starter",
            "Username": "defaultuser",
            "Password": "defaultpass",
            "SSLMode": "prefer"
        }
    }
}
```

---

## Available Make Commands

| Command | Description |
|----------|-------------|
| `make build` | Build all Docker images |
| `make up` | Start all containers |
| `make down` | Stop all containers |
| `make composer-install` | Install PHP dependencies |
| `make artisan cmd="migrate --seed"` | Run artisan command inside container |
| `make logs` | View container logs |

---

## 💡 Notes

- Make sure Docker and Docker Compose are installed on your system.
- Default database credentials can be modified in `.env` file and `docker-compose.yml`.
- To access the Laravel app, visit: [http://localhost:{port}](http://localhost:{port})

---

## 🧑‍💻 Author

**Fereydoon Salemi**  
 [LinkedIn](https://linkedin.com/in/fererydoon-salemi) •  [GitHub](https://github.com/afereydoon1/Laravel-satarter)

---
