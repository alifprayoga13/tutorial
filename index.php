<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Loop :: </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/portfolio-2.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper.js -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Link AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
</head>

<body id="top-page" class="light">
    <header class="main-header main">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/random/Logo-Mini.png" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler custome px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-top-main" aria-controls="navbar-top-main" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="navbar-toggler-icon-custome-1"></div>
                </button>

                <div class="navbar-collapse collapse" id="navbar-top-main">
                    <button class="navbar-toggler align-self-end mt-4 me-3 d-block d-lg-none" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbar-top-main" aria-controls="navbar-top-main"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-close"></div>
                    </button>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            
                            <?php
                                                        error_reporting(0);
                                                        session_start();
                            if ($_SESSION['level'] == "user") {
                            echo '<a href="./user/Undangan.php" class="btn btn-gr-light-outline js-scroll">New invitation+</a>';
                            }elseif ($_SESSION['level'] == "admin") {
                                echo '<a href="./admin/statusundangan.php" class="btn btn-gr-light-outline js-scroll">New invitation+</a>';
                                }else{
                            echo '<a href="./login.php" class="btn btn-gr-light-outline js-scroll">Login</a>';
                            }
                        ?> 
                        </li>
                        <div class="collapse navbar-collapse" id="navbar-list-4">
                      <ul class="navbar-nav ms-auto">
                         <li class="nav_item">
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img src="img/random/download.png" width="40" height="40" class="rounded-circle" style="margin-top: -10px;">
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php

                                if ($_SESSION['level'] == "user") {
                                   echo "<li><a class='dropdown-item' href='logout.php'>Log Out</a></li>";
                                   echo "<li><a class='dropdown-item' href='./user'>Setting</a></li>";
                                }elseif ($_SESSION['level'] == "admin") {
                                    echo "<li><a class='dropdown-item' href='logout.php'>Log Out</a></li>";
                                    echo "<li><a class='dropdown-item' href='./admin'>Admin Setting</a></li>";
                                 }else{
                                    echo "<li><a class='dropdown-item' href='login.php'>Sign In</a></li>";
                                    echo "<li><a class='dropdown-item' href='Register.php'>Sign Up</a></li>";
                                }
                            ?>

</li>
                        </ul>
                        </li>   
                        </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
       <!--Awal Carousel-->
         <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/random/pernikahan.png" class="d-block img-fluid" alt="Gambar 1">
          </div>
          <div class="carousel-item">
            <img src="img/random/wisuda.jpg" class="d-block img-fluid" alt="Gambar 2">
          </div>
          <div class="carousel-item">
            <img src="img/random/Capture.PNG" class="d-block img-fluid" alt="Gambar 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
   <!--Akhir Carousel-->

    </header>
    <!-- Section Ability -->
    <section class="section-head section-ability text-end">
        <div class="container">
            <div class="d-flex flex-row align-items-center" data-aos="fade-right">
             
            </div>
        </div>
    </section>
    <!-- Section About Me -->
    <section class="section-head section-aboutme text-center" id="aboutme" data-aos="fade-down" data-aos-delay="50">
        <div class="container">
            <h2>Pilihan Tema</h2>
            <p>Beberapa Macam Tema</p>
               <section class="section-service-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="card service-item">    
                            <img src="img/random/pernikahan.png" alt="design-service" class="">
                        <hr>
                        <h2>Wedding</h2>
                        <p>a website about the graduation theme using bootstrap 5. the appearance is attractive and easily understood by the user himself. Simplify and reduce the risk of waste from paper printing invitations. Thank you very much</p>
                        <br>
                    <div>
                    <a href="https://github.com/alifprayoga13" class="btn btn-secondary"
                    target="_blank">Read More ....</a>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-item">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgWFRUYGBgYGCEcGRwZGhgaHBocIRgcGhgcGhwcJC4lHB4tISEaJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHxISHzQrJCw9NDQ9NjQ0NDQ0NDQ0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAAECBAYDB//EAEYQAAIBAwMCAwYBCAgFAgcAAAECEQADIQQSMQVBIlFhBhMycYGRQhRSYnKSobHwBxUjNFOzwdEkM4Lh8RaiNUNzk7LC4v/EABgBAAMBAQAAAAAAAAAAAAAAAAABAgME/8QAIhEBAQACAgMAAgMBAAAAAAAAAAECESExAxIyQVETImGh/9oADAMBAAIRAxEAPwD0OkaVSphGlSpUAqlUalQEalSqNAKlSp4oBGlFPUaAlUalSoCNKnilFASpqaKRFAPUafbS20A1PNLbS20A9Rp4p6AVNNPTGgHpUqVAKlTRSFAPSpEUqAVPTCkaAaaelSoCNSpUqAYmhHVfaTTaZlW9c2FgSoCO8gQD8CmPrRK8cV5P/SI83U/Vb+Ip4zdLK6jf6D2v0d5xbtXHd2mFFq9JgSeUjgVy1HtvoUYo911Ycg2r2P8A2V4xbuFWDKSrDIIJBB8wRkH1oneS8gS9dlzfVtm8liwwAxBy2SDHEgTWnpEe1eqL7caAqWF4wDH/AC7o/cV49a7p7XaNp23p2gEwjmAeJgc+nagXsb0XQ6qwpZVfUcP7xpYEDPu1BgLAnconmciAC0Ok0dvV3bZZ0tneie8YRbf4QWIPiUEOATyPUYmTH8i5Za4egf8AqTTQDvMGPwP34kRipjr+nxDk4JHhbgc9vIj71h7+mKgIQcCCRyYx3/1rrYCyihhKIUAmSeDJI+X3ro/gxc/8+V4bR+u2B+JuJ+BvX09DXFPaXTN8Lk5j4W5gsB8yAY8+Kz7aIvaJBG7kAzlYO7I45n6Hzqho9BaYbl2gcOHJDKwIPI/D6d8VM8ONVfNlG8TqVtuCfsR3I/cQa7m/mIPAPH50bR+sZGOazum1CAFuQPixnjyIGT8hzRexrEYO6t4tsiT4FaI3fosV4Bg8ipvih/zZLTagA7SDuiSohmX9bbIX5E1EatdyKQwL7tpIxK/EpPZu8Hkcd6zi9X9yCu9bxQEliiruYEhvdMoyZ4z345otpdd7x0GxoJDNuABRtiwpiVJKuMqY8P0Cvjkhzy20VIpiac1yvHFYuhzfWopILREThsSYGQMZrq19YmQR3hgY+YmR/wB6DW9Tt3FmCoLgLFsjCEAADLEkiB3qn1XqW9xb2DaxKEuQXXwnOwQIkEGSfnWuOEym3Pn5MsbZB5epISIJycY8jBMHMTOa4P1uyCV3NI5AVjnykCJrO9cKWdty2gN9lCwNxiAPGTO4gJ2nsvnVDWM0MzliyiTG0E4zAIIBjgxia0/ixRPNlW0bq9oKWk45AyRxztkdwTnio6brNp52loEzIiI5nPAgifQ1g+lakLb3NgBWQIuSzOACBJyvePn51tfZDpi+5a40FnLSJwsneR5d+fI0svHjjNqx8uWV0J6q/stNdKuyLk7F3tH5wVckfIT3rOH2+0M7Q7sTxttsZ+X+1FOv+0lrTW1ZCLruDsVHWI2kq5g/BO0EjPiEVgP6PtfaTU3/AMpa3bZ1Z/eOdpndJVCcLJJY9ztAHFZ+sa+1av8A9eaLzuSOR7tpGJyvPHpVzpXtTp9SxW1vJHO5dgA5JJYgRWC9vPaTT6i7abSqJt+I3thRmPISGAO0ZOe5+c57U9Ob8nTUyCjuyED8LiTHpgTFOYTRe1eoXPb/AEKkrvcwSJVCymDEqwwR5Ec0w/pB0P51z/7bV4/UgaPSH7V7T032y0t+4lpGfe5IUG2wGFLGT2wDWgNeLew5/wCP0/6zf5T17UazymqrG7MKRpCkaSipUqVARJqDPUXaql65QD6nUYry7248d5AO8jPGSozW81V2sT7RdON1bl0OqmygbaeXBdVO0zggZjM8U8e05dM11fpz6a69pypZYyplWBUMrKfIgiuf5U7lQxL7UCICT4UHCrHA5+5ru16GS65W4xjwMTMAQC0DGI7z3rl1LXG9cNzYlvgBbahFUDiIyT+kTJraxlKlcvsowxV92dpIIEEAFpmfSe9Q0usKOjsN4Qg7X8QgeU8HyPYgVVrpp7YZlUsEBMFmmFHcmMmlJo7dvXumXrGoVLkB1juTMxENBmR5E0P69rdOt5ESEcCXC/ABgKrH8JOTyCc+lBbV7SadJssnEM5YF39YBn6AVlGvF7jEQFZi2QpjtORg8D61VysZ44Tba9R6u7KyadwXVQ/hIOAwkLiJgj5SKGp1sO6Lc05JZgoZPjIPHhEfY+vlQbS6i4L6ixhwNmeCJlt3p5/LHai3W9RdsPZuEoWVg0KCsEQYJJJzn5Zxmljcu1ZY49Dr61LY2BG2Hg48wYiBH/nmloet2Uu7gBvCnazgBXBwUYjiMRPeInvU1PW0vrPunQmCd+0A+o8++cc1W1HSt6hjs2xIEkz6mBt/eavd2j1mtNTpOoae8nvNiooJ8EkZ3HdwIcTJ/wBKtafrCPdtWxbcbnLboG0whAJJIIAHockUM6Mye7BAUbPDBJkQASYjAzzRzRiSpXYsZgjaWWYJURnNPL5qcZ/aci7vVLU6jFK/doXqrtcjtT0ZtOl1bvAdHUysgqCZIJGB51U1T6dA+pa4jb2BVUJciI52ySMA9uBmq2g1SAuj7drEYaIPPY+sRXfW3raqZaAOIM94A+9dXj6jj8v1VLWdTtlluHeFgfhPEzuaMDt4Z/CJNT3m6oIUZHh8QBIMyDPp5TU00qe73sQqsDuDgBYyM5xisjo+rLpi3u3Ny2HlFIIjMwpIkfPg8xTyy1Sxm5wNvfs27xtO6I+wMCSqpLEyoP5+Bz2OKymu6ldW7cT3txEkq4R3G/kHfBAeQTz2J86GanUNcdncyzGSf57dq4xUW77a44zFefqB3goIUCAPPiZqGt1IcqQIIEH71VpUGepBzG2TEzEmJiAY4mJE+pqNPFAKpCmFOBQB/wBhv79p/wBZ/wDKevazXivsN/ftP+s/+U9e1Gsc+2uPRUxpxTGpUaaempUBVumh99qv3qH36AG6k1let6JmR7u0NbVlRxuZXG8ypUAw0bSTM8DESa1OooLrtWFtXrO5l97tBZSJ2idw28vMxA86rD6Tnf6iXsZ7N6bUaDa6BnuszF/DvVlO0KjH4doHAxDHnNeWaiyyOyPG5GZGgyNysVaD3Eg5ra6r2N11nS71chSRcexu2shg7TMwXAIBiD4ozFZnpxCKxKtuGMKT/wCMzWkZbDKVSuOWJJ7majVAqkrEcEj5VP3X6S/eklufxLx3PrH3qQtdL6ibD71RGJEeLdgekER2pazqL3HDvtMcLHhHng81VCYmV4nnNRZYMSD8uKexpeudTdhwAfPP8KPezl/UWlUshZB4klkDczADHIPrHPlQb2d0ofUIGyFlyPOOB+0Vr0vQaJZ3uOMhec+Z/wBqqfssr+EtTbDBIhFCydyt+cDcuMFUktMx5T9RZ0d9TCOd7K25WyIldpYA5E4kd9xJkiS+tHvAGR9jgRxPl6EVS0Wl/tQ8bDIBm4TMAjailQY4Mn/vVZTeO2WN1loT1DUL1JonqKF6gVyO0CuqpcglQTxJAP0muliwfhVCRwFUEyB4pA5PH85o10PpqX2uKwUuIKyCYUfESB2kgfX0rT67bpNPdvWkthkRmXcIUkCdpK5E8QO9dOHkmOP+uTyeK5Z7eSe0N2zfs70vAuhB2b8MvB8BPxrM8TAPNB9JrE2bHwAI4JB+1cNXcV5eQCfwgAZ3cc55mQAMRiqdRvbTWkyqyQDjsY+1SNtZjeI84OKtJ09DYF5ru1Td92RsJKts3yc5WPLPpVk9BZW1CO6q2nXc8AsGU7dpQ453DmOan3n7VMaGC2v54+x8v5FOyD84H6HzqensKyuxfaUXcBtJ3Syrgg4yw57Vb1XTUtraZruLqb1IQmBuKndmZkHgGncpLoaqg6gcNP0qNFdN0N21C6dnVWdQyOJdHUqXVlI/CQDBj0MULaPwmR2MRP07U5lL0VlhqktRqQqiaH2G/v8Ap/1n/wAl69oNeL+wv9/0/wCs/wDkvXtJrHPtrj0YUjT0hUqNSpUqAp3aH36IXaH36AGX6oWksbw92NyOCoiXKlHVgucCSp+ar5URv0C6ieVAy2J7wMkT2BMA1fjkuWqjyWzG2N70n2kt3m2ltrMYEnDZxB7H0ryr2s6bfsau9Gxdzl1RDK7WMryogxyMZ9Iq8txUhmQSYkEDu0QRJg4bEn4ZmiOuTdce677gQDufMDaMZ4it8sNcxzYZ74rznUPuYmIk5Hke/wC+pJpLjAMtt2U4BCOQT5AgQTRP2i1endgunRYGXuRBdvIDHh7zEkn0zLS7PyF95cL+VIfAFLf8p+NxAB9ayyy9W+M2E29K7TtR224bajGD3BgY+tK3p3YFlR2C8lVYgfMgQK1mrVzc17vt/tNItxdpJBQm0EJkAzAzI53VlbE7LnltWf2wR/r9qmZW/wDDuOkjoLo5tXBif+W8x5xHHrUNPpXediO8ZOxWaB5mBiiPXzA0rAkEaS2QQSCIZ4IIyI86N3kA1N4wA79Od7gGIdrAL47E4J9TSvksmz9Ztl9Lq7lliyMUbgkATzkZFGm9ptS1piLqBgYICAPt7MpOCJwYGJHnWdUVd0d8bSjBBALAi3udjztDdhEyTgAd60tsnCJJW86Trd2mSHwoCOx5LhQXg/i55HNWelX0e4m0k+IieBIUMRJ5MEYrN+zup3IbcBQSWIAxkAAjyBAGPQVqOj2QFtE5bfn/AN0//qPpWut4bY71noZv0Mv0T1FDL9cjsANT15tFfS4szPiXG24kgOhkYOQQfNfvX9qvaR9UEF1GtW4B2HcZV4KM2PEJUkEDBwM+IQ6tctpqbBukbA4L7l3DZIDEzxmBPaZrW/0hdRtW9ObQ92966VZjtG7Yv4ieIMKmfwsfKrvUZ/l4+x7dqjVq6incEWCslskyswCJ454+VVquVNjQaVLi6EFEDN+V7gGRXlfcABoYHG7G4R86tuU99q7aPua7pxEvvm7KO6K7HxmQQJJ4isvZ07OTtWYEnjAmJJOAOBn0rtb6ddZti23LxO0Kd0ZyByRg/as7hObtcy/xP8ndEfepQsoVQwKsTvRjCnMALz6iinWdI7WtGFRiRYIIA4PvGMN+bgg5oVotCXcptaQCYRdxkR2HbuflXXT6RYJW3ceZVfCvxZDFQDLQCMCY708pzLvoTppOluH1miRSG/J7AS46mVDbHJAbgqCQs8E1jdhXwsCGGCCIIPqKsJ0+46M622ZE+JolV/WPb61XFPHGTosstlUxURTitENB7Df/ABDT/rP/AJL17Ua8V9hf7/p/1n/ynr2qsc+2uPRjSFPSqVGinpTSoCndodfojdoffoAbfoNrVHJ5LhQc4JDMPpKx9fM0Zv0E1uq924btIgdy0+HH3rTxfUZ+X5qN/plwkOyAkAfi8pAgEQxjzj69y3Sr6ojK5bduJyJiYJH0qD9Y3AAIEI5kkweMYH8ms37Q9au2XVUKEkHDKSw4g4IiTIAj8J8xXRllxy5scZelb206dbRlu2yo3k7k4JPdlH8Y8xQG31F1t+6GzYW3FTbRpYCAxJEkxioa667vvd97kZ77fIYwO+BxVnoyW2Z0e4ltmSLbuJRWDqTukeHcoI3Riawys1tvjLOHEdTve8N3eS7LtYkKQybQpQoRtKQANsRgYxSFx7vhAQAePaqoikjEkAeI5gTPJjk0f6TpWTXadL1q0VZSDCo9u6u24wcYImdvEfCOOKA9O1LBy3hJKPO5EYT7tiCFK7QQQCIHapll6VZZ2tvq7hgu9om2gW2AlkkAE7VWEwFMn+HNVNP1G6jO6v43BDsypcZg3xAlwee/nR3pWkW8lr8mey11B/a6a6EVrzB2bdbZhDyu0RI27aq2AR05yVG9dUqSUXeFNpiykkbh4hx50cdaPkDnvjnjj9w4Hyqw7gAGEkjgAY/WPJPp/wCKrqJIkx6+XrivROj+zaIilVW6zCd52kGfzA2AP31ets7l6qHRNEosKwaXZtxYEd1ggHgwcH9JT5UY6dcdbqKQTvIyQQNvLMs4kkLkeUd67JqEtNsdAu0xIEhY+WBnGKuW+qpddFQ7vEDmRHmc9+0VrqzDTLcuW1+/Q3UUT1AobfrkdjD+1Ri6kruUKxYZyMTxx8/OKE6bpd26HuadGZU8RCsGdQIkwILR6DitF7Q9RW0LibAz3bexGJxbG4bzHclTjyPnWOS6y/CzLPO0kT84rbH5Y5fSO8kkzzyR3H07VGlSoIV6PqbaJdW/bd7NworsjBXtuN7W2ScE4uYODH3NdI0YTX6Nku++tXEc2mK7WCrbvKUZezKwI/h5DMafVOisq/C8F1KhlbbO2QR2k/epNrbm9HDFWSAhQBNgBJAQKABkk+pJnmpuO9rl059N+IfqP/lPP7po1obthks27++w6S1m+kMu03HYe8TmA+6GGcelDL+vd90hAW+MpbRGbMncUUcnkDB70revuAIMEIPBuRG2eIt4dw/OJPlNFx2JdCa2Gt2OoW3gstyyrRwSt5wSPTvQKrS665tdJkO03JVWLtuLSzESTJJ571VinjLN7LKy60VSFMKtafp124jOltnRCA7KJCk5E1aRb2F/v+n/AFn/AMl69qmvI/6N9MjaoO7kMg/s1H4nZWUz6BN2PMjyz65FY59tcej01PTVKipUqVAVLrUOvmiF2h9+gBuoNB7ltTdRiASh3LuEgGRkjvFGNRQq/neB8W2V88Tj5GYPlj1rTxfUZeb5rl1DSqjFByEkGfEMZJPqQefKsdqld77yPG0sSxCqqxiS2Ijk+oA7zsGtO91ncCMjLAkiT2HAknE8fas37R2yl+SFCOwKeBGEKqh2C58O4t4T6xFb+XmcMPFxeQI3SRGAPIAD7/vrpptSFR0ZAwfbmYZdpJBUwQDnuDiR6ha+d7btkj/DChCIkFduMjPnVespzG17X7PU3RrTINvuSSgY7ssxZ9xAEzMQIx6ya4tfQFiiFSwI8T7woIIO0bQeJEknB88itXVbcxAYkzEAmTHbzpesh7tWk1yhrbm3LWtu2GKhth3KXEEnP5pXGPWurdWJsPaZCxuXvfM++DvgjC7Y25OJ78ihrc9/rzTU/WFunrd+x+o1KWwXVfcn4C5IeP0AJ8Hzj0xWEFH9L7RXCIutuEQrFRiO0AR5dqcTZtpurBnHvEGXcKSM7e2PoZ+p86fpT/2toeKd8y0zyTBPBIEDBOSR2iifszo7ep0j+5uL79XLOGlgJwgOMSBIInMg+Q4aPo99LylwSEYE4UCPwyR8QmIye1azOXGsfWzKD180N1BolfoZfrjdzB+2fxp+qf4is5Wi9s/+Yn6p/iKztbY9Msuyp0aD3+lRp6EuvvB5v9x/tS956t9/WuVKjR7dhc9Wj59+/wC+kbg82+/3rt+RtuVAj7mQMo8x3In8OG+1VriwxGRBIzzg96JZTssTFyO7ff1FRdh2njvUKenpKaoSCQMDn0nirOmvXbQLI7IHENsaJE4DAcj54qvYeDn4Thh5jmP54Nav2FGmOpVr9xUS2rNtuBSGIB2gjggSWnsbaCKm2xUmzeyOnKa/TB0uI8szC4I3KbVwK6yAYJx/rzXr81luta23c6hoQrIXG9u+/Y9lyob82cttaO311BqMrurxmoeaYGmFPUqPFKmmnoCldoffohdah980AMv0M90j3BufYRlWkgCOST5R29RRTUGqultK5uIRkBXUyQQUYgnH6LMf+mr8f1Gfl+afTWULAbiR2LAqGzEjGR9a7anoSXbivdRXKrCAwVyRJjg9ufWuNnTlVPvXEhiSHuAOrZCbQ3JggciIPpU+rdRdLSAK0EFWdVLnHxABcxlc/MV05a1w5sbd8hXV+naVUc+5SUVmJUBQIUmJWJ48686Q+laDrXX1dDbtTtb4mIIkTMAeXmTWerOtpt0956CrtnVwiCXBRnMhVYeMKIAJz8Jn50OJqQY1GUlVLp0vuC7lV2gsSBztBMgT3gYqJfHFRJpU9Fs9XentulCm4HPyPE1RqzpdWUBhQSe5mqJsfYb2nTQ3HtXRttO4JbxNsbbE4mQfCP31tese0Fp7lizYdXLuGuMrKVCEMqrIOXZtrAeST5T577D+z9rXXLou3HV0VXRVWQ43Q+8/m/CIBB8WDiruo6Qml6miIrbCyOqE5TcxQSw5gmR6GD6xwf8Arb6ihl+ieoNC9QaybMF7Y/GnyP8AEVnq0Htf8afI/wARWfrbHpll2alSpVRJo8dgfnU/e/oj+f5/fXGnpaAlcvqfdlWK7LIQk2wwkMx4M4gnPmPrVbV3kZ3KIEUsSo4gSMRwOOBxMVxFw8TjyqJNRMJFXLaZfEQP9eZqFKlVIOKPezPTX1Li2iFmDSzATtQwrEnyicTmTA5ICWrm0z9O/wDEfzzXqX9Gdq1atXtSbyBXcIUC8Mo3AgyTkMfDkYn0CvPBy65X9H7DLpr9nUW3LlHYXd5HDIVVkAHZsQex9M6g0MPX0a+ltWkP22sDIBbkxiB/CiZNTnjZeV4WWcFSpt1PNQs8UqjNPQFK7VC+Kv3jVC8aAGX6o6JbfvCz3vcuCotv+HeZ8LDyMd/l3q9qTQhbzIzMtprhEEBRMHIBI8uc9qvx/UR5PmjGvQu+4CD+JlJ2k4HhQqfDjcJkgk84obrOo7W90+zYqhUIJwOX5ySTEk/mjFXbN2+8DYqYzuEkeo2MxP7NZ/reiv3LuwMFAXwk+JXbuA3Cn0In0rpu9ajlmt8h2u6dba5vtkMTghRI3TyDwT8u/rQ3rKuigNZZATh3Xn0U8D+NG9NZvqqk2yI7ECZHOAc58uau9a1Nx9I6+4d5KkY8SEMDJXlhjmPOcVnprsPOpsabT+BkZ2XgQWJ/S7/MHjisvatAqXcnv9fX5zR/T9Qtuq2r1raD4QSu3a34TBzPrPaor0FzbWWUEDCkc5mTiMyflIHzm3fRya7Ben9Pe80LAA5JmB5DHJ9Kv9S9nnsp7xnTbMCZUsfJRmTyfoa2Xs17NNbtl38LP49gz7uRhSTyYicc1mfbLp19HV3drlvIQkAbCcldowJjkcxntVF7c6ZqlTV3e2EBDTv7AEQP1vMx5Utm7dL6jc09xbtlyjrxHBHdWHDKcYPp6Ud0fUHu9QtXLt0M7upcpIUQCEtqPzcAfXzE0GTrFxbH5OoRULFmIQB2J/OfvAwPIUT6Fbsf8K4f+3GrVWQ8lCQVYfo9vnSvQ/L03UUK1JovqaEakVi3YL2tPjT5H/Ss/R/2s+NPkf4igFbY9MsuypUqVURwYqfvT6fYVzpVITLkiO3yFS96fT7CudKgJMxNEen+7ddjKobzPJ+tDWUiJBEiRIIkeY861fS/ZtvcLdMb3korfDEArOME5zHlVFbpR9nmdNSfd22urBV1X80wZniQQCJImO01qbtpUZtoAYjcRG0mMCfXP8Kj7Na8qhtm2qOjHcm2N2cMCOe0n/Qir1iyru7sSN5Phg4zMT/PNXhxdsfJbeHP2f1I/KUQGYc/fYT/AK1vjWd0OlQ3kfG8H/qOCDzkitEVrLzXeTbwTWJpp1pAU9YtypU00qAp3aH3zV+7VC/QAvU0P0WnLuxBYbSpIUA7l8W4HIImORNENT3rj0IP727t+Jre1J437g6D6hHH1jvVeO6yiPLN41a6lrrrbCFKo5JDdlGxSqNt+FiSRGDgkYqx0xrzqbdwqouLtVDO4xPjVsxHgg+Zq7ptaLoDJbaXDHaVHhYGLlu5u8OG+4II86q6O7p0e467Peovja2HKWwT8KljDuewUcxNdFrk0of1Y6OC/inJJABgfDIBIORBjv2FUdTpWkln2JgZIz2Aghs8ZgfWK0Vy8i2xEiSWAYs5Cyqrk5MmT34NAerl1GCRBLSpweRtJECDtXPPiMwKqXku4rpbRnRbyowkNbuCFBbtPGQTH2NWeoop3JAwM5iTztnynmgllW3Hc5dYfaB5AHlYhSOI7mil5SYk5fdkf9Wfkcfc0/Xd4Htqcuq9Y1Cps3iD+aJJEd2YA+gANcuoI+p0zohXeE3sGEl0B8RRT+MczI4881T1NlmFtpwqRyRInxGOMGfpFK0LrOnuWIYgruUhSAwCjbPeCT6VWWMsskRjb7S1x9lvYu3qVdrpuWwsBGG0q7dw05x4TA2kh5+Qf2m6W+jvG2+dw3IywFdeN0Ak4z4TPAzHJFekdR6fba6m63b3EuE2XAgVgqsytEzOGAmBmKqXLes1L3Lke/KKdzm4u7YVEi2pIKjb2AMSfMk8vr+3Zv8AQP1RbAW0tmSwT+1Yknc5zgcKBwAPLOaXQf7zp/8A61v/APMU+luaX3Li4twXYJtshUoT2DK34fUZEYqHRGjU6ef8ZPr4xToj2PUUJ1NFtRQnUisWzz/2r+NPkf8ASgVHfaz40+R/iKBTW2PTLLsq7aXTPcdURS7t8KjkwCTH0BrjNW+ntdRhetK592Z3qrEKY7kcGPWmlUp1IkT50RS2j3FuX3223uk3SoJZAW3MYAJzJgxzOK9N69f6cmhuWrT2ER0VgbYR3uMsEBRyXMAb24me1K8HOXmep6aOUPJAjnkgCPvV+37Mam6GXT6d32RvYwsEjcAFYgkxmFBMEeYrWf0W9FR0/KXbe6OQiBsW4Ug71BzO6QGGIBFeganqyWw/dlUHaOe8T+/7Uc/gtydvLtFYVdOLN5SyGQEaAxJMyO6wSTPOBE80Ss60uCquQApA2/g/CCFIgn5+fBpWCzm5cwbhfaDBOxS7KfD3+GSRnNUOn2NjMwDQzRmeInwgCCJk7pzIgTit5JIwt9qLXtBaA3siuZmYJLYiImIEc4jvXXS9NsKUvPuyJK7mVTjdBA5jufSIqm+ldwpLEWkYl4JO79CB+E4kntxRXVumoS2LbogYblLBiAVYb1iIcHxd/Xg0a0V70u9Lu2GdLmxUe4zKgSPwcqTGcZgEeuRR8mhGk0K2zbwGbdgttESDOxVkLjG6ZjAgUXrm8vbp8PVMaaaeKaKzbGpU8UqAp3BVK8laI9KHG8fb/vXN+jAZNwAeq/8A9UthlLliaqN085gsJiYJExxMeVbP+pl/xVz6DyP6XkD9j5Uj0RczcGOfDx8/FinsMTd6aXBDszBm3MGYsC0QGM8tHfmuq6JwoXe+0cLubaPkJgVr7vRgoYhwSomNvbMd8cGh/uPSjdLUAW0TN8TuYECWY48s040J43NHluNHhYpe4p7o1Gd/qhPze8/XifnFJelKBgYHA8szj71ohYpe4o3RqM+nSlGAIHMds8/eu9vpgxzjjJx8vKjQs11W0KPa/ses/QemiJBBdyG5BdiD5yCc0y9Bsgf8tP2R/tRdUqcUjBf6js/4afsr/tU06bbTKogI7hRRUiubrQAy8lU7mmmjTWqh7mgM3e6OjGWUH5gGuf8AUVv8xf2RWoNin9x6UBlv6it/4a/sj/au69LAXYBCT8I+H9nitD7in9zQGYHQrX+Gn7K/7Uh0G1/hp+wv+1ab3NP7mjYZ7TdMW2S1sbCcEp4CR5ErBia6toy3xMx+bMf4mjnuadbNGxoFs9KUcCPl85/n5VaHSUb4hPbOf40UW2K7qtPdLUDU6WgEBYHl2+1dF6cg4H7+cVfipUbo1FbT6VFOAJqwTSFI0jMTTzTGkKAUU9PSoDvqGsudzWtxiJMTBEGM1ysrphui0fF8U5kSDGTxIGKVKkaX/DwR7rBOfX4hnP6TfeosNMf/AJRx/uG8/OlSoCdtrKKy2027hBj0BA71U20qVMjxSilSoBRTAUqVAPFPFKlQD0qVKgFNKKalQDRT7aVKgERTBaVKgHK00UqVAOFpgKVKgH20opUqAcinFPSoBppA09KgGFJqelQEaVKlQEpp6VKgP//Z" alt="creative-service" class="img-fluid">
                        <hr>
                        <h2>Brithday</h2>
                        <p>a website about a birthday theme using boostrap 5. the appearance is attractive and easily understood by the user himself. Simplify and reduce the risk of waste from paper printing invitations.</p>
                        <br>
                    <div>
                    <a href="https://github.com/alifprayoga13" class="btn btn-secondary"
                    target="_blank">Read More ....</a>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card service-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTQ3vfS4BFP2NC93_yba20dvGPAfKHXqhepg&usqp=CAU" alt="webdev-service" class="img-fluid">
                        <hr>
                        <h2>Wisuda</h2>
                        <p>we are make your Wisuda ceremony invitation this specially for you.Thank you very much</p>
                        <br>
                    <div>
                    <a href="https://github.com/alifprayoga13" class="btn btn-secondary"
                    target="_blank">Read More ....</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</div>
</section>
    <!-- Section recent Project -->
    <section class="section-head section-recent-project text-center" id="portfolio" data-aos="fade-down">
        <div class="container">
            <h2>Product</h2>
            <p>Description This Product</p>
        </div>
    </section>
   <section class="section-recent-project-content">
             <div class="text-center">
            <div class="swiper swiper-portfolio p-0 px-lg-3 py-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-aos="fade-up">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/random/pernikahan.png');">
                            <div class="card-body">
                                <small>Creatif Design</small>
                                <h5>Wedding Invitation</h5>
                                <div class="divider"></div>
                                <p>sebuah website tentang tema Pernikahan  dengan menggunakan boostrap 5.
                                     tampilan nya menarik dan mudah dipahami oleh user sendiri.
                                     mempermudah dan mengurangi efek resiko sampah dari undangan cetak kertas.</p>
                                <a href="https://www.youtube.com/channel/UCeEOsRKWZkSlXs2_1Eb-QvA"
                                    class="btn btn-gr-yellow" target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="30">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/random/wisuda.jpg');">
                            <div class="card-body">
                                <small>Creatif Design</small>
                                <h5>Wisuda Ceremony</h5>
                                <div class="divider"></div>
                                <div class="tech">
                                    <div class="tech-logo">
                                        <img src="img/random/logo.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/logo/bootstrap.png" class="img-fluid">
                                    </div>
                                </div>
                                <p>sebuah website tentang tema wisuda dengan menggunakan boostrap 5.
                                     tampilan nya menarik dan mudah dipahami oleh user sendiri.
                                     </p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="60">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/random/Beranda.png');">
                            <div class="card-body">
                                <small>Creative Design</small>
                                <h5>UI/UX Beranda</h5>
                                <div class="divider"></div>
                                <div class="tech">
                                    <div class="tech-logo">
                                        <img src="img/logo/bootstrap.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/icon/ic-xd.png" class="img-fluid">
                                    </div>
                                </div>
                                <p>sebuah desain website tentang tema Pernikahan. menunjukkan tampilan beranda dari website tersebut.
                                     tampilan nya menarik dan mudah dipahami oleh user sendiri.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="90">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/random/Login - Desktop.png');">
                            <div class="card-body">
                                <small>Programming</small>
                                <h5>UI Login</h5>
                                <div class="divider"></div>
                                <div class="tech">
                                    <div class="tech-logo">
                                        <img src="img/logo/bootstrap.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/icon/ic-xd.png" class="img-fluid">
                                    </div>
                                </div>
                                <p>Tampilan dari ui/ux halaman login dari sebuah website undangan pernikahan.
                                     untuk framework nya sendiri menggunakan boostrap 5.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="120">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/random/Register - Desktop.png');">
                            <div class="card-body">
                                <small>Programming</small>
                                <h5>UI Register</h5>
                                <div class="divider"></div>
                                <div class="tech">
                                    <div class="tech-logo">
                                        <img src="img/logo/bootstrap.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/icon/ic-xd.png" class="img-fluid">
                                    </div>
                                </div>
                                <p>Tampilan dari ui/ux halaman login dari sebuah website undangan pernikahan.
                                     untuk framework nya sendiri menggunakan boostrap 5.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/blogs-laravel.jpg');">
                            <div class="card-body">
                                <small>Programming</small>
                                <h5>Laravel Blogs</h5>
                                <div class="divider"></div>
                                <div class="tech">
                                    <div class="tech-logo">
                                        <img src="img/logo/bootstrap.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/icon/ic-laravel.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/logo/sass.png" class="img-fluid">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow" target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="30">
                        <div class="card recent-project-item my-3"
                            style="background-image: url(https://cdn.dribbble.com/users/4952119/screenshots/15023230/media/df819ed590bfba99fb6defec49ea2f25.png);">
                            <div class="card-body">
                                <small>Programming</small>
                                <h5>Travel Website</h5>
                                <div class="divider"></div>
                                <div class="tech">
                                    <div class="tech-logo">
                                        <img src="img/logo/bootstrap.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/icon/ic-laravel.png" class="img-fluid">
                                    </div>
                                    <div class="tech-logo">
                                        <img src="img/logo/sass.png" class="img-fluid">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="60">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/olshop-IG.jpg');">
                            <div class="card-body">
                                <small>Branding</small>
                                <h5>IG Online Shop</h5>
                                <div class="divider"></div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="90">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/zdesign.jpg');">
                            <div class="card-body">
                                <small>Branding</small>
                                <h5>IG Design</h5>
                                <div class="divider"></div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="120">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/zanzancode.jpg');">
                            <div class="card-body">
                                <small>Branding</small>
                                <h5>IG Programming</h5>
                                <div class="divider"></div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/github.jpg');">
                            <div class="card-body">
                                <small>Other Site</small>
                                <h5>Github</h5>
                                <div class="divider"></div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="30">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/Dribbble.jpg');">
                            <div class="card-body">
                                <small>Other Site</small>
                                <h5>Dribbble</h5>
                                <div class="divider"></div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-delay="60">
                        <div class="card recent-project-item my-3"
                            style="background-image: url('img/banner/codepen.jpg');">
                            <div class="card-body">
                                <small>Other Site</small>
                                <h5>Codepen</h5>
                                <div class="divider"></div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta minus aperiam et
                                    vitae
                                    animi saepe. Numquam fugiat recusandae vitae voluptatibus, laboriosam itaque.</p>
                                <a href="https://github.com/alifprayoga13" class="btn btn-gr-yellow"
                                    target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next d-none d-lg-block"></div>
                <div class="swiper-button-prev d-none d-lg-block"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
   
    <!-- section-contact -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row list-first">
                <div class="col-12 col-md-2 col-lg-3 mt-0 mt-lg-0 item brand">
                    <div>
                        <div class="align-items-center mb-3 text-center">
                            <img src="img/random/Logo-Mini.png" class="img-fluid me-6" alt="logo">
                        </div>  
                         <h2 class="text-center">D2</h2>
                        <p>Web developer idola</p></br>    
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-3 mt-0 mt-lg-0 item explore">
                    <div>
                        <h2 class="text-center">Rasendriya'22</h2>
                        <br><p>Politeknik Negeri Malang</p></br>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-3 mt-0 mt-lg-0 item contact">
                    <div>
                        <h2>Elements</h2>
                            <ul class="nav flex-column">
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">About</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">home</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">Property</a>
                            </li>
                            </ul>
                    </div>
                </div>
                 <div class="col-12 col-md-2 col-lg-3 mt-0 mt-lg-0 item contact">
                    <div>
                        <h2>Support By</h2>
                            <ul class="nav flex-column">
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">PT INDOFOOD</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">Web Programming unpas</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">Bulma</a>
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row list-secound">
                <div class="col-12 text-center">
                    <small>2021 © Copyright Boostrap • All rights reserved • Local Repositories</small>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll To Top Button -->
    <button class="scroll-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Pre Loader -->
    <div class="pre-loader">
        <div class="shape">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="shadow">
            <div class="shape-shadow"></div>
            <div class="shape-shadow"></div>
            <div class="shape-shadow"></div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/portfolio-2.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"
        integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        let swiper = new Swiper(".macbook-img", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".section-works-content .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".section-works-content .swiper-button-next",
                prevEl: ".section-works-content .swiper-button-prev",
            },
            loop: true,
        });

        let swiperPortfolio;

        const sizeMinLg = window.matchMedia('(min-width:992px)');
        if (sizeMinLg.matches) {

            swiperPortfolio = new Swiper(".swiper-portfolio", {
                slidesPerView: 5,
                spaceBetween: 30,
                slidesPerGroup: 5,
                pagination: {
                    el: ".swiper-portfolio .swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-portfolio .swiper-button-next",
                    prevEl: ".swiper-portfolio .swiper-button-prev",
                },
                loop: true,
            });
        }
        const sizeMaxLg = window.matchMedia('(max-width:992px)');
        if (sizeMaxLg.matches) {

            swiperPortfolio = new Swiper(".swiper-portfolio", {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerGroup: 1,
                pagination: {
                    el: ".swiper-portfolio .swiper-pagination",
                    clickable: true,
                },
                loop: true,
            });
        }
    </script>
    <!-- Vanilla tilt.js -->
    <script src="js/vanilla-tilt.min.js"></script>
    <script>
        const sizeMd = window.matchMedia('(min-width: 992px)');
        if (sizeMd.matches) {
            // Tooltip
            let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            //It also supports NodeList
            VanillaTilt.init(document.querySelectorAll(".recent-project-item"), {
                reverse: false,
                max: 25,
                startX: 0,
                startY: 0,
                perspective: 1000,
                scale: 1,
                speed: 2000,
                transition: true,
                axis: null,
                reset: true,
                easing: "cubic-bezier(.03,.98,.52,.99)",
                glare: false,
                "max-glare": 0.3,
                "glare-prerender": false,
                "mouse-event-element": null,
                gyroscope: true,
                gyroscopeMinAngleX: -60,
                gyroscopeMaxAngleX: 60,
                gyroscopeMinAngleY: -60,
                gyroscopeMaxAngleY: 60,
            });
        }
    </script>
</body>

</html>