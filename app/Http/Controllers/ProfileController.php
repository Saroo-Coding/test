<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index($id)
    {
        if (!isset($_COOKIE['user']) || !isset($_COOKIE['token'])) {
            return view('client.pages.login');
        } else {
            $url = "https://localhost:7126/";
            $post = Http::withOptions(['verify' => false])->get($url . 'Account/MyPost/' . $id)->json();
            $user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $_COOKIE['user'])->json();
            $pro_user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $id)->json();
            $friend = Http::withOptions(['verify' => false])->get($url . 'Account/MyFriend/' . $id)->json();
            $me_you = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            $you_me = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $id . '/' . $_COOKIE['user'])->json();
            $check_friend = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckAddFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            return view('client.pages.profile.user.profile', ['post' => $post, 'user' => $user, 'pro_user' => $pro_user, 'friend' => $friend, 'me_you' => $me_you, 'you_me' => $you_me, 'check_friend' => $check_friend]);
        }
    }

    public function introduce($id)
    {
        if (!isset($_COOKIE['user']) || !isset($_COOKIE['token'])) {
            return view('client.pages.login');
        } else {
            $url = "https://localhost:7126/";
            $post = Http::withOptions(['verify' => false])->get($url . 'Account/MyPost/' . $id)->json();
            $user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $_COOKIE['user'])->json();
            $pro_user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $id)->json();
            $friend = Http::withOptions(['verify' => false])->get($url . 'Account/MyFriend/' . $id)->json();
            $me_you = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            $you_me = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $id . '/' . $_COOKIE['user'])->json();
            $check_friend = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            return view('client.pages.profile.user.introdu', ['post' => $post, 'user' => $user, 'pro_user' => $pro_user, 'friend' => $friend, 'me_you' => $me_you, 'you_me' => $you_me, 'check_friend' => $check_friend]);
        }
    }

    public function image($id)
    {
        if (!isset($_COOKIE['user']) || !isset($_COOKIE['token'])) {
            return view('client.pages.login');
        } else {
            $url = "https://localhost:7126/";
            $post = Http::withOptions(['verify' => false])->get($url . 'Account/MyPost/' . $id)->json();
            $user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $_COOKIE['user'])->json();
            $pro_user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $id)->json();
            $friend = Http::withOptions(['verify' => false])->get($url . 'Account/MyFriend/' . $id)->json();
            $me_you = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            $you_me = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $id . '/' . $_COOKIE['user'])->json();
            $check_friend = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            return view('client.pages.profile.user.img', ['post' => $post, 'user' => $user, 'pro_user' => $pro_user, 'friend' => $friend, 'me_you' => $me_you, 'you_me' => $you_me, 'check_friend' => $check_friend]);
        }
    }

    public function friend($id)
    {
        if (!isset($_COOKIE['user']) || !isset($_COOKIE['token'])) {
            return view('client.pages.login');
        } else {
            $url = "https://localhost:7126/";
            $post = Http::withOptions(['verify' => false])->get($url . 'Account/MyPost/' . $id)->json();
            $user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $_COOKIE['user'])->json();
            $pro_user = Http::withOptions(['verify' => false])->get($url . 'Account/IsMe/' . $id)->json();
            $friend = Http::withOptions(['verify' => false])->get($url . 'Account/MyFriend/' . $id)->json();
            $me_you = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            $you_me = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $id . '/' . $_COOKIE['user'])->json();
            $check_friend = Http::withOptions(['verify' => false])->get($url . 'Newsfeed/CheckFriend/' . $_COOKIE['user'] . '/' . $id)->json();
            return view('client.pages.profile.user.friend', ['post' => $post, 'user' => $user, 'pro_user' => $pro_user, 'friend' => $friend, 'me_you' => $me_you, 'you_me' => $you_me, 'check_friend' => $check_friend]);
        }
    }
}
