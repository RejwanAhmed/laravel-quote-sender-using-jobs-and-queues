# 📬 Laravel Quote Sender with Inertia.js & Vue 3

This is a Laravel 12 application that allows you to send inspirational quotes to a list of subscribers using queued emails. The application includes a minimal frontend built with **Inertia.js** and **Vue 3**, featuring subscriber and quote management interfaces.

---

## 🚀 Features

- Display a list of all **Subscribers**
- Display a list of all **Quotes**
- Send any quote to **all subscribers** with a single click
- Track emails using the **quote_logs** table
- Fully seeded database with sample data
- Frontend powered by **Inertia.js + Vue 3**
- Queue-based email dispatching for better performance

---

## 🧰 Tech Stack

- **Laravel 12**
- **Inertia.js**
- **Vue 3**
- **Laravel Queues**
- **Tailwind CSS**
- **MySQL**
- **Mailtrap**

---

## 🛠️ Installation

```bash
# Clone the repository
git clone https://github.com/RejwanAhmed/laravel-quote-sender-using-jobs-and-queues.git
cd laravel-quote-sender-using-jobs-and-queues

# Install backend dependencies
composer install

# Install frontend dependencies
npm install

# Copy and configure environment
cp .env.example .env
php artisan key:generate

# Set your DB and Mail settings in .env
Example:
# DB_DATABASE=quote_sender
# MAIL_MAILER=smtp
# MAIL_HOST=smtp.mailtrap.io
# MAIL_PORT=2525
# MAIL_USERNAME=your_mailtrap_username
# MAIL_PASSWORD=your_mailtrap_password

# Run migrations and seed the database
php artisan migrate --seed

# Start Server
php artisan serve
npm run dev

# Start the queue worker
# Open two separate terminals and run the following two commands in separate terminals:
php artisan queue:work --queue=emails
php artisan queue:work --queue=logs

# Login credential:
email: test@example.com
password: password
