<x-base>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Portal Members</h1>
        </div>
    </header>
    <main class="pt-10">
        <table class="table-auto m-auto">
            <thead>
                <tr>
                    <th class="m-auto p-1">USERNAME</th>
                    <th class="m-auto p-1">EMAIL ADDRESS</th>
                    <th class="m-auto p-1">CREATED AT</th>
                </tr>
            </thead>
            <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr>
                            <td class="m-auto p-3"><b>{{ $user->username }}</b></td>
                            <td class="m-auto p-3">{{ $user->email }}</td>
                            <td class="m-auto p-3">{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </main>

</x-base>