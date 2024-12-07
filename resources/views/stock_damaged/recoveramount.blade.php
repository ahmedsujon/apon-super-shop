<div class="modal-dialog modal-xl" role="document">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ action([\App\Http\Controllers\DamagedProductController::class, 'saveRecoveryAmount']) }}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">@lang('messages.recover_amount')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="amount">@lang('messages.amount')</label>
                        <input type="number" class="form-control" name="amount" required value="{{ $final_value }}" max="{{ $final_value }}">
                    </div>
                    <input type="hidden" name="stock_adjustment_id" id="stock_adjustment_id" value="{{ $stock_adjustment->id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('messages.close')</button>
                    <button type="submit" class="btn btn-primary">@lang('messages.save')</button>
                </div>
            </form>
        </div>
    </div>
</div>