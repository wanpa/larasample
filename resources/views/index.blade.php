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
                <div class="table-responsive d-table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>案件番号</th>
                                <th>受付日</th>
                                <th>顧客名</th>
                                <th>工事名</th>
                                <th>ステータス</th>
                                <th>更新日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->receipt_date }}</td>
                                <td>{{ $project->customer_name }}</td>
                                <td>{{ $project->construction_name }}</td>
                                <td>{{ $project->updated_at }}</td>
                                <td><span class="badge badge-danger" style="height: 18px;">{{ $project->status }}<span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection