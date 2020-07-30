@extends('Layout.app')
@section('title','Contact')
@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- যোগাযোগ করুন  -</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.840218738401!2d90.37767645090125!3d23.753076584512378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ae70ccad3d%3A0xc184d7b62af05d49!2sSukrabad%20Jame%20Masjid!5e0!3m2!1sen!2sbd!4v1596140622991!5m2!1sen!2sbd" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <div class="col-md-6">
                <h3 class="service-card-title">ঠিকানা</h3>
                <hr>
                <p class="footer-text"><i class="fas fa-map-marker-alt"></i>  Shukrabad,Dhanmondi,Dhaka <i class="fas ml-2 fa-phone"></i>   01773521823  <i class="fas ml-2 fa-envelope"></i>   mahamodul.shakil11@gmail.com</p>
                <h3 class="service-card-title">মেসেজ পাঠান </h3>
                <div class="form-group ">
                    <input id="nameid" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="mobileid" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input id="emailid" type="text" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <input id="msgid" type="text" class="form-control  w-100" placeholder="মেসেজ ">
                </div>
                <button id="contactSendBtn"  class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
            </div>
        </div>
    </div>
@endsection

