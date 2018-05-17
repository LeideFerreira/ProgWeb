<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$mensagem = $_POST['mensagem'];

$usuario = "root";
$senha = "Yunogasai18";

#conexão com mysql via PDO_MYSQL
try{
	$conn = new PDO("mysql:host=localhost;dbname=PHP2",$usuario,$senha);
	$conn->exec('set names utf8');
	print "Conexão efetuada com sucess!";
	
	$stmt = $conn->prepare('INSERT INTO Dados_formularios (nome,email,website,mensagem) VALUES (:nome,:email,:website,:mensagem)');
	$stmt->bindValue(':nome',$nome);
	$stmt->bindValue(':email',$email);
	$stmt->bindValue(':website',$website);
	$stmt->bindValue(':mensagem',$mensagem);
	$stmt->execute();
	

	$stmt = $conn->prepare('SELECT * FROM Dados_formularios');
	$stmt->execute();
	print("<br/>" . "Tabela" . "<br/>");
	while($row = $stmt->fetch(PDO::FETCH_OBJ)){
		print("<br/>". $row->nome . " | " . $row->email . " | " . $row->website . " | " . $row->mensagem ."<br/>");
	}

}catch(PDOException $e){
	echo $e->getMessage();
}

?>