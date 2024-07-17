<?php

require __DIR__ . '/vendor/autoload.php';

use MongoDB\Client;

try {
    $client = new Client('mongodb://admin:pass@mongodb:27017/?ssl=false&authMechanism=SCRAM-SHA-256');
    $database = $client->test;
    //Testa o banco de dados
    $database->command(['ping' => 1]);

    $collection = $database->user;
    //Limpa a collection "user" no banco de dados
    $collection->drop();

    //Insere um novo documento na collection "user"
    $insertOneResult = $collection->insertOne([
        'username' => 'admin',
        'email' => 'admin@example.com',
        'name' => 'Admin User',
    ]);

    //Conta quantos documentos foram inseridos
    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

    //Pega o ID do documento inserido
    var_dump($insertOneResult->getInsertedId());

    $cursor = $collection->find([
        'username' => 'admin',
    ]);

    foreach ($cursor as $document) {
        echo $document['name'], "\n";
    }


    //Atualiza o nome do usuário "admin" para "editor"
    $updateResult = $collection->updateOne(
        ['username' => 'admin'],
        ['$set' => ['name' => 'editor']]
    );

    printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
    printf("Modified %d document(s)\n", $updateResult->getModifiedCount());

    $cursor = $collection->find([
        'email' => 'admin@example.com'
    ]);

    foreach ($cursor as $document) {
        echo $document['name'], "\n";
    }


    //deleta o usuário "editor"
    $deleteResult = $collection->deleteOne(['name' => 'editor']);
    printf("Deleted %d document(s) %s \n", $deleteResult->getDeletedCount(), 'teste');

    $cursor = $collection->find([]);

    foreach ($cursor as $document) {
        echo $document['name'], "\n";
    }

} catch (\Exception $e) {
    echo "Erro: " . $e->getMessage();
}
