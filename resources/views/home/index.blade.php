@extends('layouts.app')
@section('title', __('home.home'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header content-header-custom">
        <h1>{{ __('home.welcome_message', ['name' => Session::get('user.first_name')]) }}
        </h1>
    </section>
    <!-- Main content -->
    <section class="content content-custom no-print">
        <br>
        @if (auth()->user()->can('dashboard.data'))
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    @if (count($all_locations) > 1)
                        {!! Form::select('dashboard_location', $all_locations, null, [
                            'class' => 'form-control select2',
                            'placeholder' => __('lang_v1.select_location'),
                            'id' => 'dashboard_location',
                        ]) !!}
                    @endif
                </div>
            </div>
            <br>
            <section class="content no-print">
                <div class="box box-solid " id="accordion">
                    <div class="box-header with-border" style="cursor: pointer;">
                        <h3 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFilter" aria-expanded="true"
                                class="">
                                Details
                            </a>
                        </h3>
                    </div>
                    <div id="collapseFilter" class="panel-collapse active collapse" aria-expanded="true" style="">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group pull-right">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-primary" id="dashboard_date_filter">
                                                <span>
                                                    <i class="fa fa-calendar"></i> {{ __('messages.filter_by_date') }}
                                                </span>
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- total sell -->
                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon"><img src="{{ asset('sadax/images/total_sale.jpg') }}"
                                                alt=""></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('home.total_sell') }}</span>
                                            <span class="info-box-number total_sell"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- total purchase -->
                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon">
                                            <img src="{{ asset('sadax/images/total_purchase.jpg') }}" alt="">
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('lang_v1.net') }}
                                                @show_tooltip(__('lang_v1.net_home_tooltip'))</span>
                                            <span class="info-box-number net"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon">
                                            <img src="{{ asset('sadax/images/purchase_due.jpg') }}" alt="">
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('home.invoice_due') }}</span>
                                            <span class="info-box-number invoice_due"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon">
                                            <img src="{{ asset('sadax/images/invoice_due.jpg') }}" alt="">
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('lang_v1.total_sell_return') }}</span>
                                            <span class="info-box-number total_sell_return"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                        <p class="mb-0 text-muted fs-10 mt-5">{{ __('lang_v1.total_sell_return') }}:
                                            <span class="total_sr"></span><br>
                                            {{ __('lang_v1.total_sell_return_paid') }}<span class="total_srp"></span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <!-- total purchase -->
                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon"><img
                                                src="{{ asset('sadax/images/total_purchase.jpg') }}" alt=""></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('home.total_purchase') }}</span>
                                            <span class="info-box-number total_purchase"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- purchase due -->
                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon">
                                            <img src="{{ asset('sadax/images/expence.jpg') }}" alt="">
                                        </span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('home.purchase_due') }}</span>
                                            <span class="info-box-number purchase_due"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- sell_return -->
                                {{-- <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon">
                                            <img src="{{ asset('sadax/images/sell_return.jpg') }}" alt="">
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{ __('lang_v1.gross_profit') }}</span>
                                            <span class="info-box-number total_purchase_return"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                        <p class="mb-0 text-muted fs-10 mt-5">
                                            {{ __('lang_v1.total_purchase_return') }}: <span class="total_pr"></span><br>
                                        </p>
                                    </div>
                                </div> --}}

                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon"><img src="{{ asset('sadax/images/sell_return.jpg') }}"
                                                alt=""></span>
                                        <div class="info-box-content">
                                            <span style="margin-bottom: 5px !important;" class="info-box-text"> GROSS PROFIT
                                                : </span>
                                            <span style="margin-bottom: 5px !important;" class="info-box-number total_gross_profit">
                                                </span>
                                            <span style="margin-bottom: 5px !important;" class="info-box-text">NET PROFIT :
                                            </span>
                                            <span style="margin-bottom: 5px !important;" class="info-box-number total_net_profit">৳
                                                </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- expense -->
                                <div class="col-md-3 col-sm-6 col-xs-12 col-custom">
                                    <div class="info-box info-box-new-style">
                                        <span class="info-box-icon">
                                            <img src="{{ asset('sadax/images/expence.jpg') }}" alt="">
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                                {{ __('lang_v1.expense') }}
                                            </span>
                                            <span class="info-box-number total_expense"><i
                                                    class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @if (!empty($widgets['after_sale_purchase_totals']))
                @foreach ($widgets['after_sale_purchase_totals'] as $widget)
                    {!! $widget !!}
                @endforeach
            @endif
            @can('stock_report.view')
                <div class="row">
                    <div class="@if (session('business.enable_product_expiry') != 1 && auth()->user()->can('stock_report.view')) col-sm-12 @else col-sm-6 @endif">
                        @component('components.widget', ['class' => 'box-warning'])
                            @slot('icon')
                                <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                            @endslot
                            @slot('title')
                                {{ __('home.product_stock_alert') }} @show_tooltip(__('tooltip.product_stock_alert'))
                            @endslot
                            <div class="row">
                                @if (count($all_locations) > 1)
                                    <div class="col-md-6 col-sm-6 col-md-offset-6 mb-10">
                                        {!! Form::select('stock_alert_location', $all_locations, null, [
                                            'class' => 'form-control
                                                                                                                                                                                                                            select2',
                                            'placeholder' => __('lang_v1.select_location'),
                                            'id' => 'stock_alert_location',
                                        ]) !!}
                                    </div>
                                @endif
                                <form action="{{ route('home.submitStockAlert') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="supplier_id" value="{{ request()->get('supplier_id') }}" />
                                    <div class="col-md-6 add_stock_btn">
                                        <button class="btn btn-sm btn-secondary" type="submit" style="margin-bottom: 10px;">Add
                                            Stock</button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 text-right">Sort By:- </label>
                                            <div class="col-sm-9">
                                                <select name="" id="sort_stock_alert" class="form-control">
                                                    <option value="">Select Supplier</option>
                                                    @foreach ($suppliers as $supplier)
                                                        @if ($supplier['supplier_id'] != null)
                                                            <option value="{{ $supplier['supplier_id'] }}"
                                                                {{ request('supplier_id') == $supplier['supplier_id'] ? 'selected' : '' }}>
                                                                {{ getSupplierByID($supplier['supplier_id'])->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped" id="" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 4%;">
                                                        <input type="checkbox" class="stock_check_box" id="select-all" />
                                                    </th>
                                                    <th>@lang('sale.product')</th>
                                                    <th>@lang('business.location')</th>
                                                    <th>@lang('report.current_stock')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($stock_alert_products->count() > 0)
                                                    @foreach ($stock_alert_products as $stock_alert_item)
                                                        <tr>
                                                            <td style="width: 4%;">
                                                                <input type="checkbox" class="stock_check_box"
                                                                    name="stock_checkbox_ids[]"
                                                                    id="checkbox_alert_{{ $stock_alert_item->product_id }}"
                                                                    value="{{ $stock_alert_item->product_id }}" />
                                                            </td>
                                                            <td>
                                                                <label style="font-weight: normal;"
                                                                    for="checkbox_alert_{{ $stock_alert_item->product_id }}">{{ $stock_alert_item->product }}</label>
                                                            </td>
                                                            <td>{{ $stock_alert_item->location }}</td>
                                                            <td>{{ round($stock_alert_item->stock) }}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        @endcomponent
                    </div>
                </div>
            @endcan
        @endif
        <!-- can('dashboard.data') end -->
    </section>
    <!-- /.content -->
    <div class="modal fade payment_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
    <div class="modal fade edit_pso_status_modal" tabindex="-1" role="dialog"></div>
    <div class="modal fade edit_payment_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
@stop
@section('javascript')
    <script src="{{ asset('js/home.js?v=1' . $asset_v) }}"></script>
    <script src="{{ asset('js/payment.js?v=' . $asset_v) }}"></script>
    <script>
        $(document).ready(function() {
            $('#select-all').click(function(event) {
                if (this.checked) {
                    // Iterate each checkbox
                    $(':checkbox').each(function() {
                        this.checked = true;
                    });
                } else {
                    $(':checkbox').each(function() {
                        this.checked = false;
                    });
                }
            });

            $('#sort_stock_alert').on('change', function() {
                var id = $(this).val();

                if (id == '') {
                    window.location = "/home";
                } else {
                    window.location = "/home?supplier_id=" + id;
                }

            });

            // $('.stock_check_box').on('click', function(){
            //     $(':checkbox').each(function() {
            //         if(this.checked){
            //             $('.add_stock_btn').show();
            //         }
            //         else{
            //             $('.add_stock_btn').hide();
            //         }                        
            //     });
            // });
        });
    </script>
    @includeIf('sales_order.common_js')
    @includeIf('purchase_order.common_js')
    {{-- @if (!empty($all_locations))
{!! $sells_chart_1->script() !!}
{!! $sells_chart_2->script() !!}
@endif --}}
    {{-- <script type="text/javascript">
    $(document).ready( function(){
        sales_order_table = $('#sales_order_table').DataTable({
          processing: true,
          serverSide: true,
          scrollY: "75vh",
          scrollX:        true,
          scrollCollapse: true,
          aaSorting: [[1, 'desc']],
          "ajax": {
              "url": '{{action([\App\Http\Controllers\SellController::class, 'index'])}}?sale_type=sales_order',
              "data": function ( d ) {
                    d.for_dashboard_sales_order = true;

                    if ($('#so_location').length > 0) {
                        d.location_id = $('#so_location').val();
                    }
                }
          },
          columnDefs: [ {
              "targets": 7,
              "orderable": false,
              "searchable": false
          } ],
          columns: [
              { data: 'action', name: 'action'},
              { data: 'transaction_date', name: 'transaction_date'  },
              { data: 'invoice_no', name: 'invoice_no'},
              { data: 'conatct_name', name: 'conatct_name'},
              { data: 'mobile', name: 'contacts.mobile'},
              { data: 'business_location', name: 'bl.name'},
              { data: 'status', name: 'status'},
              { data: 'shipping_status', name: 'shipping_status'},
              { data: 'so_qty_remaining', name: 'so_qty_remaining', "searchable": false},
              { data: 'added_by', name: 'u.first_name'},
          ]
        });

        @if (auth()->user()->can('account.access') && config('constants.show_payments_recovered_today') == true)

            // Cash Flow Table
            cash_flow_table = $('#cash_flow_table').DataTable({
                processing: true,
                serverSide: true,
                "ajax": {
                        "url": "{{action([\App\Http\Controllers\AccountController::class, 'cashFlow'])}}",
                        "data": function ( d ) {
                            d.type = 'credit';
                            d.only_payment_recovered = true;
                        }
                    },
                "ordering": false,
                "searching": false,
                columns: [
                    {data: 'operation_date', name: 'operation_date'},
                    {data: 'account_name', name: 'account_name'},
                    {data: 'sub_type', name: 'sub_type'},
                    {data: 'method', name: 'TP.method'},
                    {data: 'payment_details', name: 'payment_details', searchable: false},
                    {data: 'credit', name: 'amount'},
                    {data: 'balance', name: 'balance'},
                    {data: 'total_balance', name: 'total_balance'},
                ],
                "fnDrawCallback": function (oSettings) {
                    __currency_convert_recursively($('#cash_flow_table'));
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var footer_total_credit = 0;

                    for (var r in data){
                        footer_total_credit += $(data[r].credit).data('orig-value') ? parseFloat($(data[r].credit).data('orig-value')) : 0;
                    }
                    $('.footer_total_credit').html(__currency_trans_from_en(footer_total_credit));
                }
            });
        @endif

        $('#so_location').change( function(){
            sales_order_table.ajax.reload();
        });
        @if (!empty($common_settings['enable_purchase_order']))
          //Purchase table
          purchase_order_table = $('#purchase_order_table').DataTable({
              processing: true,
              serverSide: true,
              aaSorting: [[1, 'desc']],
              scrollY: "75vh",
              scrollX:        true,
              scrollCollapse: true,
              ajax: {
                  url: '{{action([\App\Http\Controllers\PurchaseOrderController::class, 'index'])}}',
                  data: function(d) {
                      d.from_dashboard = true;

                        if ($('#po_location').length > 0) {
                            d.location_id = $('#po_location').val();
                        }
                  },
              },
              columns: [
                  { data: 'action', name: 'action', orderable: false, searchable: false },
                  { data: 'transaction_date', name: 'transaction_date' },
                  { data: 'ref_no', name: 'ref_no' },
                  { data: 'location_name', name: 'BS.name' },
                  { data: 'name', name: 'contacts.name' },
                  { data: 'status', name: 'transactions.status' },
                  { data: 'po_qty_remaining', name: 'po_qty_remaining', "searchable": false},
                  { data: 'added_by', name: 'u.first_name' }
              ]
            })

            $('#po_location').change( function(){
                purchase_order_table.ajax.reload();
            });
        @endif

        @if (!empty($common_settings['enable_purchase_requisition']))
          //Purchase table
          purchase_requisition_table = $('#purchase_requisition_table').DataTable({
              processing: true,
              serverSide: true,
              aaSorting: [[1, 'desc']],
              scrollY: "75vh",
              scrollX:        true,
              scrollCollapse: true,
              ajax: {
                  url: '{{action([\App\Http\Controllers\PurchaseRequisitionController::class, 'index'])}}',
                  data: function(d) {
                      d.from_dashboard = true;

                        if ($('#pr_location').length > 0) {
                            d.location_id = $('#pr_location').val();
                        }
                  },
              },
              columns: [
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                    { data: 'transaction_date', name: 'transaction_date' },
                    { data: 'ref_no', name: 'ref_no' },
                    { data: 'location_name', name: 'BS.name' },
                    { data: 'status', name: 'status' },
                    { data: 'delivery_date', name: 'delivery_date' },
                    { data: 'added_by', name: 'u.first_name' },
              ]
            })

            $('#pr_location').change( function(){
                purchase_requisition_table.ajax.reload();
            });

            $(document).on('click', 'a.delete-purchase-requisition', function(e) {
                e.preventDefault();
                swal({
                    title: LANG.sure,
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                }).then(willDelete => {
                    if (willDelete) {
                        var href = $(this).attr('href');
                        $.ajax({
                            method: 'DELETE',
                            url: href,
                            dataType: 'json',
                            success: function(result) {
                                if (result.success == true) {
                                    toastr.success(result.msg);
                                    purchase_requisition_table.ajax.reload();
                                } else {
                                    toastr.error(result.msg);
                                }
                            },
                        });
                    }
                });
            });
        @endif

        sell_table = $('#shipments_table').DataTable({
            processing: true,
            serverSide: true,
            aaSorting: [[1, 'desc']],
            scrollY:        "75vh",
            scrollX:        true,
            scrollCollapse: true,
            "ajax": {
                "url": '{{action([\App\Http\Controllers\SellController::class, 'index'])}}',
                "data": function ( d ) {
                    d.only_pending_shipments = true;
                    if ($('#pending_shipments_location').length > 0) {
                        d.location_id = $('#pending_shipments_location').val();
                    }
                }
            },
            columns: [
                { data: 'action', name: 'action', searchable: false, orderable: false},
                { data: 'transaction_date', name: 'transaction_date'  },
                { data: 'invoice_no', name: 'invoice_no'},
                { data: 'conatct_name', name: 'conatct_name'},
                { data: 'mobile', name: 'contacts.mobile'},
                { data: 'business_location', name: 'bl.name'},
                { data: 'shipping_status', name: 'shipping_status'},
                @if (!empty($custom_labels['shipping']['custom_field_1']))
                    { data: 'shipping_custom_field_1', name: 'shipping_custom_field_1'},
                @endif
                @if (!empty($custom_labels['shipping']['custom_field_2']))
                    { data: 'shipping_custom_field_2', name: 'shipping_custom_field_2'},
                @endif
                @if (!empty($custom_labels['shipping']['custom_field_3']))
                    { data: 'shipping_custom_field_3', name: 'shipping_custom_field_3'},
                @endif
                @if (!empty($custom_labels['shipping']['custom_field_4']))
                    { data: 'shipping_custom_field_4', name: 'shipping_custom_field_4'},
                @endif
                @if (!empty($custom_labels['shipping']['custom_field_5']))
                    { data: 'shipping_custom_field_5', name: 'shipping_custom_field_5'},
                @endif
                { data: 'payment_status', name: 'payment_status'},
                { data: 'waiter', name: 'ss.first_name', @if (empty($is_service_staff_enabled)) visible: false @endif }
            ],
            "fnDrawCallback": function (oSettings) {
                __currency_convert_recursively($('#sell_table'));
            },
            createdRow: function( row, data, dataIndex ) {
                $( row ).find('td:eq(4)').attr('class', 'clickable_td');
            }
        });

        $('#pending_shipments_location').change( function(){
            sell_table.ajax.reload();
        });
    });
</script> --}}
@endsection
