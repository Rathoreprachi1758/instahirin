@extends('layouts.app')

@section('content')
<style>
    .footerUp_detail {
        margin-top: 300px !important;
    }
</style>
<div class="container">
    <div class="row justify-content-center footerUp_detail">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <h1 style="font-family:sans-serif;font-size:24px">Thanks for reaching out! We’ll be in touch faster than a FORMULA lap. Stay tuned!
                    </h1>
                    <marquee direction="right" scrollamount="60" style="font-size: 70px;" loop="2"><span style="display: inline-block; transform: scaleX(-1);">🏎️</span></marquee>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

