@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {!! session('flash_notification.message') !!}
    </div>
@endif