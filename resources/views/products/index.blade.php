<x-app-layout title="Products">
    <div class="container">
        <x-card title='Products'>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Store_id</th>
                </thead>
                <tbody>
                    @forelse ($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['slug'] }}</td>
                            <td>{{ $user['price'] }}</td>
                            <td>{{ $user['description'] }}</td>
                            <td>{{ $user['photo'] }}</td>
                            <td>{{ $user['store_id'] }}</td>
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