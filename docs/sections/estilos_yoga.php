<div class="page-header mb-3">
    <h2>Estilos de Yoga</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'tipo_yoga/create' ) ?>
    <?= description( 'Cadastra um novo estilo de yoga' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        
        <?= request([
                "nome"        => "Ashtanga",
                "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                "midia"       => '32'
        ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'tipo_yoga/edit/${id}' ) ?>
    <?= description( 'Edita os dados de um estilo de yoga' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                "nome"        => "Ashtanga",
                "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                "midia"       => '32'
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                    "id"          => "27",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'tipo_yoga/delete/${id}' ) ?>
    <?= description( 'Remove um estilo de yoga do sistema' ) ?>
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
                "data"   => "Estilo de Yoga excluido com sucesso"
            ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'tipo_yoga/get/${id}' ) ?>
    <?= description( 'Obtem um estilo pelo ID' ) ?>
    <?= groups( [ 'Anyone' ] ) ?>
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
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ] 
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'tipo_yoga/get_all' ) ?>
    <?= description( 'Obtem a lista dos estilos de yoga cadastrados no sistema' ) ?>
    <?= groups( [ 'Anyone' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([[
            "status" => 200,
            "data"   => [ 
                [
                    "id"          => "27",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ], 
                [
                    "id"          => "28",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_all -->

<?= print_get() ?>

    <?= get_url( 'tipo_yoga/get_tipos_yoga_professor/${idProfessor}' ) ?>
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
                    "nome"        => "Ashtanga"
                ], 
                [
                    "id"          => "28",
                    "nome"        => "Ashtanga"
                ]
            ]
        ]]) ?>
    </div>

<?= end_section() ?><!-- get_tipos_yoga_professor -->