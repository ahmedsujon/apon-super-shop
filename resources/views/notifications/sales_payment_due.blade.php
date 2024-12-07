@extends('layouts.app')
@section('title', __('lang_v1.sales_payment_dues'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('lang_v1.sales_payment_dues')</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div class="row">
                    @if(auth()->user()->can('sell.view') || auth()->user()->can('direct_sell.view'))
                        <div class="col-sm-12">
                            @component('components.widget', ['class' => 'box-warning'])
                              @slot('icon')
                                <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                              @endslot
                              @slot('title')
                                {{ __('lang_v1.sales_payment_dues') }} @show_tooltip(__('lang_v1.tooltip_sales_payment_dues'))
                              @endslot
                                <div class="row">
                                    {{-- @if(count($all_locations) > 1)
                                        <div class="col-md-6 col-sm-6 col-md-offset-6 mb-10">
                                            {!! Form::select('sales_payment_dues_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'sales_payment_dues_location']); !!}
                                        </div>
                                    @endif --}}
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped" id="sales_payment_dues_table" style="width: 100%;">
                                            <thead>
                                              <tr>
                                                <th>@lang( 'contact.customer' )</th>
                                                <th>@lang( 'sale.invoice_no' )</th>
                                                <th>@lang( 'home.due_amount' )</th>
                                                <th>@lang( 'messages.action' )</th>
                                              </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            @endcomponent
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('javascript')

@endsection