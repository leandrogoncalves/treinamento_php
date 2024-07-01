<?php

require __DIR__ . '/vendor/autoload.php';

try {
  $client = new MongoDB\Client('mongodb://admin:pass@localhost:27019');
  $database = $client->test;
  //Testa o banco de dados
  $database->command(['ping' => 1]);

  //Cria uma collection "user" no banco de dados "test"
  $collection = $client->test->user;
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

  //Busca o usuário "admin" na collection "user"
  $cursor = $collection->find(['username' => 'admin', 'email' => 'admin@example.com']);

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

  $cursor = $collection->find(['name' => 'editor', 'email' => 'admin@example.com']);

  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }

  //deleta o usuário "editor"
  $deleteResult = $collection->deleteOne(['name' => 'editor']);
  printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

  $cursor = $collection->find([]);

  foreach ($cursor as $document) {
      echo $document['name'], "\n";
  }

} catch (\Exception $e) {
  echo "Erro: " . $e->getMessage();
}
