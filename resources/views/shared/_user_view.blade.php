<!--Card-->
<div class="card text-center z-depth-1-half">
    <!--Card image-->
    <div class="view overlay">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
        <a href="#">
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title">{{ $user->name }}</h4>
        <!--Text-->
        <p class="card-text">{{ $user->email }}</p>
        <br>
    </div>
</div>
<!--/.Card-->
