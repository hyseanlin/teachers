        <div class="form-group">
            {!! Form::label('name', "學生的姓名：") !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
            {!! Form::label('email', "學生的電子郵件信箱：") !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
            {!! Form::label('born_at', "學生生日：") !!}
            {!! Form::input('date', 'born_at', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
                {!! Form::label('teacher_id', "指導老師：") !!}
                <select name="teacher_id">
                        @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                </select>
        </div>

        <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
