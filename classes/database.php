<?php
class Database{

    private $db_server = 'cursophp_db_1';
    private $db_user = 'root';
    private $db_password = 'phprs';
    private $db_database = 'tarefas';

    //Realiza a conecção com o banco de dados
    public function conectar(){
        $conn = new mysqli($this->db_server,$this->db_user,$this->db_password,$this->db_database);
        if($conn->connect_error){
            die("Erro ao tentar conectar no banco de dados: ". $conn->connect_error);
        }
        return $conn;
    }
    public function desconectar($conexao){
        return mysqli_close($conexao);
    }
}