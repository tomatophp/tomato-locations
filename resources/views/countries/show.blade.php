<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.view')}} {{__('countries')}} #{{$model->id}}">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        
          <x-tomato-admin-row :label="__('Name')" :value="$model->name" type="string" />

          <x-tomato-admin-row :label="__('Code')" :value="$model->code" type="string" />

          <x-tomato-admin-row :label="__('Phone')" :value="$model->phone" type="tel" />

          <x-tomato-admin-row :label="__('Lat')" :value="$model->lat" type="string" />

          <x-tomato-admin-row :label="__('Lang')" :value="$model->lang" type="string" />

    </div>
    <div class="flex justify-start gap-2 pt-3">
        <x-tomato-admin-button warning label="{{__('Edit')}}" :href="route('admin.countries.edit', $model->id)"/>
        <x-tomato-admin-button danger :href="route('admin.countries.destroy', $model->id)"
                               confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                               confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                               confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                               cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                               method="delete"  label="{{__('Delete')}}" />
        <x-tomato-admin-button secondary :href="route('admin.countries.index')" label="{{__('Cancel')}}"/>
    </div>
</x-tomato-admin-container>
