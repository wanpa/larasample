@extends('layouts.app')
@section('content')
<section class="portfolio-block block-intro" style="padding-top: 40px;">
        <div class="container">
            <div class="about-me">
                <form class="form-inline mr-auto" target="_self" style="padding-top: 50px;">
                    {{ csrf_field() }}
                    <div class="form-group" style="margin-right: 14px;"><i class="fa fa-search" style="margin-right: 19px;"></i><label for="search-field"></label><input class="form-control form-control-lg search-field" type="search" name="search" id="search-field" style="width: 371px;"><a class="btn btn-danger action-button"
                            role="button" href="#" style="margin-left: 23px;">検索</a></div>
                </form>
                <div id="app">
                    <projects-component></projects-component>
                </div>
            </div>
        </div>
    </section>
@endsection