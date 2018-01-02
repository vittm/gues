@extends('layouts.admin')

@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                <h4 class="title">Khách kiểm tra giá cho thuê</h4>
                                <br />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bigboy">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th >Block/Căn</th>
                                            <th class="">Email</th>
                                            <th> Bedrooms</th>
                                            <th> Kiểu phòng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($customers as $value)
                                        <tr>
                                            <td class="td-name">
                                                {{ $value->id}}
                                            </td>
                                            <td class="td-number">{{ $value->block}}</td>
                                            <td class="td-name">
                                            {{ $value->email}}
                                            </td>
                                            <td>{{ $value->bedrooms}}</td>
                                            <td>{{ $value->type}}</td>
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
