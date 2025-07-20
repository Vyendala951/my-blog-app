# GitHub Repository

https://github.com/Vyendala951/my-blog-app

---

## Laravel 12 Blog CRUD Application

### Overview

This project is a simple Blog CRUD app using Laravel 12 and MySQL. It allows users to create, view, update, and delete blog posts with fields: `title`, `content`, and `is_active`.

---

### Approach

-   **Setup**: Laravel 12 was installed and configured to use MySQL via `.env`.
-   **Routing**: Defined in `web.php` for create, read, update, delete.
-   **Model & Migration**: `Post` model created with migration for all required fields.
-   **Seeder & Factory**: Used Faker to seed 10 posts using a custom factory and seeder.
-   **Controller**: All logic handled in `PostController` using a unified save method.
-   **Views**: Blade templates created for listing and form pages, extending a master layout.
-   **Git**: Used proper git commits showing clear development progress.

---

### Challenges Faced

-   Missing `HasFactory` trait caused factory call errors.
-   `is_active` column was initially missing in the migration.

---

### Conclusion

All CRUD features work as expected. Project meets assessment criteria and follows Laravel best practices.
