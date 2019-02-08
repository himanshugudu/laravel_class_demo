@extends('layout.dashboard')
@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_genius"></i> Widgets</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_genius"></i>Widgets</li>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <section class="panel">
              <header class="panel-heading">
                Basic items
              </header>
              <ul class="list-group">
                <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item">Praesent tempus eleifend risus</li>
                <li class="list-group-item">Praesent tempus eleifend risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </section>
          </div>
          <div class="col-lg-4">
            <section class="panel">
              <header class="panel-heading">
                Linked items
              </header>
              <div class="list-group">
                <a class="list-group-item " href="#">
                                  Lorem ipsum dolor sit amet
                              </a>
                <a class="list-group-item active" href="javascript:;">Praesent tempus eleifend risus</a>
                <a class="list-group-item" href="javascript:;">Praesent tempus eleifend risus</a>
                <a class="list-group-item" href="javascript:;">Porta ac consectetur ac</a>
                <a class="list-group-item" href="javascript:;">Vestibulum at eros</a>
                <a class="list-group-item" href="javascript:;">Vestibulum at eros</a>
              </div>
            </section>
          </div>
          <div class="col-lg-4">
            <section class="panel">
              <header class="panel-heading">
                Custom content
              </header>
              <div class="list-group">
                <a class="list-group-item " href="javascript:;">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a class="list-group-item active" href="javascript:;">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a class="list-group-item" href="javascript:;">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
@stop
@section('script') 
  <script>
    //knob
    $(".knob").knob();
  </script>
@stop


