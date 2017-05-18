# Mysqli Objectives


## Database connection
```php
$host = "localhost";
$root = "root";
$password = "root";
$database = "database_name";
$connection = mysqli_connect($host, $root, $password, $database);
```


## Fetching data
1) Connect to database
2) Create a query and fetching the data
3) Present the data

### * Fetch single row
```php
$query = "SELECT * FROM table WHERE id=1";
$result = mysqli_query($connection, $query);
$movies = array();
$row = mysqli_fetch_assoc($result)
```
### * Fetch multiple rows
```php
$query = "SELECT * FROM table WHERE id=1";
$result = mysqli_query($connection, $query);
$movies = array();
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
```


## Writing data
1) Connect to database
2) Create a query 
3) Insert data into MySQL database 

