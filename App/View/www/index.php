<div class="container">
    <div class="flex py-4">
        <div style="max-width: 350px;" class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Forcenedores:</h3>
                <h4 class="card-text"><?php echo count($this->fornecedor->selectAll(true));?></h4>
            </div>
        </div>

        <div style="max-width: 350px;" class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Materiais Cadatrados</h3>
                <h4 class="card-text"><?php echo count($this->materiais->selectAll());?></h4>
            </div>
        </div>

        <div style="max-width: 350px;" class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Forcenedores ativos:</h3>
                <h4 class="card-text"><?php echo count($this->fornecedor->selectAll(false));?></h4>
            </div>
        </div>
    </div>
    <h2 class="text-center my-3"> Materiais em falta</h2>
    <div class="flex">
        <?php foreach ($this->materiais->selectAll() as $key => $value) { ?>
            <?php if($value['qnt'] < 20){ ?>
                <div class="card m-2" style="max-width: 300px;">
                    <img style="height: 250px;" src="<?php echo url; ?>/Public/Uploads/<?php echo $value['img']; ?>" class="card-img-top" alt="<?php echo $value['img']; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $value['nome']; ?></h4>
                        <br>
                        <p class="card-text"><strong><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Quantidade em estoque:</strong> <?php echo $value['qnt']; ?></p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>