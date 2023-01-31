<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{trans('tomato-locations::global.area.single')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.areas.update', $model->id)}}" method="post" :default="$model">

        <x-splade-select remote-url="/admin/cities/api" remote-root="model.data" option-label="name" option-value="id"  name="city_id" label="{{trans('tomato-locations::global.area.city')}}" choices/>


        <x-splade-input name="name" type="text"  placeholder="{{trans('tomato-locations::global.area.name')}}" />

        <x-splade-input name="lat" type="text"  placeholder="{{trans('tomato-locations::global.area.lat')}}" />
        <x-splade-input name="lang" type="text"  placeholder="{{trans('tomato-locations::global.area.lang')}}" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{trans('tomato-locations::global.area.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
