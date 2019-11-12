<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="">

            <a href="{{route('admin.layout.main')}}" class="logo-wrapper">

                {{--<img src="{{asset('admin/assets/images/logo2.png')}}" alt="شعار المشروع">--}}
            </a>
        </div>
        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                @php $image = auth()->user()->image; @endphp
                @if($image != null or $image != "")
                    <img src="{{getimg($image)}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    @else
                    <img src="{{asset('admin/assets/images/1.png')}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    @endif

                {{--<div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>--}}
            </div>
            <h5 style="margin-top: 40px;"><a href="#">{{auth()->user()->name}}</a> </h5>
            <ul class="list-inline">
                <li>
                    {{--{{route('user.get.profile')}}--}}
                    <a href="" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">القائمة</li>


                    <li><a href="{{route('admin.layout.main')}}" class="waves-effect"><i class="zmdi zmdi-home"></i><span>الرئيسية</span></a></li>
                    <li><a href="{{route('admin.users.index')}}" class="waves-effect"><i class="zmdi zmdi-accounts"></i><span>المستخدمين</span></a></li>
                    <li><a href="{{route('admin.members.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span> اعضاء الفهدة</span></a></li>

                <li><a href="{{route('admin.galleries.index')}}" class="waves-effect"><i class="zmdi zmdi-accounts"></i><span>الصور  والفيديوهات</span></a></li>
                <li><a href="{{route('admin.actions.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span> المبادرات</span></a></li>

                <li><a href="{{route('admin.ambassadors.index')}}" class="waves-effect"><i class="zmdi zmdi-accounts"></i><span>سفراء  الفهده</span></a></li>

                <li><a href="{{route('admin.participants.index')}}" class="waves-effect"><i class="zmdi zmdi-accounts"></i><span>مشاركات الفهده</span></a></li>
                <li><a href="{{route('admin.partners.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span> شركاء النجاح</span></a></li>
                <li><a href="{{route('admin.contacts.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span> رسائل التواصل</span></a></li>
                <li><a href="{{route('admin.subscribers.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span> المشتركين</span></a></li>
                <li><a href="{{route('admin.sliders.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span> الاسلبيدر</span></a></li>

                <li><a href="{{route('admin.settings.index')}}" class="waves-effect"><i class="zmdi zmdi-settings"></i><span>الإعدادات</span></a></li>





            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
