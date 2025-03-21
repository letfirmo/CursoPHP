<?php
    include_once("templates/header.php");
?>    
    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Editar contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label id="pad" for="name">Nome do cantato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
            </div>
            <div class="form-group">
                <label id="pad" for="phone">Telefone do cantato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o número" value="<?= $contact['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label id="pad" for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?= $contact['observations'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php");
?>