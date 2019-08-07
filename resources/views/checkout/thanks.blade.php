
@extends('layouts.cart')

@section('pagetitle')
Sepatu Bordir.id | Thanks You
@endsection

@section('content')
<div class="main_slider" >
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">{{ __('Success') }}</div>
                <div class="card-body">
                    <div class="panel-body"> 
                        <div class="container mb-4">
                            <h4>Thank you for puchasing our products.</h4>
                        </div>
                    </div></br>
                    <a href="/history" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Kirim bukti pembayaran</a>
                </div>
            </div>
        </div>
    </div> 

@endsection