
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <title>Twitter!</title>
  </head>
  <body>
    <section id="header">
        <p>HOME</p>
    </section>
    <div class="spacer"></div>
    <div class="containe">
        <!-- Post Section Start -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="">
                    <textarea name="" class="form-control card" id="" cols="8" rows="8"></textarea>
                    <button type="submit"  class="btn btn-primary post-btn">Post</button>
                </form>
            </div>
        </div>
        <!-- Post Section End -->

        <!-- Post Content Section Start -->
        <div class="spacer"></div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="post-section card">
                    <div class="row">
                        <div class="col-md-3 post_image">
                            <img src="{{ asset('assets/image/avatar.jpg')}}" alt="">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <strong>Md.Rabiul Hasan</strong>
                                7:58 pm 7th July, 2020
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas eos sapiente asperiores dicta similique rem neque aliquam quaerat, quasi exercitationem maiores modi tempore, placeat fugiat eligendi veritatis itaque cumque.m
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post Contant Section Start -->
        <div class="spacer"></div>
        
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>