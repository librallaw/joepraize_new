<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{asset('images/people/jpsmall1.jpg')}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">Admin</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>



                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Home Page</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('editHomeAbout')}}">Edit About Section</a></li>
                        <li><a href="{{route('core_values')}}">Edit Core values </a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> About Page</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('editAbout')}}">Edit About Page</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Shop</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('viewShop')}}">View Shop Items</a></li>
                        <li><a href="{{route('addShop')}}">Add new Items</a></li>


                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> New Release</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('addNewRelease')}}">Add new Release</a></li>
                        <li><a href="{{route('viewNewRelease')}}">View New release</a></li>


                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Images</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('addImage')}}">Add new Image</a></li>



                    </ul>
                </li>






                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Albums</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('addAlbum')}}">Add new Album Section</a></li>
                        <li><a href="{{route('viewAlbum')}}">View Albums </a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Events</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('addEvent')}}">Add new Event </a></li>
                        <li><a href="{{route('viewEvent')}}">View Events </a></li>

                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Feedback</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('viewFeedBack')}}">View Feedback </a></li>
                        <li><a href="{{route('viewTestimony')}}">View Testimony </a></li>
                        <li><a href="{{route('viewBookings')}}">View Bookings </a></li>

                    </ul>
                </li>


                <li class="has_sub">
                    <a href="/admin/logout" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Logout</span> <span ></span></a>

                </li>



            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>