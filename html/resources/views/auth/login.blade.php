
<div class="container mt-5">

    <div class="card col-md-6 mb-3" >
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Name</h5>
                                        <input type="text" name="name" id="name" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Password </h5>
                                        <input type="password" name="password" id="password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
</div>




        