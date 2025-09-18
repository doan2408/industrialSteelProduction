<?php

namespace App\Providers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use App\Models\CommonModel;
use App\Models\tblMenuModel;
use App\Models\tblDepartmentModel;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		View::composer(['frontend.header','frontend.amp.header'], function($view) {
			$menu= tblMenuModel::leftJoin('tbl_menu_group', 'tbl_menu.group_id', '=', 'tbl_menu_group.id')
				->select('tbl_menu.*','tbl_menu_group.name as group_name')
				->where('tbl_menu_group.id', CommonModel::get_setting('website_menu'))
				->orderBy('tbl_menu.position', 'asc')
				->get();
			$view->with('menu', $menu);
		});
		View::composer(['frontend.footer','frontend.amp.footer'], function($view) {
			$department= tblDepartmentModel::where('status',1)->orderBy('id','asc')->get();
			$view->with('department', $department);
		});
		
		View::share('setting', CommonModel::getAll());		
        $setting = CommonModel::getAll();
		
		config()->set(['config.setting' => array('setting'=>$setting)]);
		
    }
}
