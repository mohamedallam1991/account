@if(session()->has('error'))
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="alert alert-danger">
            {!!  session()->get('error') !!}
      </div>
  </div>
</div>
@endif
@if(session()->has('info'))
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="alert alert-info">
              {!! session()->get('info') !!}

            </div>
        </div>
    </div>
@endif