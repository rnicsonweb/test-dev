# test-dev
Comandos para instalação

git clone https://github.com/rnicsonweb/test-dev.git #Clonando repositório

docker-compose up -d --build #Subindo container docker com Laravel,mysql,phpmyadmin

docker exec -it estadao_web bash #Acessar container

cp .env.example .env #Copiando arquivo .env

php artisan key:generate #Gerando Key para aplicaço laravel

php artisan migrate #Criando tabelas de cadastro

cd public #Acessando pasta public

bower install #instalando dependências AngularJS




Web: http://localhost Porta: 80
PHPMYADMIN: http://localhost Porta:8080


EndPoints

|        | GET|HEAD | api/carros             |                  | App\Http\Controllers\CarrosController@index                            | api        |
|        | POST     | api/carros             |                  | App\Http\Controllers\CarrosController@create                           | api        |
|        | GET|HEAD | api/carros/{car}       |                  | App\Http\Controllers\CarrosController@show                             | api        |
|        | DELETE   | api/carros/{car}       |                  | App\Http\Controllers\CarrosController@destroy                          | api        |
|        | POST     | api/carros/{id}        |                  | App\Http\Controllers\CarrosController@update                           | api        |





Developer By Richard Nicson
