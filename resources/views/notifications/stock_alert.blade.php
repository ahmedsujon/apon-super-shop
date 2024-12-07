@extends('layouts.app')
@section('title', __('expense.stock_alert_notification'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('expense.stock_alert_notification')</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                @can('stock_report.view')
                <div class="row">
                    <div class="@if((session('business.enable_product_expiry') != 1) && auth()->user()->can('stock_report.view')) col-sm-12 @else col-sm-6 @endif">
                        @component('components.widget', ['class' => 'box-warning'])
                          @slot('icon')
                            <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                          @endslot
                          @slot('title')
                            {{ __('home.product_stock_alert') }} @show_tooltip(__('tooltip.product_stock_alert'))
                          @endslot
                          <div class="row">
                                @if(count($all_locations) > 1)
                                    <div class="col-md-6 col-sm-6 col-md-offset-6 mb-10">
                                        {!! Form::select('stock_alert_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'stock_alert_location']); !!}
                                    </div>
                                @endif
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped" id="stock_alert_table" style="width: 100%;">
                                        <thead>
                                          <tr>
                                            <th>@lang( 'sale.product' )</th>
                                            <th>@lang( 'business.location' )</th>
                                            <th>@lang( 'report.current_stock' )</th>
                                          </tr>
                                        </thead>
                                    </table>
                                </div>
                          </div>
                        @endcomponent
                    </div>
                    @if(session('business.enable_product_expiry') == 1)
                        <div class="col-sm-6">
                            @component('components.widget', ['class' => 'box-warning'])
                              @slot('icon')
                                <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                              @endslot
                              @slot('title')
                                {{ __('home.stock_expiry_alert') }} @show_tooltip( __('tooltip.stock_expiry_alert', [ 'days' =>session('business.stock_expiry_alert_days', 30) ]) )
                              @endslot
                              <input type="hidden" id="stock_expiry_alert_days" value="{{ \Carbon::now()->addDays(session('business.stock_expiry_alert_days', 30))->format('Y-m-d') }}">
                              <table class="table table-bordered table-striped" id="stock_expiry_alert_table">
                                <thead>
                                  <tr>
                                      <th>@lang('business.product')</th>
                                      <th>@lang('business.location')</th>
                                      <th>@lang('report.stock_left')</th>
                                      <th>@lang('product.expires_in')</th>
                                  </tr>
                                </thead>
                              </table>
                            @endcomponent
                        </div>
                    @endif
                  </div>
            @endcan
            </div>
        </div>
    </div>
</section>
@endsection
@section('javascript')
<script>
  //atock alert datatables
  var stock_alert_table = $('#stock_alert_table').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        searching: false,
        scrollY:        "75vh",
        scrollX:        true,
        scrollCollapse: true,
        fixedHeader: false,
        dom: 'Btirp',
        ajax: {
            "url": '/home/product-stock-alert',
            "data": function ( d ) {
                if ($('#stock_alert_location').length > 0) {
                    d.location_id = $('#stock_alert_location').val();
                }
            }
        },
        fnDrawCallback: function(oSettings) {
            __currency_convert_recursively($('#stock_alert_table'));
        },
    });

    $('#stock_alert_location').change( function(){
        stock_alert_table.ajax.reload();
    });
</script>
@endsection