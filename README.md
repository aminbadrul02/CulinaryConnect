
🍽️ CulinaryConnect: A Recipe Sharing Platform

A collaborative web platform built using Laravel that allows users to share, explore, and discover a wide variety of recipes. Whether you're a home cook or a food enthusiast, this platform is designed to inspire culinary creativity and foster a community around cooking.

📌 Project Description

This project is a recipe-sharing web application developed with the Laravel PHP framework. It allows users to create an account, post their favorite recipes, browse recipes shared by others, and interact with the community. The platform includes features such as user authentication, recipe categorization, and a clean, responsive user interface.

🚀 Features

- User registration and login
- Recipe submission with ingredients and instructions
- Categorized browsing of recipes
- User profile management
- Recipe search functionality
- Responsive design for mobile and desktop
- Role-based access for admin and users

🛠️ Installation

Requirements

- PHP >= 8.0
- Composer
- MySQL or any supported database
- Node.js and npm (for frontend assets)
- Laravel 9+

Steps


1. Clone the repository:

````markdown
git clone https://github.com/yourusername/laravel-recipe-sharing-platform.git
cd laravel-recipe-sharing-platform
````

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install Node.js dependencies:

   ```bash
   npm install
   ```

4. Copy `.env.example` to `.env` and configure your environment variables:

   ```bash
   cp .env.example .env
   ```

   Set your database credentials and other configurations in the `.env` file.

5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Run migrations:

   ```bash
   php artisan migrate
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

8. Compile frontend assets:

   ```bash
   npm run dev
   ```

## 👨‍💻 Usage

Once the server is running, open your browser and go to:

```
http://localhost:8000
```

From there, you can register a new account, log in, and start posting or exploring recipes.

## 🧰 Technologies Used

* **Laravel** (Backend Framework)
* **Blade** (Templating Engine)
* **MySQL** (Database)
* **Bootstrap / Tailwind CSS** (Frontend)
* **Node.js & npm** (Asset Compilation)
* **Git** (Version Control)

## 👥 Contributors

* Team Member 1 - Muhammad Amin Bin Badrul Hisham
* Team Member 2 - Mohamad Imad Addin Bin Jafar
* Team Member 3 - Izzat Faiz Bin Sulaiman
* Team Member 4 - Mutsanna Bin Zulkefle


## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

```
```
