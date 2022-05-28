<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <p>投稿フォーム</p>
    <form action="{{ route('student.create') }}" method="post">
        @csrf
        <label for="student-content">点数入力</label>
        
        <select class="custom-select" name="studentId">
            @foreach($students as $student)
                <option value="{{$student->id}}">
                    {{$student->name}}
                </option>
            @endforeach
        </select>

        <select class="custom-select" name="subjectId">
            @foreach($subjects as $subject)
                <option value="{{$subject->id}}">
                    {{$subject->name}}
                </option>
            @endforeach
        </select>

        <input type="number" class="custom" name="score" value=50>

        <button type="submit">投稿</button>
        
    </form>
</div>
