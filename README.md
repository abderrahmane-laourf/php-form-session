# 📬 PHP Form with Sessions

A small, simple PHP project that allows a user to fill out a contact form with their name, email, and message. Once submitted, the name is stored in the session (`$_SESSION`), and a confirmation page displays a personalized welcome message.

## ✨ Features

- 🧾 Contact form styled with Tailwind CSS
- 📥 Data processing via `POST`
- 🔐 Name storage using `$_SESSION`
- 💬 Dynamic display of submitted data

## 📁 Project Structure

mon-projet-php/
├── formulaire.php # HTML Form
├── show_info.php  # Data processing and display
├── index.php      # (optional) redirect or homepage
├── .gitignore
└── README.md

## 🚀 Getting Started Locally

1.  **Clone the project**:
    ```bash
    [git clone https://github.com/your-username/mon-projet-php.git]
    cd php-form-session
    ```
2.  **Place the folder in XAMPP**:
    Copy this folder to:
    ```makefile
    C:\xampp\htdocs\php-form-session\
    ```
3.  **Start Apache in XAMPP**, then open the project:
    ```arduino
    http://localhost/php-form-session/formulaire.php
    ```

## 🔧 Prerequisites

-   PHP ≥ 7.4
-   Local server (XAMPP, WAMP, MAMP, etc.)

## 📄 License

This project is open-source under the MIT License.
You can reuse and modify it freely 🙌

🎓 Ideal project for learning the basics of PHP, sessions, and forms.
