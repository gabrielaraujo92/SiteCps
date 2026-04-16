<?php
$page_title = "Cursos Técnicos";
$current_page = "cursos";
include '../includes/header.php';

$areas = [
  ["nome" => "Gestão e Negócios",         "icon" => "💼", "qtd" => 12],
  ["nome" => "Informática e Tecnologia",   "icon" => "💻", "qtd" => 9 ],
  ["nome" => "Saúde",                      "icon" => "🏥", "qtd" => 11],
  ["nome" => "Meio Ambiente",              "icon" => "🌿", "qtd" => 6 ],
  ["nome" => "Indústria",                  "icon" => "⚙️",  "qtd" => 14],
  ["nome" => "Agronegócio",               "icon" => "🌾", "qtd" => 7 ],
  ["nome" => "Turismo e Hospitalidade",    "icon" => "✈️",  "qtd" => 5 ],
  ["nome" => "Comunicação e Artes",        "icon" => "🎨", "qtd" => 8 ],
];

$cursos_destaque = [
  ["nome" => "Técnico em Administração",     "area" => "Gestão",      "duracao" => "2 anos"],
  ["nome" => "Técnico em Desenvolvimento de Sistemas","area"=>"TI",   "duracao" => "2 anos"],
  ["nome" => "Técnico em Enfermagem",        "area" => "Saúde",       "duracao" => "2 anos"],
  ["nome" => "Técnico em Eletrotécnica",     "area" => "Indústria",   "duracao" => "2 anos"],
  ["nome" => "Técnico em Logística",         "area" => "Gestão",      "duracao" => "1.5 anos"],
  ["nome" => "Técnico em Nutrição e Dietética","area"=> "Saúde",      "duracao" => "2 anos"],
];
?>

<section class="page-hero">
  <div class="container">
    <h1>Cursos Técnicos</h1>
    <p>Mais de 70 habilitações profissionais gratuitas disponíveis nas Etecs do Estado de São Paulo.</p>
  </div>
</section>

<section class="page-content">
  <div class="container">

    <h2 class="section-title">Áreas de Formação</h2>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:48px;">
      <?php foreach ($areas as $a): ?>
      <a href="#" class="quick-card">
        <div class="quick-icon"><?= $a['icon'] ?></div>
        <span><?= $a['nome'] ?></span>
        <small style="color:#666;font-size:11px;font-weight:400;"><?= $a['qtd'] ?> cursos</small>
      </a>
      <?php endforeach; ?>
    </div>

    <h2 class="section-title">Cursos em Destaque</h2>
    <div class="table-wrapper">
      <table>
        <thead>
          <tr><th>Curso</th><th>Área</th><th>Duração</th><th></th></tr>
        </thead>
        <tbody>
          <?php foreach ($cursos_destaque as $c): ?>
          <tr>
            <td><strong><?= $c['nome'] ?></strong></td>
            <td><?= $c['area'] ?></td>
            <td><?= $c['duracao'] ?></td>
            <td><a href="vestibulinho.php" class="btn-primary" style="padding:6px 16px;font-size:12px;">Inscreva-se</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
