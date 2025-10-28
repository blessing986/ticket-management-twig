# 🎫 TicketFlow — Ticket Management System
A modern **Ticket Management System** built with **PHP**, **Twig**, and **Tailwind CSS**, designed to help teams manage, track, and resolve support tickets efficiently.
## 🚀 Features
- 🖥️ Beautiful, responsive UI built with **Tailwind CSS**
- 🔐 Authentication system (Login & Signup)
- 🧾 Create, update, and delete tickets
- 📊 Dashboard with ticket statistics
- 💬 Toast message notifications
- 🧭 Simple routing using PHP
- ⚙️ Session-based ticket storage (no database required)
## 🗂️ Project Structure
```
TICKET-WEB-APP-TWIG/
├── index.php
├── composer.json
├── vendor/
├── templates/
│   ├── base.twig
│   ├── landing.twig
│   ├── auth.twig
│   ├── dashboard.twig
│   ├── tickets.twig
│   ├── footer.twig
└── README.md
```
## 🧰 Tech Stack
| Technology | Purpose |
|-------------|----------|
| **PHP** | Core backend logic & routing |
| **Twig** | Templating engine for cleaner UI rendering |
| **Tailwind CSS** | Frontend styling |
| **Composer** | PHP dependency manager |
## ⚙️ Setup Instructions
Follow these steps to run the project locally:
### 1️⃣ Clone the Repository
```bash
https://github.com/blessing986/ticket-management-twig.git
cd ticket-management-twig
```
### 2️⃣ Install Dependencies
```bash
composer install
```
### 3️⃣ Start the PHP Development Server
```bash
php -S localhost:8000
```
### 4️⃣ Open in Browser
Go to:
```
http://localhost:8000
```
## 🔑 Authentication
- **Signup Page** → `index.php?page=signup`
- **Login Page** → `index.php?page=login`
- **Dashboard Page** → Requires authentication
Sessions are used to store user details, so no external database is required.
## 🧾 Ticket Management
- Create a new ticket (`title`, `description`, `status`, `priority`)
- Edit or delete existing tickets
- View ticket statistics on the dashboard:
  - Total Tickets
  - Open
  - In Progress
  - Closed
All ticket data is stored temporarily in PHP sessions.
## 🧩 Templates Overview
| File | Description |
|------|--------------|
| **base.twig** | Main layout structure with Tailwind and toast message system |
| **landing.twig** | Landing page UI |
| **auth.twig** | Handles both login and signup pages |
| **dashboard.twig** | Displays ticket statistics and navigation |
| **tickets.twig** | Handles ticket creation, update, and deletion |
| **footer.twig** | Common footer for all pages |
 
Built with ❤️ using Twig, PHP and Tailwind CSS
