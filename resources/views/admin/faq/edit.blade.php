<?php $thisPage="Edit FAQ"; ?>
@extends ('layouts.adminapp')

@section('content')   

<!-- BREADCRUMB -->
<div class="container">
    <div class="row">
    <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/adminfaq">FAQ</a></li>
                <li class="breadcrumb-item active" aria-current="admineditfaq">Apakah Pinned.id itu?</li>
            </ol>
        </nav>
    </div>
</div>


<br></br>

<div class="body-inner">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Perbarui FAQ 
                        </h3>
                        <br></br>
                        <form method="POST" action="/adminfaq/edit/{{$faq->id}}">
                        @csrf
                            <!-- Pertanyaan -->
                            <div class="form-group">
                                <label for="faq_question" class="col-form-label text-md-left">{{ __('Pertanyaan') }}</label>
                                <textarea id="ask" type="text" class="form-control @error('ask') is-invalid @enderror border border-dark" name="ask" value="{{$faq->ask}}" required autocomplete="faq_question" autofocus>{{$faq->ask}}</textarea>
                            </div>

                            <!-- Jawaban -->
                            <div class="form-group">
                                <label for="description" class="col-form-label text-md-left">{{ __('Jawaban') }}</label>
                                <textarea rows="10" class="form-control @error('answer') is-invalid @enderror border border-dark" name="answer" >{{$faq->answer}}</textarea>
                            </div>

                            <!-- Save Button -->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-6">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            

@endsection