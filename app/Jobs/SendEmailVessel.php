<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\VesselMail;
use Mail;
use App\Models\Vessel;


class SendEmailVessel implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    public $vessel;
    /**
     * Create a new job instance.
     */
    public function __construct($id)
    {
        $vessel = Vessel::findOrFail($id);
        $this->email = $vessel->email_captain;
        $this->vessel = $vessel;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new VesselMail($this->vessel));
    }
}
