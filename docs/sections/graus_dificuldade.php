<div class="page-header mb-3">
    <h2>Níveis de Dificuldade</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'graus_dificuldade/create' ) ?>
    <?= description( 'Cadastra um novo nível de dificuldade' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "nome"        => "Básica"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "nome"        => "Básica"
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'graus_dificuldade/edit/${id}' ) ?>
    <?= description( 'Edita os dados de um nível de dificuldade' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                "nome"        => "Básica"
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "nome"        => "Básica"
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'graus_dificuldade/delete/${id}' ) ?>
    <?= description( 'Remove um nível de dificuldade do sistema' ) ?>
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
                    "data"   => "Nível de dificuldade excluido com sucesso"
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'graus_dificuldade/get/${id}' ) ?>
    <?= description( 'Obtem um nível de dificuldade pelo ID' ) ?>
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
                    "nome"        => "Básica"
                ] 
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'graus_dificuldade/get_all' ) ?>
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
                    "nome"        => "Básica"
                ], 
                [
                    "id"          => "28",
                    "minutos"     => "Avançada"
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_all -->
