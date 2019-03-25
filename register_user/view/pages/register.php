
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card shadow-sm p-3">
            <div class="card-body">
                <h4>Register Form</h4>
                <hr>
                <form method="post" action="index.php?action=register_user">
                    <div id="div_login">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="Password"/>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Register" name="but_submit" 
                                class="btn btn-primary btn-block" />
                            <hr>
                            <p class="text-danger">
                                <a href="index.php?action=login" class="text-info">Login</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>