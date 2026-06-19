<x-layout>

<x-slot:title>
    Edit Teacher
</x-slot:title>

<h1 class="text-3xl font-bold mb-6">
    Edit Teacher
</h1>

<form action="" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">

    @csrf

    <div>
        <label class="block mb-2 font-medium">
            Name
        </label>

        <input
            type="text"
            name="name"
            value="{{ $teacher->name }}"
            class="w-full border rounded-lg px-4 py-2"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Email
        </label>

        <input
            type="email"
            name="email"
            value="{{ $teacher->email }}"
            class="w-full border rounded-lg px-4 py-2"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Age
        </label>

        <input
            type="number"
            name="age"
            value="{{ $teacher->age }}"
            class="w-full border rounded-lg px-4 py-2"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Role
        </label>

        <input
            type="text"
            name="role"
            value="{{ $teacher->role }}"
            class="w-full border rounded-lg px-4 py-2"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Gender
        </label>

        <select
            name="gender"
            class="w-full border rounded-lg px-4 py-2"
            required
        >
            <option value="M" {{ $teacher->gender == 'M' ? 'selected' : '' }}>
                Male
            </option>

            <option value="F" {{ $teacher->gender == 'F' ? 'selected' : '' }}>
                Female
            </option>
        </select>
    </div>

    <button
        type="submit"
        class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600"
    >
        Update Teacher
    </button>

</form>

</x-layout>
