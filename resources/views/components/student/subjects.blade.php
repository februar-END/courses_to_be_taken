@foreach($subjects as $subject)
    <p class="text-gray-600">{{$subject->name}}：{{$subject->pivot->score}}点</p>
@endforeach