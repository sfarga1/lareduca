<div class="max-w-lg mx-auto p-6 bg-gray-800 rounded-lg shadow-xl">
    <form wire:submit.prevent="enroll">
        <div class="mb-4">
            <label for="course" class="block text-gray-300 mb-2">Select a Course</label>
            <select id="course" wire:model="selectedCourseId" class="block w-full bg-gray-700 border border-gray-600 text-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
                <option value="">Select a Course</option>
                @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enroll</button>
    </form>

    @if(session()->has('message'))
    <div class="mt-4 bg-green-500 text-white py-2 px-4 rounded">
        {{ session('message') }}
    </div>
    @endif

    <h2 class="text-gray-300 mt-6 mb-4">Enrollments</h2>
    <div class="divide-y divide-gray-600">
        @foreach($enrollments as $enrollment)
        <div class="py-2">
            <p class="text-gray-300">{{ $enrollment->user->name }} - {{ $enrollment->course->title }}</p>
        </div>
        @endforeach
    </div>
</div>
