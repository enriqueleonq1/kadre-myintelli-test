<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UserIntelli;
use App\UserIntelliWidgets;

class FillUserWidgetsTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill:userwidgets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Llena la tabla user intelli widgets con la informacion obtenida previamente';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = UserIntelli::first();
        if($user) {
            $userWidgets = $user->settings_user['widgets'];
            foreach($userWidgets as $userWidget) {
                $widget = new UserIntelliWidgets();
                $widget->id_user_intelli = $user->id_user;
                $widget->h = $userWidget['h'];
                $widget->w = $userWidget['w'];
                $widget->x = $userWidget['x'];
                $widget->y = $userWidget['y'];
                $widget->id_widget = $userWidget['id_widget'];
                $widget->id_widget_user = $userWidget['id_widget_user'];
                $widget->save();
            }
        }
    }
}
