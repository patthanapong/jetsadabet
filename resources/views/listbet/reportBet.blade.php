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

                    <h3>ยอดแทงทั้งหมดของวันนี้</h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover no-margins">
                        <thead>
                          <tr><th>วันที่</th>
                          <th>ออกผลแล้ว</th>
                          <th>ยังไม่ออกผล</th>
                          <th>รวม</th>
                        </tr></thead>
                        <tbody>
                          <tr>
                            <td class="text-center"><strong>วันนี้</strong></td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>


                    <h3 class="m-t-md">สรุปยอดแทงย้อนหลัง</h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover no-margins">
                        <thead>
                          <tr><th>วันที่</th>
                          <th>ออกผลแล้ว</th>
                          <th>ยังไม่ออกผล</th>
                          <th>รวม</th>
                        </tr></thead>
                        <tbody>
                          
                          <tr>
                            <td>
                              
                              24/12/2560
                            </td>
                            <td>18</td>
                            <td>0</td>
                            <td>18</td>
                          </tr>
                          
                          <tr>
                            <td>
                              
                              23/12/2560
                            </td>
                            <td>55</td>
                            <td>0</td>
                            <td>55</td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>

                    <span class="help-block text-primary-new">อัพเดตล่าสุด 25/12/2560 16:55:14 (อัพเดตทุก 5 นาที)</span>
                    <span class="help-block text-primary-new">ยอดแทงย้อนหลังสามารถดูได้ 3 วันเท่านั้น</span>
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