<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">


    </head>
    <body>
        <header>
            <div class="container">
                <a href="{{route('home')}}" class="branch"><img src="logo.png" alt="Minha logo" title="Nome da minha logo"></a>
                <nav class="menu">
                    <ul>
                        <li><a class="menu-link" href="{{route('home')}}" >Início</a></li>
                        <li><a class="menu-link" href="{{route('contato')}}" >Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="container">
            <article class="super-card">
                <section class="super-card-img">
                    <img src="dchivela.jpg" alt="Foto de Domingos Chivela", title="Danilo Filitto">
                    <h2>Domingos Chivela</h2>
                </section>
                <section class="super-card-text">
                    <p>
                        Meu nome é Domingos Chivela, sou Mestre em Ciência da Computação pela 
                        Universidade Estadual de Maringá – UEM, Pós-Graduado em Redes de Computadores 
                        e Comunicação de Dados pela Universidade do Estado do Paraná – UEL, Bacharel 
                        em Ciência da Computação pela Universidade do Oeste Paulista – UNOESTE.
                    </p>
                    <p>
                        Atuo na área acadêmica como professor desde 2006. 
                        Atualmente leciono na UNOESTE (Universidade do Oeste Paulista) e no SENAC 
                        (Serviço Nacional de Aprendizagem Comercial) da cidade de Presidente Prudente. 
                        Além de professor sou desenvolvedor de jogos e palestrante.
                    </p>
                    <p>
                        As Área de Pesquisa em qual atuo são: desenvolvimento de Softwares, 
                        estrutura de dados, processamento de imagens digitais, 
                        redes de computadores e desenvolvimento de jogos..
                    </p>
                </section>
            </article>
        </main>
    </body>
</html>