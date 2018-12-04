<div class="page-header mb-3">
    <h2>Atributos</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'atributos/create' ) ?>
    <?= description( 'Cadastra um novo atributo' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "atributo"     => "Vídeos",
                "valor"        => "300"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "27",
                "atributo"    => "Vídeos",
                "valor"       => "300"
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'atributos/edit/${id}' ) ?>
    <?= description( 'Edita os dados de um atributo' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "atributo"     => "Vídeos",
                "valor"        => "300"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "27",
                "atributo"    => "Vídeos",
                "valor"       => "300"
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'atributos/delete/${id}' ) ?>
    <?= description( 'Remove um atributo do sistema' ) ?>
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
                "data"   => "Atributo excluido com sucesso"
            ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'atributos/get/${id}' ) ?>
    <?= description( 'Obtem um atributo pelo ID' ) ?>
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
                    "atributo"    => "Vídeos",
                    "valor"       => "300"
                ] 
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'atributos/get_all' ) ?>
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
                    "atributo"    => "Vídeos",
                    "valor"       => "300"
                ], 
                [
                    "id"          => "28",
                    "atributo"    => "Aulas",
                    "valor"       => "260"
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_all -->
