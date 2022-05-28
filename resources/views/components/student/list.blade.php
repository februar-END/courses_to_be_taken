<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
<ul>
    @foreach($students as $student)
    <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
    <div>
        <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
            {{ $student->id}}
        </span>
        <p class="text-gray-600">{{$student->name}}</p>
        <x-student.subjects :subjects="$student->subjects"/><!--ここの意味がわからない。。。-->
       
    </div>
    </li>
    @endforeach
</ul>
</div>
