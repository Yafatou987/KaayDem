<?php

interface RepositoryInterface
{
    public function findById($id);

    public function findAll();

    public function save($entity);

    public function update($entity);

    public function delete($id);
}
require_once '../config/Database.php';

$pdo = Database::connect();