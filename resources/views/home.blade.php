@extends('layouts.app')

@section('content')
<div class="container">                  {{-- Start of Container --}}
    <div id='section-one'>
        <div id="main-title" class="row">
            <div class="col-3">
                <img src="{{asset('img/multaka-logo.png')}}"  width=180px;>
            </div>

            <div  class="col-9 text-center">
                <h1 class="title1">أهلا وسهلاً بكم في ملتقى الكتاب</h2>
                <h2 class="title2">حيث المطالعة والشاي والموسيقى معاً! </h2>
            </div>
            
        </div>
    </div>
</div>                                   {{--  End of Container --}}

@endsection

@section('content2')
<div id="section-two">
    <h1 class="myfont text-right py-3 bg-purple"> اخر النشاطات والفعاليات في الملتقى</h1>
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
