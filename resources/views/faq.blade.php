@extends('layouts.app')

@section('content')
<div class="body-inner" style="background-color: #3E3434;">
<div class="container-fluid" >
        <div class="min-vh-100">
        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="col-12 title" style="text-align: center; min-height: 150px; padding-top: 30px;">
                    <h1 style="font-size:28px;">FAQ</h1>
                    <hr size="10px" width="15%" color="#fff">
                    <p style="color:#fff">Berikut adalah pertanyaan yang paling sering diajukan oleh pelanggan kami.</p>
                </div>
                <div id="accordion">
                    <?php $no = 1; ?>
                    @foreach($faqs as $faq)
                    <div class="card">
                        <div class="card-header" id="heading{{$faq->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                                {{ $no++ }}. {{$faq->ask}}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#accordion">
                            <div class="card-body" style="font-size:18px">
                            {{$faq->answer}}
                            </div>
                        </div>
                    </div>
                    @endforeach                
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="modal-footer">
    <div style="text-align:center;">
        <div class="col-12">
            <p>&copy; Pinned.id. All rights reserved.</p>
        </div>
    </div>
</div>
</div>

@endsection