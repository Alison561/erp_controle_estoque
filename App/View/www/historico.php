<div class="container">
    <h1 class="text-center my-4">Historico de entrada e saída</h1>
    <div class="flex">
        <?php foreach ($this->add->selectJoin() as $value) {?>
            <div class="card m-2" style="max-width: 300px;">
                    <img style="height: 250px;" src="<?php echo url; ?>/Public/Uploads/<?php echo $value['img']; ?>" class="card-img-top" alt="<?php echo $value['img']; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $value['nome']; ?></h4>
                        <br>
                        <p class="card-text"><strong><i class="fa fa-calendar" aria-hidden="true"></i> Data que foi adicionada:</strong> <?php echo $value['data']; ?></p>
                        <p class="card-text"><strong><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Quantidade que foi adicionada:</strong> <?php echo $value['qntd']; ?></p>
                    </div>
                </div>
        <?php } ?>
        <?php foreach ($this->retirada->selectJoin() as $value) {?>
            <div class="card m-2" style="max-width: 300px;">
                    <img style="height: 250px;" src="<?php echo url; ?>/Public/Uploads/<?php echo $value['img']; ?>" class="card-img-top" alt="<?php echo $value['img']; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $value['nome']; ?></h4>
                        <br>
                        <p class="card-text"><strong><i class="fa fa-calendar" aria-hidden="true"></i> Data de retirada:</strong> <?php echo $value['data']; ?></p>
                        <p class="card-text"><strong><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Quantidade que foi retirada:</strong> <?php echo $value['qntd']; ?></p>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>