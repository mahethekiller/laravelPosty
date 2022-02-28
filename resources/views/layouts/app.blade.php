<!doctype html>
<html lang="en">

@include("layouts.header")

<body class="vertical-layout">
    @include("layouts.info-sidebar")
    <!-- Start Containerbar -->
    <div id="containerbar">
        @include("layouts.navbar")

        <!-- Rightbar -->
        <div class="rightbar">
            @include("layouts.topbar")
            @include("layouts.breadcrumb")
            @yield("content")
        </div>
        <!-- End Rightbar -->

    </div>
    <!-- End Containerbar -->

    @include("layouts.footer")




</body>

</html>
