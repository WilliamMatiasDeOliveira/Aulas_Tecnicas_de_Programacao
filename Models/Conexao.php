<?php

abstract class Conexao
{

    public function __construct(protected $pdo = null)
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=meupetsumiu", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}
