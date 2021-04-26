<div class="container">
    <h1 class="text-center my-4">Adicionar material</h1>
    <div class="border border-1" style="padding: 30px;">
        <?php if (isset($_POST['erro'])) {?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_POST['erro']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <form method="post" enctype="multipart/form-data">
            <img style="width: 300px;" src="<?php echo url; ?>/Public/Uploads/<?php echo $this->selectMateriaisId()['img'];?>" class="card-img-top" alt="<?php echo $this->selectMateriaisId()['img'];?>">
            <div class="mb-3">
                <label class="form-label">Quantidade que deseja retirar</label>
                <input name="qntd" type="number" class="form-control" placeholder="0000">
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg" type="button">Adicionar</button>
            </div>
        </form>
    </div>
</div>