@extends('layouts.profile')
 
@section('content')
<div class="content">
<div class="container d-flex justify-content-center">
    <div class="card p-3 py-4">
        <div class="text-center"> <img src="{{asset("assets/images/users/".Auth::user()->profile_photo)}}" width='100' class="rounded-circle">
            <h3 class="mt-2">{{ $user->name }}</h3>City: <span class="mt-1 clearfix">{{ $user->city }}</span> Phone Number: <small class="mt-4">{{ $user->phone_number }}</small></br>
            <a href={{ route('profile.edit',$user)}} class="btn btn-primary" type="button"  >Edit Profile</a>
            <div class="social-buttons mt-5"> <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button> </div>
        </div>
    </div>
</div>
</div>
@endsection
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Noto Sans', sans-serif
}

html,
.content {
    height: 100%
}

.content{
    display: grid;
    place-items: center;
    background: #eee
}

.card {
    width: 350px;
    border-radius: 50px;
    background: #eeeeee;
    box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #ffffff;
    border: none
}

.neo-button {
    width: 40px;
    height: 40px;
    outline: 0 !important;
    cursor: pointer;
    color: #fff;
    font-size: 15px;
    border: none;
    margin-right: 10px;
    border-radius: 50%;
    background: linear-gradient(145deg, #d6d6d6, #ffffff);
    box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #ffffff
}

.neo-button:active {
    border-radius: 50%;
    background: linear-gradient(145deg, #d6d6d6, #ffffff);
    box-shadow: inset 20px 20px 60px #cacaca, inset -20px -20px 60px #ffffff
}

.fa-facebook {
    color: #3b5998
}

.fa-linkedin {
    color: #0077b5
}

.fa-google {
    color: #dc4e41
}

.fa-youtube {
    color: #cd201f
}

.fa-twitter {
    color: #55acee
}</style>