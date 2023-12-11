# CRUD Project in Laravel
## Readme Language

- [English](README.md)
- [Spanish](README-es.md)


## Results

Main
![Ejemplo de Imagen](/doc/Captura.PNG)
Insert
![Ejemplo de Imagen](/doc/create.PNG)
Edit
![Ejemplo de Imagen](/doc/editar.png)
Delete
![Ejemplo de Imagen](/doc/eliminar.png)

## Contents

1. [Introduction](#introduction)
2. [Project Setup](#project-setup)
3. [Installation](#installation)
4. [Migrations and Database](#migrations-and-database)
5. [Usage](#usage)
6. [Images](#images)
7. [Contributions](#contributions)
8. [License](#license)
9. [Language](#language)

## Introduction

Welcome to the CRUD project in Laravel. This project provides a basic set of CRUD (Create, Read, Update, Delete) operations implemented in the Laravel framework.

---

## Project Setup

Before getting started, make sure you have the following tools installed:

- PHP (Recommended 7.4 or higher)
- Composer (v2.6.6)
- MySQL (or another compatible database management system)

---

## Installation

1. Clone this repository:

    ```bash
    git clone https://github.com/Anyel-ec/Laravel-CRUD-RDBMS
    ```

2. Navigate to the project directory:

    ```bash
    cd Laravel-CRUD-RDBMS
    ```

3. Install Composer dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env` configuration file:

    ```bash
    cp .env.example .env
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

---

## Migrations and Database

This project uses migrations to manage the database structure. Ensure you configure your database in the `.env` file before running migrations.

```bash
php artisan migrate
```

---

## Usage

To run the project, use the following command:

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser to access the application.

---


---

## Contributions

Contributions are welcome! If you find bugs or have improvements, please open an issue or send a pull request.

---

## License

This project is licensed under the [MIT License](LICENSE).

---
