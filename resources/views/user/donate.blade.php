<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DONATION</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('public/frontend/login') }}/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login') }}/css/util.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login') }}/css/main.css" />
    <!--===============================================================================================-->
    <link
      href="{{ asset('frontend/login') }}/css/font-awesome/css/all.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('{{ asset("frontend/login") }}/images/image-18.jpg')"
      >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form class="login100-form validate-form" action="{{ url('insert-donate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <span class="login100-form-title p-b-49"> Donate </span>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
                class="input100"
                type="text"
                name="category_name"
                placeholder="Category:"
              />
            </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
                class="input100"
                type="text"
                name="book_name"
                placeholder="Book Name:"
              />
            </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
                class="input100"
                type="text"
                name="author_name"
                placeholder="Author Name:"
              />
            </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <textarea class="input100" placeholder="Description.." name="description"></textarea>
            </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <textarea class="input100" placeholder="Pickup address.." name="pickup"></textarea>
            </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
                class="input100"
                type="date"
                name="dropdate"
                placeholder="Drop Date:"
              />
            </div>
            <span>Image</span>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
              style="margin-top: 3px"
                type="file"
                name="image"
              />
            </div>
            <div class="container-login100-form-btn" style="margin-top: 10px">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn">Donate</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="{{ asset('public/frontend/login') }}/js/main.js"></script>
  </body>
</html>
