<?php

$dados = array(
    'nome' => $_POST['nome'],
    'resumo' => $_POST['resumo'],
    'objetivo' => $_POST['objetivo'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'formacoes' => isset($_POST['curso']) ?
                   array(
                        'cursos' => $_POST['curso'],
                        'instituicoes' => $_POST['instituicao'],
                        'conclusoes' => $_POST['conclusao']
                    ) : null,
    'experiencias' => isset($_POST['cargo']) ? 
                      array(
                        'cargos' => $_POST['cargo'],
                        'empresas' => $_POST['empresa'],
                        'inicios' =>  $_POST['inicio'],
                        'fins' =>  $_POST['fim'],
                      ) : null
);

require_once("curriculo.php");