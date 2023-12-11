# Proyecto CRUD en Laravel
## Idioma del Readme

- [Inglés](README.md)
- [Español](README-es.md)


## Resultados

# Principal
![Ejemplo de Imagen](/doc/Captura.PNG)  
# Insertar
![Ejemplo de Imagen](/doc/create.PNG)  
# Editar 
![Ejemplo de Imagen](/doc/editar.png)  
# Eliminar
![Ejemplo de Imagen](/doc/eliminar.png)  

## Contenido

1. [Introducción](#introducción)
2. [Configuración del Proyecto](#configuración-del-proyecto)
3. [Instalación](#instalación)
4. [Migraciones y Base de Datos](#migraciones-y-base-de-datos)
5. [Uso](#uso)
6. [Imágenes](#imágenes)
7. [Contribuciones](#contribuciones)
8. [Licencia](#licencia)
9. [Idioma](#idioma)

## Introducción

Bienvenido/a al proyecto CRUD en Laravel. Este proyecto proporciona un conjunto básico de operaciones CRUD (Crear, Leer, Actualizar, Eliminar) implementadas en el framework Laravel.

---

## Configuración del Proyecto

Antes de comenzar, asegúrate de tener las siguientes herramientas instaladas:

- PHP (Recomendado 7.4 o superior)
- Composer (v2.6.6)
- MySQL (u otro sistema de gestión de bases de datos compatible)

---

## Instalación

1. Clona este repositorio:

    ```bash
    git clone https://github.com/Anyel-ec/Laravel-CRUD-RDBMS
    ```

2. Accede al directorio del proyecto:

    ```bash
    cd Laravel-CRUD-RDBMS
    ```

3. Instala las dependencias de Composer:

    ```bash
    composer install
    ```

4. Copia el archivo de configuración `.env`:

    ```bash
    cp .env.example .env
    ```

5. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

---

## Migraciones y Base de Datos

Este proyecto utiliza migraciones para gestionar la estructura de la base de datos. Asegúrate de configurar tu base de datos en el archivo `.env` antes de ejecutar las migraciones.

```bash
php artisan migrate
```

---

## Uso

Para ejecutar el proyecto, utiliza el siguiente comando:

```bash
php artisan serve
```

Visita [http://localhost:8000](http://localhost:8000) en tu navegador para acceder a la aplicación.

---


---

## Contribuciones

¡Contribuciones son bienvenidas! Si encuentras errores o tienes mejoras, por favor abre un problema o envía una solicitud de extracción.

---

## Licencia

Este proyecto está bajo la [Licencia MIT](LICENSE).

---

