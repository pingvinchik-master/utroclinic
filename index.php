<!doctype html>
<html class="no-js">
<head>
  <title>
    Клиника "Утро"
  </title>
  <link rel="stylesheet/less" type="text/css" href="style.less">
  <script src="less/dist/less.js" type="text/javascript"></script>
  <script src="js/modernizr-custom.js"></script>
  <link rel="stylesheet" type="text/css" href="js/slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="js/slick/slick/slick-theme.css"/>  
  
</head>
<body>
<div class="header">
  <div class="header__inner">
    <? include('content/header.html') ?>

	<div class="fade">
      <img src="images/slide_01.png">
	  <img src="images/slide_01.png">
	  <img src="images/slide_01.png">
    </div>

  </div>  
</div>


<div class="container">
  

  <div class="content-wrapper">
    <div class="sidebar-left">
      <? include('content/sidebar-left.html') ?>
	</div>
    <div class="content">
	  <div class="content-banners">
	    <div class="content-banners__item  content-banners__item--discounts">
	      <div class="content-banners__title  content-banners__title--odd">
		    Посетителям из других регионов скидка ХХ %
		  </div>
	    </div>
	    <div class="content-banners__item  content-banners__item--cheap">
	      <div class="content-banners__title  content-banners__title--even">
		    К нам приезжают из Москвы, потому что у нас недорого
		  </div>
	    </div>
	  </div>
      <div class="multiple-items">
        <div><img src="images/diplom.jpg"></div>
        <div><img src="images/diplom.jpg"></div>
        <div><img src="images/diplom.jpg"></div>
	    <div><img src="images/diplom.jpg"></div>
      </div>	  
      <p>
	    Центр создан для оказания высококвалифицированной медицинской помощи пациентам с хирургической патологией. Наибольших результатов специалисты центра достигли в лечении заболеваний щитовидной железы, паращитовидных желез и надпочечников. Центр располагает уникальным диагностическим и лечебным оборудованием.
      </p>
	  <p>
        Развитие медицины сопровождается непрерывным увеличением количества врачебных специальностей. Это связано прежде всего с быстрым накоплением знаний, появлением сложной медицинской техники, ростом уровня требований к качеству медицинской помощи. Поэтому даже крупные больницы не способны оказывать лечебно-диагностические услуги по всем разделам медицины. Неизбежна специализация. Наш медицинский центр предназначен для оказания помощи лицам с любой патологией щитовидной железы. Наши специалисты активно используют малоинвазивные неоперативные методы лечения тиреоидной патологии. Особенно широко используется чрескожная склерозирующая терапия этанолом для лечения узлового коллоидного зоба.
      </p>
	  <p>
        Диагностика
      </p>
	  <p>
        Эффективное лечение невозможно без точной диагностики заболевания. При внешнем сходстве клинических проявлений причины проблем со здоровьем могут быть разными. Поэтому получать ответы на вопросы "Почему болит голова?" или "Увеличена ли у меня щитовидная железа?" разумнее всего у соответствующих врачей-специалистов. Советы знакомых или соседей, имеющих схожие проблемы, часто лишь приводят к отсрочке необходимой консультации специалиста. Диагностические возможности современной медицины велики. Но выбор необходимых исследований возможен лишь при глубоком знаниии проблемы и большом клиническом опыте.
	  </p>
      	  
      <div class="multiple-items">
        <div><img src="images/diplom.jpg"></div>
        <div><img src="images/diplom.jpg"></div>
        <div><img src="images/diplom.jpg"></div>
	    <div><img src="images/diplom.jpg"></div>
      </div>
      	  
    </div>
  </div>
</div>  
  
  
<div class="footer">
  <div class="footer__inner">
    <? include('content/footer.html') ?>
  </div>	
</div>	


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/slick/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.multiple-items').slick({
		infinite: true,  
		arrows: true,
		dots: false,
		autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 3
      });
	});  
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.fade').slick({
        dots: true,
        infinite: true,
        speed: 500,
		autoplay: true,
        autoplaySpeed: 6000,
        fade: true,
        cssEase: 'linear'
      });
	});  
  </script>
</body>
</html>