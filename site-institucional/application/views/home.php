<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-buf-workaround.css" rel="stylesheet">
    <link href="<?=base_url('assets/css/home.css')?>" rel="stylesheet">
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h1 class="masthead-brand">LCI</h1>
                        <nav>
<!--                            <ul class="nav masthead-nav">-->
<!--                                <li class="active"><a href="#">Home</a></li>-->
<!--                                <li><a href="--><?//=site_url('Institucional/Empresa')?><!--">A Empresa</a></li>-->
<!--                                <li><a href="--><?//=site_url('Institucional/Servicos')?><!--">Serviços</a></li>-->
<!--                                <li><a href="">Trabalhe Conosco</a></li>-->
<!--                                <li><a href="">Fale Conosco</a></li>-->
<!--                            </ul>-->
                            <?php $this->load->view('commons/menu'); ?>
                        </nav>
                    </div>
                </div>
                <div class="inner cover">
                    <h1 class="cover-heading">Ensinado através da prática</h1>
                    <p class="lead">Até aqui você aprendeu como criar um <i>controller</i>, uma <i>view</i> e a usar a função
                        <i>base_url</i> do helper <i>url</i> utilizando o livro "CodeIgniter: Produtividade na
                        criação de aplicações web em php".</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
