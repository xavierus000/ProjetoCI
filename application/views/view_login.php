<html>

<head>
    <meta charset="utf-8">

    <meta name="Autor" content="Tela de login feita por: Gabriel Fernandez Xavier 3ºD - 2017, representando todos de minha classe">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="js/script.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="corpo-login">
    <div class="container">
        <div class="row">
            <div class="col m4 s12 offset-m4">
                <h1 class="titulo flow-text center-align">C.A.C.C.T.O.</h1>
                <hr>
            </div>
        </div>
        <div class="row esconder" id="row-escolher-form-mobile">
            <div class="col s6 col-escolher-form-mobile" id="escolha-medio-mobile">
                Médio e Técnico
            </div>
            <div class="col s6 col-escolher-form-mobile" id="escolha-fund-mobile">
                Fundamental
            </div>
        </div>
        <div class="row div-login">
            <div class="col s12 m4 d-login boas-vindas-medio" id="boas-vindas">
                <div class="row">
                    <div class="col s12 center-align bem-vindo-medio" id="bem-vindo">
                        Bem vindo
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <button class="col s12 btn-trocar btn-trocar-medio" id="aparecer-fundamental">Fundamental</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <button class="col s12 btn-trocar btn-trocar-medio" id="aparecer-medio">Médio e Técnico</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 offset-s3 col-divisora-medio" id="col-divisora"></div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <img src="img/logo.png" class="responsive-img" id="logo">
                    </div>
                </div>
            </div>
            <div class="divisor"></div>
            <div class="col s12 m8 d-login form-login medio">
                <form>
                    <div class="row row-form-inicio">
                        <div class="col s8 m8 offset-m2 offset-s2">
                            <hr class="hr-form">
                        </div>
                    </div>
                    <div class="row row-id-aluno">
                        <div class="col s12 m2 offset-m2 col-icone-chapeu">
                            <img src="./img/icone-aluno.png" class="img-icone-chapeu">
                        </div>
                        <div class="col s12 m6">
                            <p class="flow-text center-align login-p">Identificação do aluno</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s8 m8 offset-m2 offset-s2">
                            <hr class="hr-form">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s8 m8 offset-m2 offset-s2">
                            <div class="row row-rm">
                                <div class="col s4 m4 col-label flow-text">
                                    RM:
                                </div>
                                <input type="text" class="col s8 m8 txt-login" name="login" maxlength="12" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s8 m8 offset-m2 offset-s2">
                            <div class="row">
                                <div class="col s4 m4 col-label flow-text">
                                    Senha:
                                </div>
                                <input type="password" class="col s8 m8 txt-login" name="senha" maxlength="12" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-form-fim">
                        <div class="col s8 m8 offset-m2 offset-s2">
                            <div class="row">
                                <div class="col s4 m4 col-label flow-text">
                                    Código:
                                </div>
                                <input type="text" class="col s4 m4 txt-login" name="codigo" maxlength="5" required>
                                <div class="col s3 m3 offset-s1 offset-m1 col-label flow-text codigo">1cdf5</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 m4 offset-s3 offset-m4">
                            <button class="btn-entrar flow-text">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s12 m8 d-login form-login fundamental esconder">
                fundamental
            </div>
        </div>
        
    </div>
</body>

</html>
