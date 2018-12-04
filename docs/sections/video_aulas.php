<div class="page-header mb-3">
    <h2>Vídeo Aulas</h2>
</div>

<?= print_post() ?>

    <?= post_url( 'video_aula/create' ) ?>
    <?= description( 'Cadastra uma nova vídeo aula' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                'titulo'        => 'Restaure-se!',
                'url'           => 'https://vimeo.com/1232asd',
                'dificuldade'   => 25,
                'professor'     => 47,
                'tipoYoga'      => 27,
                'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                'urlPreview'    => 'https://vimeo.com/asd2123',
                'duracao'       => 29,
                'tempo'         => '27:38',
                'midia'         => 1,
                'videosRel'     => [ 1, 2, 3 ],
                'tags'          => [ 2, 5, 9 ]
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                'titulo'        => 'Restaure-se!',
                'url'           => 'https://vimeo.com/1232asd',
                'dificuldade'   => 25,
                'professor'     => 47,
                'data'          => '2017-04-13 11:03:00',
                'tipoYoga'      => 27,
                'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                'urlPreview'    => 'https://vimeo.com/asd2123',
                'duracao'       => 29,
                'tempo'         => '00:27:38',
                'tempo'         => 2025,
                'midia'         => 1,
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                'videosRel'     => [ 1, 2, 3 ],
                'tags'          => [ 2, 5, 9 ]
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- create -->

<?= print_post() ?>

    <?= post_url( 'video_aula/edit/${id}' ) ?>
    <?= description( 'Edita os dados de uma vídeo aula' ) ?>
    <?= groups( [ 'Colaboradores' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin',
                    'Auth-Id'          => '3',
                    'Auth-Email'       => 'autenticado@email.com',
                    'Auth-Token'       => 'xxxxxxxxxxxxxxxxxxxx' ] ) ?>

    <div class="row">
        <?= request([
                'titulo'        => 'Restaure-se!',
                'url'           => 'https://vimeo.com/1232asd',
                'dificuldade'   => 25,
                'professor'     => 47,
                'tipoYoga'      => 27,
                'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                'urlPreview'    => 'https://vimeo.com/asd2123',
                'duracao'       => 29,
                'tempo'         => '27:38',
                'midia'         => 1,
                'videosRel'     => [ 1, 2, 3 ],
                'tags'          => [ 2, 5, 9 ]
            ]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                'titulo'        => 'Restaure-se!',
                'url'           => 'https://vimeo.com/1232asd',
                'dificuldade'   => 25,
                'professor'     => 47,
                'data'          => '2017-04-13 11:03:00',
                'tipoYoga'      => 27,
                'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                'urlPreview'    => 'https://vimeo.com/asd2123',
                'duracao'       => 29,
                'tempo'         => '00:27:38',
                'tempo'         => 2025,
                'midia'         => 1,
                "path"        => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                'videosRel'     => [ 1, 2, 3 ],
                'tags'          => [ 2, 5, 9 ]
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- update -->

<?= print_post() ?>

    <?= post_url( 'video_aula/delete/${id}' ) ?>
    <?= description( 'Remove uma vídeo aula do sistema' ) ?>
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
                "data"   => "Vídeo aula excluida com sucesso"
            ]) ?>
    </div>

<?= end_section() ?><!-- delete -->

<?= print_get() ?>

    <?= get_url( 'video_aula/get/${id}' ) ?>
    <?= description( 'Obtem uma professor pelo ID' ) ?>
    <?= groups( [ 'Anyone' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([
            "status" => 200,
            "data"   => [
                'id'            => '12',
                'titulo'        => 'Restaure-se!',
                'url'           => 'https://vimeo.com/1232asd',
                'dificuldade'   => 25,
                'professor'     => 47,
                'data'          => '2017-04-13 11:03:00',
                'tipoYoga'      => 27,
                'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                'urlPreview'    => 'https://vimeo.com/asd2123',
                'duracao'       => 29,
                'tempo'         => '00:27:38',
                'tempo'         => 2025,
                'midia'         => 1,
                "path"          => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                'videosRel'     => [ 1, 2, 3 ],
                'tags'          => [ 2, 5, 9 ]
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get -->

<?= print_get() ?>

    <?= get_url( 'video_aula/get_all' ) ?>
    <?= description( 'Obtem a lista das video aulas cadastradas no sistema' ) ?>
    <?= groups( [ 'Anyone' ] ) ?>
    <?= headers( [  'Application-Type' => 'application/json',
                    'Api-Token'        => 'token-ambiente-admin' ] ) ?>

    <div class="row">
        <?= request([]) ?>
        <?= response([
            "status" => 200,
            "data"   => [ 
                [
                    'id'            => '12',
                    'titulo'        => 'Restaure-se!',
                    'url'           => 'https://vimeo.com/1232asd',
                    'dificuldade'   => 25,
                    'professor'     => 47,
                    'data'          => '2017-04-13 11:03:00',
                    'tipoYoga'      => 27,
                    'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                    'urlPreview'    => 'https://vimeo.com/asd2123',
                    'duracao'       => 29,
                    'tempo'         => '00:27:38',
                    'tempo'         => 2025,
                    'midia'         => 1,
                    "path"          => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                    'videosRel'     => [ 1, 2, 3 ],
                    'tags'          => [ 2, 5, 9 ]
                ],  
                [
                    'id'            => '12',
                    'titulo'        => 'Restaure-se!',
                    'url'           => 'https://vimeo.com/1232asd',
                    'dificuldade'   => 25,
                    'professor'     => 47,
                    'data'          => '2017-04-13 11:03:00',
                    'tipoYoga'      => 27,
                    'descCompleta'  => 'Traga uma energia mais acolhedora e de relaxamento para a sua vida, desligando-se do 220.',
                    'urlPreview'    => 'https://vimeo.com/asd2123',
                    'duracao'       => 29,
                    'tempo'         => '00:27:38',
                    'tempo'         => 2025,
                    'midia'         => 1,
                    "path"          => 'http://yogaflix1.tempsite.ws/yogaflix-api/public/images/empty.png',
                    'videosRel'     => [ 1, 2, 3 ],
                    'tags'          => [ 2, 5, 9 ]
                ]
            ]
        ]) ?>
    </div>

<?= end_section() ?><!-- get_all -->