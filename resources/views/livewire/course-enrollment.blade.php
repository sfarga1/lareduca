<div>
    <form wire:submit.prevent="enroll">
        <select wire:model="selectedCourseId">
            <option value="">Select a Course</option>
            @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->title }}</option>
            @endforeach
        </select>
        <button type="submit" class="text-gray-50">Enroll</button>
    </form>

    @if(session()->has('message'))
    <div>{{ session('message') }}</div>
    @endif

    
    <h2 class="text-gray-50">Enrollments</h2>
    @foreach($enrollments as $enrollment)
    <div>
        <p class="text-gray-50">{{ $enrollment->user->name }} - {{ $enrollment->course->title }}</p>
    </div>
    @endforeach
    
</div>