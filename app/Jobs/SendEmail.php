<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send($this->data['view'], $this->data['data'],  function ($m) {
            $m = $m->to($this->data['to']);
            $m = $m->from('meeteam@gmail.com');

            if(isset($this->data['subject'])){
                $m = $m->subject(utf8_encode($this->data['subject']));
            }

            if(isset($this->data['attachment'])){
                $m = $m->attach($this->data['attachment']);
            }

            if(isset($this->data['attachData'])){
                $m->attachData($this->data['attachData'], $this->data['attachmentDataName'], ['mime' => 'application/pdf']);
            }
        });
    }
}
