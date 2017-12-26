@extends('master')
@section('head')
  <link href="/assets/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/flag-icon.min.css" rel="stylesheet">
  <link href="/assets/stylesheet.css" rel="stylesheet">
  <link href="/assets/custom.css" rel="stylesheet">
  <link href="/assets/jquery.fancybox.min.css" rel="stylesheet">
  <link href="/assets/style.min.css" rel="stylesheet">
  <link href="/assets/animate.min.css" rel="stylesheet">
  <link href="/assets/hamburgers.css" rel="stylesheet">
  <link href="/assets/custom2.css" rel="stylesheet">

  <link href="/assets/datepicker3.css" rel="stylesheet">
  <link href="/assets/bootstrap-chosen.css" rel="stylesheet">
  <style media="screen">
    .lottery-result th, .lottery-result td {
      text-align: center;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .lottery-result .nav li{
        float: left !important;
        width: 50%;
      }
      .lottery-result .nav li a{
        padding-right: 0;
        padding-left: 5px;
      }

      .tabs-container .nav-tabs > li.active > a {
        border: 1px solid #e7eaec !important;
        border-bottom-color: transparent !important;
      }
    }
  </style>
@endsection
@section('footer')
  <script src="/assets/jquery-3.1.1.min.js"></script>
  <script src="/assets/bootstrap.min.js"></script>
  <script src="/assets/jquery.metisMenu.js"></script>
  <script src="/assets/jquery.slimscroll.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="/assets/inspinia.js"></script>
  <script src="/assets/icheck.min.js"></script>

  <!-- Components -->
  <script src="/assets/nanobar.min.js"></script>
  <script src="/assets/jquery.fancybox.min.js"></script>
  <script src="/assets/hotkeys.js"></script>

  <script src="/assets/pnotify.js"></script>
  <script src="/assets/pnotify.desktop.js"></script>
  <script src="/assets/pnotify.mobile.js"></script>
  <script src="/assets/chosen.jquery.js"></script>

  <script>
    var _prum = [['id', '598ed967a834087e91b015aa'],
                ['mark', 'firstbyte', (new Date()).getTime()]];
    (function() {
        var s = document.getElementsByTagName('script')[0]
          , p = document.createElement('script');
        p.async = 'async';
        p.src = '//rum-static.pingdom.net/prum.min.js';
        s.parentNode.insertBefore(p, s);
    })();
  </script>
  <script>
  $('.chosen-select').chosen({width: "100%"});
  $('.chosen-select').on('change', function(e) {
    // triggers when whole value changed

    $(location).attr('href', "/member/lottery/result-category/"+$(this).val())
  });
  </script>

@endsection
@section('content')
    <div class="wrapper wrapper-content">
          <div class="container-fluid">
            <div class="row">
              
<div class="row lottery-result">
  <div class="col-md-12">
    <div class="tabs-container">
      <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li style="background:#eaeaea"><a class="no-margins text-center" href="/awards"><i class="fa fa-fw fa-calendar"></i> ผลหวยเรียงตามวันที่</a></li>
            <li class="active"><a class="no-margins text-center" href="/awards/lottoType"><i class="fa fa-fw fa-list"></i> ผลหวยเรียงตามประเภท</a></li>
        </ul>
      </div>

      <div class="tab-content">
        <div class="tab-pane active">
            <div class="panel-body p-xs">
              <div class="row m-t-md m-b-md">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                  <select class="chosen-select form-control" name="category_id" style="display: none;">
                      
                        <option selected="selected" value="1">หวยรัฐบาล</option>
                      
                        <option value="2">หุ้นไทยเช้า</option>
                      
                        <option value="3">หุ้นไทยเที่ยง</option>
                      
                        <option value="4">หุ้นไทยบ่าย</option>
                      
                        <option value="5">หุ้นไทยเย็น</option>
                      
                        <option value="6">หุ้นเกาหลี</option>
                      
                        <option value="7">นิเคอิรอบเช้า</option>
                      
                        <option value="8">นิเคอิรอบบ่าย</option>
                      
                        <option value="9">ฮั่งเส็งรอบเช้า</option>
                      
                        <option value="10">ฮั่งเส็งรอบบ่าย</option>
                      
                        <option value="11">จีนรอบเช้า</option>
                      
                        <option value="12">จีนรอบบ่าย</option>
                      
                        <option value="13">หุ้นไต้หวัน</option>
                      
                        <option value="14">หุ้นสิงคโปร์</option>
                      
                        <option value="15">หุ้นอิยิปต์</option>
                      
                        <option value="16">หุ้นเยอรมัน</option>
                      
                        <option value="17">หุ้นอังกฤษ</option>
                      
                        <option value="18">หุ้นรัสเซีย</option>
                      
                        <option value="19">หุ้นอินเดีย</option>
                      
                        <option value="20">หุ้นดาวน์โจน</option>
                      
                        <option value="21">หวยมาเลย์</option>
                      
                        <option value="22">หวยลาว</option>
                      
                        <option value="23">หวยเวียดนาม / ฮานอย</option>
                      
                        <option value="112">หุ้นไทยเช้า 20 คู่</option>
                      
                        <option value="113">หุ้นไทยเที่ยง 20 คู่</option>
                      
                        <option value="114">หุ้นไทยบ่าย 20 คู่</option>
                      
                        <option value="115">หุ้นไทยเย็น 20 คู่</option>
                      
                        <option value="172">จับยี่กี รอบที่ 1</option>
                      
                        <option value="173">จับยี่กี รอบที่ 2</option>
                      
                        <option value="174">จับยี่กี รอบที่ 3</option>
                      
                        <option value="175">จับยี่กี รอบที่ 4</option>
                      
                        <option value="176">จับยี่กี รอบที่ 5</option>
                      
                        <option value="177">จับยี่กี รอบที่ 6</option>
                      
                        <option value="178">จับยี่กี รอบที่ 7</option>
                      
                        <option value="179">จับยี่กี รอบที่ 8</option>
                      
                        <option value="180">จับยี่กี รอบที่ 9</option>
                      
                        <option value="181">จับยี่กี รอบที่ 10</option>
                      
                        <option value="182">จับยี่กี รอบที่ 11</option>
                      
                        <option value="183">จับยี่กี รอบที่ 12</option>
                      
                        <option value="184">จับยี่กี รอบที่ 13</option>
                      
                        <option value="185">จับยี่กี รอบที่ 14</option>
                      
                        <option value="186">จับยี่กี รอบที่ 15</option>
                      
                        <option value="187">จับยี่กี รอบที่ 16</option>
                      
                        <option value="188">จับยี่กี รอบที่ 17</option>
                      
                        <option value="189">จับยี่กี รอบที่ 18</option>
                      
                        <option value="190">จับยี่กี รอบที่ 19</option>
                      
                        <option value="191">จับยี่กี รอบที่ 20</option>
                      
                        <option value="192">จับยี่กี รอบที่ 21</option>
                      
                        <option value="193">จับยี่กี รอบที่ 22</option>
                      
                        <option value="194">จับยี่กี รอบที่ 23</option>
                      
                        <option value="195">จับยี่กี รอบที่ 24</option>
                      
                        <option value="196">จับยี่กี รอบที่ 25</option>
                      
                        <option value="197">จับยี่กี รอบที่ 26</option>
                      
                        <option value="198">จับยี่กี รอบที่ 27</option>
                      
                        <option value="199">จับยี่กี รอบที่ 28</option>
                      
                        <option value="200">จับยี่กี รอบที่ 29</option>
                      
                        <option value="201">จับยี่กี รอบที่ 30</option>
                      
                        <option value="202">จับยี่กี รอบที่ 31</option>
                      
                        <option value="203">จับยี่กี รอบที่ 32</option>
                      
                        <option value="209">จับยี่กี รอบที่ 33</option>
                      
                        <option value="210">จับยี่กี รอบที่ 34</option>
                      
                        <option value="211">จับยี่กี รอบที่ 35</option>
                      
                        <option value="212">จับยี่กี รอบที่ 36</option>
                      
                        <option value="213">จับยี่กี รอบที่ 37</option>
                      
                        <option value="214">จับยี่กี รอบที่ 38</option>
                      
                        <option value="215">จับยี่กี รอบที่ 39</option>
                      
                        <option value="216">จับยี่กี รอบที่ 40</option>
                      
                        <option value="217">จับยี่กี รอบที่ 41</option>
                      
                        <option value="218">จับยี่กี รอบที่ 42</option>
                      
                        <option value="219">จับยี่กี รอบที่ 43</option>
                      
                        <option value="220">จับยี่กี รอบที่ 44</option>
                      
                        <option value="221">จับยี่กี รอบที่ 45</option>
                      
                        <option value="222">จับยี่กี รอบที่ 46</option>
                      
                        <option value="223">จับยี่กี รอบที่ 47</option>
                      
                        <option value="224">จับยี่กี รอบที่ 48</option>
                      
                        <option value="225">จับยี่กี รอบที่ 49</option>
                      
                        <option value="226">จับยี่กี รอบที่ 50</option>
                      
                        <option value="227">จับยี่กี รอบที่ 51</option>
                      
                        <option value="228">จับยี่กี รอบที่ 52</option>
                      
                        <option value="229">จับยี่กี รอบที่ 53</option>
                      
                        <option value="230">จับยี่กี รอบที่ 54</option>
                      
                        <option value="231">จับยี่กี รอบที่ 55</option>
                      
                        <option value="232">จับยี่กี รอบที่ 56</option>
                      
                        <option value="233">จับยี่กี รอบที่ 57</option>
                      
                        <option value="234">จับยี่กี รอบที่ 58</option>
                      
                        <option value="235">จับยี่กี รอบที่ 59</option>
                      
                        <option value="236">จับยี่กี รอบที่ 60</option>
                      
                        <option value="237">จับยี่กี รอบที่ 61</option>
                      
                        <option value="238">จับยี่กี รอบที่ 62</option>
                      
                        <option value="239">จับยี่กี รอบที่ 63</option>
                      
                        <option value="240">จับยี่กี รอบที่ 64</option>
                      
                        <option value="241">จับยี่กี รอบที่ 65</option>
                      
                        <option value="242">จับยี่กี รอบที่ 66</option>
                      
                        <option value="243">จับยี่กี รอบที่ 67</option>
                      
                        <option value="244">จับยี่กี รอบที่ 68</option>
                      
                        <option value="245">จับยี่กี รอบที่ 69</option>
                      
                        <option value="246">จับยี่กี รอบที่ 70</option>
                      
                        <option value="247">จับยี่กี รอบที่ 71</option>
                      
                        <option value="248">จับยี่กี รอบที่ 72</option>
                      
                        <option value="249">จับยี่กี รอบที่ 73</option>
                      
                        <option value="250">จับยี่กี รอบที่ 74</option>
                      
                        <option value="251">จับยี่กี รอบที่ 75</option>
                      
                        <option value="252">จับยี่กี รอบที่ 76</option>
                      
                        <option value="253">จับยี่กี รอบที่ 77</option>
                      
                        <option value="254">จับยี่กี รอบที่ 78</option>
                      
                        <option value="255">จับยี่กี รอบที่ 79</option>
                      
                        <option value="256">จับยี่กี รอบที่ 80</option>
                      
                        <option value="257">จับยี่กี รอบที่ 81</option>
                      
                        <option value="258">จับยี่กี รอบที่ 82</option>
                      
                        <option value="259">จับยี่กี รอบที่ 83</option>
                      
                        <option value="260">จับยี่กี รอบที่ 84</option>
                      
                        <option value="261">จับยี่กี รอบที่ 85</option>
                      
                        <option value="262">จับยี่กี รอบที่ 86</option>
                      
                        <option value="263">จับยี่กี รอบที่ 87</option>
                      
                        <option value="264">จับยี่กี รอบที่ 88</option>
                      
                  </select>
                </div>
              </div>

              <div class="row m-t-sm m-b-sm">
                <div class="col-xs-12">
                  

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 30 ธันวาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>รอผล</td>
      <td>
        รอผล
        รอผล
      </td>
      <td>
        รอผล
        รอผล
      </td>
      <td>
        รอผล
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 16 ธันวาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>955596</td>
      <td>
        616
        836
      </td>
      <td>
        290
        938
      </td>
      <td>
        89
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 1 ธันวาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>451005</td>
      <td>
        626
        303
      </td>
      <td>
        601
        257
      </td>
      <td>
        33
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 16 พฤศจิกายน 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>292391</td>
      <td>
        961
        831
      </td>
      <td>
        477
        628
      </td>
      <td>
        98
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 1 พฤศจิกายน 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>533726</td>
      <td>
        165
        425
      </td>
      <td>
        485
        036
      </td>
      <td>
        85
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 16 ตุลาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>413494</td>
      <td>
        180
        971
      </td>
      <td>
        287
        128
      </td>
      <td>
        86
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 1 ตุลาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>880714</td>
      <td>
        611
        726
      </td>
      <td>
        462
        952
      </td>
      <td>
        52
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 16 กันยายน 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>170143</td>
      <td>
        172
        647
      </td>
      <td>
        340
        388
      </td>
      <td>
        71
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 1 กันยายน 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>143224</td>
      <td>
        345
        679
      </td>
      <td>
        278
        195
      </td>
      <td>
        65
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 16 สิงหาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>715431</td>
      <td>
        115
        302
      </td>
      <td>
        253
        945
      </td>
      <td>
        37
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 1 สิงหาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>756519</td>
      <td>
        061
        386
      </td>
      <td>
        787
        989
      </td>
      <td>
        36
      </td>
    </tr>
  </tbody>
</table>

                    
                      
                      
                      <h4 class="m-b-xs text-success">หวยรัฐบาล - 17 กรกฎาคม 2560</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>รางวัลที่ 1</th>
      <th>สามตัวหน้า</th>
      <th>สามตัวหลัง</th>
      <th>สองตัวล่าง</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>รอผล</td>
      <td>
        รอผล
        รอผล
      </td>
      <td>
        รอผล
        รอผล
      </td>
      <td>
        รอผล
      </td>
    </tr>
  </tbody>
</table>

                    

                  

                </div>
              </div>
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