## loginsystem

**Technologies Used:** HTML, CSS, JavaScript, PHP
**Requirements:** XAMPP (for Apache and MySQL)

---

### Steps to Set Up the Project

1. Install and launch **XAMPP**.
2. Start both **Apache** and **MySQL** modules from the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.

---

### Database Setup

1. In phpMyAdmin, **create a new database** named:
   **`users`**

2. Inside the `users` database, **create 4 tables** with the following names and columns (case preserved):

---

### Table: `users`

| Column Name | Data Type                             |
| ----------- | ------------------------------------- |
| sno         | INT (PRIMARY KEY, AUTO\_INCREMENT)    |
| name        | VARCHAR                               |
| mobile      | VARCHAR                               |
| address     | TEXT                                  |
| username    | VARCHAR                               |
| password    | VARCHAR                               |
| dt          | DATETIME (default CURRENT\_TIMESTAMP) |

---

### Table: `doubt`

| Column Name | Data Type                             |
| ----------- | ------------------------------------- |
| S.no        | INT (PRIMARY KEY, AUTO\_INCREMENT)    |
| name        | VARCHAR                               |
| username    | VARCHAR                               |
| doubts      | TEXT                                  |
| dt          | DATETIME (default CURRENT\_TIMESTAMP) |

---

### Table: `feedback`

| Column Name | Data Type                             |
| ----------- | ------------------------------------- |
| S.no        | INT (PRIMARY KEY, AUTO\_INCREMENT)    |
| name        | VARCHAR                               |
| username    | VARCHAR                               |
| feedback    | TEXT                                  |
| dt          | DATETIME (default CURRENT\_TIMESTAMP) |

---

### Table: `fees`

| Column Name   | Data Type                          |
| ------------- | ---------------------------------- |
| S.No.         | INT (PRIMARY KEY, AUTO\_INCREMENT) |
| student\_name | VARCHAR                            |
| semester      | VARCHAR                            |
| prn           | VARCHAR                            |
| amount        | DECIMAL(10,2)                      |
| datePaid      | DATE                               |

---

### Deployment Steps

1. Copy the project folder `Student-portal1` into the `htdocs` directory of your XAMPP installation.
2. Ensure that the database `users` and all 4 tables (`users`, `doubt`, `feedback`, `fees`) are created with **exact column names and cases** as shown.
3. Open your browser and run:
   `http://localhost/Student-portal1/`

The project should now be running successfully.
