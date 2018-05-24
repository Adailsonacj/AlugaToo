<?php include("navbar.php");
include "database/Conexao.php";
include "daos/DaoProdutos.php";
require_once('registro.php');

$conexao = new Conexao();
$con = $conexao::conecta();
$produtos = getProdutoPessoa($_SESSION['idPessoaFisica'], $con);

if (isset($_POST["btnDelete"])):
    $idProduto = filter_input(INPUT_POST, "id_produto", FILTER_SANITIZE_MAGIC_QUOTES);
    deleteProduto($idProduto, $con);
    ?>
    <p class="alert-success"> Produto Apagado com Sucesso!!</p>
<?php header("location: listaMeusProdutos.php");
endif;

?>
    <div class="container">
        <table class="table table-striped talbe-bordered">
            <?php foreach ($produtos as $produto) {
                ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['valor'] ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">

                            <button name="btnDelete" class="btn btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

<?php include("rodape.php") ?>