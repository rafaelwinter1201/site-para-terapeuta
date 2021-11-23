<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
          <th class="titulo">
            Seja nosso parceiro e divulgue o seu trabalho na nossa plataforma. 
          <th>
        </table>
        <label>Selecione uma pergunta!</label>
      </div>

      <div class="card">
        <div class='question'>
          <input type='checkbox' id='question-1'>
          <label for='question-1'>Como faço para me afiliar a plataforma?</label>
          
          <div class='answer'>
            Basta realizar a sua inscrição!
          </div>
        </div>

        <div class='question'>
          <input type='checkbox' id='question-2'>
          <label for='question-2'>Posso trazer os meus clientes para atendê-los na plataforma?</label>
          
          <div class='answer'>
            Pode sim. Não haverá problema algum em você ter os seus clientes sendo atendidos aqui na plataforma connosco.
          </div>
        </div>

        <div class='question'>
          <input type='checkbox' id='question-3'>
          <label for='question-3'>Realizei o pagamento por boleto. Quando a minha consulta vai ser liberada?</label>
          
          <div class='answer'>
            Assim que recebermos o comprovante do seu pagamento a sua consulta já será liberada na hora.
          </div>
        </div>
        
        <div class='question'>
          <input type='checkbox' id='question-4'>
          <label for='question-4'>Posso agendar a minha consulta antes da confirmação de pagamento do boleto bancário?</label>
          
          <div class='answer'>
            É necessário aguardar até a confirmação do pagamento para que consiga agendar a sua consulta.
          </div>
		  </div>

        <div class='question'>
          <input type='checkbox' id='question-5'>
          <label for='question-5'>O atendimento é imediato ou agendado?</label>
          
          <div class='answer'>
            Isso será de acordo com a disponibilidade da agenda dos profissionais associados. Se houver disponibilidade para um atendimento imediato, será encaixado, senão será-lhe informado o momento mais próximo disponível.
          </div>
        </div>

        <div class='question'>
          <input type='checkbox' id='question-6'>
          <label for='question-6'>Sou psicólogo(a) e quero trabalhar na central psicologia. Como faço o meu cadastro?</label>
          
          <div class='answer'>
            Basta clicar em trabalhe connosco e você será direcionado a pagina de cadastro.
          </div>
        </div>

        <div class='question'>
          <input type='checkbox' id='question-7'>
          <label for='question-7'>Emitem nota fiscal ou recibo para imposto de renda?</label>
          
          <div class='answer'>
            No momento ainda não, mas trabalhamos para futuramente termos também essa opção a oferecer-lhe!
          </div>
        </div>

        <div class='question'>
          <input type='checkbox' id='question-8'>
          <label for='question-8'>Não tenho como pagar por uma consulta. Pode me atender de graça?</label>
          
          <div class='answer'>
            Nesse caso você pode entrar em contacto via chat e será encaminhado a uma “entrevista” para entender a sua situação e verificarmos como poderíamos lhe auxiliar nessa questão.
          </div>
        </div>

        <div class='question' style="margin-bottom: 10%;">
          <input type='checkbox'  id='question-9'>
          <label for='question-9'>Existe um plano mensal ou anual?</label>
          
          <div class='answer'>
            Sim existem. Voce pode ver na nossa pagina <a> aqui!</a>
          </div>
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