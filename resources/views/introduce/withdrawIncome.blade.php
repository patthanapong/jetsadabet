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



              <div class="row">
              <div class="col-xs-12 text-center">
              <div class="alert alert-warning text-center" role="alert">รายได้ ระบบแนะนำ จะถอนเข้าเป็นเงินเครดิต หากสงสัยโปรดติดต่อเอเย่นต์ที่ท่านสมัครสมาชิก</div>
              </div>
              <form method="POST" action="/member/affiliate/withdraw" enctype="application/x-www-form-urlencoded" class="m-t form-horizontal fv-form fv-form-bootstrap" role="form" id="form-withdraw" autocomplete="off" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
              <input type="hidden" name="_csrf" value="OaiWOFZE-Ol4wFB6Awa2p8COCeZuFRy9nAJ0">

              <div class="col-xs-12 text-center">
                <h3>รายได้ปัจจุบัน : 0 </h3>
              </div>
              <div class="form-group no-margins has-feedback">
              <div class="col-md-4 col-md-offset-4 m-b-sm">
                <div class="input-group">
                  <span class="input-group-addon">ต้องการถอน</span>
                  <input type="text" name="amount" class="form-control" placeholder="ระบุจำนวนเงิน ฿" id="amount" data-fv-field="amount">
                </div><i class="form-control-feedback fv-bootstrap-icon-input-group" data-fv-icon-for="amount" style="display: none;"></i>
              <small class="help-block" data-fv-validator="notEmpty" data-fv-for="amount" data-fv-result="NOT_VALIDATED" style="display: none;">โปรดระบุข้อมูลในส่วนนี้</small><small class="help-block" data-fv-validator="numeric" data-fv-for="amount" data-fv-result="NOT_VALIDATED" style="display: none;">โปรดระบุเลขหน่วยหรือจำนวนทศนิยม ให้ถูกต้อง</small><small class="help-block" data-fv-validator="lessThan" data-fv-for="amount" data-fv-result="NOT_VALIDATED" style="display: none;">โปรดระบุค่าน้อยกว่าหรือเท่ากับ %s</small><small class="help-block" data-fv-validator="greaterThan" data-fv-for="amount" data-fv-result="NOT_VALIDATED" style="display: none;">กรุณาระบุค่ามากกว่าหรือเท่ากับ %s</small></div>
              </div>
              <div class="col-md-4 col-md-offset-4 m-b-sm">
                <button class="btn btn-primary block full-width m-b" type="submit">แจ้งถอนรายได้</button>
              </div>
              </form>
              </div>

              <div class="row">
              <div class="col-xs-12">
              <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>รายละเอียด</th>
                  <th class="text-right">จำนวนเงิน</th>
                  <th class="text-right">รายได้คงเหลือ</th>
                  <th>วันที่ทำรายการ</th>
                </tr>
              </thead>
              <tbody>
                
                </tbody><tfoot>
                  <tr>
                    <td colspan="100%">
                      
                      
  
  
    
  
  
    
  
  

                    </td>
                  </tr>
                </tfoot>
              
              </table>
              </div>
              </div>


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