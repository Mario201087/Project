<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  </head>
  <body style="width: 100vw ;height: 100vh;">
  <section class="container-fluid" style="background-color: #8fc4b7; height: 100vh;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 ">Registration Info</h3>

            <form>
                <div class="row d-flex ">
                    <div class="col-md-6  p-1">
                    <input type="email" class="form-control " id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="col-md-6 p-1">
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="row p-1">
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="row p-1">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                  <div class="row d-flex">
                      <div class="col-md-6  p-1">
                      <input type="date" class="form-control " id="inputEmail4" placeholder="Data urodzin">
                      </div>
                      <div class="col-md-6 p-1">
                      <select class="form-select" aria-label=".form-select example">
                        <option selected>Open this select menu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                      </div>
                </div>
                <div class="row p-1">
                   <button type="submit" class="btn btn-primary col-12">Sign in</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script>
        flatpickr("#myID", {});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  </body>
</html>