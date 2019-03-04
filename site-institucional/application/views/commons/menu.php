<?php
if($this->uri->segment(3) == 'Institucional' && $this->uri->segment(4) == 'index')
{   ?>
    <ul class="nav masthead-nav">
<?php } else
{   ?>
    <ul class="nav navbar-nav">
<?php } ?>
        <li class="<?=($this->uri->segment(3) == 'Institucional' && $this->uri->segment(4) == 'index') ? 'active' : null ?>">
            <a href="<?=site_url('Institucional/')?>">Home</a>
        </li>
        <li class="<?=($this->uri->segment(3) == 'Institucional' && $this->uri->segment(4) == 'Empresa') ? 'active' : null ?>">
            <a href="<?=site_url('Institucional/Empresa')?>">A Empresa</a>
        </li>
        <li class="<?=($this->uri->segment(3) == 'Institucional' && $this->uri->segment(4) == 'Servicos') ? 'active' : null ?>">
            <a href="<?=site_url('Institucional/Servicos')?>">Serviços</a>
        </li>
        <li class="<?=($this->uri->segment(3) == 'Institucional' && $this->uri->segment(4) == 'trabalhe-conosco') ? 'active' : null ?>">
            <a href="<?=site_url('Institucional/Trabalhe-Conosco')?>">Trabalhe Conosco</a>
        </li>
        <li class="<?=($this->uri->segment(3) == 'Institucional' && $this->uri->segment(4) == 'fale-conosco') ? 'active' : null ?>">
            <a href="<?=site_url('Institucional/Fale-Conosco')?>">Fale Conosco</a>
        </li>
    </ul>
