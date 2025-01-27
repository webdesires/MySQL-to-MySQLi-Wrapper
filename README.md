# MySQL-to-MySQLi Wrapper

A lightweight and easy-to-use PHP wrapper for seamlessly transitioning codebases from the deprecated MySQL extension to the modern MySQLi extension. This wrapper helps to maintain backward compatibility while providing access to the benefits of MySQLi.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Methods Supported](#methods-supported)
- [Contributing](#contributing)
- [License](#license)

## Features

- Simple drop-in replacement for legacy `mysql_*` functions.
- Uses modern MySQLi under the hood for improved security and performance.
- Supports common MySQL functions like `mysql_query`, `mysql_fetch_assoc`, and more.
- Helps to transition old projects without major rewrites.

## Installation

1. Clone the repository or download the ZIP file:

   ```bash
   git clone https://github.com/webdesires/MySQL-to-MySQLi-Wrapper.git
   ```

2. Include the wrapper in your project:

   ```php
   require_once 'path/to/mysql_to_mysqli_wrapper.php';
   ```

## Usage

This wrapper mimics the behavior of the old MySQL functions, so you can use it as a drop-in replacement. For example:

### Example Code

```php
require_once 'path/to/mysql_to_mysqli_wrapper.php';

// Connect to the database
$link = mysql_connect('localhost', 'username', 'password');
mysql_select_db('database_name', $link);

// Perform a query
$result = mysql_query('SELECT * FROM users');

// Fetch results
while ($row = mysql_fetch_assoc($result)) {
    echo $row['username'];
}

// Close the connection
mysql_close($link);
```

### Important Notes

- Ensure that your PHP environment has the MySQLi extension enabled.
- While this wrapper simplifies transitions, it’s recommended to eventually refactor your code to use MySQLi or PDO directly for long-term maintainability.

## Methods Supported

This wrapper supports most of the commonly used `mysql_*` functions, such as:

- `mysql_connect`
- `mysql_select_db`
- `mysql_query`
- `mysql_fetch_assoc`
- `mysql_fetch_array`
- `mysql_fetch_row`
- `mysql_num_rows`
- `mysql_affected_rows`
- `mysql_close`

For a complete list, refer to the [source code](https://github.com/webdesires/MySQL-to-MySQLi-Wrapper/blob/main/mysql_to_mysqli_wrapper.php).

## Contributing

Contributions are welcome! If you’d like to contribute to this project, please:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Submit a pull request with a clear description of your changes.

## License

This project is licensed under the GNU General Public License v3.0. See the [LICENSE](LICENSE) file for details.
