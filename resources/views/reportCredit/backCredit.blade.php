@extends('master')
@section('content')
    <div class="col-lg-12">
      <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li style="background:#eaeaea">
              <a class="no-margins text-center" href="/reportCredit">
                <i class="fa fa-list-ol"></i> รายงานเครดิต
              </a>
            </li><li class="active">
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
                
                <tr>
                  <td>0331193667</td>
                  <td>
                      <span class="label" style="color:#fff;background-color: red">ยกเลิก</span>
                  </td>
                  
                  <td class="">
                    
                      <span class="label label-danger">ระบบ</span>
                    
                  </td>
                  
                  <td class="text-success">
                    porthachapong
                  </td>
                  <td class="text-positive">
                    19
                  </td>
                  
                  <td>
                    427.25
                  </td>
                  
                  <td>24/12/2560 06:53:46</td>
                  <td>คืนโพย หวยมาเลย์ / 24 ธันวาคม 2560#27995388</td>
                </tr>
                
                <tr>
                  <td>0331190135</td>
                  <td>
                      <span class="label" style="color:#fff;background-color: #4b8df8">แทงพนัน</span>
                  </td>
                  
                  <td class="">
                    
                      <span class="label label-danger">ระบบ</span>
                    
                  </td>
                  
                  <td class="text-success">
                    porthachapong
                  </td>
                  <td class="text-negative">
                    -19
                  </td>
                  
                  <td>
                    408.25
                  </td>
                  
                  <td>24/12/2560 06:52:38</td>
                  <td>แทงพนัน หวยมาเลย์ / 24 ธันวาคม 2560 #27995388</td>
                </tr>
                
                <tr>
                  <td>0331181787</td>
                  <td>
                      <span class="label" style="color:#fff;background-color: #4b8df8">แทงพนัน</span>
                  </td>
                  
                  <td class="">
                    
                      <span class="label label-danger">ระบบ</span>
                    
                  </td>
                  
                  <td class="text-success">
                    porthachapong
                  </td>
                  <td class="text-negative">
                    -18
                  </td>
                  
                  <td>
                    427.25
                  </td>
                  
                  <td>24/12/2560 06:49:18</td>
                  <td>แทงพนัน หวยมาเลย์ / 24 ธันวาคม 2560 #27995380</td>
                </tr>
                
                <tr>
                  <td>0330059570</td>
                  <td>
                      <span class="label" style="color:#fff;background-color: #4b8df8">แทงพนัน</span>
                  </td>
                  
                  <td class="">
                    
                      <span class="label label-danger">ระบบ</span>
                    
                  </td>
                  
                  <td class="text-success">
                    porthachapong
                  </td>
                  <td class="text-negative">
                    -45
                  </td>
                  
                  <td>
                    445.25
                  </td>
                  
                  <td>23/12/2560 18:20:51</td>
                  <td>แทงพนัน จับยี่กี รอบที่ 51 / 23 ธันวาคม 2560 #1007706709</td>
                </tr>
                
                <tr>
                  <td>0328756627</td>
                  <td>
                      <span class="label" style="color:#fff;background-color: #4b8df8">แทงพนัน</span>
                  </td>
                  
                  <td class="">
                    
                      <span class="label label-danger">ระบบ</span>
                    
                  </td>
                  
                  <td class="text-success">
                    porthachapong
                  </td>
                  <td class="text-negative">
                    -10
                  </td>
                  
                  <td>
                    490.25
                  </td>
                  
                  <td>23/12/2560 11:09:42</td>
                  <td>แทงพนัน จับยี่กี รอบที่ 22 / 23 ธันวาคม 2560 #1006763891</td>
                </tr>
                
                <tr>
                  <td>0328309209</td>
                  <td>
                      <span class="label" style="color:#fff;background-color: #35aa47">เติมเครดิต</span>
                  </td>
                  
                  <td class="">
                    
                    jetsadabet777
                    
                  </td>
                  
                  <td class="text-success">
                    porthachapong
                  </td>
                  <td class="text-positive">
                    500.25
                  </td>
                  
                  <td>
                    500.25
                  </td>
                  
                  <td>23/12/2560 08:22:14</td>
                  <td>-</td>
                </tr>
                
              </tbody>
            </table>
          </div> <!-- /.table-responsive -->

          <div class="row">
            <div class="col-sm-4"><div class="text-primary-new m-b-sm">อัพเดตล่าสุด 26/12/2560 15:03:59 (อัพเดตทุก 5 นาที)</div></div>
            <div class="col-sm-8">
              
              
  
  
    
  
  
    
  
  
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
        
          <li class="paginate_button previous disabled page-away-1" style="display: inline;">
            <span>«</span>
          </li>
        

        
            <li class="paginate_button active page-away-0" style="display: inline;">
              <span>1</span>
            </li>
          

        
          <li class="paginate_button next disabled page-away-1" style="display: inline;">
            <span>»</span>
          </li>
        
      </ul>
    </nav>
  

            </div>
          </div>


        </div> <!-- /.ibox-content -->
      </div> <!-- /.ibox -->
    </div>
    </div>
@endsection