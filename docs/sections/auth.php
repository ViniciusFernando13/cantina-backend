<div class="page-header mb-3">
    <h2>Autenticação</h2>
</div>
<?= print_get() ?>

    <?= get_url( 'auth/login' ) ?>
    <?= description( 'Faz o login e obtém o token da aplicação para as requests subsequentes' ) ?>
    <?= groups( [ 'Todos' ] ) ?>
    <?= headers( [ 'Application-Type' => 'application/json' ] ) ?>

    <div class="row">
        <?= request([
            'name' => 'Cliente teste'
        ]) ?>
        <?= response([

        ]) ?>
    </div>

<?= end_section() ?>