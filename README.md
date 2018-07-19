# fasthour - Manual de Instalação

Pré-requisitos:
- Ter o composer instalado,
  https://getcomposer.org
- É preciso instalar as  dependências do laravel pelo composer seguindo o manual de instalação do Laravel, 
  https://laravel.com/docs/5.6
  
1. Clone o repositório para um repositório local:
    **git clone (endereço-do-repositorio)**
2. Acesse o Repositório:
    **cd fasthour (ou o nome da pasta que você definiu)**

3. Dentro da pasta do seu projeto execute o seguinte comando para instalar as dependências e o framework:
    **composer install --no-scripts**

4. Copie o arquivo .env.example e renomeie como .env:
    **cp .env.example .env**

5. Crie uma nova chave para a aplicação:
    **php artisan key:generate**
    
6. Em seguida você deve configurar o arquivo .env e rodar as migrations.
