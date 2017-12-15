# Este Projeto foi contruido utilizando o CAKE PHP e algumas Libs

## Installation - Instalação

Para instalar é necessário:

### Composer -> donwload e instalção https://getcomposer.org/download/
### MariaDB -> download e instalação https://downloads.mariadb.org/
### Git -> download e instalação https://git-scm.com/

Após instalados os softwares necessários, deve-se clonar este repositório.
É necessário criar uma base de dados no Maria DB.
Agora abra o terminal na pasta do projeto e execute o seguinte comando:
#### composer install
Após terminar de instalar as dependências vá até a pasta config, abrar o arquivo 
app.php, localize a configuração do DataSource que deve estar da seguinte maneira:
 'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            /**
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'my_user',
            'password' => 'my_password',
            'database' => 'my_app',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,

            /**
             * Set identifier quoting to true if you are using reserved words or
             * special characters in your table or column names. Enabling this
             * setting will result in queries built using the Query Builder having
             * identifiers quoted when creating SQL. It should be noted that this
             * decreases performance because each query needs to be traversed and
             * manipulated before being executed.
             */
            'quoteIdentifiers' => false,

            /**
             * During development, if using MySQL < 5.6, uncommenting the
             * following line could boost the speed at which schema metadata is
             * fetched from the database. It can also be set directly with the
             * mysql configuration directive 'innodb_stats_on_metadata = 0'
             * which is the recommended value in production environments
             */
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],

            'url' => env('DATABASE_URL', null),
        ]
Substitua o 'my_user' pelo seu usário do banco de dados.
o 'my_password' pela senha do teu banco.
e o 'my_app' pelo nome da base de dados criada.

Feito isso agora basta entar no diretorio bin do projeto via terminal
e executar o seguinte comando:

### cake migrations migrate
ou 
### ./cake migrations migrate

Pronto nossas tabelas foram criadas e a aplicação está pronta para uso.

# Libs utilizadas.

### Bootstrap / AdminLTE


