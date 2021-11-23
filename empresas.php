<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Terapias Integradas Online</title>
    
    <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/CSS/style.css">
    <script type="text/javascript" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/JS/javascript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
    <link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="shortcut icon" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" sizes="32x32" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="icon" sizes="57x57" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="icon" sizes="76x76" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="icon" sizes="96x96" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="icon" sizes="128x128" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="shortcut icon" sizes="192x192" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="apple-touch-icon" sizes="120x120" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="apple-touch-icon" sizes="152x152" />
	<link href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/icone.ico" rel="apple-touch-icon" sizes="180x180" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check" checked>
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
      <div class="mobile_nav_items">
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/index.php"><i class="fas fa-home"></i><span>Página Inicial</span></a>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/quemsomos.php"><i class="fas fa-info-circle"></i><span>Quem somos?</span></a>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/empresas.php"><i class="fas fa-university"></i><span>Para empresas</span></a>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/parceiros.php"><i class="fas fa-info-circle"></i><span>Dúvidas Frequentes</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/index.php"><i class="fas fa-home"></i><span>Página Inicial</span></a>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/quemsomos.php"><i class="fas fa-info-circle"></i><span>Quem somos?</span></a>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/empresas.php"><i class="fas fa-university"></i><span>Para empresas</span></a>
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/parceiros.php"><i class="fas fa-leaf"></i><span>Dúvidas Frequentes</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card1">
        <table>
          <th class="titulo" style="font-size:32pt">
            Quer contratar um serviço <br>para sua empresa?
          <th>
        </table>
      </div>
        
    <div class="card">
        <h4>Faça sua empresa render mais e ter mais confiança</h4>
        <p class="texto-quebra2">Temos pacotes com atendimentos psicológicos, nutricionistas, meditações, reiki e atendimento de médicos particulares.</p>
        
        <img style="display:inline-block;magin 10%;width:30%" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/imagem/image.jpg" alt="terapia-online">
        <p class="nutri">Descrição</p>  
    </div>
     <div class="card1">
        <h4 class="titulo2">Conheça a equipe</h4>
        <p class="nutri-text6">Nossa Equipe está sempre pronta para te atender, conheça mais<br> um pouco de cada um deles.</p>
                  <div class="delado">
                    <img style="magin 10%;width:30%" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/imagem/Gisele.jpeg" alt="terapia-online">
                    <br>Gisele - professora de meditação
                  </div>
                  <div class="delado">  
                    <img style="magin 10%;width:30%" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/imagem/Mara.jpeg" alt="terapia-online">
                    <br>Mara - Psicóloga
                  </div> 
                  <div class="delado"> 
                    <img style="magin 10%;width:30%" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/imagem/thiago.jpeg" alt="terapia-online">
                    <br>Tiago - criador e publicador do site
                  </div>
    </div>

    <div class="card">
        <h4 class="titulo2">Faça parte da equipe!</h4>
        <p class="nutri-text6">Escreva uma descrição breve sobre o que você espera de um membro da equipe.</p>

        <div class="centro">
            <button class="btn">Candidate-se agora!</button>
        </div>
    </div>
      <div class="card1" height="100%">
        <p class="foot"> terapiasintegradasonline@gmail.com   |  (51) 98172-7701 </p>
      </div>
        

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>