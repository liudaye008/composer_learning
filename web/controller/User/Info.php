<?php

namespace web\controller\User;

use Illuminate\Console\Command;
use core\View;


class Info extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $view;
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->view = new View();
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->view->make('index')->with('hi','n');
    }
}
