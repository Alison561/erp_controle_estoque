<div class="container">
    <h1 class="text-center my-4">Editar Fornecedor</h1>
    <div class="border border-1" style="padding: 30px;">
        <?php if (isset($_POST['erro'])) {?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_POST['erro']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nome do fornecedor</label>
                <input value="<?php echo $this->selectFornecedorId()['nome']; ?>" name="nome" type="text" class="form-control" placeholder="roupas da sorte">
            </div>
            <div class="mb-3">
                <label class="form-label">CNPJ da fornecedor</label>
                <input value="<?php echo $this->selectFornecedorId()['cnpj']; ?>" name="cnpj" type="text" class="form-control"  placeholder="00.000.000/0000-00">
            </div>
            <div class="mb-3">
                <label class="form-label">Email  do fornecedor</label>
                <input value="<?php echo $this->selectFornecedorId()['email']; ?>" name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone do fornecedor</label>
                <input value="<?php echo $this->selectFornecedorId()['telefone']; ?>" name="tel" type="text" class="form-control" id="exampleFormControlInput1" placeholder="(00) 00000-0000">
            </div>
            <div class="mb-3">
                <label class="form-label">categoria do fornecedor</label>
                <select name="categoria" class="form-select" aria-label="Default select example">
                    <option value="" selected>Selicione uma opção</option>
                    <option <?php if($this->selectFornecedorId()['categoria'] == 'alimento'){ echo 'selected';} ?> value="alimento">Alimento</option>
                    <option <?php if($this->selectFornecedorId()['categoria'] == 'papelaria'){ echo 'selected';} ?> value="papelaria">Papelaria</option>
                    <option <?php if($this->selectFornecedorId()['categoria'] == 'roupa'){ echo 'selected';} ?> value="roupa">Roupa</option>
                    <option <?php if($this->selectFornecedorId()['categoria'] == 'limpeza'){ echo 'selected';} ?> value="limpeza">Limpeza</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Logo do fornecedor</label>
                <input class="form-control" type="file" name="img">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg" type="button">Atualizar</button>
            </div>
        </form>
    </div>
</div>