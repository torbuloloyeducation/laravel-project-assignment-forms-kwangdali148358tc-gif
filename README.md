[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/QO_OE9al)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Project Setup Guide (For Students)

Follow these steps to clone and run the project locally. You are encouraged to explore and modify the code freely.


### 1. Install Dependencies

Install PHP and JavaScript dependencies:

```bash
composer install
npm install
```

### 2. Setup Environment File

Copy the example environment file:

```bash
copy .env.example .env
```

Then open `.env` and configure your database and other settings if needed.

### 3. Generate Application Key

```bash
php artisan key:generate
```

### 4. Run Migrations (if applicable)

```bash
php artisan migrate
```

### 5. Build Frontend Assets

```bash
npm run dev
```

### 6. Run the Application

```bash
php artisan serve
```

Open your browser and go to:

```
http://127.0.0.1:8000
```

---

## Activity 1: Simple Navigation

Your task is to build a very simple navigation system using Laravel.

### Objective

Create a navbar with three links:

* Home
* About
* Contact
* Services
* Showcases
* Blog

Each link should display a simple message when clicked.

### Expected Output

* Home → "Welcome to homepage"
* About → "About us section"
* Contact → "Contact page"
* Services → "Services page"
* Showcases → "Showcases page"
* Blog → "Blog page"

### Steps

1. Create a navbar component inside:

```
resources/views/components/navbar.blade.php
```

Add:

```blade
<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/contact">Contact</a> |
    <a href="/services">Services</a> |
    <a href="/showcases">Showcases</a> |
    <a href="/blog">Blog</a> 
</nav>
<hr>
```

2. Use the navbar in your layout:

```blade
<x-navbar />
{{ $slot }}
```

3. Make sure your routes are defined in `routes/web.php`:

```php
Route::get('/', function () {
    return view('welcome');
}); or Route::view('/', 'welcome');

##both routes above works but view works only for static webpages.

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


...
```

4. Update each page:

**welcome.blade.php**

```blade
<x-layout>
    <h1>Welcome to homepage</h1>
</x-layout>
```

**about.blade.php**

```blade
<x-layout>
    <h1>About us section</h1>
</x-layout>
```

**contact.blade.php**

```blade
<x-layout>
    <h1>Contact page</h1>
</x-layout>
```

```
...
```
---

# Activity 2: Forms in Laravel

## Objective
In this activity, you will practice handling **forms, POST requests, and session data** in Laravel.

By the end of this activity, you should be able to:
- Create a form using Blade
- Handle form submissions using routes
- Store data in session
- Display stored data dynamically

---

## Given Code Overview

You are provided with:
- A route that handles GET and POST requests
- A Blade form view that submits email input

---

## Tasks

### Task 1: Understand the Flow
Trace how the form works:
1. User enters email
2. Form submits via POST
3. Email is stored in session
4. Page reloads and displays saved emails

Write a short explanation (3–5 sentences) of this flow.

---

### Task 2: Add Validation
Modify the POST route to:
- Reject empty input
- Reject invalid email format

Hint:
Use `request()->validate([...])`

---

### Task 3: Prevent Duplicate Emails
Update the logic so:
- The same email cannot be added twice

Hint:
Check the session array before pushing.

---

### Task 4: Add Delete Button Per Email
Instead of deleting all emails:
- Add a **Delete button beside each email**
- Remove only the selected email

Challenge:
You will need to:
- Pass index or value
- Create a new POST/DELETE route

---

### Task 5: Improve UI Feedback
Add:
- Success message after adding email
- Error message if validation fails

Hint:
Use session flash messages

---

### Task 6: Limit Entries
- Allow only **5 emails maximum**
- Show a warning if limit is reached

---

## Reflection Questions

Answer the following:

1. What is the difference between GET and POST?
2. Why do we use `@csrf` in forms?
3. What is session used for in this activity?
4. What happens if session is cleared?
---
## Submission Instructions
1. For the reflection answers, put your answers in a .md file.
2. In the root directory, create a new file and name it Surname_Answers.md
3. You may install readme-preview vscode extension so you may see the preview of the markdown file.
4. Have fun this Holy Work.
---

## Notes for Students

- Feel free to modify the code and experiment  
- Breaking things is part of learning—don’t be afraid to try  
- If something stops working, you can always re-clone the project  
- Make sure your database is properly configured in `.env`  

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. It simplifies common tasks like routing, authentication, and database management.

Documentation: https://laravel.com/docs

---

## License

This project follows the MIT license.