</div></div>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <p class="text-muted credit">
                    © <a href="https://github.com/GrahamCampbell">Graham Campbell</a> 2013. All rights reserved.
                </p>
            </div>
            <div class="col-xs-4">
                <p class="text-muted credit pull-right">
                    Generated in {{ round((microtime(1) - LARAVEL_START), 4) }} sec.
                </p>
            </div>
        </div>
    </div>
</div>

{{ Basset::show('main.js') }}
@section('js')
@show
@if (Config::get('analytics.google'))
    @include('partials.analytics')
@endif
