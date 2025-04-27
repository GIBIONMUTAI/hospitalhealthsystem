## Health System Project Installation

**Backend Setup**

1.  **`composer install`**:
    Installs PHP dependencies defined in composer.json.

2.  **`php artisan key:generate`**:
     Creates a unique security key for the application.

3.  **`php artisan migrate`**:
    Runs database migrations to set up the database tables.

**Frontend Setup**

4.  **`npm run build`**:
    Compiles frontend assets for production.

5.  **`npm install --save-dev @vitejs/plugin-vue`**:
    Installs the Vue.js plugin for Vite (development dependency).

6.  **`npm install --save-dev vite laravel-vite-plugin`**:
    Installs Vite and its Laravel integration plugin (development dependencies).
7.  **`npm install && npm run dev`**:
    Installs all JavaScript dependencies and starts the frontend development server with hot reloading.

 **Starting the Server:**

8.  **`php artisan serve`**:
   It allows you to access server at `http://localhost:8000`.

## Database Setup

**Install MySQL/XAMPP**:
    Provides the MySQL database server.

**Clone the code in the `htdocs` folder (for XAMPP)**:
 Places the project files in the web server's root directory (if using XAMPP).

**In the XAMPP server (or your MySQL client), migrate the database to create the required tables**:
Run `php artisan migrate` to create the necessary database tables after configuring the database connection.
