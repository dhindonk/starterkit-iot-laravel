# Laravel Starter Kit

A ready-to-use Laravel Starter Kit designed to accelerate your project development. This starter kit includes essential features like authentication, role & permission management, API token authentication, user management, and file upload utilities. It also comes with a default frontend built using Bootstrap.

## Features

- **Authentication**: Implemented using Laravel Breeze.
- **Role & Permission Management**: Integrated with Spatie Laravel Permission.
- **API Token Authentication**: Powered by Laravel Sanctum.
- **User Management**: CRUD operations for managing users with validation.
- **File Upload**: Utility for uploading files with validation.
- **Helper Functions**: Predefined success and error response functions.
- **Bootstrap Frontend**: Simple, responsive design ready to customize.

## Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/dhindonk/starterkit-iot-laravel.git
   cd laravel-starter-kit
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Set up your environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run migrations:
   ```bash
   php artisan migrate
   ```

5. Serve the application:
   ```bash
   php artisan serve
   ```

## Usage

- Access the application at `http://localhost:8000`.
- Use the prebuilt API routes or extend them as needed for your project.

## Support

If you find this starter kit helpful, please give it a ⭐ on GitHub to support the project!

---

Feel free to fork and customize this repository to suit your needs. Contributions are welcome!
