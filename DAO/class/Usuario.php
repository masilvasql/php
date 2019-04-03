<?php
    
    class Usuario {
        private $idUsuario;
        private $desLogin;
        private $desSenha;
        private $dtCadastro;

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario($value){
            $this->idUsuario = $value;
        }

        public function getDesLogin(){
            return $this->desLogin;
        }

        public function setDesLogin($value){
            $this->desLogin = $value;
        }

        public function getDesSenha(){
            return $this->desSenha;
        }

        public function setDesSenha($value){
            $this->desSenha = $value;
        }

        public function getDtCadastro(){
            return $this->dtCadastro;
        }

        public function setDtcadastro($value){
     
            $this->dtCadastro = $value;
        }

     


        public function loadById($id){
            $sql = new Sql();
            $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
                ":ID"=>$id
            ));

            if(isset($result[0])){
                $row = $result[0];
                $this->setIdUsuario($row['idusuario']);
                $this->setDesLogin($row['deslogin']);
                $this->setDesSenha($row['dessenha']);
                $this->setDtCadastro(new DateTime($row['dtcadastro']));
            }

        }

        public static function getList(){
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios order by deslogin");
        } 

        public static function search($login){
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios where deslogin LIKE :login order by deslogin",array(':login'=>'%'. $login . '%'));
        }

        public function login($login, $senha){
            $sql = new Sql();
            $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :login AND dessenha = :senha",array(
                ":login"=>$login,
                ":senha"=>$senha
            ));

            if(isset($result[0])){
                $row = $result[0];
                $this->setIdUsuario($row['idusuario']);
                $this->setDesLogin($row['deslogin']);
                $this->setDesSenha($row['dessenha']);
                $this->setDtCadastro(new DateTime($row['dtcadastro']));
            }else{
                throw new Exception("Dados inválidos");
            }
        }



        public function __toString(){
            return json_encode(array(
                "idusuario"=>$this->getIdUsuario(),
                "deslogin"=>$this->getDesLogin(),
                "dessenha"=>$this->getDesSenha(),
                "dtcadastro"=>$this->getDtCadastro()->format('d/m/Y H:i:s')
            ));
        }

    }

?>