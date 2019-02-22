<div class="row">
    <div class="col-sm-8 offset-sm-4 col-md-6 offset-md-6 col-lg-5 offset-lg-7 col-xl-4 offset-xl-8">
        {!! Form::open(['route' => 'search-users', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation', 'id' => 'search_users']) !!}
            {!! csrf_field() !!}
            <div class="input-group mb-3">
                {!! Form::text('user_search_box', NULL, ['id' => 'user_search_box', 'class' => 'form-control', 'placeholder' => trans('laravelblocker::laravelblocker.forms.search-blocked-ph'), 'aria-label' => trans('laravelblocker::forms.search-users-ph'), 'required' => false]) !!}
                <div class="input-group-append">
                    <a href="#" class="btn btn-warning clear-search" data-toggle="tooltip" title="{!! trans('laravelblocker::laravelblocker.tooltips.clear-search') !!}">
                        @if(config('laravelblocker.blockerEnableFontAwesomeCDN'))
                            <i class="fa fas fa-times" aria-hidden="true"></i>
                            <span class="sr-only">
                                {!! trans('laravelblocker::laravelblocker.tooltips.clear-search') !!}
                            </span>
                        @else
                            {!! trans('laravelblocker::laravelblocker.tooltips.clear-search') !!}
                        @endif
                    </a>
                    @if(config('laravelblocker.blockerEnableFontAwesomeCDN'))
                        {!! Form::button('<i class="fa fas fa-search" aria-hidden="true"></i> <span class="sr-only"> ' . trans('laravelblocker::laravelblocker.tooltips.submit-search') . ' </span>', ['class' => 'btn btn-secondary', 'type' => 'submit', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => trans('laravelblocker::laravelblocker.tooltips.submit-search')]) !!}
                    @else
                        {!! Form::button(trans('laravelblocker::laravelblocker.tooltips.submit-search'), ['class' => 'btn btn-secondary', 'type' => 'submit', 'title' => trans('laravelblocker::laravelblocker.tooltips.submit-search')]) !!}
                    @endif
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
