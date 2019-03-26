<form action="/search" method="POST" role="search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="search"
               placeholder="Search users"> <span class="input-group-btn ml-3 mb-3">
            <button type="submit" class="btn btn-primary">Submit
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
