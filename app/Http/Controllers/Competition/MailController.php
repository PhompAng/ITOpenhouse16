<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 7/7/2559
 * Time: 13:19
 */

namespace App\Http\Controllers\Competition;

use Illuminate\Support\Facades\Mail;
use Swift_TransportException;


class MailController
{
    public static function sendCompetitionMail($competition, $team, $accounts){

        $time = 0;
        while($time < 3) {
            try {
                foreach ($accounts as $account) {
                    Mail::send('register.competition.mail', ['competition' => $competition, 'team' => $team, 'account' => $account], function ($m) use ($account, $competition) {
                        $m->from('openhouse@it.kmitl.ac.th', 'IT Ladkrabang Open House 2016');
                        $m->to($account['email'], $account['name'])->subject('การลงทะเบียน'.$competition.' | IT Ladkrabang Open House 2016'  );
                    });
                }
                return 1;
            } catch (Swift_TransportException $e) {
                $time++;
            }
        }

        return 0;
    }
}
