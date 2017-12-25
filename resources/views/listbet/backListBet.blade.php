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
                                <a type="button" class="" href="/member/lottery/transaction/previous/27995388">#27995388</a>
                            </td>
                            <td>
                              หวยมาเลย์ / 24 ธันวาคม 2560
                            </td>
                            <td>24/12/2560 06:52:38</td>
                            <td class="text-right">
                              0
                            </td>
                            <td class="text-right">
                              
                              0
                              
                            </td>
                            <td class="text-center">
                              
                              
                              
                              <span class="label label-danger">
                                ยกเลิก
                              </span>
                              
                            </td>
                            <td class="text-center">
                              <a type="button" class="btn btn-xs btn-primary" href="/member/lottery/transaction/previous/27995388"><i class="fa fa-list"></i> ดูโพย</a>
                            </td>
                            
                          </tr>
                          

                          
                            
                          

                          <tr>
                            <td>
                                <a type="button" class="" href="/member/lottery/transaction/previous/27995380">#27995380</a>
                            </td>
                            <td>
                              หวยมาเลย์ / 24 ธันวาคม 2560
                            </td>
                            <td>24/12/2560 06:49:18</td>
                            <td class="text-right">
                              18
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
                              <a type="button" class="btn btn-xs btn-primary" href="/member/lottery/transaction/previous/27995380"><i class="fa fa-list"></i> ดูโพย</a>
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

                    <span class="text-primary-new">อัพเดตล่าสุด 25/12/2560 16:16:44 (อัพเดตทุก 60 นาที)</span>
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