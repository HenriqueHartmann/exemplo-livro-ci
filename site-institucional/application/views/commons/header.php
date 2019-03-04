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
    <link href="<?=base_url('assets/css/internas.css')?>" rel="stylesheet">
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
<!--        <div class="container">-->
<!--            <div class="navbar-header">-->
<!--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--                    <span class="sr-only">Toggle navigation</span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!---->
<!--                </button>-->
<!--                <a href="#" class="navbar-brand">LCI</a>-->
<!--            </div>-->
<!--            <div id="navbar" class="collapse navbar-collapse">-->
<!--                <ul class="nav navbar-nav">-->
<!--                    <li><a href="--><?//= site_url('Institucional')?><!--">Home</a></li>-->
<!--                    <li><a href="--><?//= site_url('Institucional/Empresa') ?><!--">A Empresa</a></li>-->
<!--                    <li><a href="--><?//= site_url('Institucional/Servicos') ?><!--">Serviços</a></li>-->
<!--                    <li><a href="#">Trabalhe Conosco</a></li>-->
<!--                    <li><a href="#">Fale Conosco</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
        <?php $this->load->view('commons/menu'); ?>
    </nav>