<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currículo</title>
</head>
<body>
    <main>
        <form action="gerar.php" method="post" target="_blank" enctype="multipart/form-data">
            <div>
                <h1>Currículo</h1>
                <div>
                    <h4>Informações</h4>

                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div>
                        <label for="resumo">Resumo</label>
                        <textarea name="resumo" id="resumo"></textarea>
                    </div>
                    <div>
                        <div>
                            <div>
                                <label for="objetivo">Objetivo</label>
                                <input type="text" name="objetivo" id="objetivo">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div>
                                <label for="telefone">Telefone</label>
                                <input type="tel" name="telefone" id="telefone">
                            </div>
                        </div> 
                        <div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div> 
                    </div>
                </div>

                <div id="div-formacoes">
                    <h4>Formação</h4>
                    <button id="btn-adicionar-formacao">Adicionar formação</button>
                </div>

                <div id="div-experiencias">
                    <h4>Experiência</h4>
                    <button id="btn-adicionar-experiencia">Adicionar experiência</button>
                </div>
                
                <div>
                    <button type="submit">Gerar</button>
                </div>
            </div>
        </form>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>