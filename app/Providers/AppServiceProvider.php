<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ( file_exists(base_path('.env')) ){
            /**
             * Email from name
             */

            $emailConfig = [
                'mail.from' =>
                    [
                        'address' => get_option('email_address'),
                        'name' => get_option('site_name'),
                    ]
            ];
            config($emailConfig);

            view()->composer('*', function ($view) {
                $header_menu_pages = Post::whereStatus(1)->where('show_in_header_menu', 1)->get();
                $show_in_footer_menu = Post::whereStatus(1)->where('show_in_footer_menu', 1)->get();

                $view->with(['header_menu_pages' => $header_menu_pages, 'show_in_footer_menu' => $show_in_footer_menu]);
            });

        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
