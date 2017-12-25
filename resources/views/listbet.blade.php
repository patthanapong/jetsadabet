@extends('master')
@section('content')
    <div class="wrapper wrapper-content">
          <div class="container-fluid">
            <div class="row">
              


<div class="row lottery-transaction">
  <div class="col-xs-12">
    <div class="tabs-container">
        <style>

  @media (max-width: 768px) {
    /*.lottery-transaction .nav li{
      float: left !important;
      width: 50%;
    }*/
    .lottery-transaction .nav li a{
      padding-right: 0;
      padding-left: 0;
    }

    .tabs-container .nav-tabs > li.active > a {
      border: 1px solid #e7eaec !important;
      border-bottom-color: transparent !important;
    }
  }

</style>
<ul class="nav nav-tabs">
     @include('listbet.forms.listmenu')
    
</ul>

        <div class="tab-content">
            <div class="tab-pane active">
                <div class="panel-body p-xs">

                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover no-margins">
                        <thead>
                          <tr><th width="100">เลขที่รายการ</th>
                          <th>งวดที่</th>
                          <th>วันที่ / เวลา</th>
                          <th class="text-right">เงินเดิมพัน</th>
                          <th class="text-right">ผลชนะ</th>
                          <th class="text-center">สถานะ</th>
                          <th class="text-center" width="70">ดูโพย</th>
                          
                          <th class="text-center" width="70">คืนโพย</th>
                          
                        </tr></thead>
                        <tbody>
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="text-right m-t-sm">
                      
                      
  
  
    
  
  
    
  
  

                    </div>

                    <span class="text-primary-new">อัพเดตล่าสุด 25/12/2560 16:11:15 (อัพเดตทุก 5 นาที)</span>
                </div>
            </div>
        </div>
    </div>



  </div>
</div>

            </div>
          </div>
        </div>
@endsection