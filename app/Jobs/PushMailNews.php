<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\NewsSubscriber;
use App\Models\User;
class PushMailNews implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     */
    public $message;
    public function __construct($message)
    {
        $this->message = $message;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $usermails = User::all()->pluck('email');
        $subscribers = NewsSubscriber::all()->pluck('email');
        $mails = $usermails->merge($subscribers);
        foreach ($mails as $mail) {
            Mail::to($mail)->send(new \App\Mail\NewsMail($this->message));
        }
    }
}
