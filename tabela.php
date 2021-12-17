<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Cursos gratuítos de desenvolvimento Android</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/landing-page.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/js/jquery.mask.min.js" type="text/javascript"/>
    </script>
    <script src="src/js/jquery.validate.min.js"></script>
    <?php

    include_once('Controller/Produtocontroller.php');
    $prod = new Produtocontroller();
    @$dados = $prod->filtrarCategorias($_POST['id']);

    ?>

</head>

<main class="terms-wrapper">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">produto</th>
            <th scope="col">cotegoria</th>
            <th scope="col">Preço</th>

        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($dados as $key => $value) {

            echo '<tr>';
            echo "<th scope='row'>" . $dados[$key]['idprod'] . "</th>";
            echo "<td>" . $dados[$key]['nome'] . "</td>";
            echo "<td>" . $dados[$key]['nomecat'] . "</td>";
            echo "<td>" . $dados[$key]['preco'] . "</td>";
            echo "<td> <input onclick='getupdate(this.id, 0)' data-toggle='modal' id='" . $dados[$key]['idprod'] . "'  data-target='#updateModal' class=' ' type='button'  value='Editar'>  </td>";
            echo "<td>  <a  id='delete' href='request.php?query=delete&id=" . $dados[$key]['idprod'] . "'>deletar</a> </td>";


            echo '</tr>';
        }
        ?>


        <div class="text-center ct-u-paddingTop30">

             <input onclick="getcadastro()" data-toggle="modal" data-target="#exampleModal" class="btn btn-large btn-motive submit " type="button"  value="Novo Produto">

            <!-- Button trigger modal -->



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registro de Produtos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="modal" class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de Produtos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="update" class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </tbody>
    </table>
</main>