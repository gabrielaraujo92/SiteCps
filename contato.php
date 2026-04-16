<?php
$page_title = "Contato";
$current_page = "cont";
include '../includes/header.php';
?>

<section class="page-hero" style="background:linear-gradient(135deg,#1a2a40,#003a70);">
  <div class="container">
    <h1>Fale Conosco</h1>
    <p>Preencha o formulário abaixo e entraremos em contato em breve.</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="content-grid">

      <div class="main-content">
        <div class="card">
          <h3>Envie sua mensagem</h3>
          <form action="processa.php" method="POST" style="margin-top:20px;">

            <div class="form-group">
              <label for="nome">Nome *</label>
              <input type="text" id="nome" name="nome" required placeholder="Seu nome completo" />
            </div>

            <div class="form-group">
              <label for="endereco">Endereço *</label>
              <input type="text" id="endereco" name="endereco" required placeholder="Rua, número, bairro, cidade" />
            </div>

            <div class="form-group">
              <label for="telefone">Telefone *</label>
              <input type="tel" id="telefone" name="telefone" required placeholder="(00) 00000-0000" />
            </div>

            <div class="form-group">
              <label for="email">E-mail *</label>
              <input type="email" id="email" name="email" required placeholder="seu@email.com" />
            </div>

            <button type="submit" class="btn-primary">Enviar</button>

          </form>
        </div>
      </div>

      <aside>
        <div class="card">
          <h3>📍 Endereço</h3>
          <address style="font-size:14px;line-height:2;">
            Rua dos Andradas, 140<br>
            Santa Ifigênia<br>
            São Paulo – SP<br>
            CEP: 01208-000
          </address>
        </div>
        <div class="card">
          <h3>📞 Telefones</h3>
          <ul style="font-size:14px;line-height:2.2;">
            <li>Central: (11) 3471-4200</li>
            <li>Ouvidoria: 0800 055 0571</li>
          </ul>
        </div>
        <div class="card">
          <h3>🕐 Atendimento</h3>
          <p style="font-size:14px;line-height:2;">Segunda a sexta-feira<br>das 8h às 17h</p>
        </div>
      </aside>

    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
