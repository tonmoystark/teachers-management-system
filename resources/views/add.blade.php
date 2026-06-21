<x-layout>

    <x-slot:title>
        Add New Teacher
    </x-slot:title>

<h1 class="text-3xl font-bold mb-6">
    Add New Teacher
</h1>
@if($errors->any())
    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-lg shadow-sm mb-6">

        <div class="flex items-center gap-2 mb-2">
            <span class="text-red-600 text-xl">⚠️</span>

            <h3 class="font-semibold text-red-700">
                Validation Errors
            </h3>
        </div>

        <ul class="space-y-2">

            @foreach($errors->all() as $error)
                <li class="text-red-600">
                    • {{ $error }}
                </li>
            @endforeach

        </ul>

    </div>
@endif
<form action="/add" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">

    @csrf

    <div>
        <label class="block mb-2 font-medium">
            Name
        </label>

        <input
            type="text"
            name="name"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter teacher name"
            
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Email
        </label>

        <input
            type="email"
            name="email"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter teacher email"
            
        >
    </div>
    <div>
    <label class="block mb-2 font-medium text-slate-700">
        Department
    </label>

    <select
        name="department_id"
        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
    >
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">
                {{ $department->name }}
            </option>
        @endforeach
    </select>
</div>

    <div>
        <label class="block mb-2 font-medium">
            Age
        </label>

        <input
            type="number"
            name="age"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter age"
            
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Role
        </label>

        <input
            type="text"
            name="role"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter role"
            
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Gender
        </label>

        <select
            name="gender"
            class="w-full border rounded-lg px-4 py-2"
            
        >
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700"
    >
        Add Teacher
    </button>

</form>

</x-layout>
