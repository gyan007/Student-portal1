Here’s a more polished, reader-friendly setup guide and schema definition for **Student-Portal1**:

---

## Student-Portal1

**Tech stack:** HTML • CSS • JavaScript • PHP
**Server:** XAMPP (Apache + MySQL)

### Prerequisites

1. **XAMPP** installed and running (Apache & MySQL modules enabled).
2. Access to **phpMyAdmin** (typically at `http://localhost/phpmyadmin`).

---

### 1. Create the Database

1. Open phpMyAdmin.
2. Click **New**, enter **users** as the database name, and click **Create**.

---

### 2. Define the Tables

Within the `users` database, create the following four tables:

| Table Name   | Columns                                                                                                                                                                                                                            |
| ------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **users**    | • `sno` (INT, PRIMARY KEY, AUTO\_INCREMENT) <br>• `name` (VARCHAR) <br>• `mobile` (VARCHAR) <br>• `address` (TEXT) <br>• `username` (VARCHAR, UNIQUE) <br>• `password` (VARCHAR) <br>• `dt` (DATETIME, default CURRENT\_TIMESTAMP) |
| **doubt**    | • `sno` (INT, PRIMARY KEY, AUTO\_INCREMENT) <br>• `name` (VARCHAR) <br>• `username` (VARCHAR) <br>• `doubts` (TEXT) <br>• `dt` (DATETIME, default CURRENT\_TIMESTAMP)                                                              |
| **feedback** | • `sno` (INT, PRIMARY KEY, AUTO\_INCREMENT) <br>• `name` (VARCHAR) <br>• `username` (VARCHAR) <br>• `feedback` (TEXT) <br>• `dt` (DATETIME, default CURRENT\_TIMESTAMP)                                                            |
| **fees**     | • `sno` (INT, PRIMARY KEY, AUTO\_INCREMENT) <br>• `student_name` (VARCHAR) <br>• `semester` (VARCHAR) <br>• `prn` (VARCHAR) <br>• `amount` (DECIMAL) <br>• `datePaid` (DATE)                                                       |

---

### 3. (Optional) SQL DDL Example

```sql
-- Create `users` table
CREATE TABLE users (
  sno INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  mobile VARCHAR(20),
  address TEXT,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  dt DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Create `doubt` table
CREATE TABLE doubt (
  sno INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  username VARCHAR(100) NOT NULL,
  doubts TEXT NOT NULL,
  dt DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Create `feedback` table
CREATE TABLE feedback (
  sno INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  username VARCHAR(100) NOT NULL,
  feedback TEXT NOT NULL,
  dt DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Create `fees` table
CREATE TABLE fees (
  sno INT AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(255) NOT NULL,
  semester VARCHAR(50),
  prn VARCHAR(50),
  amount DECIMAL(10,2),
  datePaid DATE
);
```

---

### 4. Running the Project

1. Place your project folder (e.g. `Student-Portal1`) inside XAMPP’s `htdocs` directory.
2. Start **Apache** and **MySQL** via the XAMPP Control Panel.
3. In your browser, navigate to `http://localhost/Student-Portal1/`.

You’re all set! 🚀
