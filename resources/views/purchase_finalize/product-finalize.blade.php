@extends('layouts.app')
@section('title', 'Purchase Finalize')

@section('css')
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Finalize Product</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <form action="">
                    <input type="hidden" id="product_id" value="{{ $product->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" value="{{ $product->name }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">SKU</label>
                                <input type="text" class="form-control" value="{{ $product->sku }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            @component('components.widget', ['class' => 'box-primary'])
                                <div class="row">
                                    {{-- <div class="col-sm-4 @if (!session('business.enable_price_tax')) hide @endif">
                                        <div class="form-group">
                                            {!! Form::label('tax', __('product.applicable_tax') . ':') !!}
                                            {!! Form::select(
                                                'tax',
                                                $taxes,
                                                $product->tax,
                                                ['placeholder' => __('messages.please_select'), 'class' => 'form-control select2'],
                                                $tax_attributes,
                                            ) !!}
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col-sm-4 @if (!session('business.enable_price_tax')) hide @endif">
                                        <div class="form-group">
                                            {!! Form::label('tax_type', __('product.selling_price_tax_type') . ':*') !!}
                                            {!! Form::select(
                                                'tax_type',
                                                ['inclusive' => __('product.inclusive'), 'exclusive' => __('product.exclusive')],
                                                $product->tax_type,
                                                ['class' => 'form-control select2', 'required'],
                                            ) !!}
                                        </div>
                                    </div> --}}

                                    {{-- <div class="clearfix"></div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('type', __('product.product_type') . ':*') !!} @show_tooltip(__('tooltip.product_type'))
                                            {!! Form::select('type', $product_types, $product->type, [
                                                'class' => 'form-control select2',
                                                'required',
                                                'disabled',
                                                'data-action' => 'edit',
                                                'data-product_id' => $product->id,
                                            ]) !!}
                                        </div>
                                    </div> --}}

                                    <div class="form-group col-sm-12" id="product_form_part"></div>
                                    <input type="hidden" id="variation_counter" value="0">
                                    <input type="hidden" id="default_profit_percent" value="{{ $default_profit_percent }}">
                                </div>
                            @endcomponent
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('javascript')

    <script type="text/javascript"></script>
@endsection
