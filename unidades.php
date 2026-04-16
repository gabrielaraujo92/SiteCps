<?php
$page_title = "Unidades";
$current_page = "unid";
include '../includes/header.php';

$unidades = [
  ["nome"=>"Etec de São Paulo",         "tipo"=>"Etec",  "cidade"=>"São Paulo",     "tel"=>"(11) 3xxx-xxxx"],
  ["nome"=>"Etec Getúlio Vargas",       "tipo"=>"Etec",  "cidade"=>"São Paulo",     "tel"=>"(11) 3xxx-xxxx"],
  ["nome"=>"Etec de Campinas",          "tipo"=>"Etec",  "cidade"=>"Campinas",      "tel"=>"(19) 3xxx-xxxx"],
  ["nome"=>"Fatec São Paulo",           "tipo"=>"Fatec", "cidade"=>"São Paulo",     "tel"=>"(11) 3xxx-xxxx"],
  ["nome"=>"Fatec Campinas",            "tipo"=>"Fatec", "cidade"=>"Campinas",      "tel"=>"(19) 3xxx-xxxx"],
  ["nome"=>"Etec de Sorocaba",          "tipo"=>"Etec",  "cidade"=>"Sorocaba",      "tel"=>"(15) 3xxx-xxxx"],
  ["nome"=>"Fatec Sorocaba",            "tipo"=>"Fatec", "cidade"=>"Sorocaba",      "tel"=>"(15) 3xxx-xxxx"],
  ["nome"=>"Etec de Ribeirão Preto",    "tipo"=>"Etec",  "cidade"=>"Ribeirão Preto","tel"=>"(16) 3xxx-xxxx"],
];

$tipo_filtro = isset($_GET['tipo']) ? $_GET['tipo'] : '';
$busca = isset($_GET['q']) ? strtolower(trim($_GET['q'])) : '';

$filtradas = array_filter($unidades, function($u) use ($tipo_filtro, $busca) {
  $match_tipo = ($tipo_filtro === '' || $u['tipo'] === $tipo_filtro);
  $match_busca = ($busca === '' || str_contains(strtolower($u['nome']), $busca) || str_contains(strtolower($u['cidade']), $busca));
  return $match_tipo && $match_busca;
});
?>

<section class="page-hero" style="background:linear-gradient(135deg,#1a4a1a,#2e7d32);">
  <div class="container">
    <h1>Unidades CPS</h1>
    <p>Encontre Etecs e Fatecs em todo o Estado de São Paulo.</p>
  </div>
</section>

<section class="page-content">
  <div class="container">

    <!-- Filtros -->
    <form method="GET" action="" style="display:flex;gap:16px;margin-bottom:32px;flex-wrap:wrap;">
      <input type="text" name="q" value="<?= htmlspecialchars($busca) ?>" placeholder="Buscar por nome ou cidade..." class="form-group" style="flex:1;min-width:200px;padding:10px 14px;border:1px solid #dde2ea;border-radius:6px;font-family:inherit;font-size:14px;" />
      <select name="tipo" style="padding:10px 14px;border:1px solid #dde2ea;border-radius:6px;font-family:inherit;font-size:14px;">
        <option value="">Todos os tipos</option>
        <option value="Etec"  <?= $tipo_filtro==='Etec' ?'selected':'' ?>>Etec</option>
        <option value="Fatec" <?= $tipo_filtro==='Fatec'?'selected':'' ?>>Fatec</option>
      </select>
      <button type="submit" class="btn-primary">Filtrar</button>
      <?php if ($tipo_filtro || $busca): ?>
        <a href="unidades.php" class="btn-secondary">Limpar</a>
      <?php endif; ?>
    </form>

    <p style="font-size:13px;color:#666;margin-bottom:16px;">
      Exibindo <strong><?= count($filtradas) ?></strong> unidade(s)
    </p>

    <div class="table-wrapper">
      <table>
        <thead>
          <tr><th>Nome</th><th>Tipo</th><th>Cidade</th><th>Telefone</th><th></th></tr>
        </thead>
        <tbody>
          <?php if (count($filtradas) === 0): ?>
          <tr><td colspan="5" style="text-align:center;color:#999;padding:24px;">Nenhuma unidade encontrada.</td></tr>
          <?php else: ?>
            <?php foreach ($filtradas as $u):
              $cor = $u['tipo'] === 'Fatec' ? 'var(--wine)' : 'var(--blue)';
            ?>
            <tr>
              <td><strong><?= $u['nome'] ?></strong></td>
              <td><span style="background:<?= $cor ?>;color:#fff;padding:3px 10px;border-radius:3px;font-size:12px;font-weight:700;"><?= $u['tipo'] ?></span></td>
              <td><?= $u['cidade'] ?></td>
              <td><?= $u['tel'] ?></td>
              <td><a href="#" class="btn-primary" style="padding:6px 14px;font-size:12px;">Ver mais</a></td>
            </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
