# Proyecto - Backend

Bienvenido al repositorio del backend

## Instalación

Sigue estos pasos para configurar y ejecutar el backend en tu máquina local:

1. **Clona el Repositorio**: 
    ```
    git clone https://github.com/Neritovilla/BACK-MUSIC.git
    ```

2. **Instala las Dependencias**:
    ```
    cd tu-proyecto
    composer install
    ```

3. **Configuración del Archivo de Entorno**:
    - Copia el archivo `.env.example` y renómbralo a `.env`.
    - Configura tu archivo `.env` con la información adecuada para tu entorno (base de datos, etc.).
    - Tienes los comandos para crear la base de datos, tablas y registros en el carpeta Script_DB en el archivo `DB_Music_Script.sql`    
    - Genera una nueva clave de aplicación con el comando:
        ```
        php artisan key:generate
        ```

4. **Ejecuta las Migraciones y los Seeders** (si es necesario):
    ```
    php artisan migrate --seed
    ```

5. **Inicia el Servidor de Desarrollo**:
    ```
    php artisan serve
    ```

6. **Visita el API en tu Navegador o con una Herramienta como Postman**:
    - Abre tu navegador web y navega a `http://127.0.0.1:8000/api/categories` para acceder a la API.
    - Si realizaste la configuraación de manera correcta y cargaste los datos mencionados en el paso 3 observaras un json con datos, verificando q tu back funciona correctamente.
    - De no ser asi, asegurate que el puerto de salida sea 8000, recuerda estos pasos son para trabajar de manera local por ello usamos http://127.0.0.1 que es igual a localhost

¡Listo! Ahora deberías tener el backend instalado y ejecutándose en tu máquina local. Si tienes algún problema, asegúrate de revisar la documentación oficial de Laravel para obtener más ayuda.
