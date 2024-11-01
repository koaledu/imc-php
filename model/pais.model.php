<?php

class Pais
{
    private $id;
    private $pdo;
    private $pais;
    private $continente;
    private $idioma;

    public function __construct()
    {
        $this->pdo = BaseDatos::Conectar();
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_pais()
    {
        return $this->pais;
    }

    public function set_pais($pais)
    {
        $this->pais = $pais;
    }

    public function get_idioma()
    {
        return $this->idioma;
    }

    public function set_idioma($idioma)
    {
        $this->idioma = $idioma;
    }

    public function listar()
    {
        try {
            $consulta = $this->pdo->prepare('select * from pais;');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar_dos()
    {
        try {
            $sql = 'select * from pais';
            $sentencia = $this->pdo->prepare($sql);
            $sentencia->execute();
            $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
