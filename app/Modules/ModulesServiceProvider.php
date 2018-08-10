<?php namespace App\Modules;
/** * Сервис провайдер для подключения модулей */
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        //получаем список модулей, которые надо подгрузить
        $modules = config("module.modules");
        if ($modules) {
            foreach ($modules as $module) {
                if (file_exists(__DIR__ . '/' . $module . '/Routes/routes.php')) {
                    $this->loadRoutesFrom(__DIR__ . '/' . $module . '/Routes/routes.php');
                    //view('Site::index');
                    if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                        $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
                    }
                }
            }
        }
    }

    public function register()
    {

    }
}