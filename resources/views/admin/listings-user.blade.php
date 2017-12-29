@extends('layouts.admin')

@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                <h4 class="title">Danh sách khách hàng thuê</h4>
                                <br />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bigboy">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th >Tên khách hàng</th>
                                            <th class="">Email</th>
                                            <th class="">Phone</th>
                                            <th class="">Call Me</th>
                                            <th class="">PostCode </th>
                                            <th class="">Nước</th>
                                            <th> Thành Phố</th>
                                            <th> Phòng ngủ</th>
                                            <th> Phòng tắm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($customers as $value)
                                        <tr>
                                            <td class="td-name">
                                                {{ $value->id}}
                                            </td>
                                            <td class="td-number">{{ $value->fullname}}</td>
                                            <td class="td-name">
                                            {{ $value->email}}
                                            </td>
                                            <td class="td-name">
                                                {{ $value->phone}}
                                            </td>
                                            <td class="td-name">
                                            {{ $value->call}}
                                            </td>
                                            <td class="td-number">
                                            {{ $value->postcode}}
                                            </td>
                                            <td>{{ $value->country}}</td>
                                            <td>{{ $value->city}}</td>
                                            <td>{{ $value->bedrooms}}</td>
                                            <td>{{ $value->badrooms}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!--  end card  -->
                        {{ $customers->links() }}
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->
@Stop
