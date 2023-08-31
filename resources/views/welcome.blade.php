@extends('layouts.app')
@section('content')
    <div class="container-fluid main">
        <div class="heroSection">
            <div class="col-md-6 heroText">
                <div class="content">

                    <h1 class="text-center">Create Your Resume <br> a minute</h1>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-primary">Get started <i
                            class="fa-solid fa-circle-plus"></i></a>
                </div>
            </div>
        </div>
        <section class="goal ">
            <h2 class="text-center m-5"><u>How to generate a Resume?</u></h2>
            <div class="row justify-content-around">
                <div class="card col-md-6">
                    <div class="card-body">
                        <span> <i class="fa-regular fa-file"></i> Pick any Template you want. </span>
                    </div>
                </div>
                <div class="card col-md-6">
                    <div class="card-body">
                        <span><i class="fa-regular fa-rectangle-list"></i> Fill in your data and thats it.</span>
                    </div>
                </div>
            </div>
        </section>
        {{-- card section  start --}}
        <section>
            <h1 class="text-center mt-5"><u>Pick a Template</u></h1>
            <hr>
            <div class="cardSection mt-4 d-flex justify-content-center align items-center">
                <div class="card">
                    <div class="card-body">
                        <img src="" alt="">
                        <div class="middle">
                            <a href="" class="btn btn-dark">Start</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="" alt="">
                        <div class="middle">
                            <a href="" class="btn btn-dark">Start</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="" alt="">
                        <div class="middle">
                            <a href="" class="btn btn-dark">Start</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- card section end  --}}
        {{-- our goal start --}}


        {{-- our goal end  --}}
    </div>
@endsection
