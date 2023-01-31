<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{trans('tomato-locations::global.language.single')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.languages.update', $model->id)}}" method="post" :default="$model">

        <x-splade-input name="iso" type="text"  placeholder=" {{trans('tomato-locations::global.language.iso')}}" />
        <x-splade-input name="name" type="text"  placeholder=" {{trans('tomato-locations::global.language.name')}}" />
        <x-splade-input name="arabic" type="text"  placeholder=" {{trans('tomato-locations::global.language.arabic')}}" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{trans('tomato-locations::global.language.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
