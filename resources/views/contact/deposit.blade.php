<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => url('/contacts/make/deposit', [$contact->id]), 'method' => 'POST', 'id' => 'contact_edit_form']) !!}

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Deposit To Account</h4>
    </div>

    <div class="modal-body">
            <div class="form-group">
                <strong>@lang('account.selected_account')</strong>: 
                {{$contact->name}}
                {!! Form::hidden('contact_id', $contact->id) !!}
            </div>

            <div class="form-group">
                {!! Form::label('amount', "Amount" .":*") !!}
                {!! Form::text('amount', 0, ['class' => 'form-control input_number', 'required','placeholder' => 'Amount' ]); !!}
            </div>
            <div class="form-group">
            {!! Form::label('location_id', __( 'lang_v1.location_id' ) . ':') !!}
              {!! Form::select('location_id', $locations, null, ['class' => 'form-control']); !!}
              {{-- {!! Form::text('location_id', null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.location_id' ) ]); !!} --}}
          </div>
            <div class="form-group">
                {!! Form::label('operation_date', __( 'messages.date' ) .":*") !!}
                <div class="input-group date" id='od_datetimepicker'>
                  {!! Form::text('date', 0, ['class' => 'form-control', 'required','placeholder' => __( 'messages.date' ) ]); !!}
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('note', __( 'brand.note' )) !!}
                {!! Form::textarea('note', null, ['class' => 'form-control', 'placeholder' => __( 'brand.note' ), 'rows' => 4]); !!}
            </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Deposit</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script type="text/javascript">
  $(document).ready( function(){
    $('#od_datetimepicker').datetimepicker({
      format: moment_date_format + ' ' + moment_time_format
    });
  });
</script>