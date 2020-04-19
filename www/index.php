<?php 
echo('hello word,docker');
    //phpinfo();//tag que funciona como um hello word,mostra se o conteiner esta funcionando ao ser criado 
    /**
     * todos as imagens foram baixadas via docker hub
     * docker file é o arquivo responsavel por puxar as images do docker hub
     * RUN indica as extenções e outras imagens que serao utilizadas
     * docker compose define como voce vai utilizar as imagens que o docker file ira baixar
     * ********************************
     * php: aqui se cria um conteiner php
     *   build: . na pasta atual 
      *      ports: 
       *     -"80":"80" usando a porta 80 da maquina e do contener
        *    -"443":"443"
         *   volumes: 
          *  -"./www:var/www/html" utilizando este volume
          * links:
            *   -db definido que o conteiner ira conversar com o conteiner db
        * apos subir o conteiner,para acessar basta usar o localhost
        *************
        * com botao direito no conteiner,é possivel abrir um shell(prompt de comando , onde é possivel acessalo e manipula-lo,como no myql)

     */
?>