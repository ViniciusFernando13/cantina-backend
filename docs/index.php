<?php include_once( 'utils/functions.php' ); ?>
<?php get_header(); ?>

<div style="background: #E75600; color: #fff" class="page-header pt-5 pb-5 mb-5">
    <div class="container">
        <h1>Documentação Rest API - Yogaflix </h1>
    </div>
</div>

<div class="container">
    
    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group">
                <?= section_link( 'Getting Started', 'home' ); ?>
                <?= section_link( 'Colaboradores', 'colaboradores' ); ?>
                <?= section_link( 'Professores', 'professores' ); ?>
                <?= section_link( 'Estilos de Yoga', 'estilos_yoga' ); ?>
                <?= section_link( 'Níveis de Dificuldade', 'graus_dificuldade' ); ?>
                <?= section_link( 'Atributos', 'atributos' ); ?>
                <?= section_link( 'Tags', 'tags' ); ?>
                <?= section_link( 'Durações', 'duracoes' ); ?>
                <?= section_link( 'Vídeo Aulas', 'video_aulas' ); ?>
                <?= section_link( 'Planos', 'planos' ); ?>
            </ul>
        </div>
        <div class="col-sm-9">
            <?php get_section() ?>
        </div>
    </div>

    <div class="row pt-5 mt-5 pb-4">
        <div class="col">
        <div class="text-center">
            <small>
                <i>
                    Desenvolvido por - Codeback Tecnologia
                </i>
            </small>
        </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
