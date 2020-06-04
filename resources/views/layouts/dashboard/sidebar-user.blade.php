<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-user"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-bar-chart"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-warning"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="" id="sidebar-dashboard">
            <a href="/">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="" id="sidebar-quiz">
            <a href="{{route('quiz')}}">
                <i class="menu-icon fa fa-pencil"></i>
                <span class="menu-text"> Take Quiz </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="" id="sidebar-report">
            <a href="{{route('report')}}">
                <i class="menu-icon fa fa-bar-chart"></i>
                <span class="menu-text"> Report </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="" id="sidebar-profile">
            <a href="{{route('profile')}}">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Profile </span>
            </a>

            <b class="arrow"></b>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
