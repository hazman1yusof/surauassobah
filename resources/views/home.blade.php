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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=355774478590823&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                <thead>
                    <tr>
                      <th>Fasiliti</th>
                      <th><img src="css/img/man.png"></th>
                      <th><img src="css/img/woman.png"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Dewan Solat</td>
                      <td>1</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Tempat Wudhuk</td>
                      <td>2</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Tandas</td>
                      <td>2</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Bilik Mesyuarat</td>
                      <td>1</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Ruang Riadah</td>
                      <td>1</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Dewan Serbaguna</td>
                      <td>1</td>
                      <td>1</td>
                    </tr>
                </tbody>
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
                <thead>
                    <tr>
                      <th>Tajuk</th>
                      <th>Tarikh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Ceramah 1</td>
                      <td>1/1/2019</td>
                    </tr>
                    <tr>
                      <td>Ceramah 1</td>
                      <td>1/1/2019</td>
                    </tr>
                    <tr>
                      <td>Ceramah 1</td>
                      <td>1/1/2019</td>
                    </tr>
                    <tr>
                      <td>Ceramah 1</td>
                      <td>1/1/2019</td>
                    </tr>
                    <tr>
                      <td>Ceramah 1</td>
                      <td>1/1/2019</td>
                    </tr>
                    <tr>
                      <td>Ceramah 1</td>
                      <td>1/1/2019</td>
                    </tr>
                <tbody>
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

            <div id="kariah" class="collapse"><br>
                <span>Ahli Kariah adalah seseorang yang secara tetap atau pada kelazimannya bermukim dalam sesuatu kariah masjid.</span>
                <br>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-sm btn-outline-dark" href="#" role="button" data-toggle="modal" data-target="#modaldaftarahli">Daftar Ahli</a>
                    <a class="btn btn-sm btn-outline-danger" href="borang/garispanduananakkariah.pdf" role="button" target="_blank">Syarat keahlian</a>
                </div>
                <table class="table card-table" >
                <tr>
                  <td>Hazman Yusof</td>
                </tr>
                <tr>
                  <td>Ali johari</td>
                </tr>
                <tr>
                  <td>Azfar Johann</td>
                </tr>
                <tr>
                  <td>Dele Alli</td>
                </tr>
                <tr>
                    <td><a href="#" class="btn btn-sm btn-primary">Lihat Semua Ahli</a></td>
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
            <h3 class="card-title">Ceramah Agama<span class="text-green"> Bulan January</span></h3>
            <div class="col-lg-3 ml-auto">
            <form class="input-icon my-3 my-lg-0 float-left">
              @csrf
              <div class="input-group input-group-sm">
                <select name="user[month]" class="form-control custom-select">
                  <option value="">Month</option>
                  <option selected="selected" value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option  value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
                <span class="input-group-append">
                  <button class="btn btn-primary" type="button">Change</button>
                </span>
              </div>
            </form>
              </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
              <thead>
                <tr>
                  <th class="text-center w-1"><i class="icon-people"></i></th>
                  <th>Penceramah</th>
                  <th>Tajuk/Kitab</th>
                  <th class="text-center">Waktu</th>
                  <th>Tarikh</th>
                  <th class="text-center">hari</th>
                  <th class="text-center">Video Links</th>
                  <th class="text-center"><i class="icon-settings"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td class="text-center">
                    <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                    </div>
                  </td>

                  <td>
                    <div>Ust Harif Haron</div>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-left">
                        <strong>Tadabbur Al-fatihah</strong>
                      </div>
                      <div class="float-right">
                        <small class="text-muted">mukasurat: 35</small>
                      </div>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    Subuh
                  </td>
                  <td>
                    <div>01 Jan 2019</div>
                    <div class="small text-muted">4 minutes ago</div>
                  </td>
                  <td class="text-center">
                    <div>Tuesday</div>
                  </td>
                  <td class="text-center">
                    <div>
                        <ul class="social-links list-inline mb-0 mt-2">
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
                          </li>
                        </ul>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Edit </a>
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
      <div class="col-md-8">
          <div class="card">
          <div class="card-status bg-yellow text-center"></div>
              <div class="card-header">
                <h3 class="card-title">Hebahan / Pengumuman</h3>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th>Tajuk Hebahan</th>
                      <th>Detail</th>
                      <th>Link</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ronald Bradley</td>
                      <td>Initial commit</td>
                      <td>
                          <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_0">
                             Details
                          </button>
                          <div class="modal fade" id="aktiviti_0">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
            
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Bengkel Imam &amp; Bilal Tarawih</h4>
                                        </div>
                
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img class="center" src="img/aktiviti/7.jpeg" alt="Card image cap">   
                                            <br>
                                            <p>Sila hubungi nombor tertera untuk maklumat lebih lanjut. 
Tekan right click &gt; 'open image in new tab' untuk gambar yang lebih jelas.</p>
                                        </div>
                
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Russell Gibson</td>
                      <td>Main structure</td>
                      <td>
                          <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_0">
                             Details
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Beverly Armstrong</td>
                      <td>Left sidebar adjustments</td>
                      <td>
                          <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_0">
                             Details
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Bobby Knight</td>
                      <td>Topbar dropdown style</td>
                      <td>
                          <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_0">
                             Details
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Sharon Wells</td>
                      <td>Fixes #625</td>
                      <td>
                          <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_0">
                             Details
                          </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
      </div>

      <div class="col-md-4">
          <div class="fb-page" data-href="https://www.facebook.com/suraualsobahBBB/" data-tabs="timeline" data-width="340" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/suraualsobahBBB/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/suraualsobahBBB/">Surau Al Sobah Bandar Baru Bangi</a></blockquote></div>
      </div>
  </div>
</div>

@include('layouts.modal_markah')

@endsection
