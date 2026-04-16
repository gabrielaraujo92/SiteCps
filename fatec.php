<?php
$page_title = "Fatec – Faculdade de Tecnologia";
$current_page = "fatec";
include '../includes/header.php';

$cursos_fatec = [
  ["nome"=>"Análise e Desenvolvimento de Sistemas",     "vagas"=>80],
  ["nome"=>"Gestão Empresarial",                        "vagas"=>50],
  ["nome"=>"Ciência de Dados",                          "vagas"=>40],
  ["nome"=>"Fabricação Mecânica",                       "vagas"=>40],
  ["nome"=>"Gestão da Tecnologia da Informação",        "vagas"=>50],
  ["nome"=>"Logística",                                 "vagas"=>50],
  ["nome"=>"Automação Industrial",                      "vagas"=>40],
  ["nome"=>"Marketing Digital",                         "vagas"=>50],
];
?>

<section class="page-hero" style="background:linear-gradient(135deg,var(--wine-dark),var(--wine));">
  <div class="container">
    <h1>Fatec – Faculdade de Tecnologia</h1>
    <p>76 Fatecs distribuídas pelo Estado de São Paulo, com cursos superiores gratuitos e reconhecidos pelo MEC.</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="content-grid">
      <div class="main-content">
        <div class="card">
          <h3>Sobre a Fatec</h3>
          <p>As Faculdades de Tecnologia (Fatecs) são instituições de ensino superior público gratuito, administradas pelo Centro Paula Souza. Oferecem cursos de Tecnologia com duração de 2 a 3 anos, voltados para o mercado de trabalho.</p>
          <br>
          <p>Os diplomas são reconhecidos pelo MEC e os cursos têm nota máxima nas avaliações do ENADE.</p>
        </div>

        <div class="card">
          <h3>Cursos Disponíveis para o 2º Semestre 2025</h3>
          <div class="table-wrapper" style="margin-top:16px;">
            <table>
              <thead><tr><th>Curso Superior de Tecnologia</th><th>Vagas (por unidade)</th></tr></thead>
              <tbody>
                <?php foreach ($cursos_fatec as $c): ?>
                <tr>
                  <td><?= $c['nome'] ?></td>
                  <td><?= $c['vagas'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <aside>
        <div class="card">
          <h3>📅 Inscrições</h3>
          <p style="font-size:14px;margin-bottom:16px;">Processo Seletivo Unificado para o 2º semestre de 2025. Inscrições via SISU e processo próprio Fatec.</p>
          <a href="#" class="btn-primary" style="display:block;text-align:center;">Ver edital</a>
        </div>
        <div class="card">
          <h3>Fatecs em SP</h3>
          <ul style="display:flex;flex-direction:column;gap:10px;margin-top:8px;">
            <li><a href="unidades.php" class="btn-secondary" style="display:block;text-align:center;">Encontrar Fatec</a></li>
            <li><a href="#" class="btn-secondary" style="display:block;text-align:center;">Portal do Aluno Fatec</a></li>
            <li><a href="#" class="btn-secondary" style="display:block;text-align:center;">Calendário Acadêmico</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
