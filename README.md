# 🐦 Laravel Twitter Clone

Un clon funcional de Twitter creado con **Laravel 12**, **Tailwind CSS** y **MySQL**.  
Permite registro, publicación de tweets, sistema de seguidores, perfiles y más.

---

## 🚀 Requisitos del sistema


- **PHP 8.2 o superior**
- **Composer**
- **Node.js y NPM**
- **MySQL**



## ⚙️ Instalación y ejecución

Seguí estos pasos para correr el proyecto localmente:

### 1. Clonar el repositorio


git clone https://github.com/willgonzalez99/clone-twitter <br>
cd twitter-clone

### 2. Instalar dependencias de PHP y JavaScript

composer install<br>
npm install && npm run build

### 3. Configurar entorno

generá la clave de la app con php artisan key:generate y agrega al .env

### 5. Configurar base de datos

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=twitter_clone<br>
DB_USERNAME=root<br>
DB_PASSWORD=tu_contraseña<br>

### 6. php artisan migrate

php artisan migrate

### 7. Levantar el servidor local

php artisan serve

### 👥 Usuario de prueba

Podés registrarte como cualquier usuario nuevo<br>
Email: test@example.com<br>
Contraseña: password


Funcionalidades implementadas

✔️ Registro y login de usuarios

✔️ Tweets con máximo de 280 caracteres

✔️ Vista de tweets recientes

✔️ Página de perfil de usuario

✔️ Sistema de seguir / dejar de seguir

✔️ Listado de seguidores y seguidos

✔️ Sugerencias de usuarios

✔️ Búsqueda de usuarios
    
