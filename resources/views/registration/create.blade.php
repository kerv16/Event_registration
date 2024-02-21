<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('registration.store') }}" method="post" class="row g-3">
              @csrf
              <div class="col-12">
                <h2 class="text-center">TBI Event Registration</h2>
              </div>
              <div class="col-12">
                <input type="text" name="name" placeholder="Name of Participant" required class="form-control">
              </div>
              <div class="col-12">
                <input type="text" name="company_agency" placeholder="Company/Agency/Institution" required
                  class="form-control">
              </div>
              <div class="col-12">
                <input type="email" name="email" placeholder="Email" required class="form-control">
              </div>
              <div class="col-12">
                <input type="text" name="phone" placeholder="Phone" required class="form-control">
              </div>
              <div class="col-12">
                <select name="project_name" required class="form-control">
                  <option value="">Select Project</option>
                  <option value="Caraga RISEE">Caraga RISE</option>
                  <option value="NAVIGATU">NAVIGATU</option>
                  <option value="TARA">TARA Agri-Aqua</option>

                </select>
              </div>
              <div class="col-12">
                <input type="text" name="event_name" placeholder="Event Name" required class="form-control">
              </div>
              <div class="col-12">
                <input type="text" name="event_type" placeholder="Event Type" required class="form-control">
              </div>
              <div class="col-12">
                <input type="date" name="event_date" required class="form-control">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>