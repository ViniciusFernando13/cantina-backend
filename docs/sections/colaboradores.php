<div class="page-header mb-3">
    <h2>Colaboradores</h2>
</div>
<?= print_post() ?>

    <?= post_url( 'colaboradores/login' ) ?>
    <?= description( 'Faz o login e obtém o token da aplicação para as requests subsequentes' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([
            'email' => 'colaborador@email.com',
            'senha' => 'senha123'
        ]) ?>
        <?= response([
            "status" => 200,
            "data" => [
                "id"         => "2",
                "first_name" => "Colaborador",
                "last_name"  => "Souza",
                "email"      => "colaborador@email.com",
                "token"      => "66ac9b2b399a8b668489b5c433f41a00"
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- login -->

<?= print_post() ?>

    <?= post_url( 'colaboradores/create' ) ?>
    <?= description( 'Cadastra um novo colaborador' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Silva",
                "senha"       => "senha@123",
                "midia?"       => '1',
                "ativo"       => true,
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "45",
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Silva",
                "midia"       => '1',
                "ativo"       => true,
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'colaboradores/edit/${id}' ) ?>
    <?= description( 'Edita os dados de um colaborador' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Silva",
                "senha"       => "senha@123",
                "ativo"       => false,
                "midia?"       => '1'
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "45",
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Silva",
                "ativo"       => false,
                "midia?"      => '1',
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'colaboradores/delete/${id}' ) ?>
    <?= description( 'Remove um colaborador do sistema' ) ?>
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
            "data"   => "Colaborador excluido com sucesso"
        ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'colaboradores/get/{$id}' ) ?>
    <?= description( 'Obtém os dados de um colaborador' ) ?>
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
            "data" => [
                "id"         => "3",
                "email"      => "colaborador@email.com",
                "nome"       => "Colaborador",
                "sobrenome"  => "Souza",
                "ativo"      => false,
                "midia"     => '1',
                "path"       => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'colaboradores/get_all' ) ?>
    <?= description( 'Obtém os dados de todos os colaboradores' ) ?>
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
            "data" => [
                [
                    "id"         => "3",
                    "email"      => "colaborador@email.com",
                    "nome"       => "Colaborador",
                    "sobrenome"  => "Souza",
                    "ativo"      => false,
                    "midia"      => '1',
                    "path"       => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ], [
                    "id"         => "4",
                    "email"      => "colaborador2@email.com",
                    "first_name" => "Colaborador2",
                    "last_name"  => "Souza",
                    "ativo"      => true,
                    "midia"      => '3',
                    "path"       => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ], [
                    "id"         => "5",
                    "email"      => "colaborador3@email.com",
                    "first_name" => "Colaborador",
                    "last_name"  => "Souza",
                    "ativo"      => true,
                    "midia"      => '4',
                    "path"       => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ]
            ]
        ]) ?>
    </div>

<?= end_section() ?>