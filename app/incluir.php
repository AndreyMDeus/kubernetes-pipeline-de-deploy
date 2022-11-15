<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';

$id =  rand(1, 999);
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

$query = "INSERT INTO clientes(id, nome, email, comentario) VALUES ('$id', '$nome', '$email', '$comentario')";


if ($link->query($query) === TRUE) {
  echo "Novo registro criado com sucesso!";
} else {
  echo "Erro na inclusão do registro: " . $link->error;
}
?>
