@extends('master')
@section('content')
    <div class="wrapper wrapper-content">
          <div class="container-fluid">
            <div class="row">
              
  
  
  
    
  
  
    
  

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>เลขชุด</h5>
        </div>
        <div class="ibox-content">
          <div class="row">
            <div class="col-xs-6 col-sm-3 m-b-xs"></div>
            <div class="col-xs-6 col-sm-9 text-right">
              <a class="btn btn-primary" href="/member/number-sets/create"><i class="fa fa-plus"></i> สร้างเลขชุด</a>
            </div>
          </div> <!-- /.row -->

          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>ชื่อชุด</th>
                  <th>วันที่สร้างชุด</th>
                  <th class="text-center" width="50">กระทำ</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td colspan="100%">
                    
                    
  
  
    
  
  
    
  
  
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
  

                  </td>
                </tr>
              </tfoot>
              <tbody>
                
                  <tr>
                    <td>ชุดดัง</td>
                    <td>24/12/2017 06:47</td>
                    <td class="text-center">
                      <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle"><i class="fa fa-cog"></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right">
                          <li>
                            <a href="#modal-number-sets-740939" data-toggle="modal" class="font-bold">
                              <i class="fa fa fa-fw fa-list-ol"></i> รายละเอียด
                            </a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <form method="POST" action="/member/number-sets/740939?_method=DELETE" enctype="application/x-www-form-urlencoded" id="item-del-740939">
                              <input type="hidden" name="_csrf" value="UlKp8qhA-ZNAo7bkbbFIzBIDSErHIzcCA8Mc">
                            </form>
                            <a href="javascript:void(0)" class="font-bold" onclick="document.getElementById('item-del-740939').submit()">
                              <i class="fa fa-ban fa-fw text-danger"></i>
                              ลบ
                            </a>
                          </li>
                        </ul>
                        <div class="modal inmodal" id="modal-number-sets-740939" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                      <h4 class="modal-title">ชุดดัง</h4>
                                  </div>
                                  <table class="table table-bordered table-striped table-hover">
                                    
                                    <tbody><tr>
                                      <th>สองตัวบน</th>
                                      <th>10</th>
                                    </tr>
                                    
                                    <tr>
                                      <th>สองตัวบน</th>
                                      <th>11</th>
                                    </tr>
                                    
                                    <tr>
                                      <th>สองตัวบน</th>
                                      <th>15</th>
                                    </tr>
                                    
                                    <tr>
                                      <th>สองตัวล่าง</th>
                                      <th>10</th>
                                    </tr>
                                    
                                    <tr>
                                      <th>สองตัวล่าง</th>
                                      <th>11</th>
                                    </tr>
                                    
                                    <tr>
                                      <th>สองตัวล่าง</th>
                                      <th>15</th>
                                    </tr>
                                    
                                  </tbody></table>
                                </div>
                            </div>
                        </div>

                      </div>
                    </td>
                  </tr>
                
              </tbody>
            </table>
          </div> <!-- /.table-responsive -->
        </div> <!-- /.ibox-content -->
      </div> <!-- /.ibox -->
    </div> <!-- /.col-lg-12 -->
  </div> <!-- /.row -->

            </div>
          </div>
        </div>
@endsection