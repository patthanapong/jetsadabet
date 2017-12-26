@extends('master')
@section('content')
    <div class="wrapper wrapper-content">
          <div class="container-fluid">
            <div class="row">


  <div class="row affiliate">
    <div class="col-lg-12">
      <div class="tabs-container">
        <ul class="nav nav-tabs">
            @include('introduce.forms.listmenu')
        </ul>


      <div class="tab-content">
        <div class="tab-pane active">
            <div class="panel-body p-xs">

              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>ยูสเซอร์เนม</th>
                      <th>จำนวนแทงทั้งหมด</th>
                      <th>วันที่สมัคร</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td colspan="100%">

                      </td>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                  </tbody>
                </table>
              </div> <!-- /.table-responsive -->
            </div> <!-- /.ibox-content -->
          </div>
        </div>
      </div>

    </div> <!-- /.col-lg-12 -->
  </div> <!-- /.row -->

            </div>
          </div>
        </div>
@endsection