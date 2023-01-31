<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} {{trans('tomato-locations::global.city.single')}} #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">
        <div class="flex justify-between">
            <div>
                <h3 class="text-lg font-bold">
                    {{trans('tomato-locations::global.city.country')}}
                </h3>
            </div>
            <div>
                <h3 class="text-lg">
                    {{ $model->country->name}}
                </h3>
            </div>
        </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{trans('tomato-locations::global.city.name')}}
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
                      {{trans('tomato-locations::global.city.lat')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->lat}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{trans('tomato-locations::global.city.lang')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->lang}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
