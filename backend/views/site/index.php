<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$asset = backend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

?>
  <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-primary badge-pill mb-3">Insight</span>
            <h3 class="display-3">Full-Funnel Social Analytics</h3>
            <p class="lead">The time is now for it to be okay to be great. For being a bright color. For standing out.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h6 class="info-title text-uppercase text-primary">Social Conversations</h6>
              <p class="description opacity-8">We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand.</p>
              <a href="javascript:;" class="text-primary">More about us
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="ni ni-atom"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">Analyze Performance</h6>
              <p class="description opacity-8">Don't get your heart broken by people we love, even that we give them all we have. Then we lose family over time. As we live, our hearts turn colder.</p>
              <a href="javascript:;" class="text-primary">Learn about our products
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                <i class="ni ni-world"></i>
              </div>
              <h6 class="info-title text-uppercase text-warning">Measure Conversions</h6>
              <p class="description opacity-8">What else could rust the heart more over time? Blackgold. The time is now for it to be okay to be great. or being a bright color. For standing out.</p>
              <a href="javascript:;" class="text-primary">Check our documentation
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />