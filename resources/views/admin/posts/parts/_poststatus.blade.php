<td class="text-center">
    <div class="form-check form-check-solid form-check-custom form-switch">
        <input data-id="{{$model->id}}" class="form-check-input  w-45px h-30px sts-fld" type="checkbox" id="status_{{$model->id}}" name="post_status" value="1" {{ old('post_status', $model->post_status ?? '') == 1 ? 'checked' : '' }}/>
    </div>
</td>
