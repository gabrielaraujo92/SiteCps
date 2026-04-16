<?php
$page_title = "Início";
$current_page = "home";
include 'includes/header.php';
?>

<!-- HERO / BANNER CAROUSEL com imagens reais de alunos -->
<section class="hero-carousel" id="carouselHero">
  <div class="carousel-track" id="carouselTrack">

    <div class="carousel-slide">
      <div class="slide-bg" style="background-image:url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-tag">Processo Seletivo</span>
        <h1>Vestibulinho Etec 2025 — Inscrições Abertas</h1>
        <p>Mais de 200 mil vagas em cursos técnicos gratuitos em todo o Estado de São Paulo. Garanta sua vaga agora.</p>
        <a href="pages/vestibulinho.php" class="btn-hero">Inscreva-se</a>
      </div>
    </div>

    <div class="carousel-slide">
      <div class="slide-bg" style="background-image:url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-tag">Fatec</span>
        <h1>Cursos Superiores de Tecnologia Gratuitos</h1>
        <p>76 Fatecs em todo o Estado com cursos reconhecidos pelo MEC. Inscrições abertas para o 2º semestre de 2025.</p>
        <a href="pages/fatec.php" class="btn-hero">Ver cursos</a>
      </div>
    </div>

    <div class="carousel-slide">
      <div class="slide-bg" style="background-image:url('https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-tag">Institucional</span>
        <h1>CPS: 50 Anos Formando o Futuro de São Paulo</h1>
        <p>Mais de 340 mil alunos matriculados em cursos técnicos e tecnológicos públicos e gratuitos em 345 municípios.</p>
        <a href="pages/institucional.php" class="btn-hero">Conheça a história</a>
      </div>
    </div>

  </div>
  <button class="carousel-btn prev" onclick="moveCarousel(-1)">&#10094;</button>
  <button class="carousel-btn next" onclick="moveCarousel(1)">&#10095;</button>
  <div class="carousel-dots" id="carouselDots">
    <span class="dot active" onclick="goToSlide(0)"></span>
    <span class="dot" onclick="goToSlide(1)"></span>
    <span class="dot" onclick="goToSlide(2)"></span>
  </div>
</section>

<!-- ACESSO RÁPIDO -->
<section class="quick-access">
  <div class="container">
    <div class="quick-grid">
      <a href="pages/vestibulinho.php" class="quick-card">
        <div class="quick-icon">🎓</div>
        <span>Vestibulinho Etec</span>
      </a>
      <a href="pages/fatec.php" class="quick-card">
        <div class="quick-icon">🏛️</div>
        <span>Fatec</span>
      </a>
      <a href="pages/cursos.php" class="quick-card">
        <div class="quick-icon">📚</div>
        <span>Cursos Técnicos</span>
      </a>
      <a href="pages/unidades.php" class="quick-card">
        <div class="quick-icon">📍</div>
        <span>Unidades</span>
      </a>
      <a href="pages/noticias.php" class="quick-card">
        <div class="quick-icon">📰</div>
        <span>Notícias</span>
      </a>
      <a href="pages/contato.php" class="quick-card">
        <div class="quick-icon">✉️</div>
        <span>Fale Conosco</span>
      </a>
    </div>
  </div>
</section>

<!-- NÚMEROS -->
<section class="numbers-section">
  <div class="container">
    <div class="numbers-grid">
      <?php
      $stats = [
        ["value" => "345", "label" => "Municípios atendidos",      "suffix" => "+"],
        ["value" => "228", "label" => "Etecs no Estado",           "suffix" => ""],
        ["value" => "76",  "label" => "Fatecs no Estado",          "suffix" => ""],
        ["value" => "340", "label" => "Mil alunos matriculados",   "suffix" => "mil"],
      ];
      foreach ($stats as $s): ?>
        <div class="number-card">
          <div class="number-value"><?= $s['value'] ?><span class="number-suffix"><?= $s['suffix'] ?></span></div>
          <div class="number-label"><?= $s['label'] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- NOTÍCIAS -->
<section class="news-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Últimas Notícias</h2>
      <a href="pages/noticias.php" class="see-all">Ver todas →</a>
    </div>
    <div class="news-grid">
      <?php
      $noticias = [
        ["tag"=>"Educação",         "date"=>"07 Abr 2025","title"=>"CPS lança programa de bolsas para alunos de baixa renda nas Fatecs","desc"=>"Programa vai beneficiar mais de 5 mil estudantes com auxílio mensal para permanência nos cursos superiores tecnológicos.", "img"=>"https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&q=70"],
        ["tag"=>"Processo Seletivo","date"=>"05 Abr 2025","title"=>"Vestibulinho 2025: resultado da 1ª chamada disponível no portal","desc"=>"Candidatos aprovados devem efetuar a matrícula presencialmente na unidade escolhida até o dia 15 de abril.", "img"=>"https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&q=70"],
        ["tag"=>"Tecnologia",       "date"=>"03 Abr 2025","title"=>"Etecs recebem novos laboratórios com equipamentos modernos","desc"=>"Investimento de R$ 120 milhões em infraestrutura tecnológica para melhorar a qualidade do ensino técnico público.", "img"=>"https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=400&q=70"],
        ["tag"=>"Parceria",         "date"=>"01 Abr 2025","title"=>"CPS firma parceria com setor industrial paulista","desc"=>"Acordo vai gerar mais de 10 mil vagas de estágio para alunos das Etecs e Fatecs em empresas do interior paulista.", "img"=>"https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&q=70"],
      ];
      foreach ($noticias as $n): ?>
        <article class="news-card">
          <img class="news-img" src="<?= $n['img'] ?>" alt="<?= $n['tag'] ?>" loading="lazy" />
          <div class="news-tag-bar">
            <span class="news-tag"><?= $n['tag'] ?></span>
            <span class="news-date"><?= $n['date'] ?></span>
          </div>
          <div class="news-body">
            <h3 class="news-title"><?= $n['title'] ?></h3>
            <p class="news-desc"><?= $n['desc'] ?></p>
            <a href="pages/noticias.php" class="news-link">Leia mais →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- GALERIA DE ALUNOS -->
<section class="gallery-section">
  <div class="container">
    <h2 class="section-title">Nossos Alunos</h2>
    <div class="gallery-grid">
      <?php
      $fotos = [
        ["url"=>"https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&q=75","legenda"=>"Laboratório de Informática"],
        ["url"=>"https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=75","legenda"=>"Aula Prática"],
        ["url"=>"https://images.unsplash.com/photo-1519452575417-564c1401ecc0?w=600&q=75","legenda"=>"Projetos de Inovação"],
        ["url"=>"https://images.unsplash.com/photo-1588072432836-e10032774350?w=600&q=75","legenda"=>"Formatura"],
        ["url"=>"https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=75","legenda"=>"Trabalho em Equipe"],
        ["url"=>"https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=75","legenda"=>"Vida Acadêmica"],
      ];
      foreach ($fotos as $f): ?>
        <div class="gallery-item">
          <img src="<?= $f['url'] ?>" alt="<?= $f['legenda'] ?>" loading="lazy" />
          <div class="gallery-caption"><?= $f['legenda'] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LINKS INSTITUCIONAIS -->
<section class="institutional-links">
  <div class="container">
    <h2 class="section-title">Acesso Institucional</h2>
    <div class="inst-grid">
      <a href="#" class="inst-card red">
        <span class="inst-icon">🔐</span>
        <div>
          <strong>Portal do Aluno</strong>
          <small>Notas, frequência e mais</small>
        </div>
      </a>
      <a href="#" class="inst-card dark">
        <span class="inst-icon">👩‍🏫</span>
        <div>
          <strong>Portal do Professor</strong>
          <small>Lançamento de notas</small>
        </div>
      </a>
      <a href="#" class="inst-card green">
        <span class="inst-icon">📋</span>
        <div>
          <strong>SGC – Sistema</strong>
          <small>Gestão Corporativa</small>
        </div>
      </a>
      <a href="#" class="inst-card orange">
        <span class="inst-icon">🏢</span>
        <div>
          <strong>Intranet CPS</strong>
          <small>Área do servidor</small>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
