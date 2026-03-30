# VaultX — Secure Image Vault (Laravel)

VaultX is a secure image storage web application built using Laravel.
The application allows users to upload images, encrypt them before storing them in the database, and securely access them later.

Each uploaded image is encrypted using Laravel's Crypt system and linked to the authenticated user, ensuring that only the owner can view or download it.

---

# Features

### Authentication

* User registration
* User login
* User logout
* Protected routes using Laravel authentication middleware

### Secure Image Storage

* Upload image files
* Validate image type and size
* Encrypt image data before saving to database

### Image Management

* View uploaded images
* Search images by file name
* Download decrypted image files
* Delete images

### Security

* Image data stored encrypted
* Users can access only their own images
* CSRF protection enabled

---

# Tech Stack

Backend:

* Laravel 12
* PHP 8+

Database:

* SQLite

Frontend:

* Blade Templates
* Tailwind CSS (Laravel Breeze)

Authentication:

* Laravel Breeze

Encryption:

* Laravel Crypt

---

# Project Structure

```
VaultX
│
├── app
│   ├── Http
│   │   └── Controllers
│   │       └── ImageController.php
│   └── Models
│       └── Image.php
│
├── database
│   └── migrations
│
├── resources
│   └── views
│       └── images
│           ├── index.blade.php
│           └── upload.blade.php
│
├── routes
│   └── web.php
│
└── public
    └── images
```

---

# Database Schema

Table: images

| Column     | Type      | Description          |
| ---------- | --------- | -------------------- |
| id         | integer   | Primary key          |
| user_id    | integer   | Owner of image       |
| name       | string    | Original image name  |
| data       | longtext  | Encrypted image data |
| created_at | timestamp | Upload time          |
| updated_at | timestamp | Update time          |

---

# How It Works

### Upload Flow

1. User selects an image
2. Image is validated
3. Image file is read
4. Image content is encrypted
5. Encrypted data is stored in database

```
Upload Image
     ↓
Validate File
     ↓
Encrypt Image
     ↓
Store in Database
```

---

### Image Display Flow

```
Fetch Image from Database
        ↓
Decrypt Image Data
        ↓
Convert to Base64
        ↓
Display in Browser
```

---

### Image Download Flow

```
User clicks Download
        ↓
Controller decrypts image
        ↓
Image returned as file response
        ↓
Browser downloads image
```

---

# Routes

| Method | Route                 | Description    |
| ------ | --------------------- | -------------- |
| GET    | /images               | View images    |
| GET    | /upload               | Upload page    |
| POST   | /upload               | Store image    |
| DELETE | /images/{id}          | Delete image   |
| GET    | /images/download/{id} | Download image |

All routes are protected by authentication middleware.

---

# Security Implementation

* Image data encrypted using Laravel Crypt
* Each image linked to authenticated user
* Unauthorized access prevented
* CSRF protection enabled
* Server-side validation for uploads

---

# Example Controller Logic

```
Upload Image
     ↓
Validate Request
     ↓
Encrypt Image Data
     ↓
Save to Database
```

---

# Future Improvements

* Image preview modal
* Image tagging system
* Image sharing links
* Drag and drop upload
* Cloud storage integration
* Image thumbnails

---

# Author

Anurag Sharma

Computer Science Engineering Student
Full Stack Developer (Learning Laravel & Backend Systems)

---

# License

This project is for educational purposes.
