<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World - Castles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="description" content="Pequena descrição para resolver o notificação de SEO da auditoria">
    <meta name="theme-color" content="#fb6b55" />
   
    <!-- iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Viagens - Marcos">
    <link rel="apple-touch-icon" href="images/icons/152.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <div class="card">
                <div class="bar"></div>
                <div class="header">
                    <div class="details">
                        <h3>Henrique Keppel</h3>
                        <span>Arquiteto de Software, BHZ-MG, Brasil</span>
                    </div>
                </div>
                <div class="card-container">
                    <div class="profile-card">
                        <div class="profile-card__image">
                            <img src="images/castle-neath-300x300.jpg" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="numbers">
                                <div class="follower">
                                    <div>160</div>
                                    <div>Seguidores</div>
                                </div>
                                <div class="travels">
                                    <div>2</div>
                                    <div>Visitados</div>
                                </div>
                            </div>
                            <button id="butInstall" hidden>Instalar</button>
                            <button id="butPush" hidden>Notification</button>
                        </div>
                    </div>
                    <label class="pinned-trip__label">Castelo em Destaque</label>
                    <div class="pinned-trip">
                        <div class="pinned-trip__photographs">
                            <span class="pinned-trip__description">Tintagel - Cornualha</span>
                            <div class="pinned-trip__itenary">
                                <span>1600</span><span>Anos</span>
                                <span>56 <i class="fa fa-camera-retro"></i></span>
                            </div>
                            <div class="pinned-trip__moredetails">ver detalhes</div>
                        </div>
                        <div class="pinned-trip__map">
                            <img src="images/castle-carlow-300x300.jpg" alt="some image" />
                        </div>                    
                    </div>                    
                    <label class="pinned-trip__label">Castelos próximos a sua localidade</label>
                    <div class="planned-trips">
                        <div class="planned-trips__card card_empty">
                            <div class="planned-trip__description">
                                <span><i class="fa fa-frown"></i>&nbsp;Nenhuma viagem</span>
                            </div>
            
                        </div>
                        <div class="planned-trips__card card_loading">
                            <div class="planned-trip__image">
                                <img src="images/loading-1.gif" alt="some image" />
                            </div>
                            <div class="planned-trip__description">
                                <span>Aguardando viagens...</span>
                            </div>            
                        </div>            
                        <div id="card_content">
                        </div>            
                    </div>
                    <div class="planned-trips">
                        <div class="planned-trips__card">
                            <div class="planned-trip__description">
                                <span style="font-size:12px; word-break: break-all;" id="endpoint_push">Aguardando endpoint de notificação</span>
                            </div>
            
                        </div>
                    </div>
            
                    <div class="planned-trips">
                        <div class="planned-trips__card">
                            <div class="planned-trip__description">
                                <button id="butSend" class="btn btn-block btn-primary">Enviar em Background</button>
                                <span style="font-size:12px; word-break: break-all;" id="send_msg">...</span>
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

    <!--Interações da aplicação-->
    <script src="app.js"></script>

    <!-- service-work -->
    <script>    
        // Variavel global para permitir que outros scripts possam acessar o service-work
        let swRegistration = null;

        // Verifica se o navegador tem suporte a serviceWorker
        if ('serviceWorker' in navigator)
        {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('service-worker.js')
                .then((reg) => {
                    console.log("Service worker registrado com sucesso!");
                    swRegistration = reg;
                    initialiseUI();
                });
            });
        }
        else
        {
            // Se não tem suporte a serviceWorker, redireciona para uma pagina web
            window.location.href = ";"
        }

    </script>
</body>
</html>
