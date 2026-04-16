<?php
$page_title = "Notícias";
$current_page = "news";
include '../includes/header.php';

$noticias = [
  ["tag"=>"Educação",         "date"=>"07 Abr 2025","title"=>"CPS lança programa de bolsas para alunos de baixa renda nas Fatecs","desc"=>"Programa vai beneficiar mais de 5 mil estudantes com auxílio mensal para permanência nos cursos superiores tecnológicos.", "img"=>"https://images.unsplash.com/photo-1509062522246-3755977927d7?w=500&q=75"],
  ["tag"=>"Processo Seletivo","date"=>"05 Abr 2025","title"=>"Vestibulinho 2025: resultado da 1ª chamada disponível no portal","desc"=>"Candidatos aprovados devem efetuar a matrícula presencialmente na unidade escolhida até o dia 15 de abril.", "img"=>"https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=500&q=75"],
  ["tag"=>"Tecnologia",       "date"=>"03 Abr 2025","title"=>"Etecs recebem novos laboratórios de informática com equipamentos modernos","desc"=>"Investimento de R$ 120 milhões em infraestrutura tecnológica para melhorar a qualidade do ensino técnico público.", "img"=>"https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=500&q=75"],
  ["tag"=>"Parceria",         "date"=>"01 Abr 2025","title"=>"Centro Paula Souza firma parceria com setor industrial paulista","desc"=>"Acordo vai gerar mais de 10 mil vagas de estágio para alunos das Etecs e Fatecs em empresas do interior paulista.", "img"=>"https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&q=75"],
  ["tag"=>"Reconhecimento",   "date"=>"28 Mar 2025","title"=>"Fatec São Paulo conquista nota máxima no ENADE 2024","desc"=>"Pela terceira vez consecutiva, a Fatec São Paulo obteve conceito 5 no Exame Nacional de Desempenho dos Estudantes.", "img"=>"https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=500&q=75"],
  ["tag"=>"Inovação",         "date"=>"25 Mar 2025","title"=>"Alunos de Etec vencem competição nacional de robótica","desc"=>"Equipe da Etec de Campinas representa o Brasil na competição internacional de robótica na Coreia do Sul.", "img"=>"https://images.unsplash.com/photo-1519452575417-564c1401ecc0?w=500&q=75"],
];
?>

<section class="page-hero">
  <div class="container">
    <h1>Notícias</h1>
    <p>Acompanhe as últimas novidades do Centro Paula Souza.</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="news-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php foreach ($noticias as $n): ?>
      <article class="news-card">
        <img class="news-img" src="<?= $n['img'] ?>" alt="<?= $n['tag'] ?>" loading="lazy" />
        <div class="news-tag-bar">
          <span class="news-tag"><?= $n['tag'] ?></span>
          <span class="news-date"><?= $n['date'] ?></span>
        </div>
        <div class="news-body">
          <h3 class="news-title"><?= $n['title'] ?></h3>
          <p class="news-desc"><?= $n['desc'] ?></p>
          <a href="#" class="news-link">Leia mais →</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
