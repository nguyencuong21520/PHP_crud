<nav class="navbar navbar-expand-sm navbar-primary bg-light">
      <a class="navbar-brand" href="index.php">Employee manager</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">List <span class="sr-only">(current)</span></a>
              </li>
              <li class="New Employees">
                  <a class="nav-link" href="input.php">Add</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" name="var" value="<?php if(isset($_GET['var'])) {echo $_GET['var'];} ?>">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </nav>