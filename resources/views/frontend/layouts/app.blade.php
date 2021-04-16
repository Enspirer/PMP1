@if(is_mobile(request()->header('user-agent')) != true)
    @include('frontend.layouts.desktop.app')

@else
    @include('frontend.layouts.mobile.app')
@endif

