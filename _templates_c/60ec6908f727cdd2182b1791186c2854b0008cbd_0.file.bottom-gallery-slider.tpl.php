<?php
/* Smarty version 4.3.4, created on 2024-01-15 15:32:47
  from '/var/www/blog_test/_templates/bottom-gallery-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a5501fa8b135_89035971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ec6908f727cdd2182b1791186c2854b0008cbd' => 
    array (
      0 => '/var/www/blog_test/_templates/bottom-gallery-slider.tpl',
      1 => 1705326161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a5501fa8b135_89035971 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="bottom-gallery-slider">
      <div class="container pt-5 pb-5">
        <div id="gallery" class="carousel slide" data-ride="carousel">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#gallery"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#gallery"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#gallery"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col border-right-1">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/caa8f5/ffffff?text=Image+1"
                    alt="Image 1"
                  />
                </div>
                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/9984d4/ffffff?text=Image+2"
                    alt="Image 2"
                  />
                </div>
                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/592e83/ffffff?text=Image+3"
                    alt="Image 3"
                  />
                </div>
                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/230c33/ffffff?text=Image+4"
                    alt="Image 4"
                  />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/f35b04/ffffff?text=Image+5"
                    alt="Image 5"
                  />
                </div>

                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/f18701/ffffff?text=Image+6"
                    alt="Image 6"
                  />
                </div>

                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/f7b801/ffffff?text=Image+7"
                    alt="Image 7"
                  />
                </div>

                <div class="col">
                  <img
                    class="img-fluid"
                    src="http://via.placeholder.com/800x450/7678ed/ffffff?text=Image+8"
                    alt="Image 8"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><?php }
}
