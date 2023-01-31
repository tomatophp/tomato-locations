<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{trans('tomato-locations::global.country.single')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.countries.update', $model->id)}}" method="post" :default="$model">

        <x-splade-input name="name" type="text"  placeholder="{{trans('tomato-locations::global.country.name')}}" />
        <x-splade-input name="code" type="text"  placeholder="{{trans('tomato-locations::global.country.code')}}" />
        <x-splade-input name="phone" type="tel"  placeholder="{{trans('tomato-locations::global.country.phone')}}" />
        <x-splade-input name="lat" type="text"  placeholder="{{trans('tomato-locations::global.country.lat')}}" />
        <x-splade-input name="lang" type="text"  placeholder="{{trans('tomato-locations::global.country.lang')}}" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{trans('tomato-locations::global.country.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
