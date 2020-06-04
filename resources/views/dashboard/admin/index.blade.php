
<div class="col-sm-5 infobox-container">
    <div class="infobox infobox-orange2">
        <div class="infobox-icon">
            <i class="ace-icon fa fa-list-alt"></i>
        </div>

        <div class="infobox-data">
            <span class="infobox-data-number">{{$questions}}</span>
            <div class="infobox-content">
                <a href="{{route('materials')}}">
                    Total Question <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="infobox infobox-red">
        <div class="infobox-icon">
            <i class="ace-icon fa fa-users"></i>
        </div>

        <div class="infobox-data">
            <span class="infobox-data-number">{{$users}}</span>
            <div class="infobox-content">
                <a href="{{route('users')}}">
                    Total Users <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
