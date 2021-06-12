<?php


namespace App\Traits;


use App\Jobs\SendEmail;
use Exception;
use Illuminate\Support\Facades\Hash;

trait OneTimePasswordTrait
{
    /**
     * If user should change 6-digit password send email with credentials
     *
     * @param $contact
     * @throws Exception
     */
    public function sendOneTimePasswordChangeEmail($contact)
    {
        if ($contact->user->should_change_password) {
            $password = random_int(10000000,99999999);

            $emailData = [
                'view' => 'emails.one_time_password',
                'to' => $contact->user->email,
                'data' => [
                    'name' => $contact->user->name,
                    'email' => $contact->user->email,
                    'password' => $password
                ]
            ];
            dispatch(new SendEmail($emailData))->onQueue('email');
            $contact->user->password = Hash::make($password);
            $contact->user->save();
        }
    }
}
