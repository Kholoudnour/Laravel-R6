<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-command';

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
Mail::to('test5@example.com')->send(new Sendemail);
    }
}
