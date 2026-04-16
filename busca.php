<?php
$page_title = "Busca";
$current_page = "";
include '../includes/header.php';

$q = htmlspecialchars(trim($_GET['q'] ?? ''));

// Dados simulados para busca
$todos = [
  ["titulo"=>"Vestibulinho Etec 2025",         "url"=>"vestibulinho.php", "desc"=>"Processo seletivo para cursos técnicos gratuitos nas Etecs de São Paulo."],
  ["titulo"=>"Fatec – Faculdade de Tecnologia","url"=>"fatec.php",        "desc"=>"Cursos superiores de tecnologia gratuitos em 76 unidades pelo Estado."],
  ["titulo"=>"Cursos Técnicos",                "url"=>"cursos.php",       "desc"=>"Mais de 70 habilitações profissionais disponíveis nas Etecs."],
  ["titulo"=>"Unidades CPS",                   "url"=>"unidades.php",     "desc"=>"Encontre Etecs e Fatecs em todo o Estado de São Paulo."],
  ["titulo"=>"Fale Conosco",                   "url"=>"contato.php",      "desc"=>"Entre em contato com o Centro Paula Souza."],
  ["titulo"=>"Institucional",                  "url"=>"institucional.php","desc"=>"Sobre o Centro Paula Souza – história, missão e valores."],
];

$resultados = [];
if ($q !== '') {
  foreach ($todos as $item) {
    if (str_contains(strtolower($item['titulo']), strtolower($q)) || str_contains(strtolower($item['desc']), strtolower($q))) {
      $resultados[] = $item;
    }
  }
}
?>

<section class="page-hero">
  <div class="container">
    <h1>Resultados da busca</h1>
    <?php if ($q): ?>
      <p>Você buscou por: <strong>"<?= $q ?>"</strong></p>
    <?php endif; ?>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <form method="GET" action="" style="display:flex;gap:12px;margin-bottom:32px;">
      <input type="text" name="q" value="<?= $q ?>" placeholder="Nova busca..." style="flex:1;padding:10px 14px;border:1px solid #dde2ea;border-radius:6px;font-size:14px;font-family:inherit;" />
      <button type="submit" class="btn-primary">Buscar</button>
    </form>

    <?php if ($q === ''): ?>
      <p style="color:#666;">Digite algo no campo acima para pesquisar.</p>
    <?php elseif (count($resultados) === 0): ?>
      <div class="alert alert-error">Nenhum resultado encontrado para "<?= $q ?>".</div>
    <?php else: ?>
      <p style="color:#666;margin-bottom:24px;"><?= count($resultados) ?> resultado(s) encontrado(s).</p>
      <?php foreach ($resultados as $r): ?>
      <div class="card" style="margin-bottom:16px;">
        <h3><a href="<?= $r['url'] ?>" style="color:var(--blue);"><?= $r['titulo'] ?></a></h3>
        <p><?= $r['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
