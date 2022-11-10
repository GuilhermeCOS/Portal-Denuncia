<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Lagoa - Denúncia</title>
    <link rel="stylesheet" href="../assets/css/slider.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
</head>

<body>

    <header class="header">
        <div class="soon">
            <img style="width: 200px;" src="../assets/img/company.png" alt="Logo Grupo Lagoa">
        </div>

        <div class="spacer"></div>

        <div class="navbar">
            <a href="../index.php">Home</a>
            <a href="report.php">Denúncie Aqui</a>
        </div>
    </header>

    <main class="content">
        <div class="text">
            <h4>Insira Sua Denúncia Aqui:</h4>
        </div>
        <form action="">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="campo">
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" id="empresa" required>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="campo">
                    <label for="Assunto">Assunto</label>
                    <input type="text" name="assunto" id="assunto" required>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="email">Mensagem</label>
                    <textarea name="" id="" cols="50" rows="10"></textarea>
                </div>
            </fieldset>

            <div class="button">
                <button>Finalizar denúncia</button>
            </div>
        </form>

    </main>

    <footer class="footer">
        <a href="https://www.superlagoa.com.br" target="_blank">Super Lagoa © <?php echo date('Y'); ?></a>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>

</html>