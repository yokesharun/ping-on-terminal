# Ping On Terminal For laravel 5.*
Run all terminal commands from your controller using this package

<p align="left">
<a href="https://packagist.org/packages/yokesharun/ping-on-terminal"><img src="https://poser.pugx.org/yokesharun/ping-on-terminal/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yokesharun/ping-on-terminal"><img src="https://poser.pugx.org/yokesharun/ping-on-terminal/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yokesharun/ping-on-terminal"><img src="https://poser.pugx.org/yokesharun/ping-on-terminal/license.svg" alt="License"></a>
</p>

Installation
============================

Add `yokesharun/ping-on-terminal` as a requirement to `composer.json`:

> Or

```
composer require "yokesharun/ping-on-terminal":"dev-master"
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
