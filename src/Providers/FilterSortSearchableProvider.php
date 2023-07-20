<?php

namespace Devchithu\FilterSortSearchable\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FilterSortSearchableProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../public' => public_path('/'),
        ], 'public');
        

        Blade::directive('filterSortSearchable', function ($input_array) {

            return "<?php Devchithu\FilterSortSearchable\Filter::applyData({$input_array}) ?>";

});

Blade::directive('filterSearchableBtn', function ($input_btn_array) {

return "<?php Devchithu\FilterSortSearchable\Filter::applyBtn({$input_btn_array}) ?>";

});
}
}
