@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 m-0">                  {{-- Start of Container --}}
    <div id='section-one' class="">
        <div id="main-title w-100" class="row d-flex justify-content-center  flex-column flex-md-row align-items-center ">
            <div class=" col-md-4   d-flex flex-column  align-items-center align-items-md-end">
                <img class="" src="{{asset('img/multaka-logo.png')}}"  width=200px;>
            </div>

            <div id="titles" class="col-md-8 text-center  p-0 m-0">
                <p class="title1 m-0">أهلا وسهلاً بكم في ملتقى الكتاب</p>
                <p class="title2">حيث المطالعة والشاي والموسيقى معاً! </p>
            </div>
            
        </div>
    </div>
</div>                                   {{--  End of Container --}}

@endsection

@section('content2')
<div id="section-two" class="">
    <h1 id="last-news"class="myfont text-right py-3 bg-purple"> اخر النشاطات والفعاليات في الملتقى</h1>
    <hr>
        <div class="row">
                <div class="card col-md-6 mb-3" > {{-- 1 item --}}
                        <div class="row no-gutters">
                          <div class="col-md-6" style="max-width:520px;">
                            <img src="{{asset('img/multaka-bg.jpg')}}"  height="100%" class="card-img" alt="...">
                          </div>
                          <div class="col-md-6">
                            <div class="card-body text-right">
                              <h5 class="card-title">الشاعر علي الحلي وقافيته  النونية</h5>
                              <p class="card-text">سيتم مناقشة الاصدار الاخير من كتاب الشعر العربي للشاعر القدير علي الحلي ونونيته المشهورة وذلك  تمام الساعة السادسة 
                                  عصرا على قاعة ملتقى الكتاب. الدعوة عامة وللجميع 
                              </p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card col-md-6 mb-3" > {{-- 2item --}}
                            <div class="row no-gutters">
                              <div class="col-md-6" style="max-width:520px;">
                                <img src="{{asset('img/autum.jpg')}}"  height="100%" class="card-img" alt="...">
                              </div>
                              <div class="col-md-6">
                                <div class="card-body text-right">
                                  <h5 class="card-title">مناظرة ادبية للشاعر الدكتور احمد السالم</h5>
                                  <p class="card-text">سيتم مناقشة الاصدار الاخير من كتاب الشعر العربي للشاعر القدير علي الحلي ونونيته المشهورة وذلك  تمام الساعة السادسة 
                                      عصرا على قاعة ملتقى الكتاب. الدعوة عامة وللجميع 
                                  </p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card col-md-6 mb-3" > {{-- 3 item --}}
                                <div class="row no-gutters">
                                  <div class="col-md-6" style="max-width:520px;">
                                    <img src="{{asset('img/bookson.jpg')}}"  height="100%" class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="card-body text-right">
                                      <h5 class="card-title">جلسة حوارية بعنوان العراق والمستقبل</h5>
                                      <p class="card-text">سيتم مناقشة الاصدار الاخير من كتاب الشعر العربي للشاعر القدير علي الحلي ونونيته المشهورة وذلك  تمام الساعة السادسة 
                                          عصرا على قاعة ملتقى الكتاب. الدعوة عامة وللجميع 
                                      </p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card col-md-6 mb-3" > {{-- 4 item --}}
                                    <div class="row no-gutters">
                                      <div class="col-md-6" style="max-width:520px;">
                                        <img src="{{asset('img/arabcoffee.jpg')}}"  height="100%" class="card-img" alt="...">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="card-body text-right">
                                          <h5 class="card-title">أمسية يقيمها الملتقى احتفاءا بذكر تحرير العراق</h5>
                                          <p class="card-text">سيتم مناقشة الاصدار الاخير من كتاب الشعر العربي للشاعر القدير علي الحلي ونونيته المشهورة وذلك  تمام الساعة السادسة 
                                              عصرا على قاعة ملتقى الكتاب. الدعوة عامة وللجميع 
                                          </p>
                                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>



        </div>
    </div>


@endsection
