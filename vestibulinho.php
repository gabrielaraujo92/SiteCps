<?php
$page_title = "Vestibulinho Etec";
$current_page = "vest";
include '../includes/header.php';

$etapas = [
  ["etapa" => "Inscrições",          "inicio" => "01/04/2025", "fim" => "25/04/2025", "status" => "Aberto"],
  ["etapa" => "Prova",               "inicio" => "11/05/2025", "fim" => "11/05/2025", "status" => "Aguardando"],
  ["etapa" => "Resultado 1ª Chamada","inicio" => "05/06/2025", "fim" => "05/06/2025", "status" => "Aguardando"],
  ["etapa" => "Matrículas",          "inicio" => "09/06/2025", "fim" => "13/06/2025", "status" => "Aguardando"],
];

$status_colors = ["Aberto" => "#2e7d32", "Aguardando" => "#e65100", "Encerrado" => "#c62828"];
?>

<section class="page-hero" style="background-image:url('https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1400&q=70');background-size:cover;background-position:center;background-blend-mode:multiply;">
  <div class="container">
    <h1>Vestibulinho Etec – 2º Semestre 2025</h1>
    <p>Inscreva-se nos cursos técnicos gratuitos das Escolas Técnicas do Estado de São Paulo.</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="content-grid">
      <div class="main-content">
        <div class="card">
          <h3>📅 Calendário do Processo Seletivo</h3>
          <div class="table-wrapper" style="margin-top:16px;">
            <table>
              <thead>
                <tr><th>Etapa</th><th>Início</th><th>Término</th><th>Status</th></tr>
              </thead>
              <tbody>
                <?php foreach ($etapas as $e):
                  $cor = $status_colors[$e['status']] ?? '#666';
                ?>
                <tr>
                  <td><?= $e['etapa'] ?></td>
                  <td><?= $e['inicio'] ?></td>
                  <td><?= $e['fim'] ?></td>
                  <td><span style="background:<?= $cor ?>;color:#fff;padding:3px 10px;border-radius:3px;font-size:12px;font-weight:700;"><?= $e['status'] ?></span></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card">
          <h3>✏️ Como se inscrever</h3>
          <ol style="margin-left:20px;line-height:2.2;font-size:14px;">
            <li>Acesse o site oficial do Vestibulinho Etec</li>
            <li>Crie um cadastro com CPF e e-mail válido</li>
            <li>Escolha o curso técnico e a Etec de sua preferência</li>
            <li>Confira os dados e confirme a inscrição</li>
            <li>Guarde o número de inscrição gerado</li>
          </ol>
          <br>
          <a href="#" class="btn-primary">Inscreva-se agora</a>
        </div>

        <div class="card">
          <h3>📋 Documentos necessários para matrícula</h3>
          <ul style="margin-left:20px;line-height:2.2;font-size:14px;list-style:disc;">
            <li>RG e CPF (original e cópia)</li>
            <li>Comprovante de residência atualizado</li>
            <li>Histórico escolar do Ensino Fundamental ou Médio</li>
            <li>Certificado de conclusão ou declaração escolar</li>
            <li>2 fotos 3x4 recentes</li>
          </ul>
        </div>
      </div>

      <aside>
        <div class="card">
          <h3>📞 Dúvidas?</h3>
          <p style="font-size:14px;margin-bottom:16px;">Entre em contato com a Etec mais próxima ou acesse o FAQ oficial.</p>
          <a href="contato.php" class="btn-primary" style="display:block;text-align:center;">Fale Conosco</a>
        </div>
        <div class="card">
          <h3>🔗 Links Úteis</h3>
          <ul style="display:flex;flex-direction:column;gap:10px;margin-top:8px;">
            <li><a href="#" class="btn-secondary" style="display:block;text-align:center;">Manual do Candidato</a></li>
            <li><a href="#" class="btn-secondary" style="display:block;text-align:center;">Lista de Cursos</a></li>
            <li><a href="#" class="btn-secondary" style="display:block;text-align:center;">Gabarito Oficial</a></li>
            <li><a href="unidades.php" class="btn-secondary" style="display:block;text-align:center;">Encontrar Etec</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
