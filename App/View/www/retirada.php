<div class="container">
    <h2 class="text-center my-3">Fazer retirada de material</h2>
    
    <div class="flex">
        <?php foreach ($this->selectMateriaisJoin() as $key => $value) { ?>
            <div class="card m-2" style="max-width: 300px;">
                <img style="height: 250px;" src="<?php echo url; ?>/Public/Uploads/<?php echo $value['img']; ?>" class="card-img-top" alt="<?php echo $value['img']; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['nome']; ?></h4>
                    <br>
                    <p class="card-text"><strong><i class="fa fa-product-hunt" aria-hidden="true"></i> Fornecedor:</strong> <?php echo $value['p_nome']; ?></p>
                    <p class="card-text"><strong><i class="fa fa-pencil" aria-hidden="true"></i> Descrição:</strong> <?php echo substr($value['sobre'], 0, 61).' ...'; ?></p>
                    <p class="card-text"><strong><i class="fa fa-barcode" aria-hidden="true"></i> Codigo do produto:</strong> <?php echo $value['codigo']; ?></p>
                    <p class="card-text"><strong><i class="fa fa-calendar" aria-hidden="true"></i> Data de cadastro:</strong> <?php echo $value['data']; ?></p>
                    <p class="card-text"><strong><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Quantidade em estoque:</strong> <?php echo $value['qnt']; ?></p>
                    <a href="<?php echo url; ?>retirada/<?php echo $value['id']; ?>" class="btn btn-warning"><strong><i class="fa fa-sign-out" aria-hidden="true"></i> Fazer retirada</strong></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>