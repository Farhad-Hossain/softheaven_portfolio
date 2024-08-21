<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('noDataAvailable', function () {
            return '
                <p class="text-center m-2 p-d h3">No Data Available.</p>
            ';
        });

        Blade::directive('modalForm', function ($args) {
            $args = explode(',', preg_replace("/[\(\)]/", '', $args), 2);
            return `<div id="{$args['id']}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                    </div>`;
        });

        $gs = GeneralSetting::first();
        $services = Service::where('active_status', 1)->get();
        $teamMembers = TeamMember::all();
        View::share(['gs' => $gs, 'services'=>$services]);
    }
}
