<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use LaravelFCM\Message\Topics;

class TestController extends Controller
{
    public function index()
    {



        $topic = new Topics();
        $topic->topic('asd');

        $topicResponse = FCM::sendToTopic($topic, null, null, null);
        // $optionBuilder = new OptionsBuilder();
        // $optionBuilder->setTimeToLive(60 * 20);

        // $notificationBuilder = new PayloadNotificationBuilder('my title');
        // $notificationBuilder->setBody('Hello world')
        //     ->setSound('default');

        // $dataBuilder = new PayloadDataBuilder();
        // $dataBuilder->addData(['a_data' => 'my_data']);

        // $option = $optionBuilder->build();
        // $notification = $notificationBuilder->build();
        // $data = $dataBuilder->build();

        // $token = "fg34yAFxUqo:APA91bFK1M-NXEbBUp02LzJQ9ekiJS5Pe54CxvFohLXyXYXYb_cslF8HKVTjZkw7wuVyK4QJv7vQTTnvyK3yx3LMWBuLC0cH8NR4s283KuUmTWvIN9xeU_WCgleHIuoyTkGFFFWzjjbZ";

        // $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);
        // $downstreamResponse->numberSuccess();
        // $downstreamResponse->numberFailure();
        // $downstreamResponse->numberModification();
    }
}
