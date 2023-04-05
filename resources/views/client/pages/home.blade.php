@extends('client.layout.indexlayout')
@section('title')
    Earth
@endsection
@section('content')
    <div class="container">
        <!-- ----------------left-sidebar------------ -->
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="{{ route('profile', $user['userId']) }}" class="img-userss">
                    <img src="{{ $user['avatar'] }}">{{ $user['fullName'] }}
                </a>
                <a href="{{ route('friend', $user['userId']) }}">
                    <i class="fa-solid fa-user-group "></i> Friends
                </a>
                <a href="#">
                    <i class="fa-solid fa-gamepad"></i> Games
                </a>
                <a href="#">
                    <i class="fa-solid fa-shop"></i> Marketplace
                </a>
                <a href="#">
                    See More
                </a>
            </div>
            <!-- shortcut -->
            <div class="shortcut-links">
                <p>All Groups</p>
                <a href="#">
                    <img src="{{ asset('img/web-developer.jpg') }}" alt=""> Web Developers
                </a>
                <a href="#">
                    <img src="{{ asset('img/WebDesign.jpg') }}" alt=""> Web Design Course
                </a>
                <a href="#">
                    <img src="{{ asset('img/FullStack.png') }}" alt=""> Full Stack
                </a>
                <a href="#" class="all-groups">
                    See all groups
                </a>
            </div>
        </div>
        <!-- ----------------main-content------------ -->
        <div class="main-content">
            {{-- post --}}
            @include('client.pages.post')
        </div>
        <!--  load view se de o day -->
        <!-- ----------------right-sidebar------------ -->
        <div class="right-sidebar">
            <div class="sidebar-title">
                <h4>Friend request</h4>
                <a href="#">See All</a>
            </div>
            @foreach ($friend_req as $item)
                <div class="add-sidebar-title">
                    <div class="online-list">
                        <div class="online">
                            <a href="{{ route('profile', $item['fromUser']) }}"><img src="{{$item['avatar']}}"></a>
                        </div>
                        <div class="add">
                            <p>{{$item['fullName']}}</p>
                            <button type="button" onclick="feedback_friend({{$item['reqId']}},1)" class="confim">Đồng ý</button>
                            <button type="button" onclick="feedback_friend({{$item['reqId']}},0)" class="removed">Cancel</button>
                        </div>
                    </div>
                    <!-- end text -->
                </div>
            @endforeach
            <div class="hr"></div>
            <!-- ---- -->
            <div class="sidebar-title">
                <h4>Friends</h4>
                <div class="sidebar-search">
                    <div id="search-messenger">
                        <button type="button" id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" name="" id="search-mes" placeholder="Search friends...">
                    </div>
                </div>
            </div>
            <div class="sidebar-title-chat">
                {{-- bản chính --}}
                <div class="online-list">
                    <div class="online">
                        {{-- link nè --}}
                        <a href="">
                            <img src="{{ asset('img/1.jpg') }}" alt="">
                        </a>
                    </div>
                    <p>Alison Mina</p>
                </div>
                {{-- end bản chính --}}
                {{-- text xoa cai nay --}}
                <div class="online-list">
                    <div class="online">
                        <img src="{{ asset('img/img-2.jpg') }}" alt="">
                    </div>
                    <p>Jackson</p>
                </div>
                <div class="online-list">
                    <div class="online">
                        <img src="{{ asset('img/img-2.jpg') }}" alt="">
                    </div>
                    <p>Ned</p>
                </div>
                <div class="online-list">
                    <div class="online">
                        <img src="{{ asset('img/img-2.jpg') }}" alt="">
                    </div>
                    <p>Ned</p>
                </div>
                {{-- end text xoa cai nay --}}
            </div>
        </div>
    </div>
@endsection
