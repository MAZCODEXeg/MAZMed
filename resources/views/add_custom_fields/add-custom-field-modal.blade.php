@php
    $fieldArray = array_map('ucfirst', \App\Models\AddCustomFields::FIELD_TYPE_ARR);
@endphp
<div id="add_custom_field_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">
                    {{ __('messages.custom_field.add_custom_field') }}
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(['id' => 'addCustomFieldForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="addCustomFieldErrorsBox"></div>
                <div class="row">
                    <div class="col-md-6  mb-5">
                        {{ Form::label('module_name', __('messages.custom_field.module_name'). ':', ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::select('module_name',\App\Models\AddCustomFields::MODULE_TYPE_ARR ,null, ['id' => 'module_name','class' => 'form-select','required','placeholder' => __('messages.custom_field.select_module'),'data-control' => 'select2']) }}
                    </div>
                    <div class="col-md-6  mb-5">
                        {{ Form::label('field_type', __('messages.custom_field.field_type'). ':', ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::select('field_type',$fieldArray ,null,['id' => 'field_type','class' => 'form-select','required','placeholder' => __('messages.custom_field.select_field_type'),'data-control' => 'select2']) }}
                    </div>
                    <div class="col-md-6  mb-5">
                        {{ Form::label('field_name', __('messages.custom_field.field_name'). ':', ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::text('field_name', null, ['id'=>'field_name','class' => 'form-control','required', 'placeholder' => __('messages.custom_field.field_name')]) }}
                    </div>
                    <div class="col-md-6  mb-5">
                        {{ Form::label('grid', __('messages.custom_field.grid'). ':', ['class' => 'form-label']) }}
                        <span class="required"></span>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">col-md-</span>
                            {{ Form::text('grid', null, ['id'=>'grid','class' => 'form-control','required', 'placeholder' => '6']) }}
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        {{ Form::label('values', __('messages.custom_field.value'), ['class' => 'form-label']) }}
                        <span class="comma d-none">({{__('messages.custom_field.seperated_by_comma')}})</span>
                        <span class="required d-none field-value">: </span>
                        {{ Form::text('values', null, ['id'=>'values','class' => 'form-control', 'placeholder' => __('messages.custom_field.value')]) }}
                    </div>
                    <div class="col-md-6 mb-5">
                        {{ Form::label('is_reqired', __('messages.custom_field.is_reqired'). ':', ['class' => 'form-label']) }}
                        <label class="form-check form-switch">
                            <input name="is_required" class="form-check-input" type="checkbox"
                                    value="0">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>

            </div>
            <div class="modal-footer pt-0">
                {{ Form::button(__('messages.common.save'), ['type' => 'submit', 'class' => 'btn btn-primary m-0', 'id' => 'saveCustomField', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                <button type="button" aria-label="Close" class="btn btn-secondary"
                    data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
