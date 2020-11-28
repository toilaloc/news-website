<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\DripEmailer;
use App\Mail\SendPassword;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Send:password';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gửi mật khẩu';

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
     * @return int
     */
    public function handle()
    {
        $user = User::find($this->argument('user'));
        Mail::to($user)->send(new SendPassword());
    }
}
