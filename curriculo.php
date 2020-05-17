<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo</title>
</head>
<body>
    <main>
        <section>
            <h3>Nome</h3>
            <p><?= $dados['nome']; ?></p>
            <h3>Resumo</h3>
            <p><?= $dados['resumo']; ?></p>
            <h3>Objetivo</h3>
            <p><?= $dados['objetivo']; ?></p>
            <h3>Telefone</h3>
            <p><?= $dados['telefone']; ?></p>
            <h3>E-mail</h3>
            <p><?= $dados['email']; ?></p>
        </section>
        <section>
            <?php if($dados['formacoes']) { ?>
                <h3>Formação</h3>

                <ul>
                    <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++) { ?>
                        <li>
                            <div>
                                <p><?= $dados['formacoes']['cursos'][$i] ?></p>
                                <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                                <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <?php if($dados['experiencias']) { ?>
                <h3>Experiência</h3>

                <ul>
                    <?php for($i = 0; $i < sizeof($dados['experiencias']['cargos']); $i++) { ?>
                        <li>
                            <div>
                                <p><?= $dados['experiencias']['cargos'][$i] ?></p>
                                <p><?= $dados['experiencias']['empresas'][$i] ?></p>
                                <p><?= $dados['experiencias']['inicios'][$i] ?> a <?= $dados['experiencias']['fins'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>