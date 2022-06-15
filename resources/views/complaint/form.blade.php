<div class="form-group mb-3">
    <label for="fullname">ФИО:</label>
    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" value="{{ old('fullname')}}">
    @error('fullname')
        <span class="invalid-feedback" role="alert">
                <strong>{{ __($message) }}</strong>
        </span>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="phone">Телефон:</label>
    <input type="tel" class="phone form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="+7(___)-___-____" pattern="^+7[0-9]{10}" value="{{old('phone')}}">
    @error('phone')
        <span class="invalid-feedback" role="alert">
                <strong>{{ __($message) }}</strong>
        </span>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="polyclinic_id">Поликлиника</label>
    <select class="form-control @error('polyclinic_id') is-invalid @enderror" name="polyclinic_id" id="polyclinic_id">
        <option selected value>----------</option>
        @foreach($polyclinics as $polyclinic)
            <option value="{{$polyclinic->id}}" @selected(old('polyclinic_id') == $polyclinic->id)>{{$polyclinic->name}}</option>
        @endforeach
    </select>
    @error('polyclinic_id')
        <span class="invalid-feedback" role="alert">
                <strong>{{ __($message) }}</strong>
        </span>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="reason_id">Повод:</label>
    <select class="form-control @error('reason_id') is-invalid @enderror" name="reason_id" id="reason_id">
        <option selected value>----------</option>
        @foreach($reasons as $reason)
            <option value="{{$reason->id}}" @selected(old('reason_id') == $reason->id)>{{$reason->name}}</option>
        @endforeach
    </select>
    @error('reason_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ __($message) }}</strong>
        </span>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="text">Обращение:</label>
    <textarea class="form-control @error('text') is-invalid @enderror"  name="text" cols="50" rows="10" id="text">{{old('text')}}</textarea>
    @error('text')
    <span class="invalid-feedback" role="alert">
          <strong>{{ __($message) }}</strong>
    </span>
    @enderror
</div>
