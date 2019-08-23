@extends('layouts.app')

@section('content')
<div id="section-two" class="my-3 text-right">
    <h1 id="last-news"class="myfont  my-4 d-inline bg-purple"> اخر النشاطات والفعاليات في الملتقى</h1>
    <hr>
  
        <div id="article-show" class="row">
           
                <div class="card col-sm-8 mb-3 border border-alert " > 
                        <div class="row no-gutters border border-warning">
                          {{-- <div class="col-md-6" style="max-width:520px; max-height:250px;">
                            <img src="{{asset('articles-img').'/'.$post->image}}"  height="100%" class="card-img" alt="...">
                          </div> --}}
                          <div class="col-md-12 border border-info">
                            <div class="card-body ">
                              <h5 class="card-title text-center">{{$post->title}}</h5>
                              <p class="card-text">
                                
                                 {!! $post->body!!}
                              </p>
                              <p class="card-text"><small class="text-muted">Last updated {!! $post->updated_at!!}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>       
              
          </div> {{-- End Row --}}            
        
    </div>


@endsection