<?php
class database{
    //attribute
    private $host;
    private $dbname;
    private $user;
    private $pass;
    //generer par le construucture
    protected $bdd;
    private $connected=false;

    //construecteur
    public function __construct(string $newHost, string $newDbname, string $newUser, string $newPass){
        $this->setHost($newHost);
        $this->setDbname($newDbname);
        $this->setUser($newUser);
        $this->setPass($newPass);
        try{
            //connextion a la bDD
            $this->bdd = new PDO('mysql:host='.$this->getHost().";dbname=".$this->getDbname().";charset=utf8",
            $this->getUser(), $this->getPass());
            $this->bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connected = true;
        }catch(PDOException $err){
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    //les geters et les seters pour les info de la connexion a la BDD
    public function setHost(string $newHost){
        $this->host=$newHost;
    }
    public function getHost(): string{
        return $this->host;
    }
    public function setDbname(string $newDbname){
        $this->dbname=$newDbname;
    }
    public function getDbname(): string{
        return $this->dbname;
    }
    public function setUser(string $newUser){
        $this->user = $newUser;
    }
    public function getUser(): string{
        return $this->user;
    }
    public function setPass(string $newPass){
        $this->pass = $newPass;
    }
    public function getPass(): string{
        return $this->pass;
    }
    //user and admin fucntions
    function getMembre(string $sql, array $params = array()){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
            $data = $req->fetchAll();
            return $data;
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    function createMembre(array $params = array()){
        try {
        $sql = 'INSERT INTO members (first_name, last_name, email, password, phone, country, community) VALUES (?,?,?,?,?,?,?)';
        $req = $this->bdd->prepare($sql);
        $req->execute($params);
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    function creatAdmin(array $params = array()){
        try {
            $sql = 'INSERT INTO admins (first_name, last_name, email, password) values(?, ?, ?, ?)';
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
            } catch (PDOException $err) {
                throw new Exception(__CLASS__ . ' : '. $err->getMessage());
            } 
    }
    function deleteMember(string $sql, array $params = array()){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    function updateMember(array $params = array()){
        try {
            $sql = 'UPDATE members SET first_name = ?, last_name = ?, email=?, password = ?, phone = ?, country=? WHERE id = ?';
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    //products fucntions
    function getProduct(string $sql, array $params = array()){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
            $data = $req->fetchAll();
            return $data;
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    function addProduct(string $sql, array $params = array()){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    function deleteProduct(string $sql, array $params = array()){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    function addproductPanier(array $params = array()){
        try {
            $sql = 'INSERT INTO reservation (id_membre, community, id_product, price_product) values(?, ?, ?, ?)';
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
    // panier fucntions
    function getReservation(string $sql, array $params = array()){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
            $data = $req->fetch();
            return $data;
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }


    // Extra fucntions
    function getRows(string $sql, array $params = array() ){
        try {
            $req = $this->bdd->prepare($sql);
            $req->execute($params);
            $row = $req->rowCount();
            return $row;
        } catch (PDOException $err) {
            throw new Exception(__CLASS__ . ' : '. $err->getMessage());
        }
    }
}
/*
// test de get membre
echo '<h2>Test membre </h2>';
$sqlMembre = 'SELECT * FROM members WHERE email=?';
$mydb = new dataBase(HOST, DATA, USER, PASS);
$paramsMembre = array("member@gmail.com");
$data = $mydb->getMembre($sqlMembre, $paramsMembre);
var_dump($data);

echo '<h2>Test admin </h2>';
$sqlAdmin = 'SELECT * FROM admins WHERE email=?';
$paramsAdmin = array("admin@gmail.com");
$data = $mydb->getAdmin($sqlAdmin, $paramsAdmin);
var_dump($data);

echo '<h2>Test Product </h2>';
$sqlProd = 'SELECT * FROM product WHERE id=?';
$paramsProd = array('34');
$data = $mydb->getProduct($sqlProd, $paramsProd);
var_dump($data);

echo '<h2>Test Reservation </h2>';
$sqlReser = 'SELECT reser.id_product, prod.product_type, prod.product_name , prod.price, prod.image FROM members, reservation as reser JOIN product as prod ON reser.id_product = prod.id JOIN members as m on reser.id_membre = ?';
$paramsProd = array('5');
$data = $mydb->getReservation($sqlReser, $paramsProd);
var_dump($data);

echo '<h2>Test Rows </h2>';
$sqlProd = 'SELECT * FROM product';
$paramsProd = array();
$data = $mydb->getRows($sqlProd, $paramsProd);
var_dump($data);
*/