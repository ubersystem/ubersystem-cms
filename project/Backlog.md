### Instalação laravel

Instalação laravel
```
composer create-project --prefer-dist laravel/laravel src
```

Arquivos docker

A instalação já está configurada para rodar no docker em um servidor apache e mysql. 

```
$ ./start.sh
```
### Alguns comandos docker

Listar Containers

```
$ docker ps
```

Entrando no container do servidor web
```
docker exec -it http_webserver bash
```
para sair use exit

Instalando dependencias do laravel
```
docker exec -it http_webserver composer install
```
php artisan key:generate


Configurar 

timezone and locale

.env

Configurando Virtual Host

Acesse no Linux: 
Abra o arquivo:
```
/etc/hosts
```

No Windows 10:
```
c:/windows/drivers/etc/hosts
```

Adicione a seguinte linha
```
172.19.0.10 ubersystemcms.test
```

172.19.0.10 é o IP do servidor web no docker: http_webserver

ubersystemcms.test é o dominio que será acessado no navegar para entrar na página.

Geração da chave de criptografia
```
docker exec -it http_webserver php artisan key:generate
```

Criar arquivo do banco de dados no workbanck e colocar na pasta


```
docker exec -it http_webserver composer require laravel/ui
```
docker exec -it http_webserver php artisan ui bootstrap

docker exec -it http_webserver php artisan ui bootstrap --auth


Roda aas migrations no banco
docker exec -it http_webserver php artisan migrate

Próximas Atividades

Instalar JWT
execute na pasta src:
npm install


Instalar Bootstrap e views 

Criar arquivos de login


https://adminlte.io/themes/v3/index3.html

Instalar AdminLTE V3


jwt

Commit 3

docker exec -it http_webserver composer require tymon/jwt-auth ^1.0.0
docker exec -it http_webserver php artisan jwt:secret
docker exec -it http_webserver php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"




docker exec -it http_webserver composer require webpatser/laravel-uuid

docker exec -it http_webserver composer require nwidart/laravel-modules
docker exec -it http_webserver php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"

05/07/2020

Instalação de biblioteca de themas

docker exec -it http_webserver composer require shipu/themevel

[shipu/themevel](https://github.com/Shipu/themevel)


Modules

baixar para a pasta, o arquivo deve estar no formato zip 

storage/app/downloads/modules

mod_blog_v1.0.0.zip
mod_site_v1.0.0.zip

descompacta para a pasta src/Modules com o mesmo nome:

src/Modules/mod_blog_v1.0.0
src/Modules/mod_site_v1.0.0


php artisan storage:link
ln -s /path/to/laravel/storage/app/public /path/to/laravel/public/storage

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

















