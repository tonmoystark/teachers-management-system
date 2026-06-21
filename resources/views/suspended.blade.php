<x-layout>

<x-slot:title>
    Trash
</x-slot:title>

<div class="overflow-x-auto bg-white rounded-lg shadow">

    <table class="w-full">

        <thead class="bg-slate-900 text-white">
            <tr>
                <th class="px-4 py-3 text-left">Name</th>
                <th class="px-4 py-3 text-left">Email</th>
                <th class="px-4 py-3 text-left">Department</th>
                <th class="px-4 py-3 text-left">Age</th>
                <th class="px-4 py-3 text-left">Role</th>
                <th class="px-4 py-3 text-left">Gender</th>
                <th class="px-4 py-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher) <tr class="border-b hover:bg-slate-100 transition">

    <td class="px-4 py-3">
        {{ $teacher->name }}
    </td>

    <td class="px-4 py-3">
        {{ $teacher->email }}
    </td>
    <td class="px-4 py-3">
        {{ $teacher->department->name }}
    </td>

    <td class="px-4 py-3 text-center">
        {{ $teacher->age }}
    </td>

    <td class="px-4 py-3">
        {{ $teacher->role }}
    </td>

    <td class="px-4 py-3 text-center">
        {{ $teacher->gender }}
    </td>
    <td class="px-4 py-3 flex gap-2 justify-center">
       <a 
       href="/retrieve/{{ $teacher->id }}" 
       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Retrieve 
        </a> 
       <a 
       href="/suspended/{{ $teacher->id }}" 
       class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Delete 
        </a>
    </td>
</tr>
@endforeach

        </tbody>

    </table>
    @if($teachers->isEmpty())
        <div>
            <h1 class="text-3xl text-center my-2 font-bold ">
                No Data in the trash
            </h1>
        </div>
    @endif
</div>

</x-layout>