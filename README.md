🚗 Car Rental System (Dockerized)

A PHP & MySQL based Car Rental System that allows users to browse available cars, make bookings, manage profiles, and submit testimonials.
This project is fully Dockerized using Docker Compose, allowing the entire application (PHP + Apache + MySQL) to run with a single command.

📌 Features

User registration & login

Browse available cars

Car booking system

User profile management

Testimonials

Admin panel (vehicle & booking management)

MySQL database integration

Fully Dockerized setup

🛠 Tech Stack
Technology	Usage
PHP	Backend
MySQL	Database
Apache	Web Server
Docker	Containerization
Docker Compose	Multi-container orchestration
HTML, CSS, JS	Frontend
📂 Project Structure
carrental/
│
├── admin/                 # Admin panel
├── assets/                # CSS, JS, images
├── includes/              # DB config & common files
├── mysql-init/            # Database initialization
│   └── carrental.sql
├── Dockerfile
├── docker-compose.yml
├── README.md
└── index.php

🐳 Docker Architecture

Web Container

PHP + Apache

Hosts the PHP application

Database Container

MySQL

Automatically imports database using SQL file

🚀 How to Run the Project (Docker)
1️⃣ Prerequisites

Make sure you have installed:

Docker

Docker Compose

Verify:

docker --version
docker compose version

2️⃣ Clone the Repository
git clone https://github.com/Anand-1705/Car-rental-system.git
cd Car-rental-system

3️⃣ Start the Application

Run this command from the project root directory:

docker compose up --build


✔ This will:

Build the PHP container

Start MySQL container

Import database automatically

Start Apache server

4️⃣ Access the Application

Website:
👉 http://localhost:8080

MySQL (inside Docker):

Host: db

Database: carrental

🗄 Database Configuration

Database is auto-imported from:

mysql-init/carrental.sql


Database credentials (Docker):

Host: db
User: carrental_user
Password: carrental_pass
Database: carrental

🧪 Stopping the Application
docker compose down


This stops and removes containers but keeps database data safe.

📦 Git & Docker Files Included

✅ Dockerfile

✅ docker-compose.yml

✅ SQL initialization file

✅ Fully committed & pushed to GitHub