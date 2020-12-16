@extends('layouts.app')

@section('content')
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<div class="slider-area" style="max-height: 750px;">
    <div class="slide-bg d-flex">
        <div class="container" style="margin: 20px; padding-top: 300px;padding-bottom: 100px">
            <div class="row left-content-between align-items-center">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1 mb-10>Select Your New Perfect Style</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 title" style="text-align: center; min-height: 200px; padding-top: 30px; padding-bottom:30px; background-color: #3E3434;">
    <h1 style="font-size:28px;">Tentang Pinned.id</h1>
    <hr size="10px" width="15%" color="#fff">
    <p style="color:#fff">Pinned.id merupakan platform pelayanan menjahit pakaian yang cepat dan berkualitas. </br>Kami akan membantu Anda untuk mencari penjahit yang sesuai dengan kebutuhan Anda.</p>
</div>
<div style="display:flex">
    <div class="col-6" style="text-align: right; min-height: 200px; padding-top: 30px; padding-bottom:30px; background-color: #fff;">
        <p style="color:#3E3434; text-align:right">Ini semua tentang kualitas, bukan kuantitas.</p>
        <hr size="10px" width="25%" color="#3E3434" align="right">
        <p style="color:#3E3434">Kepuasan pelanggan adalah tujuan kami.</p>
        <hr size="10px" width="25%" color="#3E3434" align="right">
        <p style="color:#3E3434">Kami menawarkan layanan 24/7, Anda dapat berbelanja kapanpun!</p>
        <hr size="10px" width="25%" color="#3E3434" align="right">
    </div>
    <div class="col-6;" style="margin-left: 20px">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                <img src="images/mesin-jahit.jpg" alt="" class=" heartbeat" style="height: 180px; margin: 30px;" display="flex">
            </div>
        </div>
    </div>
</div>
<div class="col-12 title" style="text-align: center; min-height: 200px; padding-top: 30px; padding-bottom:30px; background-color: #3E3434;">
    <h1 style="font-size:28px;">Desain Sendiri Pakaian Anda</h1>
    <hr size="10px" width="15%" color="#fff">    
    <div class="align-items-center ">
        <img src="images/model1.png" alt="" style="height: 250px; margin: 30px;">
        <img src="images/fabric1.png" alt="" style="height: 250px; margin: 30px;">
        <img src="images/measure1.png" alt="" style="height: 250px; margin: 30px;">
    </div>
    <br>
    <div class="quotes">
    <p>“If you're wearing suits and you want to create your own sense of style, get to the tailor.”<br>- Matt Bomer</p>
    </div>
</div>
<div class="modal-footer">
    <div style="text-align:center;">
        <div class="col-12">
            <p>&copy; Pinned.id. All rights reserved.</p>
        </div>
    </div>
</div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
@endsection