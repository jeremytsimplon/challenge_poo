<?php



class bdd {

    private $_server = 'localhost';
    private $_dbName = 'challenge_poo';
    private $_dbUser = 'adminsql';
    private $_dbMdp = 'mdpsql';
    private $_tablePosts;
    public $pdo;

    // instanciation PDO
    public function bdd() {
        // connexion à la BDD
        $this->pdo = new PDO("mysql:host=$this->_server;dbname=$this->_dbName", $this->_dbUser, $this->_dbMdp);
        $this->pdo->exec("SET CHARACTER SET utf8");
        $this->_tablePosts = 'blog';
        
    }

    // Méthode d'insertion des articles dans la BDD
    public function insertPost($postObject) {
        $sqlinsert = "INSERT INTO $this->_tablePosts VALUES ('','" . $postObject->getTitlePost() . "','" . $postObject->getContentPost() . "')";
        // Envoi de la requête vers la BDD
        $req = $this->pdo->prepare($sqlinsert);
        //$req->execute();

        return $this->pdo->lastInsertId();
    }

    // Méthode de retour de l'id d'un post
    public function getPostById($idPost) {
        $sqlUser = "SELECT * FROM $this->_tablePosts WHERE idPost=$idPost";
        $req = $this->pdo->prepare($sqlUser);
        $req->execute();
        $postBdd = $req->fetch(PDO::FETCH_OBJ);
        $post = new post();
        $post->setTitlePost($postBdd->titlePost);
        $post->setContentPost($postBdd->contentPost);
        return $post;
    }

    // Méthode de modification des articles dans la BDD
    public function modifPost($titlePost, $contentPost) {
        
    }

    // Méthode de suppression des articles dans la BDD
    public function deletePost($idPost) {
        
    }

}
