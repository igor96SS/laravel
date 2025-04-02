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
        <h2 class="mb-3">New Contact</h2>

        <div class="card col-md-6 mb-3" >
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Name</h5>
                                        <input type="text" class="form-control" id="contactName" aria-describedby="emailHelp" placeholder="Enter name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Email address </h5>
                                            <input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Contact</h5>
                                            <input type="tel" class="form-control" id="contactphone" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4 mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='/'">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
