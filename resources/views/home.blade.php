<x-slot>
    <title>Teachers Management</title>
</x-slot>
<x-layout>

<div class="mb-6">
    
    <h1 class="text-3xl font-bold mb-4">
        Teachers Management
    </h1>

    <form class="flex gap-3" action="" method="GET">
        <input
            type="text"
            placeholder="Search Teachers..."
            class="border px-4 py-2 rounded-lg w-full"
            name="search"
            id="search"
        >

        <button
            type="submit"
            class="bg-blue-600 text-white px-5 py-2 rounded-lg"
        >
            Search
        </button>
    </form>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow">

    <table class="w-full">

        <thead class="bg-slate-900 text-white">
            <tr>
                <th class="px-4 py-3 text-left">Name</th>
                <th class="px-4 py-3 text-left">Email</th>
                <th class="px-4 py-3 text-left">Department</th>
                <th class="px-4 py-3 text-left">Age</th>
                <th class="px-4 py-3 text-center">Role</th>
                <th class="px-4 py-3 text-left">Gender</th>
                <th class="px-4 py-3 text-center">Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($teachers as $teacher)
                 <tr class="border-b hover:bg-slate-100 transition">

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

    <td class="px-4 py-3 text-center">
        {{ $teacher->role }}
    </td>

    <td class="px-4 py-3 text-center">
        {{ $teacher->gender }}
    </td>
    <td class="px-4 py-3 flex gap-2 justify-center">
       <a 
       href="/edit/{{ $teacher->id }}" 
       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Edit 
        </a> 
       <a 
       href="/delete/{{ $teacher->id }}" 
       class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Suspend 
        </a>
    </td>
</tr>
            @endforeach
           

        </tbody>

    </table>

</div>
</x-layout>
