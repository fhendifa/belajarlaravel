<style>
    .icon {
        cursor: pointer;
        margin-right: 50px;
        line-height: 60px
    }

    .icon span {
        background: #f00;
        padding: 7px;
        border-radius: 50%;
        color: #fff;
        vertical-align: top;
        margin-left: -25px
    }

    .icon img {
        display: inline-block;
        width: 26px;
        margin-top: 4px
    }

    .icon:hover {
        opacity: .7
    }

    .notifications {
        width: 300px;
        height: 0px;
        opacity: 0;
        position: absolute;
        top: 63px;
        right: 62px;
        border-radius: 5px 0px 5px 5px;
        background-color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(0, 0, 0, 0.19)
    }

    .notifications h2 {
        font-size: 14px;
        padding: 10px;
        border-bottom: 1px solid #eee;
        color: #999
    }

    .notifications h2 span {
        color: #f00
    }

    .notifications-item {
        display: flex;
        border-bottom: 1px solid #eee;
        padding: 6px 9px;
        margin-bottom: 0px;
        cursor: pointer
    }

    .notifications-item:hover {
        background-color: #eee
    }

    .notifications-item img {
        display: block;
        width: 50px;
        height: 50px;
        margin-right: 9px;
        border-radius: 50%;
        margin-top: 2px
    }

    .notifications-item .text h4 {
        color: #777;
        font-size: 16px;
        margin-top: 3px
    }

    .notifications-item .text p {
        color: #aaa;
        font-size: 12px
    }

</style>
<section id="top">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('asset/Capture-removebg-preview.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-lg-5 mt-2">
                        <input class="form-control" type="text" placeholder="Belanjo Apo.....">
                    </div>
                    <div class="col-lg-1 mt-2 ml-5">
                        <a href="{{ url('/cart') }}">
                            <img src="{{ asset('asset/2832495.png') }}" alt="cart">
                            @if (Auth::user())
                                @if (Keranjang::hitung() > 0)
                                    <sup><span
                                            class="badge badge-pill badge-warning">{{ Keranjang::hitung() }}</span></sup>
                                @endif
                            @endif
                        </a>
                    </div>
                    <div class="col-xs mt-2">
                        @if (Auth::user())
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                <img src="{{ asset('asset/3239958.png') }}" alt="" width="25px" height="auto">
                            </button>
                            @if (Keranjang::notif() > 0)
                                <sup>
                                    <span class="badge badge-pill badge-warning">{{ Keranjang::notif() }}</span>
                                </sup>
                            @endif
                        @endif
                    </div>
                    @if (Auth::user())
                        <div class="col mt-2 ml-3">
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="col mt-2">
                            <a href="{{ url('/logoutcus') }}" role="button" class="btn btn-success">Logout</a>
                        </div>
                    @else
                        <div class="col mt-2 ml-4">
                            <button type="submit" class="btn btn-success" data-toggle="modal"
                                data-target="#modallogin">Login</button>
                        </div>
                        <div class="col mt-2">
                            <button type="submit" class="btn btn-outline-warning" data-toggle="modal"
                                data-target="#modalregister">Register</button>
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</section>
<!-- modallogin -->
<div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/logincus') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                            with anyone
                            else.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                            aria-describedby="passwordHelpBlock">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long, contain letters and numbers, and
                            must not
                            contain spaces, special characters, or emoji.
                        </small>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- akhir modallogin -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    @if (Auth::user())
                        @foreach (Keranjang::isi() as $item)
                            <h5>{{ $item->title }}</h5>
                            <p>{{ $item->isi }}</p>
                            <hr>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- awak modalregister -->
<div class="modal fade" id="modalregister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/registercus') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="name">Full name</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password"
                                name="password">
                            <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-row">
                                    <div class="col-md-10">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" id="address"
                                        name="address">
                                    </div>
                                </div> --}}
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-warning" type="submit">Register Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- akhir modalregister -->
