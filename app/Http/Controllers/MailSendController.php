<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\MailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MessageRequest;
use App\Mail\MessageForm;
use App\Models\Message;

class MailSendController extends Controller
{
    //

    // public function send()
    // {
    //     //postデータを取得したつもり
    //     $post = new Post;
    //     $getPosts = $post->getPosts();

    //     //通知
    //     $getPosts->notify(new MailNotification());
    // }

    public function store(MessageRequest $request)
    {
        $message = new Message();

        $inputs = $request->all();
        // dd($inputs);

        $message->create($inputs);

        $email = $inputs['email'];
        Mail::to($email)->send(new MessageForm($inputs));

        $request->session()->flash('message', 'メッセージを送信しました');
        return back();
    }
}
