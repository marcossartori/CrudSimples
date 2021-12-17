<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="src/js/jquery.mask.min.js" type="text/javascript"/></script>
<script src="src/js/jquery.validate.min.js"></script>

<?php require_once('Controller\Produtocontroller.php');
$prod = new Produtocontroller();


?>
<script type="text/javascript">

    $(document).ready(function (e) {
        // $('#passaValor').change(function(){

        $("#teste").load("tabela.php", {id: ''})

        //});
    });

    function getValor(valor) {

        $("#recebeValor").html("<option value='null' >Carregando...</option>");
        //setTimeout(function () {
            $("#teste").load("tabela.php", {id: valor})
       // }, 1000);
    };

    function getcadastro() {

       // $("#recebe").html("<option value=''>Carregando...</option>");
      //  setTimeout(function () {
            $("#modal").load("cadastro.php")
        //}, 1000);
    };

    function getupdate(valor) {

        // $("#recebe").html("<option value=''>Carregando...</option>");
        //setTimeout(function () {
            //alert(valor)
            $("#update").load("update.php", {id: valor})
       // }, 1000);
    };

</script>
<br>
<br>
<br>
<br>
<br>
<form action="" method="post" enctype="multipart/form-data">
    <label>Selecione o seu valor que vai passar:</label>
    <select style="width: 30%;" name="recebeValor" id="passaValor" class="form-control form-control-lg" onchange="getValor(this.value, 0)">
        <option value=''>Todos ...</option>
        <?php


        $dados = $prod->busca();

        foreach ($dados as $key => $value) {

            echo "<option value='{$dados[$key]['idcateg']}'>{$dados[$key]['categoria']}</option>";

        }
        ?>

    </select>

</form>
<div id="teste">


</div>