# PingOnTerminal For laravel 5.*
Run all terminal commands from your controller using this package

Installation
============================

Add `yokesharun/ping-on-terminal` as a requirement to `composer.json`:

> Or

```
composer require yokesharun/ping-on-terminal
```
 Add the following to the `providers` in `app/config/app.php`: 

```
'providers' => [
...
Yokesharun\PingOnTerminal\TerminalServiceProvider::class,
]
```

Usage
============================

use the namespace in top of the controller

```
use Yokesharun\PingOnTerminal\TerminalController;
```

create a object all the function

```
$ob = new Yokesharun\PingOnTerminal\TerminalController;
$ob->use_default('composer dump-autoload');
```

to run all terminal commands use use_default function

```
$ob->use_default('composer dump-autoload');
```

to run artisan only commands use use_artisan function

```
$ob->use_artisan('serve');
$ob->use_artisan('migrate');
```
