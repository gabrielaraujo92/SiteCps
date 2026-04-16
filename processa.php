<?php
$page_title = "Mensagem Enviada";
$current_page = "cont";

// Receber e sanitizar os dados do formulário
$nome     = htmlspecialchars(trim($_POST['nome']     ?? ''));
$endereco = htmlspecialchars(trim($_POST['endereco'] ?? ''));
$telefone = htmlspecialchars(trim($_POST['telefone'] ?? ''));
$email    = htmlspecialchars(trim($_POST['email']    ?? ''));

// Se acessar direto sem POST, redireciona para contato
if (empty($nome) || empty($email)) {
    header('Location: contato.php');
    exit;
}

include '../includes/header.php';
?>

<section class="page-hero" style="background:linear-gradient(135deg,#1a4a1a,#2e7d32);">
  <div class="container">
    <h1>Mensagem Enviada!</h1>
    <p>Seus dados foram recebidos com sucesso.</p>
  </div>
</section>

<section class="page-content">
  <div class="container" style="max-width:700px;">

    <!-- Mensagem principal -->
    <div class="card" style="text-align:center;padding:48px 40px;">
      <div style="font-size:64px;margin-bottom:24px;">✅</div>
      <h2 style="color:var(--green);font-size:1.6rem;margin-bottom:16px;">
        Obrigado <?= $nome ?>, por entrar em contato.
      </h2>
      <p style="font-size:16px;color:var(--gray-mid);margin-bottom:8px;">
        Enviaremos uma mensagem para seu e-mail:
      </p>
      <p style="font-size:18px;font-weight:700;color:var(--blue);">
        <?= $email ?>
      </p>
    </div>

    <!-- Resumo dos dados -->
    <div class="card" style="margin-top:24px;">
      <h3>Dados informados</h3>
      <div class="table-wrapper" style="margin-top:16px;">
        <table>
          <tbody>
            <tr>
              <td style="width:140px;font-weight:700;color:var(--gray-dark);">Nome</td>
              <td><?= $nome ?></td>
            </tr>
            <tr>
              <td style="font-weight:700;color:var(--gray-dark);">Endereço</td>
              <td><?= $endereco ?></td>
            </tr>
            <tr>
              <td style="font-weight:700;color:var(--gray-dark);">Telefone</td>
              <td><?= $telefone ?></td>
            </tr>
            <tr>
              <td style="font-weight:700;color:var(--gray-dark);">E-mail</td>
              <td><?= $email ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Botões de navegação -->
    <div style="display:flex;gap:16px;margin-top:28px;flex-wrap:wrap;">
      <a href="contato.php" class="btn-secondary">← Voltar ao formulário</a>
      <a href="../index.php" class="btn-primary">Ir para a página inicial</a>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
