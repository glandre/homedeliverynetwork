<ul class="list-icon text-sm">
    <li>
        <i class="material-icons location_on"></i>
        {{{ config('app.address') }}}<br>{{{ config('app.address_complement') }}}
    </li>
    <li>
        <i class="material-icons phone"></i>
        {{{ config('app.phone') }}}
    </li>
    <li>
        <i class="material-icons email"></i>
        <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
    </li>
    <li>
        <i class="socicon-skype"></i>
        <a href="#">{{{ config('app.skype_id') }}}</a>
    </li>
</ul><!-- .list-icon -->
<span class="text-sm display-inline"
      style="margin-bottom: 6px;">Social accounts: &nbsp;&nbsp;</span>
<div class="social-bar display-inline">
    @if(config('app.facebook'))
        <a href="{{{ url(config('app.facebook')) }}}" class="sb-facebook" data-toggle="tooltip" data-placement="top" title=""
           data-original-title="Facebook">
            <i class="socicon-facebook"></i>
        </a>
    @endif
    @if(config('app.gplus'))
        <a href="{{{ url(config('app.gplus')) }}}" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title=""
           data-original-title="Google+">
            <i class="socicon-googleplus"></i>
        </a>
    @endif
    @if(config('app.twitter'))
        <a href="{{{ url(config('app.twitter')) }}}" class="sb-twitter" data-toggle="tooltip" data-placement="top" title=""
           data-original-title="Twitter">
            <i class="socicon-twitter"></i>
        </a>
    @endif
    @if(config('app.instagram'))
        <a href="{{{ url(config('app.instagram')) }}}" class="sb-instagram" data-toggle="tooltip" data-placement="top" title=""
           data-original-title="Instagram">
            <i class="socicon-instagram"></i>
        </a>
    @endif
</div>