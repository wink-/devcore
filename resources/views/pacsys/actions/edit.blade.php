@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.action.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.actions.update", [$action->getKey()]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="IDx">{{ trans('cruds.action.fields.IDx') }}</label>
                <input class="form-control {{ $errors->has('IDx') ? 'is-invalid' : '' }}" type="number" name="IDx" id="IDx" value="{{ old('IDx', $action->IDx) }}" step="1">
                @if($errors->has('IDx'))
                    <span class="text-danger">{{ $errors->first('IDx') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.IDx_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="RecordName">{{ trans('cruds.action.fields.RecordName') }}</label>
                <input class="form-control {{ $errors->has('RecordName') ? 'is-invalid' : '' }}" type="text" name="RecordName" id="RecordName" value="{{ old('RecordName', $action->RecordName) }}">
                @if($errors->has('RecordName'))
                    <span class="text-danger">{{ $errors->first('RecordName') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.RecordName_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="FormName">{{ trans('cruds.action.fields.FormName') }}</label>
                <input class="form-control {{ $errors->has('FormName') ? 'is-invalid' : '' }}" type="text" name="FormName" id="FormName" value="{{ old('FormName', $action->FormName) }}">
                @if($errors->has('FormName'))
                    <span class="text-danger">{{ $errors->first('FormName') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.FormName_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ValueName">{{ trans('cruds.action.fields.ValueName') }}</label>
                <input class="form-control {{ $errors->has('ValueName') ? 'is-invalid' : '' }}" type="text" name="ValueName" id="ValueName" value="{{ old('ValueName', $action->ValueName) }}">
                @if($errors->has('ValueName'))
                    <span class="text-danger">{{ $errors->first('ValueName') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.ValueName_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="Value">{{ trans('cruds.action.fields.Value') }}</label>
                <input class="form-control {{ $errors->has('Value') ? 'is-invalid' : '' }}" type="text" name="Value" id="Value" value="{{ old('Value', $action->Value) }}">
                @if($errors->has('Value'))
                    <span class="text-danger">{{ $errors->first('Value') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.Value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="RecDate">{{ trans('cruds.action.fields.RecDate') }}</label>
                <input class="form-control date {{ $errors->has('RecDate') ? 'is-invalid' : '' }}" type="text" name="RecDate" id="RecDate" value="{{ old('RecDate', $action->RecDate) }}">
                @if($errors->has('RecDate'))
                    <span class="text-danger">{{ $errors->first('RecDate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.RecDate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ActDate">{{ trans('cruds.action.fields.ActDate') }}</label>
                <input class="form-control date {{ $errors->has('ActDate') ? 'is-invalid' : '' }}" type="text" name="ActDate" id="ActDate" value="{{ old('ActDate', $action->ActDate) }}">
                @if($errors->has('ActDate'))
                    <span class="text-danger">{{ $errors->first('ActDate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.ActDate_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('Complete') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="Complete" value="0">
                    <input class="form-check-input" type="checkbox" name="Complete" id="Complete" value="1" {{ $action->Complete || old('Complete', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="Complete">{{ trans('cruds.action.fields.Complete') }}</label>
                </div>
                @if($errors->has('Complete'))
                    <span class="text-danger">{{ $errors->first('Complete') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.Complete_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="RecEmpCode">{{ trans('cruds.action.fields.RecEmpCode') }}</label>
                <input class="form-control {{ $errors->has('RecEmpCode') ? 'is-invalid' : '' }}" type="text" name="RecEmpCode" id="RecEmpCode" value="{{ old('RecEmpCode', $action->RecEmpCode) }}">
                @if($errors->has('RecEmpCode'))
                    <span class="text-danger">{{ $errors->first('RecEmpCode') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.RecEmpCode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="Unit">{{ trans('cruds.action.fields.Unit') }}</label>
                <input class="form-control {{ $errors->has('Unit') ? 'is-invalid' : '' }}" type="text" name="Unit" id="Unit" value="{{ old('Unit', $action->Unit) }}">
                @if($errors->has('Unit'))
                    <span class="text-danger">{{ $errors->first('Unit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.Unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ActValue">{{ trans('cruds.action.fields.ActValue') }}</label>
                <input class="form-control {{ $errors->has('ActValue') ? 'is-invalid' : '' }}" type="text" name="ActValue" id="ActValue" value="{{ old('ActValue', $action->ActValue) }}">
                @if($errors->has('ActValue'))
                    <span class="text-danger">{{ $errors->first('ActValue') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.ActValue_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ScopeName">{{ trans('cruds.action.fields.ScopeName') }}</label>
                <input class="form-control {{ $errors->has('ScopeName') ? 'is-invalid' : '' }}" type="text" name="ScopeName" id="ScopeName" value="{{ old('ScopeName', $action->ScopeName) }}">
                @if($errors->has('ScopeName'))
                    <span class="text-danger">{{ $errors->first('ScopeName') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.ScopeName_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="Comment">{{ trans('cruds.action.fields.Comment') }}</label>
                <input class="form-control {{ $errors->has('Comment') ? 'is-invalid' : '' }}" type="text" name="Comment" id="Comment" value="{{ old('Comment', $action->Comment) }}">
                @if($errors->has('Comment'))
                    <span class="text-danger">{{ $errors->first('Comment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.Comment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="Tank">{{ trans('cruds.action.fields.Tank') }}</label>
                <input class="form-control {{ $errors->has('Tank') ? 'is-invalid' : '' }}" type="text" name="Tank" id="Tank" value="{{ old('Tank', $action->Tank) }}">
                @if($errors->has('Tank'))
                    <span class="text-danger">{{ $errors->first('Tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.Tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="TimeStamp">{{ trans('cruds.action.fields.TimeStamp') }}</label>
                <input class="form-control datetime {{ $errors->has('TimeStamp') ? 'is-invalid' : '' }}" type="text" name="TimeStamp" id="TimeStamp" value="{{ old('TimeStamp', $action->TimeStamp) }}">
                @if($errors->has('TimeStamp'))
                    <span class="text-danger">{{ $errors->first('TimeStamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.TimeStamp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="EmpName">{{ trans('cruds.action.fields.EmpName') }}</label>
                <input class="form-control {{ $errors->has('EmpName') ? 'is-invalid' : '' }}" type="text" name="EmpName" id="EmpName" value="{{ old('EmpName', $action->EmpName) }}">
                @if($errors->has('EmpName'))
                    <span class="text-danger">{{ $errors->first('EmpName') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.EmpName_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="IDy">{{ trans('cruds.action.fields.IDy') }}</label>
                <input class="form-control {{ $errors->has('IDy') ? 'is-invalid' : '' }}" type="text" name="IDy" id="IDy" value="{{ old('IDy', $action->IDy) }}">
                @if($errors->has('IDy'))
                    <span class="text-danger">{{ $errors->first('IDy') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.IDy_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ValueNum">{{ trans('cruds.action.fields.ValueNum') }}</label>
                <input class="form-control {{ $errors->has('ValueNum') ? 'is-invalid' : '' }}" type="number" name="ValueNum" id="ValueNum" value="{{ old('ValueNum', $action->ValueNum) }}" step="1">
                @if($errors->has('ValueNum'))
                    <span class="text-danger">{{ $errors->first('ValueNum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.action.fields.ValueNum_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
