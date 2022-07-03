<?php

function connection($db_host, $db_user, $db_pass, $db_name)
{
    $ifConnection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$ifConnection) {
        die("
        <!DOCTYPE html>
        <html>
        <head>
        <title>Error!!</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .mysqlError, .mysqlError a{
                background-color: rgb(163, 65, 82);
                border: none;
                color: rgb(226, 207, 207);
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                -webkit-transition-duration: 0.4s; /*Safari*/
                transition-duration: 0.4s;
            }

            .mysqlError a{
                text-decoration: none;
                background-color: rgb(155, 75, 92);
            }

            .mysqlError:hover, .mysqlError a:hover{
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }
        </style>
        </head>

        <body>
        <div class='mysqlError>No me pude conectar" . mysqli_connect_error() . "<br>
        <a href='./index.php'>Hogar</a>
        </div>
        </body>
        </html>
        ");
    } else {
        return $ifConnection;
    }
}

function createConnection($db_host, $db_user, $db_pass)
{
    $ifConnection = new mysqli($db_host, $db_user, $db_pass);

    if ($ifConnection->connect_error) {
        die('No me pude conectar' . $ifConnection->connect_error);
    } else {
        return $ifConnection;
    }
}

function createDB(string $dbname, $connection)
{
    $sql = "CREATE DATABASE $dbname";

    if ($connection->query($sql) === TRUE) {
        return 'la base de datos se ha creado correctamente';
    } else {
        return 'ocurrio un error' . $connection->error;
    }
    $connection->close();
}

function deleteDB(string $dbname, $connection)
{
    $sql = "DROP DATABASE $dbname";

    if ($connection->query($sql) === TRUE) {
        return 'la base de datos se ha eliminado correctamente';
    } else {
        return 'ocurrio un error' . $connection->error;
    }
    $connection->close();
}

function insertDB($connection)
{
    $text = file_get_contents('https://loripsum.net/api/3/short', true);
    $query = "INSERT INTO posts(contenido) VALUES('" . $text . "')";
    mysqli_query($connection, $query);
    if ($connection->query($query) === TRUE) {
        return 'se ha agregado correctamente el registro';
    } else {
        return 'hubo un error' . $connection->error;
    }
}

function selectPost($connection)
{
    $data = [];
    $rows = [];

    $query = "SELECT * FROM posts ORDER BY id DESC";
    $result = mysqli_query($connection, $query);

    if (empty($result)) {
        die('
            <!DOCTYPE html>
            <html>
            <head>
            <title>Error!!</title>
            <style>
                body{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .mysqlError, .mysqlError a{
                    background-color: rgb(163, 65, 82);
                    border: none;
                    color: rgb(226, 207, 207);
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    -webkit-transition-duration: 0.4s
                    transition-duration: 0.4s
                }

                .mysqlError a{
                    text-decoration: none;
                    background-color: rgb(155, 75, 92);
                }

                .mysqlError:hover, .mysqlError a:hover{
                    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                }
            </style>
            </head>

            <body>
            <div class="mysqlError">Verifique que la tabla <br> a la que quiera conectar exista <br>
            <a href="./index.php>Hogar</a></div>
            </body>
            </html>
        ');
    }

    while ($row = $result->fetch_array()) {
        array_push($rows, [
            'id' => $row['id'],
            'contenido' => $row['contenido'],
            'fecha' => $row['fecha']
        ]);
    }

    $data['contenido'] = $rows;

    $box = [];

    foreach ($data['contenido'] as $post) {
        array_push(
            $box,
            //todo tag function
            tag('div', ['class' => 'box'], [
                tag('h3', ['class' => 'id'], $post['id']),
                tag('div', ['class' => 'box-content', $post['contenido']]),
                tag('h4', ['class' => 'fecha'], $post['fecha'])
            ])
        );
    }

    return $box;
}

function createTablePost($connection)
{
    $sql = "CREATE TABLE posts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        contenido VARCHAR(1000) NOT NULL,
        fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    if ($connection->query($sql) === TRUE) {
        return "Se ha creado la tabla posts exitosamente";
    } else {
        return 'error' . $connection->error;
    }

    $connection->close();
}

function dataFlowController(
    string $connectTo,
    bool $insert = false,
    bool $createTablePosts = false,
    bool $selectPosts = false,
    $dbname = ''
) {

    if ($connectTo === 'crear') {
        $conn = createConnection(DB_HOST, DB_USER, DB_PASS); //Todo Definir constantes

        if (!empty($dbname)) {
            return createDB($dbname, $conn);
        }
    } elseif ($connectTo === 'consumir') {
        if ($insert) {
            $connection = connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            return insertDB($connection);
        } else {
            if ($createTablePosts) {
                $connection = connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                return createTablePost($connection);
            } else {
                if ($selectPosts) {
                    $connection = connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    return selectPost($connection);
                } else {
                    $conn = createConnection(DB_HOST, DB_USER, DB_PASS);
                    if (!empty($dbname)) {
                        return deleteDB($dbname, $conn);
                    }
                }
            }
        }
    }
}
