# Start-pdox
Query Builder and PDO Class for #PHP


## Install

composer.json file:
```json
{
    "require": {
        "japerman/start-pdox": "^1"
    }
}
```
after run the install command.
```
$ composer install
```

OR run the following command directly.

```
$ composer require japerman/start-pdox
```

## Example Usage
```php
require 'vendor/autoload.php';

$config = require 'db.php';

$db = new \Start\Pdox($config);

$records = $db->table('users')
		->select('id, name, surname, age')
		->where('age', '>', 18)
		->orderBy('id', 'desc')
		->limit(20)
		->getAll();

var_dump($records);
```