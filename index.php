<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fresh Market</title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="fm-header">
    <div class="container">
      <div class="fm-brand pull-left">
        <span class="fm-brand__text">Fresh Market</span>
      </div>
      <div class="fm-menu pull-right">
        <ul>
          <li class="fm-menu-list">
            <a href="#" class="fm-menu-list__link">About</a>
          </li>
          <li class="fm-menu-list">
            <a href="#" class="fm-menu-list__link">Products</a>
          </li>
          <li class="fm-menu-list">
            <a href="#" class="fm-menu-list__link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <section id="main" class="clearfix">
    <div class="container">
      <div class="brand">
        <h1>Fresh Market</h1>
      </div>
    </div>
  </section>
  <section class="identity">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="identity__subtitle">Who we are</h3>
          <p class="identity__p">Fresh market menyediakan kebutuhan buah dan sayur 
            setiap hari. Buah dan sayur yang kami sediakan diambil langsung dari 
            petani.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="products">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="product">
            <div class="product-display">
              <img src="http://www.pngmart.com/files/1/Banana-PNG.png" class="product-display__img"/>
            </div>
            <div class="product-desc">
              <p class="product-desc__p">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
              </p>
              <p class="product-desc__price">
                Rp. 50000
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="product">
            <div class="product-display">
              <img src="http://www.pngmart.com/files/1/Banana-PNG.png" class="product-display__img"/>
            </div>
            <div class="product-desc">
              <p class="product-desc__p">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
              </p>
              <p class="product-desc__price">
                Rp. 50000
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="product">
            <div class="product-display">
              <img src="http://www.pngmart.com/files/1/Banana-PNG.png" class="product-display__img"/>
            </div>
            <div class="product-desc">
              <p class="product-desc__p">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
              </p>
              <p class="product-desc__price">
                Rp. 50000
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php wp_footer(); ?>
  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8081/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>