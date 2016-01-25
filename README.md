# MyPDO
A 'Work in progress' Database wrapper for PHP using MySQL and PDO
<hr>

### Table of Contents
**[Initialization](#initialization)**  
**[Raw Query](#raw-query)**  
**[SQL Select](#sql-select)**  





### Initialization
To use this class, download and include 'MyPDO.php' into your project.

```php
require_once ('MyPDO.php');
```



### Raw Query
To execute a raw string of SQL, pass the complete SQL string to **->query**, call **->execute** (returns true|false)

```php
//$sql = "CREATE TABLE `names` (
//    `id`          int(5)      NOT NULL AUTO_INCREMENT,
//    `firstname`   varchar(50) DEFAULT NULL,
//    `surname`     varchar(50) DEFAULT NULL,
//    PRIMARY KEY (`id`)
//);";

$sql = "INSERT INTO `names` VALUES 
    (NULL, 'Chris',  'Maggs'),
    (NULL, 'Chris2', 'Maggs2'),
    (NULL, 'Chris3', 'Maggs3');";

$db->query($sql);
```

On success, call **->rowCount** to return the number of rows updated (if applicable)

On failure, call **->getError** to display the SQL error message

```php
if($db->execute() ){
    echo $db->rowCount() . ' records inserted';
} else {
    echo $db->getError();
}
```




### Raw Query, returning results
To return the results from **->query** for use, call **->fetchAll()** for multiple rows, or **->fetchOne** for a single row.

```php
$sql = "SELECT * FROM `names`";

$db->query($sql);

$result = $db->fetchAll();
```

On success, **$result** will be an Object Array (fetchAll) or an Object (fetchOne)

On failure, call **->getError** to display the SQL error message

```php
if($results){
    echo $db->rowCount() . ' rows returned';
} else {
    echo $db->getError();
}
```


### Raw Query, using 'bound' parameters
To bind parameters to a query, pass the identifier and value to **->bind()**.  Repeat for each bound parameter in order.

```php
$sql = "SELECT * FROM `names` WHERE firstname = :firstname";

$db->query($sql);

$db->bind(':firstname', 'Chris');
```







