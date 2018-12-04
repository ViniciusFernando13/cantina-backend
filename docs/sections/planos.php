<div class="page-header mb-3">
    <h2>Planos</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'planos/create' ) ?>
    <?= description( 'Cadastra um novo plano' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "nomePlano"     => "Mensal",
                "preco"         => "50.00",
                "days"          => "30"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "27",
                "nomePlano"     => "Mensal",
                "preco"         => "50.00",
                "days"          => "30"
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'planos/edit/${id}' ) ?>
    <?= description( 'Edita os dados de um plano' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "nomePlano"     => "Mensal",
                "preco"         => "50.00",
                "days"          => "30"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "27",
                "nomePlano"   => "Mensal",
                "preco"       => "50.00",
                "days"        => "30"
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'planos/delete/${id}' ) ?>
    <?= description( 'Remove um plano do sistema' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([
                "status" => 200,
                "data"   => "Plano excluido com sucesso"
            ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'planos/get/${id}' ) ?>
    <?= description( 'Obtem um plano pelo ID' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "status" => 200,
                "data"   => [
                    "id"          => "27",
                    "nomePlano"   => "Mensal",
                    "preco"       => "50.00",
                    "days"        => "30"
                ] 
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'planos/get_all' ) ?>
    <?= description( 'Obtem a lista dos estilos de yoga cadastrados no sistema' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([[
            "status" => 200,
            "data"   => [ 
                [
                    "id"          => "27",
                    "nomePlano"   => "Mensal",
                    "preco"       => "50.00",
                    "days"        => "30"
                ], 
                [
                    "id"          => "28",
                    "nomePlano"   => "Anual",
                    "preco"       => "600.00",
                    "days"        => "365"
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_all -->
