# PHP Form with Database Integration

This project demonstrates a user form system with database integration using PHP and MySQL. Here's a detailed explanation of how the code works and flows between pages.

## File Structure

```
php-form/
├── connect.php    # Database connection and setup
├── index.php      # Main form page with display
└── process.php    # Form processing and data insertion
```

## Code Flow and Functionality

### 1. Database Connection (connect.php)

```php
// Database connection configuration
$servername = "localhost"
$username = "root"
$password = ""
$dbname = "user_form_db"
```

**Purpose:**
- Establishes connection to MySQL database
- Creates database if it doesn't exist
- Creates users table with required fields
- Makes connection available globally

**Flow:**
1. Starts a PHP session
2. Attempts to connect to MySQL server
3. Creates database if not exists
4. Creates users table if not exists
5. Stores connection in `$GLOBALS['conn']`
6. Sets session variables for connection status

### 2. Main Form Page (index.php)

**Purpose:**
- Displays the user input form
- Shows success/error messages
- Displays table of submitted entries

**Flow:**
1. Starts session
2. Includes database connection
3. Displays any stored session messages
4. Renders the HTML form
5. Queries and displays recent submissions
6. Form submits to process.php

**Key Components:**
- HTML form with various input fields
- Success/Error message display
- Data table showing recent submissions
- Tailwind CSS for styling

### 3. Form Processing (process.php)

**Purpose:**
- Validates form submissions
- Sanitizes user input
- Stores data in database
- Handles success/error messages

**Flow:**
1. Starts session
2. Validates POST request
3. Sanitizes input data
4. Validates required fields
5. If valid:
   - Connects to database
   - Prepares SQL statement
   - Inserts data
   - Sets success message
6. If invalid:
   - Sets error message
7. Redirects back to index.php

## Complete Process Flow

1. **Initial Load:**
   - User visits index.php
   - connect.php establishes database connection
   - Form is displayed
   - Recent entries are shown

2. **Form Submission:**
   - User fills out form
   - Clicks submit button
   - Form data sent to process.php

3. **Data Processing:**
   - process.php validates input
   - Connects to database
   - Inserts valid data
   - Sets session message
   - Redirects to index.php

4. **Result Display:**
   - index.php shows success/error message
   - Updated table shows new entry
   - Form is ready for next submission

## Database Structure

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    address TEXT NOT NULL,
    emp_type ENUM('regular', 'remote', 'hybrid') NOT NULL,
    terms BOOLEAN NOT NULL DEFAULT true,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
```

## Security Features

- Input sanitization
- Prepared statements to prevent SQL injection
- HTML escaping to prevent XSS
- Session-based messages
- Required field validation

## Usage

1. Ensure XAMPP is running (Apache & MySQL)
2. Place files in htdocs directory
3. Access via `http://localhost/php-form/index.php`
4. Database and table are created automatically
5. Start submitting form data

## Error Handling

- Database connection errors
- Form validation errors
- Data insertion errors
- All errors are displayed to user
- Errors are logged in session

This documentation explains the complete flow of the application and how the different components work together to create a functional form system with database integration.
