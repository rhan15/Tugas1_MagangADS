<x-app-layout title="Users">
    <div class="container">
        <x-card title='Users'>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    @forelse ($users as $key => $user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['twitter'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class='text-center'>
                                    Data not found
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>