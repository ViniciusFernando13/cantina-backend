<div class="page-header mb-3">
    <h2>Professores</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'professores/create' ) ?>
    <?= description( 'Cadastra um novo professor' ) ?>
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
                "sobrenome"   => "Souze",
                "descricao"   => 'É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.',
                "senha"       => "senha@123",
                "midia?"      => '1',
                "ativo"       => true,
                "tipoYoga1"   => 27,
                "tipoYoga2"   => null,
                "tipoYoga3"   => null
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "45",
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Souze",
                "normalizado" => "testando-souze",
                "midia"       => '1',
                "ativo"       => true,
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                "tipoYoga1"   => [
                    "id"          => "27",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ],
                "tipoYoga2" => null,
                "tipoYoga3" => null
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'professores/edit/${id}' ) ?>
    <?= description( 'Edita os dados de um professor' ) ?>
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
                "sobrenome"   => "Souze",
                "descricao"   => 'É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.',
                "senha"       => "senha@123",
                "midia?"      => '1',
                "ativo"       => true,
                "tipoYoga1"   => 27,
                "tipoYoga2"   => null,
                "tipoYoga3"   => null
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "45",
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Souze",
                "normalizado" => "testando-souze",
                "midia"       => '1',
                "ativo"       => true,
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                "tipoYoga1"   => [
                    "id"          => "27",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ],
                "tipoYoga2" => null,
                "tipoYoga3" => null
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'professores/delete/${id}' ) ?>
    <?= description( 'Remove um professor do sistema' ) ?>
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
                "data"   => "Professor excluido com sucesso"
            ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'professores/get/${id}' ) ?>
    <?= description( 'Obtem um professor pelo ID' ) ?>
    <?= groups( [ 'Anyone' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                "id"          => "45",
                "email"       => "teste@email.com",
                "nome"        => "Testando",
                "sobrenome"   => "Souze",
                "normalizado" => "testando-souze",
                "descricao"   => 'Sagar é brasileiro, porém descendente de família indiana, filho da conhecida cantora indiana Meeta Ravindra.',
                "midia"       => '31',
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                'ativo'       => true,
                "tipoYoga1"   => [
                    "id"          => "27",
                    "nome"        => "Ashtanga",
                    "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                    "normalizado" => "ashtanga",
                    "midia"       => '32',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                ],
                "tipoYoga2" => null,
                "tipoYoga3" => null
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'professores/get_all' ) ?>
    <?= description( 'Obtem a lista dos professores cadastrados no sistema' ) ?>
    <?= groups( [ 'Anyone' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([
            "status" => 200,
            "data"   => [ 
                [
                    "id"          => "45",
                    "email"       => "teste@email.com",
                    "nome"        => "Testando",
                    "sobrenome"   => "Souze",
                    "normalizado" => "testando-souze",
                    "descricao"   => 'Sagar é brasileiro, porém descendente de família indiana, filho da conhecida cantora indiana Meeta Ravindra.',
                    "midia"       => '31',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                    'ativo'       => true,
                    "tipoYoga1"   => [
                        "id"          => "27",
                        "nome"        => "Ashtanga",
                        "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                        "normalizado" => "ashtanga",
                        "midia"       => '32',
                        "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                    ],
                    "tipoYoga2" => null,
                    "tipoYoga3" => null
                ],  
                [
                    "id"          => "47",
                    "email"       => "teste@email.com",
                    "nome"        => "Testando",
                    "sobrenome"   => "Souze",
                    "normalizado" => "testando-souze",
                    "descricao"   => 'Sagar é brasileiro, porém descendente de família indiana, filho da conhecida cantora indiana Meeta Ravindra.',
                    "midia"       => '31',
                    "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                    'ativo'       => true,
                    "tipoYoga1"   => [
                        "id"          => "27",
                        "nome"        => "Ashtanga",
                        "descricao"   => "É um estilo criado por Pattabhi Jois, que consiste de seis séries fixas de posturas, que são praticadas sincronizando o movimento e a respiração, o que se chama de Vinyasa. O aluno começa praticando as posturas da primeira série e vai evoluindo progressivamente. Existem dois tipos de aula: o estilo Mysore, onde o professor não dá comandos verbais, pois cada aluno já sabe de cor a sua série e o professor somente ajusta os alunos, e o estilo guiado, onde o professor vai conduzindo os alunos postura a postura.",
                        "normalizado" => "ashtanga",
                        "midia"       => '32',
                        "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                    ],
                    "tipoYoga2" => [
                        "id"          => "28",
                        "nome"        => "AyurYoga",
                        "descricao"   => "É um estilo criado pelo Dr. Vasant Lad, que une o Yoga e o Ayurveda (medicina milenar da Índia), para promover uma prática integrada, individualizada e terapêutica. Nessa prática, a aula de Yoga é moldada de acordo com o dosha de cada aluno, ou seja, seu perfil biológico.",
                        "normalizado" => "ashtanga",
                        "midia"       => '43',
                        "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png'
                    ],
                    "tipoYoga3" => null
                ]
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get_all -->