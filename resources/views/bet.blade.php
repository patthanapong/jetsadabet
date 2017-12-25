@extends('master')
@section('head')
<style media="screen">
  .text-success {
    color: #3c763d
  }

  .col-lottery {
    padding:0 10px;
  }

  @media(max-width: 768px) {
    .col-lottery {
      padding: 0
    }
  }
</style>

@endsection
@section('content')
     <div class="wrapper wrapper-content">
          <div class="container-fluid">
            <div class="row">
              

<div class="row">

   <div class="col-xs-6 col-md-2 p-xss">
     <div class="ibox m-b-none ">
       <div class="ibox-title">
         <h3 class="text-center text-blue-steel">แทงหวย</h3>
       </div>
       <div class="ibox-content p-xss">

             
             <div class="col-xs-12 p-xss">
               <a href="/member/lottery/government"
               class="text-center animated p-sm
               text-white
               bg-success-light
               " style="display:block">
                   <h3>หวยรัฐบาล</h3>
                   <hr class="m-xs">
                   <p>
                     <strong>ปิดรับ : </strong> 30/12/2560 15:20:00
                   </p>
                   
                     <h2 class="countdown no-margins font-bold" data-finaldate="1514622000000"></h2>
                   
               </a>
             </div>

             
             <div class="col-xs-12 p-xss">
               <a href="/member/lottery/yeekee" class="p-sm text-center animated bg-warning-light" style="display:block">
                 <h3>จับยี่กี</h3>
                 <hr class="m-xs">
                 <p>
                   เปิดแทง 88 รอบ
                 </p>
                 <h2 class="no-margins"><i class="fa fa-clock-o"></i> 24 ชั่วโมง</h2>
               </a>
             </div>



           
           <div class="col-xs-12 p-xss">
             <a href="/member/lottery/main"
             class="text-center animated p-sm
             
             bg-force-close
             " style="display:block">
               <h3>ลอตเตอรี่</h3>
               <hr class="m-xs">
               <p>
                 <strong>ปิดรับ : </strong> 16/07/2560 15:00:00
               </p>

               
                 
                 <h2 class="no-margins"> ปิดรับแทง</h2>
               
             </a>
           </div>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
   <div class="col-xs-6 col-md-2 p-xss">
    <div class="ibox m-b-none ">
      <div class="ibox-title">
        <h3 class="text-center text-yellow-casablanca">หวยหุ้นไทย</h3>
      </div>
      <div class="ibox-content p-xss">
          
          <div class="col-xs-12 p-xss">
            
            <a href="/member/lottery/local/2"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นไทยเช้า</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 09:55:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
            
          </div>
          
          <div class="col-xs-12 p-xss">
            
            <a href="/member/lottery/local/3"
            class="text-center animated p-sm bg-force-close" style="display:block">
                <h3>หุ้นไทยเที่ยง</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 16/10/2560 12:28:00
                </p>
                <h2 class="no-margins"> ปิดรับแทง</h2>
            </a>
            
          </div>
          
          <div class="col-xs-12 p-xss">
            
            <a href="/member/lottery/local/4"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นไทยบ่าย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 14:25:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
            
          </div>
          
          <div class="col-xs-12 p-xss">
            
            <a href="/member/lottery/local/5"
            class="text-center animated p-sm
            
            bg-success-light
            " style="display:block">
                <h3>หุ้นไทยเย็น</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 16:33:00
                </p>

                
                  <h2 class="countdown no-margins font-bold" data-finaldate="1514194380000"></h2>
                
            </a>
            
          </div>
          
          <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="clearfix visible-xs"></div>
  <div class="col-xs-12 col-md-2 p-xss">
    <div class="ibox m-b-none">
      <div class="ibox-title" style=":1px solid #e7eaec">
        <h3 class="text-center text-green">หวยหุ้นไทย 20 คู่</h3>
      </div>
      <div class="ibox-content p-xss">
          

            <div class="col-xs-6 col-md-12 p-xss">
              
              <a href="/member/lottery/local/112"
              class="text-center animated p-sm
              
              bg-default-light
              " style="display:block">
                <h3>หุ้นไทยเช้า 20 คู่</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 09:55:00
                </p>
                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
              </a>
              
            </div>
          

            <div class="col-xs-6 col-md-12 p-xss">
              
              <a href="/member/lottery/local/113"
              class="text-center animated p-sm bg-force-close" style="display:block">
              <h3>หุ้นไทยเที่ยง 20 คู่</h3>
              <hr class="m-xs">
              <p>
                <strong>ปิดรับ : </strong> 14/07/2560 12:00:00
              </p>
              <h2 class="no-margins"> ปิดรับแทง</h2>
            </a>
            
            </div>
          

            <div class="col-xs-6 col-md-12 p-xss">
              
              <a href="/member/lottery/local/114"
              class="text-center animated p-sm
              
              bg-default-light
              " style="display:block">
                <h3>หุ้นไทยบ่าย 20 คู่</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 14:20:00
                </p>
                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
              </a>
              
            </div>
          

            <div class="col-xs-6 col-md-12 p-xss">
              
              <a href="/member/lottery/local/115"
              class="text-center animated p-sm
              
              bg-default-light
              " style="display:block">
                <h3>หุ้นไทยเย็น 20 คู่</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 16:00:00
                </p>
                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
              </a>
              
            </div>
          
          <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 p-xss">
    <div class="ibox">
      <div class="ibox-title">
        <h3 class="text-center text-purple-studio">หวยหุ้นต่างประเทศ</h3>
      </div>
      <div class="ibox-content p-xss">
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/6"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นเกาหลี</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 12:40:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/7"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>นิเคอิรอบเช้า</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 09:25:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/8"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>นิเคอิรอบบ่าย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 12:55:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/9"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>ฮั่งเส็งรอบเช้า</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 10:55:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/10"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>ฮั่งเส็งรอบบ่าย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 14:55:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/11"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>จีนรอบเช้า</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 10:05:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/12"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>จีนรอบบ่าย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 13:40:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/13"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นไต้หวัน</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 12:10:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/14"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นสิงคโปร์</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 15:55:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/15"
            class="text-center animated p-sm
            
            bg-success-light
            " style="display:block">
                <h3>หุ้นอิยิปต์</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 18:00:00
                </p>

                
                  <h2 class="countdown no-margins font-bold" data-finaldate="1514199600000"></h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/16"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นเยอรมัน</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 22:20:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/17"
            class="text-center animated p-sm
            
            bg-success-light
            " style="display:block">
                <h3>หุ้นอังกฤษ</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 22:20:00
                </p>

                
                  <h2 class="countdown no-margins font-bold" data-finaldate="1514215200000"></h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/18"
            class="text-center animated p-sm
            
            bg-success-light
            " style="display:block">
                <h3>หุ้นรัสเซีย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 22:10:00
                </p>

                
                  <h2 class="countdown no-margins font-bold" data-finaldate="1514214600000"></h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/19"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นอินเดีย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 16:40:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/20"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หุ้นดาวน์โจน</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 23/12/2560 02:00:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/21"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หวยมาเลย์</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 24/12/2560 18:00:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/22"
            class="text-center animated p-sm
            
            bg-default-light
            " style="display:block">
                <h3>หวยลาว</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 20/12/2560 20:00:00
                </p>

                
                  <h2 class="text-danger-close no-margins"> ปิดรับแทง</h2>
                
            </a>
          </div>
          
          <div class="col-xs-6 col-lg-4 p-xss">
            <a href="/member/lottery/foreign/23"
            class="text-center animated p-sm
            
            bg-success-light
            " style="display:block">
                <h3>หวยเวียดนาม / ฮานอย</h3>
                <hr class="m-xs">
                <p>
                  <strong>ปิดรับ : </strong> 25/12/2560 18:00:00
                </p>

                
                  <h2 class="countdown no-margins font-bold" data-finaldate="1514199600000"></h2>
                
            </a>
          </div>
          
          <div class="clearfix"></div>
      </div>
    </div>
  </div>


            </div>
          </div>
        </div>
@endsection