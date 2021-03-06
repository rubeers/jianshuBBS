<div class="blog-masthead">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a class="blog-nav-item " href="{{url('/posts')}}">首页</a>
            </li>
            <li>
                <a class="blog-nav-item" href="{{url('/posts/create')}}">写文章</a>
            </li>
            <li>
                <a class="blog-nav-item" href="{{url('/notices')}}">通知</a>
            </li>
            <li>
                <input name="query" type="text" value="" class="form-control" style="margin-top:10px" placeholder="搜索词">
            </li>
            <li>
                <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <div>
                    <img src="{{asset(Auth::user()->avatar)}}"
                         alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                    <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button"
                       {{--aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>--}}
                       aria-haspopup="true" aria-expanded="false">
                        @if(Auth::check())
                            {{Auth::user()->name}}
                            <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url("/user/".Auth::id())}}">我的主页</a></li>
                        <li><a href="{{url("/user/me/setting")}}">个人设置</a></li>
                        <li><a href="{{url('/logout')}}">登出</a></li>
                    </ul>
                    @else
                        请登录
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/login')}}">登陆</a></li>
                            <li><a href="{{url('/register')}}">注册</a></li>
                        </ul>
                    @endif

                </div>
            </li>
        </ul>
    </div>
</div>
