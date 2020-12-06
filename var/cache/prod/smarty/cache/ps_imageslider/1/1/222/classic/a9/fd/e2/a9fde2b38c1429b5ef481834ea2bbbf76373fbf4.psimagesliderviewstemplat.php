<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-06 16:28:27
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcca43bb78235_98750125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1606918382,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5fcca43bb78235_98750125 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http:///shower-toilet">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/404472bb53c0483ee774f23641e29fe7d3f06850_baner-web.jpg" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">banner</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://shower-toilet">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/d8883d2672a313b5d896783575d7db16ebf8ead7_1889x695-Banner-EDITNEW-01.jpg" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">banner 2</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://shower-toilet">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/fb980e4c14720cfffbe3cb984af6d50261eefeb6_BANNER-1980X825-COVER-1.jpg" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">banner 3</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Nút Carousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Về trước">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Tiếp">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
