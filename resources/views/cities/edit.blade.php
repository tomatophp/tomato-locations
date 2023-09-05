<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.edit')}} {{__('City')}} #{{$model->id}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.cities.update', $model->id)}}" method="post" :default="$model">
        
          <x-splade-input :label="__('Name')" name="name" type="text"  :placeholder="__('Name')" />
          <x-splade-input :label="__('Price')" :placeholder="__('Price')" type='number' name="price" />
          <x-tomato-admin-rich :label="__('Shipping')" name="shipping" :placeholder="__('Shipping')" autosize />
          
          <x-splade-input :label="__('Lat')" name="lat" type="text"  :placeholder="__('Lat')" />
          <x-splade-input :label="__('Lang')" name="lang" type="text"  :placeholder="__('Lang')" />

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button danger :href="route('admin.cities.destroy', $model->id)"
                                   confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                                   confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                                   confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                                   cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                                   method="delete"  label="{{__('Delete')}}" />
            <x-tomato-admin-button secondary :href="route('admin.cities.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
