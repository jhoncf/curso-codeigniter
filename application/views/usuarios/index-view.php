<div class="row">
    <h3>Usuários</h3>
    <hr>
    <a href="<?php echo site_url("usuarios/create") ?>" class="btn btn-primary">Adicionar</a>
</div>

<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row): ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->login ?></td>
                    <td><?php echo $row->senha ?></td>
                    <td><a href="<?php echo site_url("usuarios/edit/" . $row->id) ?>" class="btn btn-info btn-xs">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>