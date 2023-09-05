<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.create')}} {{__('City')}}">
    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.cities.store')}}" method="post">
        
          <x-splade-input :label="__('Name')" name="name" type="text"  :placeholder="__('Name')" />
          <x-splade-input :label="__('Price')" :placeholder="__('Price')" type='number' name="price" />
          <x-tomato-admin-rich :label="__('Shipping')" name="shipping" :placeholder="__('Shipping')" autosize />
          
          <x-splade-input :label="__('Lat')" name="lat" type="text"  :placeholder="__('Lat')" />
          <x-splade-input :label="__('Lang')" name="lang" type="text"  :placeholder="__('Lang')" />

        <div class="flex justify-start gap-2 pt-3">
            <x-tomato-admin-submit  label="{{__('Save')}}" :spinner="true" />
            <x-tomato-admin-button secondary :href="route('admin.cities.index')" label="{{__('Cancel')}}"/>
        </div>
    </x-splade-form>
</x-tomato-admin-container>
