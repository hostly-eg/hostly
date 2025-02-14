@extends('layouts.app')
@section('head')
    <style>
        .tab-pane {
            display: none;
        }
        .tab-btn {
            cursor: pointer;
        }

        .tab-btn:hover {
            border: #007bff solid 2px !important;
        }

        .tab-pane.active {
            display: block;
        }

        .boxshadow {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>
@endsection
@section('content')
    <div class="container pt-5 my-5">
        <div class="row d-flex justify-content-center pt-5">
            <div class="fs-1 my-5 fw-light text-capitalize">welcome back, {{$user->name}}</div>
            <hr>
            <div class="col-12 d-flex flex-column flex-md-row justify-content-center">
                <!-- Tabs section -->
                <div class="col-12 col-md-7 d-flex justify-content-center">
                    <div class="col-4 border p-3 position-relative tab-btn" data-tab="tab1">
                        <div style="position: absolute; right: 5px; top: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                 class="bi bi-box-fill text-secondary" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                            </svg>
                        </div>
                        <div style="border-bottom: solid 2px #5cb85c;" class="col-4 d-flex flex-column">
                            <span class="fs-1">{{$orders->count()}}</span>
                            <div class="text-nowrap text-capitalize">my service</div>
                        </div>
                    </div>
                    <div class="col-4 border p-3 position-relative tab-btn" data-tab="tab2">
                        <div style="position: absolute; right: 5px; top: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                class="bi text-secondary bi-hdd-stack-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1" />
                            </svg>
                        </div>
                        <div style="border-bottom: solid 2px #5bc0de;" class="col-4 d-flex flex-column">
                            <span class="fs-1">{{$orders->where('hosting_plan_id',true)->count()}}</span>
                            <div class="text-nowrap text-capitalize">shared host</div>
                        </div>
                    </div>
                    <div class="col-4 border p-3 position-relative tab-btn" data-tab="tab5">
                        <div style="position: absolute; right: 5px; top: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                 class="bi text-secondary bi-hdd-stack-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1" />
                            </svg>
                        </div>
                        <div style="border-bottom: solid 2px #5bc0de;" class="col-4 d-flex flex-column">
                            <span class="fs-1">{{$orders->where('vps_plan_id',true)->count()}}</span>
                            <div class="text-nowrap text-capitalize">Vps</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 d-flex justify-content-center">
                    <div class="col-6 border p-3 position-relative tab-btn" data-tab="tab3">
                        <div style="position: absolute; right: 5px; top: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                 class="bi bi-globe text-secondary" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                            </svg>
                        </div>
                        <div style="border-bottom: solid 2px #d9534f;" class="col-4 d-flex flex-column">
                            <span class="fs-1">{{$orders->filter(function($order) {
                                return $order->domain_plan_id != null && $order->domain_subscription && $order->domain_subscription->status == 'active';
                            })->count()}}</span>
                            <div class="text-nowrap text-capitalize">domains</div>
                        </div>
                    </div>
                    <div class="col-6 border p-3 position-relative tab-btn" data-tab="tab4">
                        <div style="position: absolute; right: 5px; top: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                class="bi bi-credit-card-2-back-fill text-secondary" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1z" />
                            </svg>
                        </div>
                        <div style="border-bottom: solid 2px #f0ad4e;" class="col-4 d-flex flex-column">
                            <span class="fs-1">{{ $orders->filter(function($order) {
                                return ($order->domain_subscription && $order->domain_subscription->status == 'pending') ||
                                       ($order->plan && $order->subscription->status == 'pending') ||
                                       ($order->vps_plan && $order->vps_plan->status == 'pending');
                            })->count() }}</span>
                            <div class="text-nowrap text-capitalize">invoices</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab contents -->
            <div class="tab-content">
                <div id="tab2" class="tab-pane  mt-5 col-12 boxshadow p-3" style="display:none;">
                    <div class="text-capitalize fs-3 fw-light rounded-2">my plans </div>
                    <div class="table-responsive col-12">
                        <table class="table mt-3 table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-2 text-nowrap">plan</th>
                                    <th scope="col" class="p-2 text-nowrap">date from</th>
                                    <th scope="col" class="p-2 text-nowrap">date to</th>
                                    <th class="text-nowrap">domain </th>

                                    <th scope="col" class="p-2 text-nowrap">user</th>
                                    <th scope="col" class="p-2 text-nowrap">password</th>
                                    <th scope="col" class="p-2 text-nowrap">link</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                @if($order->hosting_plan_id)
                                    @if($order->subscription->status == 'active' or $order->subscription->status == 'ended')
                                        <tr>
                                            <td class=" text-nowrap">shared host : {{$order->plan->name}}</td>
                                            <td class=" text-nowrap">{{$order->subscription->start_date->format('d/m/Y')}}</td>
                                            <td class=" text-nowrap">{{$order->subscription->end_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">{{$order->subscription->domain_name}}</td>
                                            <td class=" text-nowrap">{{$order->subscription->user_host}}</td>
                                            <td class=" text-nowrap">{{$order->subscription->password_host}}</td>
                                            <td class=" text-nowrap">
                                                @if($order->subscription->status == 'active')
                                                    <div class="btn btn-primary col-12">
                                                        <a href="{{$order->subscription->cPanel_link}}" class="text-light text-decoration-none">
                                                            go to Cpanal
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="btn btn-info col-12">
                                                        <a href="{{route('cart',[$order->plan->id,$order->subscription->id])}}" class="text-light text-decoration-none">
                                                            Re New
                                                        </a>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab5" class="tab-pane  mt-5 col-12 boxshadow p-3" style="display:none;">
                    <div class="text-capitalize fs-3 fw-light rounded-2">my vps </div>
                    <div class="table-responsive col-12">
                        <table class="table mt-3 table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" class="p-2 text-nowrap">vps plan</th>
                                <th scope="col" class="p-2 text-nowrap">date from</th>
                                <th scope="col" class="p-2 text-nowrap">date to</th>
                                <th scope="col" class="p-2 text-nowrap">ip</th>
                                <th scope="col" class="p-2 text-nowrap">user</th>
                                <th scope="col" class="p-2 text-nowrap">password</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                @if($order->vps_plan_id)
                                    @if($order->vps_subscription->status == 'active' or $order->vps_subscription->status == 'ended')
                                        <tr>
                                            <td class=" text-nowrap">shared host : {{$order->vps_plan->name}}</td>
                                            <td class=" text-nowrap">{{$order->vps_subscription->start_date->format('d/m/Y')}}</td>
                                            <td class=" text-nowrap">{{$order->vps_subscription->end_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">{{$order->vps_subscription->ip}}</td>
                                            <td class=" text-nowrap">{{$order->vps_subscription->user}}</td>
                                            <td class=" text-nowrap">{{$order->vps_subscription->password}}</td>
                                            <td class=" text-nowrap">
                                                @if($order->vps_subscription->status == 'active')
                                                    <div class="btn btn-primary col-12">
                                                        <a class="text-light text-decoration-none">
                                                            active
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="btn btn-info col-12">
                                                        <a href="{{route('cart_domain',[$order->plan->id,$order->vps_subscription->id])}}"  class="text-light text-decoration-none">
                                                            Re New
                                                        </a>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab3" class="tab-pane  mt-5 col-12 boxshadow p-3" style="display:none;">
                    <div class="text-capitalize fs-3 fw-light rounded-2">my domains </div>
                    <div class="table-responsive col-12">
                        <table class="table mt-3 table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-2 text-nowrap">domain name</th>
                                    <th scope="col" class="p-2 text-nowrap">date from</th>
                                    <th scope="col" class="p-2 text-nowrap">date to</th>
                                    <th scope="col" class="p-2 text-nowrap">status</th>
                                    <th scope="col" class="p-2 text-nowrap">dns</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                @if($order->domain_plan_id)
                                    @if($order->domain_subscription->status == 'active' or $order->domain_subscription->status == 'ended')
                                        <tr>
                                            <td class=" text-nowrap">{{$order->product}}</td>
                                            <td class=" text-nowrap">{{$order->domain_subscription->start_date->format('d/m/Y')}}</td>
                                            <td class=" text-nowrap">{{$order->domain_subscription->end_date->format('d/m/Y')}}</td>
                                            <td class=" text-nowrap">
                                                @if($order->domain_subscription->status == 'active')
                                                    <div class="btn btn-success d-block col-12">active</div>
                                                @else
                                                    <div class="btn btn-info col-12">
                                                        <a href="{{route('domain_cart',[$order->domain_plan->id,$order->domain_subscription->id,$order->product])}}" class="text-light text-decoration-none">
                                                            Re New
                                                        </a>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class=" text-nowrap">
                                                <div class="btn btn-primary d-block update-dns" type="button" data-toggle="modal" data-target="#activeDModal" data-id="{{$order->domain_subscription->id}}" data-dns1="{{$order->domain_subscription->dns1}}" data-dns2="{{$order->domain_subscription->dns2}}" data-dns3="{{$order->domain_subscription->dns3}}" data-dns4="{{$order->domain_subscription->dns4}}">update dns</div>
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab4" class="tab-pane" style="display:none;">
                    <div class="text-capitalize fs-3 fw-light rounded-2">my invoices</div>
                    <div class="table-responsive col-12">
                        <table class="table mt-3 table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-2 text-nowrap">invoice number</th>
                                    <th scope="col" class="p-2 text-nowrap">date</th>
                                    <th scope="col" class="p-2 text-nowrap">amount</th>
                                    <th scope="col" class="p-2 text-nowrap">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                @if(($order->domain_subscription && $order->domain_subscription->status == 'pending') ||
                                    ($order->plan && $order->subscription->status == 'pending') ||
                                    ($order->vps_plan && $order->vps_subscription->status == 'pending'))
                                    <tr>
                                        @if($order->plan)
                                            <td class="text-nowrap">shared host : {{$order->plan->name}}</td>
                                            <td class="text-nowrap">{{$order->subscription->start_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">{{$order->subscription->end_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">
                                                <div class="btn btn-warning col-12">
                                                    {{$order->subscription->status}}
                                                </div>
                                            </td>
                                        @elseif($order->vps_plan_id)
                                            <td class="text-nowrap">vps : {{$order->vps_plan->name}}</td>
                                            <td class="text-nowrap">{{$order->vps_subscription->start_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">{{$order->vps_subscription->end_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">
                                                <div class="btn btn-warning col-12">
                                                    {{$order->vps_subscription->status}}
                                                </div>
                                            </td>
                                        @elseif($order->domain_plan_id)
                                            <td class="text-nowrap">domain : {{$order->product}}</td>
                                            <td class="text-nowrap">{{$order->domain_subscription->start_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">{{$order->domain_subscription->end_date->format('d/m/Y')}}</td>
                                            <td class="text-nowrap">
                                                <div class="btn btn-warning col-12">
                                                    {{$order->domain_subscription->status}}
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab1" class="tab-pane active mt-5 col-12 boxshadow p-3">
                    <div class="text-capitalize fs-3 fw-light rounded-2">my services</div>
                    <div class="table-responsive col-12">
                        <table class="table mt-3 table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-2 text-nowrap">type content</th>
                                    <th scope="col" class="p-2 text-nowrap">date from</th>
                                    <th scope="col" class="p-2 text-nowrap">date to</th>
                                    <th scope="col" class="p-2 text-nowrap">status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    @if($order->plan)
                                        <td class=" text-nowrap">shared host : {{$order->plan->name}}</td>
                                        <td class=" text-nowrap">{{$order->subscription->start_date->format('d/m/Y')}}</td>
                                        <td class=" text-nowrap">{{$order->subscription->end_date->format('d/m/Y')}}</td>
                                        <td class=" text-nowrap">
                                            <div class="btn
                                         @if($order->subscription->status == 'active')
                                         btn-success
                                         @elseif($order->subscription->status == 'pending')
                                         btn-warning
                                         @elseif($order->subscription->status == 'cancelled')
                                         btn-danger
                                         @elseif($order->subscription->status == 'ended')
                                         btn-dark
                                         @endif
                                         col-12">
                                                {{$order->subscription->status}}
                                            </div>
                                        </td>
                                    @elseif($order->vps_plan_id)
                                        <td class=" text-nowrap">vps : {{$order->vps_plan->name}}</td>
                                        <td class=" text-nowrap">{{$order->vps_subscription->start_date->format('d/m/Y')}}</td>
                                        <td class=" text-nowrap">{{$order->vps_subscription->end_date->format('d/m/Y')}}</td>
                                        <td class=" text-nowrap">
                                            <div class="btn
                                         @if($order->vps_subscription->status == 'active')
                                         btn-success
                                         @elseif($order->vps_subscription->status == 'pending')
                                         btn-warning
                                         @elseif($order->vps_subscription->status == 'cancelled')
                                         btn-danger
                                         @elseif($order->vps_subscription->status == 'ended')
                                         btn-dark
                                         @endif
                                         col-12">
                                                {{$order->vps_subscription->status}}
                                            </div>
                                        </td>
                                    @elseif($order->domain_plan_id)
                                        <td class=" text-nowrap">domain : {{$order->product}}</td>
                                        <td class=" text-nowrap">{{$order->domain_subscription->start_date->format('d/m/Y')}}</td>
                                        <td class=" text-nowrap">{{$order->domain_subscription->end_date->format('d/m/Y')}}</td>
                                        <td class=" text-nowrap">
                                            <div class="btn
                                         @if($order->domain_subscription->status == 'active')
                                         btn-success
                                         @elseif($order->domain_subscription->status == 'pending')
                                         btn-warning
                                         @elseif($order->domain_subscription->status == 'cancelled')
                                         btn-danger
                                         @elseif($order->domain_subscription->status == 'ended')
                                         btn-dark
                                         @endif
                                         col-12">
                                                {{$order->domain_subscription->status}}
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="activeDModal" tabindex="-1" role="dialog" aria-labelledby="activeDModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activeDModalLabel">Update Domain Dns</h5>
                    <span class="badge"></span>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-12">
                            <label class="form-label" for="dns1">Dns1</label>
                            <input type="text" class="form-control" id="dns1" name="dns1" required>
                            @error('dns1')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="dns2">Dns2</label>
                            <input type="text" class="form-control" id="dns2" name="dns2" required>
                            @error('dns2')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="dns3">Dns3</label>
                            <input type="text" class="form-control" id="dns3" name="dns3" required>
                            @error('dns3')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="dns4">Dns4</label>
                            <input type="text" class="form-control" id="dns4" name="dns4" required>
                            @error('dns4')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary mx-2">Update</button>
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.tab-btn').forEach(function (tabBtn) {
            tabBtn.addEventListener('click', function () {
                document.querySelectorAll('.tab-pane').forEach(function (tabContent) {
                    tabContent.style.display = 'none';
                });
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).style.display = 'block';
            });
        });
</script>
    <script>
        $(document).ready(function() {
            $('.update-dns').on('click', function() {
                var dns1 = $(this).data('dns1');
                var dns2 = $(this).data('dns2');
                var dns3 = $(this).data('dns3');
                var dns4 = $(this).data('dns4');
                var id = $(this).data('id');

                $('#activeDModal input[name="dns1"]').val(dns1);
                $('#activeDModal input[name="dns2"]').val(dns2);
                $('#activeDModal input[name="dns3"]').val(dns3);
                $('#activeDModal input[name="dns4"]').val(dns4);
                var action = "{{ route('update_dns', ':id') }}".replace(':id', id);
                $('#activeDModal form').attr('action', action);
            });
        });
    </script>
@endsection
