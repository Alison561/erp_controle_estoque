<div class="container">
    <h1 class="text-center my-4">Editar materias</h1>
    <div class="border border-1" style="padding: 30px;">
        <?php if (isset($_POST['erro'])) {?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_POST['erro']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nome do material</label>
                <input value="<?php echo $this->selectMateriaisId()['nome'];?>" name="nome" type="text" class="form-control" placeholder="Nome do material">
            </div>
            <div class="mb-3">
                <label class="form-label">Codigo do material</label>
                <input value="<?php echo $this->selectMateriaisId()['codigo'];?>" name="codigo" type="text" class="form-control"  placeholder="123456">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantidade do material</label>
                <input value="<?php echo $this->selectMateriaisId()['qnt'];?>" name="qntd" type="number" class="form-control" placeholder="0000">
            </div>
            <div class="mb-3">
                <label class="form-label">Fornecedor do material</label>
                <select name="fornecedor" class="form-select" aria-label="Default select example">
                    <option value="" selected>Selicione uma opção</option>
                    <?php $for = $this->selectAllFornecedor(true); 
                    foreach ($for as $key => $value) {?>
                        <option value="<?php echo $value['id']; ?>" <?php if($this->selectMateriaisId()['id_forne'] == $value['id']){ echo 'selected';}?>><?php echo $value['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Informação sobre o material</label>
                <textarea class="form-control" name="sobre"><?php echo $this->selectMateriaisId()['sobre'];?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Uma foto do material</label>
                <input class="form-control" type="file" name="img">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg" type="button">Atualizar</button>
            </div>
        </form>
    </div>
</div>