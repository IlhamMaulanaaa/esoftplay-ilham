# LOGO #
<div class="navbar-header">
  <a href="/" class="navbar-brand"><img src="/ilham/templates/hostpro_blue/assets/icons/logo-white.png" alt="" class="logo-img"></a>
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
    <span class="sr-only">Nav Opener</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>


# TOP #
<ul class="navbar-nav nav navbar-right">
  <li class="active"><a href="/">Home</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="blog-post.php">Blog Post</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#">Buy Pro Version</a></li>
</ul>


# HEADER #
<div class="home-slider">
  <div class="item" data-slide="assets/images/slide1.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-11 col-md-8 col-lg-7">
          <h2 class="slide-title">Which <strong>Hosting Service</strong> is <strong>Right</strong>
            for You?</h2>
          <p>More than one million websites depend on hostpro's premium web hosting and cloud
            services.</p>
          <a href="#" class="btn btn-primary">view plans</a>
          <a href="#" class="link">Need Help?</a>
        </div>
      </div>
    </div>
  </div>
  <div class="item" data-slide="assets/images/slide2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 col-lg-6">
          <h2 class="slide-title slide-title2"><strong>Unlimited Hosting</strong></h2>
          <h3>More than <strong>One Million Websites</strong> depend on Our <strong>Web
              Hosting</strong> &amp; <strong>Cloud Services</strong>.</h3>
          <ul class="nav slide-flist">
            <li>Host up to 100 websites</li>
            <li>SSD database storage</li>
            <li>1TB monthly bandwidth</li>
            <li>20 GB SSD storage</li>
            <li>1000 email addresses</li>
            <li>24/7/365 live support</li>
          </ul>
          <a href="#" class="btn btn-primary">learn more</a>
          <a href="#" class="link">view plans</a>
        </div>
      </div>
    </div>
  </div>
</div>


# INTRO #
<form method="post" class="row domain-search bg-pblue" id="block_search<?php echo $block->id ?>" action="" role="form">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2 class="form-title">Find Your <strong>Dream Domain</strong></h2>
        <p>Search for your dream domain now</p>
      </div>
      <div class="col-md-9">
        <div class="input-group">
          <input type="text" class="form-control input-sm  form-control-sm" name="keyword" value="<?php echo $value; ?>" placeholder="<?php echo $placeholder; ?>" />
          <span class="input-group-addon"><input type="submit" value="Search" class="btn btn-primary"></span>
        </div>
        <p>.com <strong>$8.95</strong>.net <strong>$7.95</strong>.org <strong>$9.95</strong>.club <strong>$0.99</strong></p>
      </div>
    </div>
  </div>
</form>


# CONTENT #
<?php echo trim($Bbc->content); ?>


# CONTENT_TOP #
<section class="row hosting-services-tabs-section">
  <div class="container">
    <ul class="nav nav-tabs nav-justified hstab" role="tablist">
      <li role="presentation" class="active"><a href="#hst-1" aria-controls="hst-1" role="tab" data-toggle="tab">WordPress Hosting</a></li>
      <li role="presentation"><a href="#hst-2" aria-controls="hst-2" role="tab" data-toggle="tab">Shared Hosting</a></li>
      <li role="presentation"><a href="#hst-3" aria-controls="hst-3" role="tab" data-toggle="tab">VPS Hosting</a></li>
      <li role="presentation"><a href="#hst-4" aria-controls="hst-4" role="tab" data-toggle="tab">Dedicated Hosting</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content hst-contents">
      <div role="tabpanel" class="tab-pane active" id="hst-1">
        <div class="row">
          <div class="col-md-7">
            <h3 class="au-title">Awesome Wordpress <strong>Hosting Services</strong> from HostPro <strong>Fast. Reliable</strong>. and <strong>Easy to Use</strong></h3>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
            <a href="#" class="more-link">More about Wordpress Hosting <i class="fa fa-angle-double-right"></i></a>
            <div class="media service-quote">
              <div class="media-left"><a href="#" class="media-object"><img src="/ilham/templates/hostpro_blue/assets/images/service-quote.png" alt="HostPro Client image" class="img-circle"></a></div>
              <div class="media-body">
                <p><em>Love the support from HostPro team! WordPress hosting boosted my theme business.</em></p>
                <h4>Jane Sanders</h4>
                <h5>Themeworks</h5>
              </div>
              <div class="media-right"><span class="media-object"><img src="/ilham/templates/hostpro_blue/assets/icons/service-quote2.png" alt="HostPro Service Quote Sign"></span></div>
            </div>
          </div>
          <div class="col-md-5 col-plan">
            <div class="hst-plan row">
              <ul class="plan-list nav">
                <li><i class="fa fa-bolt"></i><strong>Fast &amp; Simple</strong> WordPress Hosting</li>
                <li><i class="fa fa-mouse-pointer"></i><strong>1-Click Staging</strong> Environment</li>
                <li><i class="fa fa-gear"></i>All-in-One Control Panel</li>
                <li><i class="fa fa-tachometer"></i>Host up to <strong>100 Websites</strong></li>
                <li><i class="fa fa-gear"></i><strong>1TB Monthly</strong> Bandwidth</li>
                <li><i class="fa fa-gear"></i><strong>20 GB SSD</strong> Storage</li>
                <li><i class="fa fa-life-bouy"></i>24/7/365 <strong>Live Support</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  Price starting from <span class="price"><sup>$</sup>20<sub>/month</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="hst-2">
        <div class="row">
          <div class="col-md-7">
            <h3>Awesome Shared <strong>Hosting Services</strong> from HostPro <strong>Fast. Reliable</strong>. and <strong>Easy to Use</strong></h3>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
            <a href="#" class="more-link">More about Wordpress Hosting <i class="fa fa-angle-double-right"></i></a>
            <div class="media service-quote">
              <div class="media-left"><a href="#" class="media-object"><img src="/ilham/templates/hostpro_blue/assets/images/service-quote.png" alt="HostPro Client image" class="img-circle"></a></div>
              <div class="media-body">
                <p><em>Love the support from HostPro team! WordPress hosting boosted my theme business.</em></p>
                <h4>Jane Sanders</h4>
                <h5>Themeworks</h5>
              </div>
              <div class="media-right"><span class="media-object"><img src="/ilham/templates/hostpro_blue/assets/icons/service-quote2.png" alt="HostPro Service Quote Sign"></span></div>
            </div>
          </div>
          <div class="col-md-5 col-plan">
            <div class="hst-plan row">
              <ul class="plan-list nav">
                <li><i class="fa fa-bolt"></i><strong>Fast &amp; Simple</strong> WordPress Hosting</li>
                <li><i class="fa fa-mouse-pointer"></i><strong>1-Click Staging</strong> Environment</li>
                <li><i class="fa fa-gear"></i>All-in-One Control Panel</li>
                <li><i class="fa fa-tachometer"></i>Host up to <strong>100 Websites</strong></li>
                <li><i class="fa fa-gear"></i><strong>1TB Monthly</strong> Bandwidth</li>
                <li><i class="fa fa-gear"></i><strong>20 GB SSD</strong> Storage</li>
                <li><i class="fa fa-life-bouy"></i>24/7/365 <strong>Live Support</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  Price starting from <span class="price"><sup>$</sup>20<sub>/month</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="hst-3">
        <div class="row">
          <div class="col-md-7">
            <h3>Awesome VPS <strong>Hosting Services</strong> from HostPro <strong>Fast. Reliable</strong>. and <strong>Easy to Use</strong></h3>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
            <a href="#" class="more-link">More about Wordpress Hosting <i class="fa fa-angle-double-right"></i></a>
            <div class="media service-quote">
              <div class="media-left"><a href="#" class="media-object"><img src="/ilham/templates/hostpro_blue/assets/images/service-quote.png" alt="HostPro Client image" class="img-circle"></a></div>
              <div class="media-body">
                <p><em>Love the support from HostPro team! WordPress hosting boosted my theme business.</em></p>
                <h4>Jane Sanders</h4>
                <h5>Themeworks</h5>
              </div>
              <div class="media-right"><span class="media-object"><img src="/ilham/templates/hostpro_blue/assets/icons/service-quote2.png" alt="HostPro Service Quote Sign"></span></div>
            </div>
          </div>
          <div class="col-md-5 col-plan">
            <div class="hst-plan row">
              <ul class="plan-list nav">
                <li><i class="fa fa-bolt"></i><strong>Fast &amp; Simple</strong> WordPress Hosting</li>
                <li><i class="fa fa-mouse-pointer"></i><strong>1-Click Staging</strong> Environment</li>
                <li><i class="fa fa-gear"></i>All-in-One Control Panel</li>
                <li><i class="fa fa-tachometer"></i>Host up to <strong>100 Websites</strong></li>
                <li><i class="fa fa-gear"></i><strong>1TB Monthly</strong> Bandwidth</li>
                <li><i class="fa fa-gear"></i><strong>20 GB SSD</strong> Storage</li>
                <li><i class="fa fa-life-bouy"></i>24/7/365 <strong>Live Support</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  Price starting from <span class="price"><sup>$</sup>20<sub>/month</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="hst-4">
        <div class="row">
          <div class="col-md-7">
            <h3>Awesome Dedicated <strong>Hosting Services</strong> from HostPro <strong>Fast. Reliable</strong>. and <strong>Easy to Use</strong></h3>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
            <a href="#" class="more-link">More about Wordpress Hosting <i class="fa fa-angle-double-right"></i></a>
            <div class="media service-quote">
              <div class="media-left"><a href="#" class="media-object"><img src="/ilham/templates/hostpro_blue/assets/images/service-quote.png" alt="HostPro Client image" class="img-circle"></a></div>
              <div class="media-body">
                <p><em>Love the support from HostPro team! WordPress hosting boosted my theme business.</em></p>
                <h4>Jane Sanders</h4>
                <h5>Themeworks</h5>
              </div>
              <div class="media-right"><span class="media-object"><img src="/ilham/templates/hostpro_blue/assets/icons/service-quote2.png" alt="HostPro Service Quote Sign"></span></div>
            </div>
          </div>
          <div class="col-md-5 col-plan">
            <div class="hst-plan row">
              <ul class="plan-list nav">
                <li><i class="fa fa-bolt"></i><strong>Fast &amp; Simple</strong> WordPress Hosting</li>
                <li><i class="fa fa-mouse-pointer"></i><strong>1-Click Staging</strong> Environment</li>
                <li><i class="fa fa-gear"></i>All-in-One Control Panel</li>
                <li><i class="fa fa-tachometer"></i>Host up to <strong>100 Websites</strong></li>
                <li><i class="fa fa-gear"></i><strong>1TB Monthly</strong> Bandwidth</li>
                <li><i class="fa fa-gear"></i><strong>20 GB SSD</strong> Storage</li>
                <li><i class="fa fa-life-bouy"></i>24/7/365 <strong>Live Support</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  Price starting from <span class="price"><sup>$</sup>20<sub>/month</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Why Choose Us-->
<section class="row why-choose-us">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Why Choose Us</h2>
      <p>It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 why-to-choose">
        <div class="row wtc-inner text-center">
          <div class="row wtc-icon"><img src="/ilham/templates/hostpro_blue/assets/icons/wc1.png" alt="HostPro Service Icon"></div>
          <h2 class="h4 wtc-title">Client Value</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
          <a href="#" class="wtc-read-more">Read More</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 why-to-choose">
        <div class="row wtc-inner text-center">
          <div class="row wtc-icon"><img src="/ilham/templates/hostpro_blue/assets/icons/wc2.png" alt="HostPro Service Icon"></div>
          <h2 class="h4 wtc-title">Reliable Service</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
          <a href="#" class="wtc-read-more">Read More</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 why-to-choose">
        <div class="row wtc-inner text-center">
          <div class="row wtc-icon"><img src="/ilham/templates/hostpro_blue/assets/icons/wc3.png" alt="HostPro Service Icon"></div>
          <h2 class="h4 wtc-title">Innovate at Work</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
          <a href="#" class="wtc-read-more">Read More</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 why-to-choose">
        <div class="row wtc-inner text-center">
          <div class="row wtc-icon"><img src="/ilham/templates/hostpro_blue/assets/icons/wc4.png" alt="HostPro Service Icon"></div>
          <h2 class="h4 wtc-title">Fast SSD Servers</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
          <a href="#" class="wtc-read-more">Read More</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 why-to-choose">
        <div class="row wtc-inner text-center">
          <div class="row wtc-icon"><img src="/ilham/templates/hostpro_blue/assets/icons/wc5.png" alt="HostPro Service Icon"></div>
          <h2 class="h4 wtc-title">Contsant Updates</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
          <a href="#" class="wtc-read-more">Read More</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 why-to-choose">
        <div class="row wtc-inner text-center">
          <div class="row wtc-icon"><img src="/ilham/templates/hostpro_blue/assets/icons/wc6.png" alt="HostPro Service Icon"></div>
          <h2 class="h4 wtc-title">Largest Network</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.</p>
          <a href="#" class="wtc-read-more">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>


# CONTENT_BOTTOM #
<!--Call to Action-->
<section class="row c2a-plan">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <h2 class="h1 c2ap-title"><strong>HostPro</strong> Gives you <strong>Ease</strong> &amp; <strong>Flexibility</strong></h2>
        <ul class="nav c2ap-list">
          <li><i class="fa fa-bolt"></i><strong>Fast &amp; Simple</strong> WordPress Hosting</li>
          <li><i class="fa fa-mouse-pointer"></i><strong>1-Click Staging</strong> Environment</li>
          <li><i class="fa fa-gear"></i>All-in-One <strong>Control</strong> Panel</li>
        </ul>
        <a href="#" class="btn btn-primary">View Plan</a>
      </div>
    </div>
  </div>
</section>
<!--Pricing Tabs-->
<section class="row pricing-tabs-section">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Pricing</h2>
    </div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs pricing-tab" role="tablist">
      <li role="presentation" class="active"><a href="#pricing-tab1" aria-controls="pricing-tab1" role="tab" data-toggle="tab">WordPress Hosting</a></li>
      <li role="presentation"><a href="#pricing-tab2" aria-controls="pricing-tab2" role="tab" data-toggle="tab">Shared Hosting</a></li>
      <li role="presentation"><a href="#pricing-tab3" aria-controls="pricing-tab3" role="tab" data-toggle="tab">VPS Hosting</a></li>
      <li role="presentation"><a href="#pricing-tab4" aria-controls="pricing-tab4" role="tab" data-toggle="tab">Dedicated Hosting</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content pricing-tab-contents">
      <div role="tabpanel" class="tab-pane active fade in" id="pricing-tab1">
        <div class="row">
          <div class="col-sm-4 pricing-plan green">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Personal</h2>
              <ul class="nav pp-list">
                <li><strong>30GB SSD</strong> Storage</li>
                <li><strong>400,000</strong> Monthly Visitors</li>
                <li>Up to <strong>2 Sites</strong></li>
                <li><strong>1 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>2 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>20 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan primary">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Studio</h2>
              <ul class="nav pp-list">
                <li><strong>100GB SSD</strong> Storage</li>
                <li><strong>2 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>10 Sites</strong></li>
                <li><strong>2 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>5 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>60 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan blue">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Agency</h2>
              <ul class="nav pp-list">
                <li><strong>500GB SSD</strong> Storage</li>
                <li><strong>10 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>50 Sites</strong></li>
                <li><strong>5 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>10 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>240 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="pricing-tab2">
        <div class="row">
          <div class="col-sm-4 pricing-plan green">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Personal</h2>
              <ul class="nav pp-list">
                <li><strong>30GB SSD</strong> Storage</li>
                <li><strong>400,000</strong> Monthly Visitors</li>
                <li>Up to <strong>2 Sites</strong></li>
                <li><strong>1 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>2 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>20 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan primary">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Studio</h2>
              <ul class="nav pp-list">
                <li><strong>100GB SSD</strong> Storage</li>
                <li><strong>2 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>10 Sites</strong></li>
                <li><strong>2 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>5 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>60 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan blue">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Agency</h2>
              <ul class="nav pp-list">
                <li><strong>500GB SSD</strong> Storage</li>
                <li><strong>10 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>50 Sites</strong></li>
                <li><strong>5 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>10 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>240 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="pricing-tab3">
        <div class="row">
          <div class="col-sm-4 pricing-plan green">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Personal</h2>
              <ul class="nav pp-list">
                <li><strong>30GB SSD</strong> Storage</li>
                <li><strong>400,000</strong> Monthly Visitors</li>
                <li>Up to <strong>2 Sites</strong></li>
                <li><strong>1 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>2 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>20 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan primary">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Studio</h2>
              <ul class="nav pp-list">
                <li><strong>100GB SSD</strong> Storage</li>
                <li><strong>2 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>10 Sites</strong></li>
                <li><strong>2 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>5 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>60 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan blue">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Agency</h2>
              <ul class="nav pp-list">
                <li><strong>500GB SSD</strong> Storage</li>
                <li><strong>10 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>50 Sites</strong></li>
                <li><strong>5 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>10 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>240 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="pricing-tab4">
        <div class="row">
          <div class="col-sm-4 pricing-plan green">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Personal</h2>
              <ul class="nav pp-list">
                <li><strong>30GB SSD</strong> Storage</li>
                <li><strong>400,000</strong> Monthly Visitors</li>
                <li>Up to <strong>2 Sites</strong></li>
                <li><strong>1 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>2 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>20 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan primary">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Studio</h2>
              <ul class="nav pp-list">
                <li><strong>100GB SSD</strong> Storage</li>
                <li><strong>2 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>10 Sites</strong></li>
                <li><strong>2 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>5 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>60 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 pricing-plan blue">
            <div class="pp-inner row">
              <h2 class="h4 pp-title">Agency</h2>
              <ul class="nav pp-list">
                <li><strong>500GB SSD</strong> Storage</li>
                <li><strong>10 Millions</strong> Monthly Visitors</li>
                <li>Up to <strong>50 Sites</strong></li>
                <li><strong>5 Google Apps</strong> for Work user accounts</li>
                <li>Malware Detection &amp; Removal for <strong>10 Sites</strong></li>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">
                  <span class="price"><sup>$ </sup>240 <sub>monthly</sub></span>
                </div>
                <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Client testimonial-->
<section class="row customer-testimonial-section">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Customer Testimonial</h2>
    </div>
    <div id="customer-testimonial" class="customer-testimonial carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators ct-indicator imgv">
        <li data-target="#customer-testimonial" data-slide-to="0"><img src="/ilham/templates/hostpro_blue/assets/images/ct1.jpg" alt="Customer Image"></li>
        <li data-target="#customer-testimonial" data-slide-to="1" class="active"><img src="/ilham/templates/hostpro_blue/assets/images/ct3.jpg" alt="Customer Image"></li>
        <li data-target="#customer-testimonial" data-slide-to="2"><img src="/ilham/templates/hostpro_blue/assets/images/ct2.jpg" alt="Customer Image"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item carousel-item" data-slide-no="0">
          <p><em>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</em></p>
          <h3 class="ct-customer-name">Jane Sanders</h3>
          <h5 class="ct-customer-title">CEO, Theme Designer</h5>
        </div>
        <div class="item carousel-item active" data-slide-no="1">
          <p><em>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</em></p>
          <h3 class="ct-customer-name">Jane Sanders</h3>
          <h5 class="ct-customer-title">CEO, Theme Designer</h5>
        </div>
        <div class="item carousel-item" data-slide-no="2">
          <p><em>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</em></p>
          <h3 class="ct-customer-name">Jane Sanders</h3>
          <h5 class="ct-customer-title">CEO, Theme Designer</h5>
        </div>
      </div>
    </div>
    <!-- Indicators -->
    <ul class="carousel-indicators ct-indicator dotv">
      <li data-target="#customer-testimonial" data-slide-to="0" class="myCarousel-target"></li>
      <li data-target="#customer-testimonial" data-slide-to="1" class="myCarousel-target active"></li>
      <li data-target="#customer-testimonial" data-slide-to="2" class="myCarousel-target"></li>
    </ul>
  </div>
</section>


# BOTTOM #
<section class="row latest-blogs">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Latest from Blog</h2>
    </div>
    <div class="row">
      <div class="col-sm-4 latest-post">
        <img src="/ilham/templates/hostpro_blue/assets/images/lpost1.jpg" alt="A galley of type and scrambled it to make a type." class="img-responsive">
        <div class="lp-inner row">
          <ul class="lp-meta list-unstyled">
            <li class="lp-cat"><em>in</em> <a href="#">data</a>, <a href="#">ssd</a>, <a href="#">intel</a></li>
            <li class="lp-date"><a href="#">Feb 18, 2016</a></li>
          </ul>
          <a href="blog-post.php">
            <h2 class="lp-title">A galley of type and scrambled it to make a type.</h2>
          </a>
        </div>
      </div>
      <div class="col-sm-4 latest-post">
        <img src="/ilham/templates/hostpro_blue/assets/images/lpost2.jpg" alt="Lorem Ipsum has been the industry's standard." class="img-responsive">
        <div class="lp-inner row">
          <ul class="lp-meta list-unstyled">
            <li class="lp-cat"><em>in</em> <a href="#">data</a>, <a href="#">ssd</a>, <a href="#">intel</a></li>
            <li class="lp-date"><a href="#">Feb 18, 2016</a></li>
          </ul>
          <a href="blog-post.php">
            <h2 class="lp-title">Lorem Ipsum has been the industry's standard.</h2>
          </a>
        </div>
      </div>
      <div class="col-sm-4 latest-post">
        <img src="/ilham/templates/hostpro_blue/assets/images/lpost3.jpg" alt="A galley of type and scrambled it to make a type." class="img-responsive">
        <div class="lp-inner row">
          <ul class="lp-meta list-unstyled">
            <li class="lp-cat"><em>in</em> <a href="#">data</a>, <a href="#">ssd</a>, <a href="#">intel</a></li>
            <li class="lp-date"><a href="#">Feb 18, 2016</a></li>
          </ul>
          <a href="blog-post.php">
            <h2 class="lp-title">A galley of type and scrambled it to make a type.</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Clients-->
<section class="row client-logos">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Client Logos</h2>
    </div>
    <div class="row">
      <div class="col-sm-2 client-logo"><a href="/" data-toggle="tooltip" data-placement="top" title="Adobe"><img src="/ilham/templates/hostpro_blue/assets/images/client1.png" alt="Adobe"></a></div>
      <div class="col-sm-2 client-logo"><a href="/" data-toggle="tooltip" data-placement="top" title="Huawei"><img src="/ilham/templates/hostpro_blue/assets/images/client2.png" alt="Huawei"></a></div>
      <div class="col-sm-2 client-logo"><a href="/" data-toggle="tooltip" data-placement="top" title="One Plus"><img src="/ilham/templates/hostpro_blue/assets/images/client3.png" alt="One Plus"></a></div>
      <div class="col-sm-2 client-logo"><a href="/" data-toggle="tooltip" data-placement="top" title="Mitsubishi"><img src="/ilham/templates/hostpro_blue/assets/images/client4.png" alt="Mitsubishi"></a></div>
      <div class="col-sm-2 client-logo"><a href="/" data-toggle="tooltip" data-placement="top" title="Samsung"><img src="/ilham/templates/hostpro_blue/assets/images/client5.png" alt="Samsung"></a></div>
      <div class="col-sm-2 client-logo"><a href="/" data-toggle="tooltip" data-placement="top" title="Under Armour"><img src="/ilham/templates/hostpro_blue/assets/images/client6.png" alt="Under Armour"></a></div>
    </div>
  </div>
</section>


# FOOTER #
<footer id="footer" class="site-footer">
  <!--Footer Top-->
  <section class="row site-footer-top">
    <div class="container">
      <div class="row">
        <div class="media">
          <div class="col-sm-3 media-left">
            <a href="/" class="media-object"><img src="/ilham/templates/hostpro_blue/assets/icons/logo-white.png" alt="HostPro Logo">&copy; 2018</a>
          </div>
          <div class="col-sm-9 media-body">
            <p>All Rights Reserved by HostPro. Designed and Developed by <a href="https://bootstrapmart.com/">BootstrapMart</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Footer Bottom-->
  <section class="row site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 widget-footer">
          <h4 class="widget-title">Quick Links</h4>
          <div class="row widget-content">
            <ul class="menu">
              <li><a href="/">Home Page</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="blog-post.php">Blog Details</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="#">Quick Pages</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 widget-footer">
          <h4 class="widget-title">Stay Connected</h4>
          <div class="row widget-content">
            <p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque</p>
            <ul class="list-unstyled fsocial">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5 widget-footer">
          <h4 class="widget-title">Sign Up for Our Newsletter</h4>
          <div class="row widget-content">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem working accusantium doloremque laudantium, totam.</p>
            <form action="#" class="input-group footer-subscribe-form">
              <input type="email" class="form-control">
              <span class="input-group-addon"><button type="submit" class="btn btn-primary">subscribe</button></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>