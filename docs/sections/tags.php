<div class="page-header mb-3">
    <h2>Tags</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'tags/create' ) ?>
    <?= description( 'Cadastra uma nova tag' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "texto"        => "torções"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "texto"        => "torções"
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'tags/edit/${id}' ) ?>
    <?= description( 'Edita os dados de uma tag' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "texto"        => "torções"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "texto"        => "torções"
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'tags/delete/${id}' ) ?>
    <?= description( 'Remove uma tag do sistema' ) ?>
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
                "data"   => "Tag excluida com sucesso"
            ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'tags/get/${id}' ) ?>
    <?= description( 'Obtem uma tag pelo ID' ) ?>
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
                    "texto"        => "torções"
                    ] 
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'tags/get_all' ) ?>
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
                    "texto"        => "torções"
                ], 
                [
                    "id"          => "27",
                    "texto"        => "estabilidade"
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_all -->
