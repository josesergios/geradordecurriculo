<html>
<head>
<meta	charset="utf-8">
<link rel="stylesheet" href="css\estilos.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Curriculo</title>
</head>
<body>
    <div style="margin: 30px">
<form action="action.php" method="post">
 <h1 style="text-align: center;"> Gerador de curriculo gratuito FTC </h1>

    <!--Nacionalidade-->
<h5 style="height: 5px;"><?php echo htmlspecialchars($_POST['nacionalidade']); ?>,

<?php echo htmlspecialchars($_POST['estado_civil']); ?>,

<?php echo (int)$_POST['idade']; ?> anos<br/></p></h5>
    <!--Fim Nacionalidade-->

    <!--Endereço-->
<p><h5 style="height: 5px;" ><?php echo htmlspecialchars($_POST['endereco']); ?><br/></h5>

<p><h5 style="height: 10px;"><?php echo htmlspecialchars($_POST['cidade']); ?> -  <?php echo htmlspecialchars($_POST['estado']); ?>
</h5>
    <!--Fim Endereço-->
    <!--Contato-->
<p><h5 style="height: 5px;">Telefone : <?php echo htmlspecialchars($_POST['telefone1']); ?>/ <?php echo htmlspecialchars($_POST['telefone2']); ?><br>
<p>E-Mail: <?php echo htmlspecialchars($_POST['email']); ?><br/></p></h5>
<!--Fim Contato-->

<!--Objeivo-->
<br><br><br><h3 style="height: 5px;">Objetivo</h3>
<h3>_______________________________________________________________________________________________________________________</h3>
<h5><?php echo nl2br($_POST['objetivo']); ?></h5>
<!--Fim Objeivo-->

<!--Formação-->
<br><br><br><h3 style="height: 5px;">Formação</h3>
<h3>_______________________________________________________________________________________________________________________</h3>
<h5><?php echo nl2br($_POST['curso']); ?>. <?php echo nl2br($_POST['instituicao']); ?>, <?php echo nl2br($_POST['1']); ?><?php echo nl2br($_POST['2']); ?><?php echo nl2br($_POST['ano']); ?>.</h5>
<!--Fim Formação-->

<!--Experiência Proficional-->
<br><br><br><h3 style="height: 5px;">Experiência Proficional</h3>
<h3>_______________________________________________________________________________________________________________________</h3>


<!--Fim Experiência Proficional-->

<!--Experiência Qualificação e Atividades Complementares-->
<br><br><br><h3 style="height: 5px;">Experiência Qualificação e Atividades Complementares</h3>
<h3>_______________________________________________________________________________________________________________________</h3>
<!--Fim Experiência Qualificação e Atividades Complementares-->

<!--Informações Adicionais-->
<br><br><br><h3 style="height: 5px;">Informações Adicionais</h3>
<h3>_______________________________________________________________________________________________________________________</h3>
<!--Fim Informações Adicionais-->

</div>
</body>
</html>

