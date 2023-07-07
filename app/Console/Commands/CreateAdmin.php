<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $admin = Admin::create([
            'email' => 'root@gmail.com',
            'password' => Hash::make('root'),
        ]);
        event(new Registered($admin));

        $this->info('Admin user created successfully!');
    }
  
}
