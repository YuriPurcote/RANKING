<?
$conexao = pg_connect("host='localhost' port='5432' dbname='Pessoas' user='postgres' password='acesse'");
if (!$conexao) {
  die("Não foi possível se conectar ao banco de dados!");
}
