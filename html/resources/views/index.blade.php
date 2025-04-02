<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">

    @if(auth()->check())
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
    @endif


        <h2 class="mb-2">Contacts List</h2>
        <a href="{{ route('contactForm') }}" class="btn btn-primary mb-2">Add new contact</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>
                    <a href="{{ route('contactDetails', $contact->id) }}" class="btn btn-info btn-sm">Details</a>
                    <a href="{{ route('contactForm', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>