<?php
/* Smarty version 4.3.4, created on 2024-01-15 15:31:11
  from '/var/www/blog_test/_templates/top-gallery-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a54fbfc5b108_46793668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7af37c2c6a7f7db469cf4591e46b60c9b85a18' => 
    array (
      0 => '/var/www/blog_test/_templates/top-gallery-slider.tpl',
      1 => 1705326060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a54fbfc5b108_46793668 (Smarty_Internal_Template $_smarty_tpl) {
?>  <section
      id="top-gallery-slider"
      class="pt-5 pb-5"
      style="background-color: #82e4ed"
    >
      <div
        id="carouselExampleIndicators"
        class="carousel slide container"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/includes/blue-img.jpg" class="w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="/includes/blue-img.jpg" class="w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="/includes/blue-img.jpg" class="w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="/includes/blue-img.jpg" class="w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="/includes/blue-img.jpg" class="w-100" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section><?php }
}
