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

