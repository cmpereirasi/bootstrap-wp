<?php get_header(); ?>
<section class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="media midia-web-design">
          <span class="pull-left">
            <img src="<?php echo get_template_directory_uri() . '/images/icon-webdesign.png'?>" alt="services web design" />
          </span>
          <div class="media-body">
            <h4 class="media-heading">Web Design</h4>
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="media media-mobile-design">
          <span class="pull-left">
            <img src="<?php echo get_template_directory_uri() . '/images/icon-mobiledesign.png' ?>" alt="services mobile design" class=""/>
          </span>
          <div class="media-body">
            <h4 class="media-heading">Mobile Design</h4>
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="media media-photography">
          <span class="pull-left">
            <img src="<?php echo get_template_directory_uri() . '/images/icon-photography.png' ?>" alt="services for Photography" class=""/>
          </span>
          <div class="media-body">
            <h4 class="media-heading">Photography</h4>
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> <!--end services-->

<section class="featured-work">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="work-info">
          <h2>1stWebDesigner</h2>
            <div class="meta">October 10, 2014</div>
            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            <ul>
              <li>
                <span>CLIENT</span>
                <p>Dainis Graveris</p>
              </li>
              <li>
                <span>ROLE</span>
                <p>Designer</p>
              </li>
              <li>
                <span>TOOLS</span>
                <p>Photoshop</p>
              </li>
            </ul>
            <a href="#" class="btn btn-default">View Work</a>
      </div><!--end work info-->
    </div>
    <div class="col-sm-6">
        &nbsp;
    </div>
    <img src="<?php echo get_template_directory_uri() . '/images/image-featured.png'?>" class="home-featured-image"alt="mac for work design" />

  </div>
</section>

<section class="stay-connected">
  <div class="container">
    <div class="heading">
      <h1>Say <span class="heighlught">Hello.</span></h1>
      <p>I'd love to hear from you.</p>
  </div>
  <div class="social-icons-home">
    <a href="#"><i class="fa fa-envelope"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-dribbble"></i></a>
  </div>
</div><!--end container-->
</section><!--end stay-connected-->
<?php get_footer(); ?>
