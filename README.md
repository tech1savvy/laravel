# Setup
## DevContainer
### Image
- devcontainer/PHP
### Features
- composer

### Post Container Setup
- install laraval through `composer` [+](https://laravel.com/docs/10.x/installation#:~:text=composer%20global%20require%20laravel/installer)
```sh
composer create-project "laravel/laravel:^10.0" example-app
```

# Setup Issues & Fixes
- xDebug Server not able to connect to vscode debugger.
```sh
Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9000 (through xdebug.client_host/xdebug.client_port).
```