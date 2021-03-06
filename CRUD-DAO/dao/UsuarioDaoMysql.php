<?php 

require_once './models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDao{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }
     

    public function add(Usuario $u){

        $sql = $this->pdo->prepare("INSERT INTO CADASTRO (NOME, EMAIL) VALUES (? , ?)");
        $sql->bindValue(1,$u->getNome());
        $sql->bindValue(2,$u->getEmail());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());
        return $u;
    }

    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM cadastro");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);

                $array[] = $u;
            }
        }

        return $array;

    }

    public function findByEmail($email){
        $sql = $this->pdo->prepare("SELECT * FROM CADASTRO WHERE EMAIL = ?");
        $sql->bindValue(1,$email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);

            return $u;
        }else{
            return false;
        }


    }

    public function findById($id){

        $sql = $this->pdo->prepare("SELECT * FROM CADASTRO WHERE ID = ?");
        $sql->bindValue(1,$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);

            return $u;
        }else{
            return false;
        }

    }

    public function update(Usuario $u){

        $sql = $this->pdo->prepare("UPDATE CADASTRO SET NOME = ?, EMAIL = ? WHERE ID = ?");
        $sql->bindValue(1,$u->getNome());
        $sql->bindValue(2,$u->getEmail());
        $sql->bindValue(3,$u->getId());
        $sql->execute();

        return true;

    }

    public function delete($id){

        $sql = $this->pdo->prepare("DELETE FROM CADASTRO WHERE ID = ?");
        $sql->bindValue(1, $id);
        $sql->execute();

    }
    
}