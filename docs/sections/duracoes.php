<div class="page-header mb-3">
    <h2>Durações</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'duracoes/create' ) ?>
    <?= description( 'Cadastra uma nova duração' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "minutos"        => 8
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "minutos"     => 8
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'duracoes/edit/${id}' ) ?>
    <?= description( 'Edita os dados de uma duração' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                "texto"        => 8
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "minutos"     => 8
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'duracoes/delete/${id}' ) ?>
    <?= description( 'Remove uma duração do sistema' ) ?>
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
            "data"   => [
                    "status" => 200,
                    "data"   => "Duração excluida com sucesso"
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'duracoes/get/${id}' ) ?>
    <?= description( 'Obtem uma duração pelo ID' ) ?>
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
                    "minutos"     => 8
                ] 
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'duracoes/get_all' ) ?>
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
                    "minutos"     => 8
                ], 
                [
                    "id"          => "28",
                    "minutos"     => 9
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_all -->
