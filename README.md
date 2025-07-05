# Pixel Positions - Job Listing App

Pixel Positions is a modern job listing platform built with Laravel. It allows employers to post jobs and job seekers to search for their next opportunity. The app features user authentication, employer profiles, job tagging, and a clean, responsive UI powered by Tailwind CSS.

## Features

- User registration and authentication
- Employer profile creation with logo upload
- Post, tag, and feature jobs
- Search jobs by title or tag
- Responsive design with Tailwind CSS
- Database seeding and factories for easy testing

## Getting Started

### Prerequisites

- PHP 8.4+
- Composer
- Node.js & npm

### Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/your-username/laravel-job-listing-app.git
   cd laravel-job-listing-app
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install JS dependencies:**
   ```sh
   npm install
   ```

4. **Copy the example environment file and set your variables:**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run database migrations and seeders:**
   ```sh
   php artisan migrate --seed
   ```

6. **Build frontend assets:**
   ```sh
   npm run build
   ```

7. **Start the development server:**
   ```sh
   php artisan serve
   ```

## Running Tests

```sh
php artisan test
```

## Project Structure

- `app/Models` - Eloquent models (User, Employer, Job, Tag)
- `app/Http/Controllers` - Application controllers
- `resources/views` - Blade templates and components
- `database/migrations` - Database schema
- `database/factories` - Model factories for testing/seeding

## License

This project is open-sourced under the [MIT license](LICENSE).

---

Made with ❤️ using Laravel.
