<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Events\EmailEvent;

class EmailJob implements ShouldQueue
{
    use Queueable;

    protected $emails;

    /**
     * Create a new job instance.
     */
    public function __construct($emails)
    {
        $this->emails = $emails;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->emails as $email) {
            Mail::to($email)->send(new Email());
            broadcast(new EmailEvent($email, 1));
            sleep(2);
        }

        broadcast(new EmailEvent(channel: 0));
    }
}
