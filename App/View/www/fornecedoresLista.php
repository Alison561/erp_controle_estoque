<div class="container">
    <h2 class="text-center my-3">Lista de fornecedores cadastros</h2>
    
    <div class="flex">
        <?php foreach ($this->selectAllFornecedor(true) as $key => $value) { ?>
            <div class="card m-2" style="max-width: 300px;">
                <img style="height: 250px;" src="<?php echo url; ?>/Public/Uploads/<?php echo $value['img']; ?>" class="card-img-top" alt="<?php echo $value['img']; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['nome']; ?></h4>
                    <br>
                    <p class="card-text"><strong><i class="fa fa-envelope" aria-hidden="true"></i> Email:</strong> <?php echo $value['email']; ?></p>
                    <p class="card-text"><strong><i class="fa fa-address-card-o" aria-hidden="true"></i> CNPJ:</strong> <?php echo $value['cnpj']; ?></p>
                    <p class="card-text"><strong><i class="fa fa-phone" aria-hidden="true"></i> Telefone:</strong> <?php echo $value['telefone']; ?></p>
                    <p class="card-text"><strong><i class="fa fa-hashtag" aria-hidden="true"></i> Categoria do fornecedor:</strong> <?php echo $value['categoria']; ?></p>
                    <a href="<?php echo url; ?>fornecedor/editar/<?php echo $value['id']; ?>" class="btn btn-warning"><strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</strong></a>
                    <?php if ($value['ativo'] == 'sim') { ?>
                        <a href="<?php echo url; ?>fornecedor/atividade/<?php echo $value['id']; ?>" class="btn btn-danger"><strong><i class="fa fa-power-off" aria-hidden="true"></i> Deligar</strong></a>
                    <?php }else{ ?>
                        <a href="<?php echo url; ?>fornecedor/atividade/<?php echo $value['id']; ?>" class="btn btn-primary"><strong><i class="fa fa-check" aria-hidden="true"></i> Ativar</strong></a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>