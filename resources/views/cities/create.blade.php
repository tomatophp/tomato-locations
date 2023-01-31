<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{trans('tomato-locations::global.city.single')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.cities.store')}}" method="post">

          <x-splade-select remote-url="/admin/countries/api" remote-root="model.data" option-label="name" option-value="id"  name="country_id" label="{{trans('tomato-locations::global.city.country')}}" choices/>
          <x-splade-input name="name" type="text"  placeholder="{{trans('tomato-locations::global.city.name')}}" />
          <x-splade-input name="lat" type="text"  placeholder="{{trans('tomato-locations::global.city.lat')}}" />
          <x-splade-input name="lang" type="text"  placeholder="{{trans('tomato-locations::global.city.lang')}}" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{trans('tomato-locations::global.city.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
