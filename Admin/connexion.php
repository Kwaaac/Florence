<?PHP
/* Connexion au serveur et à la base de données */
$host="sqletud.u-pem.fr";
$user="erober03"; /* Votre login */
$pwd="nvoiruyW88"; /* Votre mot de passe */
$db="erober03_db"; /* Le nom de votre base : de la forme ici : xxx_db avec xxx votre login */
// Connexion avec avec PDO
try{
$con='mysql:host='.$host.';dbname='.$db;
$dbh = new PDO($con,$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
die('Connexion impossible à la base de données !'.$e->getMessage());
}
?>
