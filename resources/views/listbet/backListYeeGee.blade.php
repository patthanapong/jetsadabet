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
                          
                        </tr></thead>
                        <tbody>
                          

                          
                            
                          

                          <tr>
                            <td>
                                <a type="button" class="" href="/member/lottery/transaction/yeekee/previous/1007706709">#1007706709</a>
                            </td>
                            <td>
                              จับยี่กี รอบที่ 51 / 23 ธันวาคม 2560
                            </td>
                            <td>23/12/2560 18:20:51</td>
                            <td class="text-right">
                              45
                            </td>
                            <td class="text-right">
                              
                              0
                              
                            </td>
                            <td class="text-center">
                              
                              
                              
                              <span class="label label-primary">
                                ออกผล
                              </span>
                              
                            </td>
                            <td class="text-center">
                              <a type="button" class="btn btn-xs btn-primary" href="/member/lottery/transaction/yeekee/previous/1007706709"><i class="fa fa-list"></i> ดูโพย</a>
                            </td>
                            
                          </tr>
                          

                          
                            
                          

                          <tr>
                            <td>
                                <a type="button" class="" href="/member/lottery/transaction/yeekee/previous/1006763891">#1006763891</a>
                            </td>
                            <td>
                              จับยี่กี รอบที่ 22 / 23 ธันวาคม 2560
                            </td>
                            <td>23/12/2560 11:09:42</td>
                            <td class="text-right">
                              10
                            </td>
                            <td class="text-right">
                              
                              0
                              
                            </td>
                            <td class="text-center">
                              
                              
                              
                              <span class="label label-primary">
                                ออกผล
                              </span>
                              
                            </td>
                            <td class="text-center">
                              <a type="button" class="btn btn-xs btn-primary" href="/member/lottery/transaction/yeekee/previous/1006763891"><i class="fa fa-list"></i> ดูโพย</a>
                            </td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="text-right m-t-sm">
                      
                      
  
  
    
  
  
    
  
  
  <style>
    .nav-pagination {
      text-align: right;
    }
    @media screen and (max-width:768px) {
      .nav-pagination {
        text-align: center !important;
      }
    }
  </style>
    <nav aria-label="pagination" class="nav-pagination">
      <ul class="pagination">
        
          <li class="paginate_button previous disabled">
            <span>«</span>
          </li>
        

        
            <li class="paginate_button active">
              <span>1</span>
            </li>
          

        
          <li class="paginate_button next disabled">
            <span>»</span>
          </li>
        
      </ul>
    </nav>
  

                    </div>

                    <span class="text-primary-new">อัพเดตล่าสุด 25/12/2560 16:54:06 (อัพเดตทุก 60 นาที)</span>
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