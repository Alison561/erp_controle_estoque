<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/9da921de6c.js"></script>
    <link rel="stylesheet" href="<?php echo url; ?>Public/Css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>
</head>
<body>

    <header>
        <h1> <i class="fa fa-archive" aria-hidden="true"></i> Historico de entrada e saida</h1>
        <nav>
            <ul>
                <li><a href="<?php echo url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="<?php echo url; ?>fornecerdor/cadastro"><i class="fa fa-product-hunt" aria-hidden="true"></i> Cadastro de fornecedor</a></li>
                <li><a href="<?php echo url; ?>material/cadastro"><i class="fa fa-registered" aria-hidden="true"></i> Cadastro de material</a></li>
                <li><a href="<?php echo url; ?>fornecerdores/lista"><i class="fa fa-list-alt" aria-hidden="true"></i> Lista de fornecedores</a></li>
                <li><a href="<?php echo url; ?>materiais/lista"> <i class="fa fa-list-ul" aria-hidden="true"></i> Inventario</a></li>
                <li><a href="<?php echo url; ?>retirada/"> <i class="fa fa-sign-out" aria-hidden="true"></i> Retirada</a></li>
                <li><a href="<?php echo url; ?>adicionar/"> <i class="fa fa-sign-in" aria-hidden="true"></i> Adicionar</a></li>
                <li><a href="<?php echo url; ?>historico/"> <i class="fa fa-history" aria-hidden="true"></i> Historico</a></li>
            </ul>
        </nav>
    </header>

    <?php
        $this->content();
    ?>

</body>
</html>