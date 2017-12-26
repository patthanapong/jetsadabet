@extends('master')
@section('content')
    <div class="col-lg-12">
      <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active">
              <a class="no-margins text-center" href="/reportCredit">
                <i class="fa fa-list-ol"></i> รายงานเครดิต
              </a>
            </li><li style="background:#eaeaea">
              <a class="no-margins text-center text-nowrap" href="/reportCredit/backCredit">
                <i class="fa fa-history"></i> รายงานเครดิตย้อนหลัง
              </a>
            </li>
            
        </ul>



      <div class="tab-pane active">
        <div class="panel-body p-xs">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <td>เลขที่ทำรายการ</td>
                  <th>รายละเอียด</th>
                  
                  <th>ผู้กระทำ</th>
                  
                  <th>กระทำกับ</th>
                  <th>เครดิต</th>
                  
                  <th>เครดิตคงเหลือ</th>
                  
                  <th>วันที่ทำรายการ</th>
                  <th>หมายเหตุ</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div> <!-- /.table-responsive -->

          <div class="row">
            <div class="col-sm-4"><div class="text-primary-new m-b-sm">อัพเดตล่าสุด 26/12/2560 11:09:26 (อัพเดตทุก 5 นาที)</div></div>
            <div class="col-sm-8">
              
              
  
  
    
  
  
    
  
  

            </div>
          </div>


        </div> <!-- /.ibox-content -->
      </div> <!-- /.ibox -->
    </div>
    </div>
@endsection