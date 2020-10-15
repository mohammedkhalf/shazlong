<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shazlong</title>
    
    <link  rel="stylesheet" type="text/css" href="{{url('/')}}/frontend/css/bootstrap.css">

  <link  rel="stylesheet" type="text/css" href="{{url('/')}}/frontend/css/font-awesome.min.css">
  <link  rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' >
  <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

  <link rel="stylesheet" href="{{url('/')}}/frontend/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/media.css">
  <link href="css/hover.css" rel="stylesheet" media="all">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />


  <!-- <link rel="stylesheet" href="css/hover-min.css"> -->
 
    <!-- IE9 -->

    <script src="{{url('/')}}/frontend/js/html5shiv.js"></script>
    <script type="{{url('/')}}/frontend/js/respond.min.js"></script>

</head>
<body>
      <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header" style="float:right">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="https://www.shezlong.com/ar/assets/images/shezlong-logo-ar.png" width="200px" height="60px" class="img-rounded"/>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float:left;">
            <ul class="nav navbar-nav  navbar-right">
              <li><a href="#"><i class="fa fa-globe"></i> English</a></li>
              <li><a href="#">انضم لينا كطبيب </a></li>
              <li><a href="#">تسجيل الدخول </a></li>
              <li><a href="#">المقالات</a></li>
              <li><a href="#">الاختبارات النفسيه</a></li>
              <li><a href="#">ازاي تختبر جلستك ؟ </a></li>
              <li><a href="#">المعالجين</a></li>

              
            </ul>
          </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->
      </nav>
      <!-- Through Best Life-->
      <section class="about text-center">
        <div class="cl-xs-12">
          <h1> خطوات نحو حياه افضل    </h1> 
        </div>

        <div class="md-stepper-horizontal orange">
            <div class="md-step active done">
              <div class="md-step-circle"><span>3</span></div>
              <div class="md-step-title">اكمال عملية الدفع </div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>

            <div class="md-step active editable">
              <div class="md-step-circle"><span>2</span></div>
              <div class="md-step-title">حدد الوقت والتاريخ </div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>

            <div class="md-step active">
              <div class="md-step-circle"><span>1</span></div>
              <div class="md-step-title">اختر المعالج </div>
              <div class="md-step-bar-left"></div>
              <div class="md-step-bar-right"></div>
            </div>
        </div>
      </section>
      <!-- End Through Best Life-->

      <!-- Model -->

             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" dir="rtl">

                        <div class="vertical-alignment-helper">
                            <div class="modal-dialog vertical-align-center">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                       <div class="row">
                                            <div class="col-md-7 profile-info">
                                               <h2 class="text-info" id="doctor_name"> </h2>
                                               <p id="speclist-model"></p>
                                               <p id="doctor-major"> </p> 
                                               <!-- p id="price-per-half"></p-->

                                            </div>

                                            <div class="col-md-4 profile-img">
                                                 <img  id="doctor-img" class="img-circle" style="height:150px; width: 150px" src="" />
                                            </div> <!-- img profile -->
                                        </div>

                                      <ul class="nav nav-tabs nav-justified">
                                          <li class="active"><a data-toggle="tab" id="week" href="#home"> هذا الاسبوع  </a></li>
                                          <li><a data-toggle="tab" id="calender" href="#menu1"> التقويم </a></li>
                                      </ul>

                                        <div class="tab-content">
                                          <div id="home" class="tab-pane fade in active">
                                            <h3>HOME</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div id="menu1" class="tab-pane fade">
                                            <h3>Menu 1</h3>
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                          </div>
                                          
                                        </div>
                                      
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                                        <button type="button" class="btn btn-primary btn-rounded">احجز الان </button>
                                    </div>
                                </div>
                            </div>
                        </div>
              </div>

       <!-- star Therapist section -->
            <section class="price_table text-center">
              <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-md-9">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="Filter-Inputs">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-lg" dir="rtl" id="sel2">
                                      <option value="0">رتب  حسب </option>
                                      <option value="1"> من الاقل الي الاعلي </option>
                                      <option value="2"> من  الاعلي الي الاقل </option>
                                      <option value="3"> الاعلي تقيما</option>
                                  </select>
                                </div><!-- /input-group -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 
                                <div class="form-group">
                                  <select class="form-control input-lg" dir="rtl" id="sel1">
                                      <option value="0">جميع التخصصات</option>
                                      @foreach($allMajors as $major)
                                          <option value="{{$major->id}}"> {{$major->name}} </option>
                                      @endforeach
                                     
                                  </select>
                                </div><!-- /input-group -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 
                                 <div class="input-group">
                                    <input type="text" class="form-control input-lg" dir="rtl" placeholder="بحث باسم المعالج">
                                  </div><!-- /input-group -->
                            </div>
                        </div> <!-- Filter Inputs -->

                         
                        @foreach($allDoctors as $doctor)

                          <div class="col-md-4 col-sm-6 col-xs-12 hvr-push">
                              <div class="price_box">
                                        <a>
                                          <img class="img-circle" width="110px" height="90px" src="{{ $doctor->image }}" />
                                        </a>
                                        <h3 class="text-info">  د. {{ $doctor->name }} </h3>

                                        <ul class="list-unstyled">
                                          <li> {{ $doctor->speclist }}  </li>
                                          <li id="major">{{ $doctor->major->name }} </li>
                                          <li> {{ $doctor->price_per_half }} <i class="fa fa-money" aria-hidden="true"></i> </li>
                                        </ul>    
                                        <button  id="profile" class="btn btn-primary"> الملف الشخصي </button>
                                        <button  id="reserv" data-id="{{$doctor->id}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal">الحجز الان </button>    
                              </div>
                          </div>

                        @endforeach


                           

                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="price_box" id="sidebar">
                              <h2 class="text-info">التصنيف </h2><hr/>
                              <h4 class="text-info"> المواعيد المتاحه والمده <i class="fa fa-calendar" aria-hidden="true"></i> </h4><br/>
                              <div class="row">
                                  <div class="col-md-6">
                                      <span id="check2"> االاسبوع <input type="checkbox" name="check2" > </span> 
                                  </div>
                                  <div class="col-md-6">
                                       <span id="check1"> اليوم <input type="checkbox" name="check1" > </span> 
                                  </div>
                              </div><br/>
                              <div class="Datefrom" dir="rtl">
                                <h5 class="text-from"> متاح من : اختر معاد  </h5>
                                  <div class="form-group">
                                    <div class="input-group datepicker">
                                      <input type="text" class="form-control" readonly id="input1" placeholder="اخنر تاريخ">
                                      <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                      </span>
                                    </div>
                                  </div>
                              </div>
                              <div class="DateTo" dir="rtl">
                                <h5 class="text-from"> متاح من : اختر معاد  </h5>
                                  <div class="form-group">
                                    <div class="input-group datepicker">
                                      <input type="text" class="form-control" readonly id="input2" placeholder="اخنر تاريخ">
                                      <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                      </span>
                                    </div>
                                  </div>
                              </div>

                              <div class="row">
                                <h4 class="text-info"> الفترة </h4>

                                  <div class="col-md-6">
                                      <span id="check2"> ساعة <input type="checkbox" name="check2" > </span> 
                                  </div>
                                  <div class="col-md-6">
                                       <span id="check1"> نصف ساعة <input type="checkbox" name="check1" > </span> 
                                  </div>
                              </div><br/>

                              <div class="row">
                                <h4 class="text-info"> الجنس   <i class="fa fa-user" aria-hidden="true"></i></h4>

                                  <div class="col-md-6">
                                      <span id="check2"> انثي <input type="checkbox" name="check2" > </span> 
                                  </div>
                                  <div class="col-md-6">
                                       <span id="check1"> ذكر  <input type="checkbox" name="check1" > </span> 
                                  </div>
                              </div><br/>

                              <div class="row">
                                <h4 class="text-info"> التقييم  <i class="fa fa-star" aria-hidden="true"></i> </h4>
                                <section class='rating-widget'>
                                    <!-- Rating Stars Box -->
                                    <div class='rating-stars text-center'>
                                      <ul id='stars'>
                                        <li class='star' title='Excellent'>
                                              <h6> وما فوق  </h6>
                                        </li>

                                        <li class='star' title='Poor' data-value='1'>
                                          <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Fair' data-value='2'>
                                          <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Good' data-value='3'>
                                          <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Excellent' data-value='4'>
                                          <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        
                                     
                                      </ul>
                                    </div>

                                </section>
                                
                              </div>

                                <div class="row">
                                  <h4 class="text-info"> اللغة <i class="fa fa-globe" aria-hidden="true"></i></h4>
                                  <div class="form-group" id="lang">
                                    <select class="form-control input-lg" dir="rtl" >
                                        <option> اختار اللغة  </option>
                                        <option>العربية </option>
                                        <option> الانجليزيه </option>
                                    </select>
                                  </div><!-- /input-group -->
                                 
                                </div><br/>

                           


                          </div>

                      </div>
                </div> <!-- col-lg-12 -->
              </div>
            </section>
        <!-- End Therapist section -->
                                               
      <section class="footer">
          <div class="container">
              <div class="row" dir="rtl">
                  <div class="col-lg-3 col-md-6">
                        <ul class="list-unstyled social-list">
                            <li> <a href=""></a> <i class="fa fa-facebook"></i> </li>
                            <li> <a href=""></a> <i class="fa fa-youtube"></i> </li>
                        </ul>

                      <h5> جميع الحقوق محفوظة لشيزلونج </h5>
                      <img src="https://www.shezlong.com/ar/assets/images/shezlong-logo-horizontal-light.png" width="200px" height="120px">


                    
                  </div>


                  <div class="col-lg-3 col-md-6">
                      <h3> للمعالجين  </h3>
                      <h4 class="media-heading"> <a href=""> انضم الان  </a> </h4>
                  
                  </div>

                  <div class="col-lg-3 col-md-6">
                      <h3> اعرف اكثر  </h3>
                      <h4 class="media-heading"> <a href=""> المقالات  </a> </h4>
                      <h4 class="media-heading"> <a href=""> ارقام الطواري  </a> </h4>
                  </div>

                  <div class="col-lg-3 col-md-6">
                      <h3> مدونة شيزلونج </h3>
                      <h4 class="media-heading"> <a href="">الشروط والاحكام </a> </h4>
                      <h4 class="media-heading"> <a href=""> سياسة الموقع  </a> </h4>
                      <h4 class="media-heading"> <a href=""> وظائف   </a> </h4>
                  </div>

              </div>
          </div>
      </section>

      <section class="loading-overflow">
        <div class="spinner"></div>
      </section>

      <div id="scroll-top">
          <i class="fa fa-chevron-up fa-3x"></i>
      </div>                
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{url('/')}}/frontend/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/frontend/js/asd.js"></script>
    <!-- Datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


  <!-- Script -->
  <script type="text/javascript">

    $(document).ready(function(){
          $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
          });
          // Get Request Data For Model
          $('body').on('click', '#reserv', function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            $.get('doctor/' + id + '/show', function (data) {
                $("#doctor_name").html(data.data.name)
                $("#speclist-model").html(data.data.speclist)
                $("#doctor-major").html(data.data.major.name)
                $("#price-per-half").html(data.data.price_per_half)
                document.getElementById("doctor-img").src = data.data.image
            }); //get
          }); 






        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
          var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
         
          // Now highlight all the stars that's not after the current hovered star
          $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
              $(this).addClass('hover');
            }
            else {
              $(this).removeClass('hover');
            }
          });
        
          }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
              $(this).removeClass('hover');
            });
          });
        
        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
          var onStar = parseInt($(this).data('value'), 10); // The star currently selected
          var stars = $(this).parent().children('li.star');
          
          for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
          }
          
          for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
          }
          
          // JUST RESPONSE (Not needed)
          var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
          var msg = "";
          if (ratingValue > 1) {
              msg = "Thanks! You rated this " + ratingValue + " stars.";
          }
          else {
              msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
          }
          responseMessage(msg);
          
        });
      }); //document

      // function responseMessage(msg) {
      //   $('.success-box').fadeIn(200);  
      //   $('.success-box div.text-message').html("<span>" + msg + "</span>");
      // }
   
  </script>

</body>
</html>