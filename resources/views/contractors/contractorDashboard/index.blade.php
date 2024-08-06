<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link href="assets/css/main.css" rel="stylesheet">
    @include('./../layouts.modal')
    <style>
      .btnHidden{
        background-color: transparent;
        border: none
      }
      .btnHidden:hover{
        background-color: transparent;
        border: none
      }
      .btn:hover{
        background-color:transparent;
      }
      .btn-secondary:hover{
        background-color:transparent;
      }
    </style>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">My sites</a>
              </li>
            </ul>
            @if (Auth::user())
            <a type="button" class="btn btn-secondary btnHidden" data-bs-toggle="modal" data-bs-target="#profileModal">
            <button class="text-white btn" data-toggle="modal" data-target="#profileModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#feb900"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>&nbsp;
                {{ Auth::user()->name }}
            </button></a>
        @endif
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <h1 class="text-center">Site Detsils</h1>
        <h3>Constructing House</h3>
        <h4>Metrial details</h4>
        <div class="mb-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui vitae laudantium explicabo, suscipit atque quod veniam ratione a rem maiores, optio numquam ullam eligendi. Iure velit totam odio recusandae deserunt maiores molestiae error harum labore voluptates ab, enim deleniti ducimus veritatis repellat nesciunt, optio modi? Eos temporibus sint harum nesciunt iure pariatur! Doloremque dolore officia fuga velit culpa amet soluta id non! Asperiores unde necessitatibus et non expedita dolores, quisquam amet ipsum veniam atque. Quia repellendus, eaque quaerat corrupti quos laudantium? Ea quod, ad modi dolore at cumque nobis quam doloribus harum autem. Fuga, rerum. Vel error doloremque sunt assumenda!</p>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#matrialDetails">
          Edit
      </button>
        <h2>Curent workers or engeners</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Father Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">expertise</th>
                  <th scope="col">Working Days</th>
                  <th scope="col">Labour paid</th>
                  <th scope="col">Remaining Labour </th>
                  <th scope="col">Action </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="col"></td>
                  <td scope="col"></td>
                  <td scope="col"> </td>
                  <td scope="col"></td>
                  <td scope="col"></td>
                  <td scope="col"> </td>
                  <td scope="col"> </td>
                  <td scope="col">  </td>
                  <td scope="col"> <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#labourDetails">Edit</button> </td>
                </tr>
                <tr>
                  <td scope="col"></td>
                  <td scope="col"></td>
                  <td scope="col"> </td>
                  <td scope="col"></td>
                  <td scope="col"></td>
                  <td scope="col"> </td>
                  <td scope="col"> </td>
                  <td scope="col">  </td>
                  <td scope="col">  </td>
                </tr>
                <tr>
                  <td scope="col"></td>
                  <td scope="col"></td>
                  <td scope="col"> </td>
                  <td scope="col"></td>
                  <td scope="col"></td>
                  <td scope="col"> </td>
                  <td scope="col"> </td>
                  <td scope="col">  </td>
                  <td scope="col">  </td>
                </tr>
                
              </tbody>
            </table>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
