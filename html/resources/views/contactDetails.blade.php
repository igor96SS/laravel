<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-3">Contact Details</h2>

        <div class="card mb-3" style="width: 900px">
            <div class="card-body" >

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Name </h5>
                                <p class="card-text"><strong>{{ $contact->name }}</strong> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Contact </h5>
                                <p class="card-text"><strong>{{ $contact->contact }}</strong> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Email Address </h5>
                                <p class="card-text"><strong>{{ $contact->email }}</strong> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('contactForm', $contact->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('index') }}" class="btn btn-primary btn-md">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
