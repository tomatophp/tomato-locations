<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} {{trans('tomato-locations::global.language.single')}} #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{trans('tomato-locations::global.language.iso')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->iso}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{trans('tomato-locations::global.language.name')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->name}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{trans('tomato-locations::global.language.arabic')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->arabic}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
