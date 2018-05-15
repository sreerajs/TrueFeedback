@extends('layouts.template')
@section('title', 'Dashboard')
@section('body_content')
<div class="o-page">
    @include('layouts.sidebar')
    @role('User')
    @yield('user_sidebar')
    @endrole
    @role('Business')
    @yield('business_sidebar')
    @endrole
    <main class="o-page__content">
        @include('layouts.header')
        @role('User')
        @yield('user_header')
        @endrole
        @role('Business')
        @yield('business_header')
        @endrole
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="c-table-responsive@wide">
                        <table class="c-table">
                            <thead class="c-table__head">
                                <tr class="c-table__row">
                                    <th class="c-table__cell c-table__cell--head">Contract</th>
                                    <th class="c-table__cell c-table__cell--head">Category</th>
                                    <th class="c-table__cell c-table__cell--head">Interactions</th>
                                    <th class="c-table__cell c-table__cell--head">Date</th>
                                    
                                    <th class="c-table__cell c-table__cell--head">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                @foreach ($dataArray['contractList'] as $contract)
                                <tr id = "contract-{{$contract->id}}" class="c-table__row">
                                    <td class="c-table__cell">
                                        <div class="o-media">
                                            <div class="o-media__body">
                                                <h6>{{$contract->name }}</h6>                                                    
                                            </div>
                                        </div>
                                    </td>
                                    <td class="c-table__cell">Pinterest</td>
                                    <th class="c-table__cell">223</th>
                                    <td class="c-table__cell">{{$contract->updated_at }}</td>
                                    
                                    <td class="c-table__cell">
                                        <div class="c-dropdown dropdown">
                                            <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                More <i class="feather icon-chevron-down"></i>
                                            </a>

                                            <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                                                <a class="c-dropdown__item dropdown-item" href="#">Deploy</a>
                                                <a class="c-dropdown__item dropdown-item" onclick="deleteContract({{$contract->id}})">Delete</a>
                                                <a class="c-dropdown__item dropdown-item" onclick="editContract({{$contract->id}})">Edit</a>
                                                <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>  
                                @endforeach                                 
                            </tbody>
                        </table>                        
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-12">
                            {{ $dataArray['contractList']->links() }}                                 
                        </div>   
                    </div>
                </div>
            </div>
        </div><!-- // .container -->
</div>
@endsection