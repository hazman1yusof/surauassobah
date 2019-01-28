@extends('layouts.main')

@section('styles')
.carousel .item img {
  max-height: 768px;
  min-width: auto;
}

.card-ttl-header{
    color: white; font-size: x-large;font-family: 'Roboto', -webkit-pictograph; text-shadow: 2px 2px 2px #29480a;
}

@endsection

@section('page')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body" style="padding: 0px">
                <div id="carousel-controls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" alt="" src="thumbnail/christian-joudrey-96208-1500.jpg" data-holder-rendered="true">
                      <div class="carousel-item-background d-none d-md-block"></div>
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="thumbnail/christoph-bengtsson-lissalde-80291-1500.jpg" data-holder-rendered="true">
                      <div class="carousel-item-background d-none d-md-block"></div>
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="thumbnail/clarisse-meyer-122804-1500.jpg" data-holder-rendered="true">
                      <div class="carousel-item-background d-none d-md-block"></div>
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="thumbnail/cristina-gottardi-259243-1500.jpg" data-holder-rendered="true">
                      <div class="carousel-item-background d-none d-md-block"></div>
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="thumbnail/david-klaasen-54203-1500.jpg" data-holder-rendered="true">
                      <div class="carousel-item-background d-none d-md-block"></div>
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </div>

  <div class="row">

    <div class="col-sm-6 col-lg-4">
        <div class="card card-profile">
          <div class="card-status bg-green text-center"><span class="card-ttl-header">Fasiliti Masjid</span></div>
          <div class="card-header text-center p-0" style="background-image: url(css/img/abstract-architecture-attractive-988873.jpg);">
          </div>
          <div class="card-body text-center">
            <img class="card-profile-img" src="css/img/images.jpg">
            <br>
            <button class="btn btn-outline-primary btn-sm" type="button" data-toggle="collapse" data-target="#fasiliti" aria-expanded="false"> 
              Lihat Selanjutnya <span class="fe fe-corner-right-down"></span>
            </button>

            <div class="collapse" id="fasiliti">
                <table class="table card-table">
                <tr>
                  <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                  <td>Google Chrome</td>
                  <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-firefox text-muted"></i></td>
                  <td>Mozila Firefox</td>
                  <td class="text-right"><span class="text-muted">15%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-safari text-muted"></i></td>
                  <td>Apple Safari</td>
                  <td class="text-right"><span class="text-muted">7%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-internet-explorer text-muted"></i></td>
                  <td>Internet Explorer</td>
                  <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-opera text-muted"></i></td>
                  <td>Opera mini</td>
                  <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-edge text-muted"></i></td>
                  <td>Microsoft edge</td>
                  <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
              </table>
            </div>

          </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="card card-profile">
          <div class="card-status bg-green text-center"><span class="card-ttl-header">Ceramah Agama</span></div>
          <div class="card-header" style="background-image: url(css/img/abstract-antique-backdrop-164005.jpg);"></div>
          <div class="card-body text-center">
            <img class="card-profile-img" src="css/img/ceramah_icon.jpeg">
            <br>
            <button class="btn btn-outline-primary btn-sm" type="button" data-toggle="collapse" data-target="#ceramah" aria-expanded="false"> 
              Lihat Selanjutnya <span class="fe fe-corner-right-down"></span>
            </button>

            <div id="ceramah" class="collapse">
                <table class="table card-table" >
                <tr>
                  <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                  <td>Google Chrome</td>
                  <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-firefox text-muted"></i></td>
                  <td>Mozila Firefox</td>
                  <td class="text-right"><span class="text-muted">15%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-safari text-muted"></i></td>
                  <td>Apple Safari</td>
                  <td class="text-right"><span class="text-muted">7%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-internet-explorer text-muted"></i></td>
                  <td>Internet Explorer</td>
                  <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-opera text-muted"></i></td>
                  <td>Opera mini</td>
                  <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-edge text-muted"></i></td>
                  <td>Microsoft edge</td>
                  <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
              </table>
            </div>

          </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card card-profile">
          <div class="card-status bg-green text-center"><span class="card-ttl-header">Ahli Kariah</span></div>
          <div class="card-header" style="background-image: url(css/img/abstract-art-artificial-131634.jpg);"></div>
          <div class="card-body text-center">
            <img class="card-profile-img" src="css/img/kariah_icon.jpg">
            <br>
            <button class="btn btn-outline-primary btn-sm" type="button" data-toggle="collapse" data-target="#kariah" aria-expanded="false"> 
              Lihat Selanjutnya <span class="fe fe-corner-right-down"></span>
            </button>

            <div id="kariah" class="collapse">
                <table class="table card-table" >
                <tr>
                  <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                  <td>Google Chrome</td>
                  <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-firefox text-muted"></i></td>
                  <td>Mozila Firefox</td>
                  <td class="text-right"><span class="text-muted">15%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-safari text-muted"></i></td>
                  <td>Apple Safari</td>
                  <td class="text-right"><span class="text-muted">7%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-internet-explorer text-muted"></i></td>
                  <td>Internet Explorer</td>
                  <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-opera text-muted"></i></td>
                  <td>Opera mini</td>
                  <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                  <td><i class="fa fa-edge text-muted"></i></td>
                  <td>Microsoft edge</td>
                  <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
              </table>
            </div>
            
          </div>
        </div>
    </div>

  </div>

  <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-status bg-green text-center"></div>
          <div class="card-header">
            <h3 class="card-title">Ceramah Agama</h3>
          </div>
          <div class="table-responsive">
            <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
              <thead>
                <tr>
                  <th class="text-center w-1"><i class="icon-people"></i></th>
                  <th>Penceramah</th>
                  <th>Tajuk/Kitab</th>
                  <th class="text-center">Waktu</th>
                  <th>Masihi</th>
                  <th class="text-center">hari</th>
                  <th class="text-center"><i class="icon-settings"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Elizabeth Martin</div>
                    <div class="small text-muted">
                      Registered: Mar 19, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>42%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-visa"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>4 minutes ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">42%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Michelle Schultz</div>
                    <div class="small text-muted">
                      Registered: Mar 2, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>0%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-red" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-googlewallet"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>5 minutes ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">0%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Crystal Austin</div>
                    <div class="small text-muted">
                      Registered: Apr 7, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>96%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-green" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-mastercard"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>a minute ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">96%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Douglas Ray</div>
                    <div class="small text-muted">
                      Registered: Jan 15, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>6%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-red" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-shopify"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>a minute ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">6%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Teresa Reyes</div>
                    <div class="small text-muted">
                      Registered: Mar 4, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>36%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-red" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-ebay"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>2 minutes ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">36%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Emma Wade</div>
                    <div class="small text-muted">
                      Registered: Mar 20, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>7%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-red" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-paypal"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>a minute ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.07" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">7%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Carol Henderson</div>
                    <div class="small text-muted">
                      Registered: Feb 22, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>80%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-visa"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>9 minutes ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.8" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">80%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                      <span class="avatar-status bg-green"></span>
                    </div>
                  </td>
                  <td>
                    <div>Christopher Harvey</div>
                    <div class="small text-muted">
                      Registered: Jan 22, 2018
                    </div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>83%</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-green" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <i class="payment payment-googlewallet"></i>
                  </td>
                  <td>
                    <div class="small text-muted">Last login</div>
                    <div>8 minutes ago</div>
                  </td>
                  <td class="text-center">
                    <div class="mx-auto chart-circle chart-circle-xs" data-value="0.83" data-thickness="3" data-color="blue"><canvas width="40" height="40"></canvas>
                      <div class="chart-circle-value">83%</div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>

  <div class="row">
      <div class="col--8"></div>
  </div>
</div>


@endsection
