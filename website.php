<?php
session_start();
if($_GET['email']){
 $_SESSION['pemail']=$_GET['email'];
}
$email= $_SESSION['pemail'];
$c=mysqli_connect("localhost","id18287020_cureit123","M*{YG]n~[/3y1]lt");
$db=mysqli_select_db($c,"id18287020_cureit");
$q="SELECT * FROM user where email like '$email'";
$r=mysqli_query($c,$q);

 

?>
<!doctype html>
<html lang="en">
    <style>
    </style>
<head>

    <!-- Required meta tags -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="website.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>-->
</head>

<body>
    <?php include 'head.php';    
    ?>
    <div class="container-fluid main " >
        <div class="h1 offset-1 " style="padding-top:30px"> <?php echo "Welcome ";
        while($row=mysqli_fetch_array($r)){
    echo $row['name'];echo ",<br>";}?></div>
        <div class="slide-text3 h3 offset-1 ">        
    TOTAL HEALTH CARE SOLUTIONS</div>
        <div class="slide-text2 h1 offset-1 ">Your Most Trusted<br> Health Partner</div>
    </div>


    <div class="container my-4">
        <div class="h2 offset-5 slide-text3  py-4">About Us</div>
        <div class="h1 slide-text2 offset-2  my-4 square1">The Great Place for Medical Hospital Center</div>
        <div class="offset-2 square my-4 h4 square1">We provide the special tips and advices's of health care treatment and high
            level of best technology involve in the our hospital.</div>
    </div>
    <div class="background1 container d-flex my-4 borders1 col-lg-12 col-12 col-md-12 col-sm-12">
        <div class="small">
            <svg enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="85"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m509.82 327.343-21.991-27.599c-1.896-2.381-4.775-3.768-7.82-3.768h-7.712l-74.353-93.385c-1.897-2.383-4.777-3.771-7.823-3.771h-22.862v-22.765c0-19.014-15.43-34.483-34.396-34.483h-97.678v-4.552c0-28.428-23.127-51.555-51.555-51.555s-51.555 23.127-51.555 51.555v4.552h-97.678c-18.966 0-34.397 15.47-34.397 34.484v251.241c0 5.523 4.478 10 10 10h22.279c4.628 22.794 24.758 39.999 48.815 39.999s44.186-17.205 48.814-39.999h250.37c4.628 22.794 24.757 39.999 48.814 39.999s44.187-17.205 48.815-39.999h24.093c5.522 0 10-4.477 10-10v-93.722c0-2.264-.769-4.461-2.18-6.232zm-124.52-108.523 61.432 77.156h-79.474v-77.156zm-233.226-81.799c0-17.399 14.155-31.555 31.555-31.555s31.555 14.156 31.555 31.555v4.552h-63.109v-4.552zm-132.074 39.035c0-7.986 6.459-14.483 14.397-14.483h298.464c7.938 0 14.396 6.497 14.396 14.483v241.241h-217.35c-4.628-22.794-24.757-39.999-48.814-39.999s-44.187 17.205-48.815 39.999h-12.278zm61.094 281.24c-16.44 0-29.816-13.458-29.816-29.999s13.376-29.999 29.816-29.999 29.815 13.458 29.815 29.999-13.375 29.999-29.815 29.999zm347.998 0c-16.44 0-29.815-13.458-29.815-29.999s13.375-29.999 29.815-29.999 29.816 13.458 29.816 29.999-13.376 29.999-29.816 29.999zm62.908-39.999h-14.093c-4.628-22.794-24.758-39.999-48.815-39.999s-44.186 17.205-48.814 39.999h-13.02v-101.321h107.932l16.81 21.096z">
                </path>
                <path
                    d="m183.629 66.808c5.522 0 10-4.477 10-10v-12.104c0-5.523-4.478-10-10-10s-10 4.477-10 10v12.104c0 5.523 4.477 10 10 10z">
                </path>
                <path
                    d="m236.764 94.969c1.934 1.829 4.404 2.736 6.871 2.736 2.652 0 5.299-1.048 7.266-3.127l10.626-11.229c3.796-4.011 3.621-10.341-.391-14.137s-10.341-3.621-14.137.391l-10.626 11.229c-3.796 4.012-3.621 10.341.391 14.137z">
                </path>
                <path
                    d="m116.358 94.579c1.967 2.078 4.613 3.126 7.266 3.126 2.467 0 4.938-.907 6.871-2.737 4.012-3.796 4.187-10.125.391-14.137l-10.627-11.229c-3.796-4.011-10.126-4.187-14.137-.39-4.012 3.796-4.187 10.125-.391 14.137z">
                </path>
                <path d="m90.896 216.592h184.372v113.287h-184.372z" fill="#b2f0fb"></path>
            </svg>
        </div>
        <h3 class="offset-1 py-3 slide-text2">Emergency Help</h3>
    </div>
    <div class="background1 container d-flex my-4 borders2 col-lg-12 col-12">
        <div class="small1 py-1">
            <svg enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="85"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m351.524 124.49h-37.907v-37.907h-44.657v37.907h-37.906v44.657h37.906v37.907h44.657v-37.907h37.907z"
                    fill="#a4fcc4"></path>
                <path
                    d="m291.289 279.415c73.114 0 132.597-59.482 132.597-132.597s-59.483-132.596-132.597-132.596-132.598 59.482-132.598 132.596 59.484 132.597 132.598 132.597zm0-245.193c62.086 0 112.597 50.511 112.597 112.597s-50.511 112.597-112.597 112.597c-62.087 0-112.598-50.511-112.598-112.597s50.511-112.597 112.598-112.597z">
                </path>
                <path
                    d="m502 267.736c-32.668 0-59.245 26.577-59.245 59.245v13.605h-240.266v-19.048c0-23.625-19.221-42.846-42.846-42.846h-90.398v-17.584c0-32.668-26.577-59.245-59.245-59.245-5.522 0-10 4.478-10 10v275.914c0 5.522 4.478 10 10 10h49.245c5.522 0 10-4.478 10-10v-39.327h373.51v39.327c0 5.522 4.478 10 10 10h49.245c5.522 0 10-4.478 10-10v-210.041c0-5.522-4.478-10-10-10zm-342.356 30.957c12.598 0 22.846 10.249 22.846 22.846v19.048h-113.245v-41.894zm-110.399 179.085h-29.245v-254.623c16.812 4.434 29.245 19.77 29.245 37.954zm20-49.327v-67.864h373.51v67.864zm422.755 49.327h-29.245v-150.797c0-18.185 12.434-33.521 29.245-37.954z">
                </path>
            </svg>
        </div>
        <h3 class="offset-1 py-3 slide-text2">Qualified Doctors</h3>
    </div>
    <div class="background1 container d-flex my-4 borders3 col-lg-12 col-12">
        <div class="small2 py-1">
            <svg enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="85"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m397.886 191.161c-3.545-4.235-9.852-4.797-14.087-1.252-4.235 3.544-4.797 9.851-1.253 14.086 26.684 31.893 41.165 72.339 40.775 113.888-.886 94.681-79.215 172.782-174.608 174.1-48.125.666-93.326-17.479-127.401-51.087-33.708-33.246-52.272-77.526-52.272-124.685 0-59.98 30.361-115.236 81.216-147.809 51.27-32.838 79.187-66.186 93.348-111.507l2.581-8.26 2.58 8.257c9.333 29.869 25.53 55.364 49.516 77.939 4.02 3.786 10.35 3.593 14.136-.428 3.785-4.021 3.594-10.351-.429-14.136-21.713-20.438-35.736-42.471-44.133-69.341l-12.125-38.802c-1.305-4.175-5.171-7.018-9.545-7.018s-8.24 2.843-9.545 7.018l-12.126 38.807c-12.639 40.45-38.072 70.545-85.045 100.63-56.624 36.268-90.429 97.819-90.429 164.65 0 52.553 20.679 101.891 58.228 138.924 37.248 36.736 86.47 56.867 138.888 56.865.941 0 1.891-.006 2.833-.02 51.527-.712 100.087-21.236 136.733-57.792 36.664-36.573 57.12-84.914 57.6-136.118.432-46.301-15.704-91.371-45.436-126.909z">
                </path>
                <path
                    d="m279.576 280.012v-29.712c0-5.523-4.478-10-10-10h-46.783c-5.522 0-10 4.477-10 10v29.712h-29.711c-5.522 0-10 4.477-10 10v46.783c0 5.523 4.478 10 10 10h29.711v29.711c0 5.523 4.478 10 10 10h46.783c5.522 0 10-4.477 10-10v-29.711h29.712c5.522 0 10-4.477 10-10v-46.783c0-5.523-4.478-10-10-10zm19.712 46.783h-29.712c-5.522 0-10 4.477-10 10v29.711h-26.783v-29.711c0-5.523-4.478-10-10-10h-29.711v-26.783h29.711c5.522 0 10-4.477 10-10v-29.712h26.783v29.712c0 5.523 4.478 10 10 10h29.712z">
                </path>
                <path
                    d="m369.497 246.666c51.239-.708 92.983-42.352 93.459-93.223.313-33.486-16.989-62.983-43.266-79.911-21.598-13.914-37.772-29.46-45.4-53.873l-6.143-19.659-6.143 19.661c-7.603 24.331-23.627 39.927-45.19 53.738-26.16 16.756-43.48 45.945-43.48 79.151 0 52.43 43.18 94.848 96.163 94.116z"
                    fill="#ffbdbc"></path>
            </svg>
        </div>
        <h3 class="offset-1 py-3 slide-text2">Best Professionals</h3>
    </div>
    <div class="background1 container d-flex my-4 borders4 col-lg-12 col-12">
        <div class="small3 py-1">
            <svg enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="85"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m181.049 229.112-76.87 76.971c-14.045 14.07-14.045 36.883 0 50.953l50.881 50.974c14.045 14.07 36.815 14.07 50.86 0l178.611-178.899h-203.482z"
                    fill="#e2c4ff"></path>
                <path
                    d="m495.277 81.339c-10.57-10.578-24.625-16.403-39.574-16.403-3.325 0-6.605.288-9.813.853 3.065-17.397-2.103-35.975-15.505-49.387-10.57-10.577-24.624-16.402-39.574-16.402s-29.003 5.825-39.573 16.402c-21.816 21.83-21.816 57.352 0 79.182 2.71 2.712 5.648 5.111 8.772 7.18l-18.689 18.716-52.105-52.184c-3.902-3.907-10.233-3.912-14.142-.012-3.908 3.902-3.914 10.234-.011 14.143l18.64 18.67-196.602 196.922c-17.56 17.593-17.902 46.002-1.029 64.017l-16.422 16.452c-3.896 3.903-3.896 10.226 0 14.129l12.383 12.406-88.75 88.913c-3.901 3.909-3.896 10.24.013 14.142 1.953 1.948 4.509 2.922 7.065 2.922 2.562 0 5.125-.979 7.078-2.936l88.724-88.887 12.357 12.38c1.876 1.88 4.422 2.936 7.078 2.936s5.202-1.056 7.078-2.936l16.396-16.426c8.547 8.028 19.644 12.432 31.418 12.432 12.28 0 23.825-4.79 32.506-13.487l196.588-196.91 18.617 18.648c1.953 1.956 4.515 2.935 7.077 2.935 2.557 0 5.113-.975 7.065-2.923 3.908-3.902 3.914-10.234.011-14.143l-52.155-52.24 18.732-18.758c2.054 3.126 4.453 6.09 7.198 8.836 10.57 10.577 24.624 16.402 39.573 16.402s29.003-5.825 39.574-16.402c21.817-21.831 21.817-57.352.001-79.182zm-129.892-50.8c6.792-6.796 15.822-10.539 25.426-10.539s18.635 3.743 25.427 10.539c13.407 13.416 13.997 34.875 1.773 49.001-.638.583-1.266 1.183-1.881 1.799-.616.617-1.214 1.245-1.795 1.882-6.533 5.671-14.791 8.766-23.524 8.766-9.604 0-18.634-3.743-25.427-10.54-14.025-14.035-14.025-36.873.001-50.908zm-239.787 380.799-24.74-24.786 9.327-9.344 14.287 14.313 10.454 10.473zm73.244-10.392c-4.903 4.912-11.42 7.617-18.352 7.617s-13.449-2.705-18.353-7.617l-50.881-50.975c-10.134-10.152-10.134-26.672-.001-36.823l196.578-196.898 87.616 87.767zm177.227-244.657-20.619-20.654 24.634-24.669c3.498.676 7.086 1.021 10.727 1.021 3.325 0 6.606-.288 9.813-.853-1.189 6.75-1.139 13.678.151 20.413zm105.062-9.905c-6.792 6.796-15.823 10.539-25.427 10.539s-18.635-3.743-25.427-10.539c-13.407-13.416-13.998-34.875-1.773-49.001.638-.583 1.266-1.183 1.881-1.799.617-.617 1.215-1.246 1.797-1.884 6.532-5.67 14.789-8.764 23.521-8.764 9.604 0 18.635 3.743 25.427 10.54 14.026 14.035 14.026 36.873.001 50.908z"
                    fill="#020288"></path>
            </svg>
        </div>
        <h3 class="offset-1 py-3 slide-text2">Medical Treatment</h3>
    </div>

    <div class="container my-4">

        <div class="slide-text3 h2" style="text-align:center;">Services</div>
        <div class="slide-text2 h1 " style="text-align:center;">How We Works?</div>
        <div class="display  formargin ">
         
         <div class="cards1  borders1 my-4 ">
                <h1 class="borderfont offset-2 col-1">01</h1>
                <div class="slide-text4 ms-5">Make Appointment</div>
                <div class="slide-text5 ms-5">To Make Appointment With Doctor Click On Button Given Below</div>
                <a href="make_appointment1.php"><button class="btn rounded-pill my-2 ms-4 but">Make Appointment &nbsp&nbsp<i class='fas fa-angle-right'></i></button></a>
            </div>
            <div class="cards1  borders2 my-4 ">
                <h1 class="borderfont offset-2 col-1">02</h1>
                <div class="slide-text4 ms-5">Video Consultation</div>
                <div class="slide-text5 ms-5">To Make Video Conferencign With Doctor Click ON Button Given Below</div>
                <a href="page1.php"><button class="btn rounded-pill my-2 ms-4 but">Video Conference &nbsp<i class='fas fa-angle-right'></i></button></a>

            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="slide-text3 h2 offset-5">Services</div>
       
       <div class="display2">
        <div class=" display1">
            <div class="h1 slide-text2 py-4 ">We Cover A Big Variety Of Medical Services
                <div class="slide-text3 h4 my-4">We provide the special tips and advice’s of heath care treatment and
                    high level of best.</div>
                <button class="rounded-pill btn">Know More &nbsp&nbsp<i class='fas fa-angle-right'></i></button>
            </div>
        </div>
            <div class="display">
            <div class="cards  borders1 my-4 ">
                <div class="small1 mt-4 ms-2">
                    <svg enable-background="new 0 0 512 512" class="py-2" height="70" viewBox="0 0 512 512" width="80"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m218.578 512c-29.085 0-52.748-23.656-52.748-52.734v-102.154c0-5.522 4.477-10 10-10s10 4.478 10 10v102.153c0 18.05 14.69 32.734 32.748 32.734s32.748-14.685 32.748-32.734v-116.18c0-20.084 16.343-36.423 36.432-36.423s36.432 16.339 36.432 36.423v59.66c0 24.042 19.567 43.602 43.619 43.602s43.619-19.56 43.619-43.602v-170.256c0-5.522 4.477-10 10-10s10 4.478 10 10v170.256c0 35.07-28.54 63.602-63.619 63.602s-63.619-28.531-63.619-63.602v-59.66c0-9.056-7.371-16.423-16.432-16.423s-16.432 7.367-16.432 16.423v116.181c0 29.078-23.663 52.734-52.748 52.734z"
                            fill="#020288"></path>
                        <ellipse cx="175.83" cy="336.898" fill="#b2f0fb" rx="30.275" ry="30.265"></ellipse>
                        <path
                            d="m317.745 103.718h-10.12v-78.989c0-5.522-4.477-10-10-10h-55.743v-4.729c0-5.522-4.477-10-10-10s-10 4.478-10 10v29.456c0 5.522 4.477 10 10 10s10-4.478 10-10v-4.728h45.743v68.989h-10.119c-5.523 0-10 4.478-10 10v47.531c0 50.532-41.126 91.644-91.677 91.644-50.55 0-91.676-41.111-91.676-91.644v-47.531c0-5.522-4.477-10-10-10h-10.119v-68.988h45.743v4.728c0 5.522 4.477 10 10 10s10-4.478 10-10v-29.457c0-5.522-4.477-10-10-10s-10 4.478-10 10v4.729h-55.743c-5.523 0-10 4.478-10 10v78.989h-10.119c-5.523 0-10 4.478-10 10v47.531c0 83.741 68.149 151.869 151.915 151.869s151.915-68.128 151.915-151.869v-47.531c0-5.523-4.477-10-10-10zm-10 57.531c0 72.713-59.177 131.869-131.915 131.869s-131.915-59.156-131.915-131.869v-37.531h20.238v37.531c0 61.561 50.098 111.644 111.676 111.644s111.677-50.083 111.677-111.644v-37.531h20.239z"
                            fill="#020288"></path>
                        <ellipse cx="421.426" cy="170.539" fill="#b2f0fb" rx="66.659" ry="66.637"></ellipse>
                        <path
                            d="m421.427 202.534c-17.646 0-32.001-14.353-32.001-31.995s14.356-31.994 32.001-31.994 32.001 14.353 32.001 31.994c0 17.643-14.356 31.995-32.001 31.995zm0-43.989c-6.618 0-12.001 5.381-12.001 11.994 0 6.614 5.384 11.995 12.001 11.995s12.001-5.381 12.001-11.995c0-6.613-5.384-11.994-12.001-11.994z"
                            fill="#020288"></path>
                    </svg>
                </div>
                <div class=" h3 slide-text2 insidetext ms-2">Diagnostics</div>
                <div class="slide-text3 ms-2">Every Kind of Diagnostics are provided contact doctor for more details
                </div>
            </div>
            <div class="cards  borders2 my-4">
                <div class="small2 mt-4 ms-2">
                    <svg enable-background="new 0 0 512 512" class="py-2" height="70" viewBox="0 0 512 512" width="80"
                        xmlns="http://www.w3.org/2000/svg">
                        <g fill="#020288">
                            <path
                                d="m311.734 208.706h-25.074v-25.083c0-5.522-4.478-10-10-10h-41.32c-5.523 0-10 4.478-10 10v25.083h-25.074c-5.523 0-10 4.478-10 10v41.33c0 5.522 4.477 10 10 10h25.074v25.082c0 5.522 4.477 10 10 10h41.32c5.522 0 10-4.478 10-10v-25.082h25.074c5.522 0 10-4.478 10-10v-41.33c0-5.522-4.477-10-10-10zm-10 41.33h-25.074c-5.522 0-10 4.478-10 10v25.082h-21.32v-25.082c0-5.522-4.477-10-10-10h-25.074v-21.33h25.074c5.523 0 10-4.478 10-10v-25.083h21.32v25.083c0 5.522 4.478 10 10 10h25.074z">
                            </path>
                            <path
                                d="m330.566 120.217v-51.05c0-5.522-4.478-10-10-10h-14.759v-49.167c0-5.522-4.478-10-10-10h-79.616c-5.523 0-10 4.478-10 10v49.167h-14.758c-5.523 0-10 4.478-10 10v51.049c-37.43 23.089-62.429 64.475-62.429 111.589v270.195c0 5.522 4.477 10 10 10h253.992c5.522 0 10-4.478 10-10v-270.194c0-47.115-24.999-88.501-62.43-111.589zm-104.374-100.217h19.808v2.559c0 5.522 4.477 10 10 10 5.522 0 10-4.478 10-10v-2.559h19.808v39.167h-59.616zm-24.759 59.167h109.133v30.965c-15.03-6.023-31.427-9.338-48.583-9.338h-11.967c-17.156 0-33.552 3.315-48.583 9.338zm171.563 412.833h-233.992v-260.194c0-61.212 49.8-111.012 111.012-111.012h11.967c61.213 0 111.013 49.8 111.013 111.012z">
                            </path>
                            <path d="m181.465 350.096h149.069v102.32h-149.069z" fill="#a4fcc4"></path>
                        </g>
                    </svg>
                </div>
                <div class=" h3 slide-text2 insidetext ms-2">Treatment</div>
                <div class="slide-text3 ms-2">Every Kind of Diagnostics are provided contact doctor for more details
                </div>

            </div>
            <div class="cards  borders4 my-4">
                <div class="small3 mt-4 ms-2">
                    <svg enable-background="new 0 0 512 512" class="py-2" height="70" viewBox="0 0 512 512" width="80"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m318.39 278.299h-39.263v-39.262h-46.254v39.262h-39.263v46.255h39.263v39.263h46.254v-39.263h39.263z"
                            fill="#ffbdbc"></path>
                        <g fill="#020288">
                            <path
                                d="m256 164.444c-75.533 0-136.983 61.45-136.983 136.982s61.45 136.983 136.983 136.983 136.983-61.45 136.983-136.982-61.45-136.983-136.983-136.983zm0 253.965c-64.504 0-116.983-52.479-116.983-116.982s52.479-116.983 116.983-116.983 116.983 52.479 116.983 116.982-52.479 116.983-116.983 116.983z">
                            </path>
                            <path
                                d="m470.541 112.15h-100.492v-50.962c0-20.205-16.429-36.643-36.623-36.643h-154.853c-20.194 0-36.623 16.438-36.623 36.643v50.963h-100.491c-22.86-.001-41.459 18.598-41.459 41.458v292.387c0 22.86 18.599 41.459 41.459 41.459h429.082c22.86 0 41.459-18.599 41.459-41.459v-292.387c0-22.86-18.599-41.459-41.459-41.459zm-34.541 20v36.68h-
                                -50.511v-36.68zm-274.049-70.962c0-9.177 7.457-16.643 16.623-16.643h154.854c9.166 0 16.623 7.466 16.623 16.643v50.963h-24.765v-32.806c0-5.522-4.477-10-10-10h-118.57c-5.523 0-10 4.478-10 10v32.806h-24.765zm44.765 50.962v-22.805h98.568v22.806h-98.568zm-80.205 20v36.68h-50.511v-36.68zm365.489 313.846c0 11.833-9.626 21.459-21.459 21.459h-429.082c-11.833 0-21.459-9.626-21.459-21.459v-292.387c0-11.833 9.626-21.459 21.459-21.459h14.541v46.68c0 5.522 4.477 10 10 10h70.511c5.523 0 10-4.478 10-10v-46.68h218.979v46.68c0 5.522 4.477 10 10 10h70.51c5.523 0 10-4.478 10-10v-46.68h14.541c11.833 0 21.459 9.626 21.459 21.459z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class=" h3 slide-text2 insidetext ms-2">Surgery</div>
                <div class="slide-text3 ms-2">Every Kind of Diagnostics are provided contact doctor for more details
                </div>
                </div>
            </div>
        
        </div>
        
        
    <div class="container my-4">
        <div class="slide-text2 h1 offset-5 square">Our Doctors</div>
        <div class="display col">
            <div class="doctor1  my-4 ">
                <div class="h1 slide-text2 ms-5 formargin1">
                    Dr.Addition Smith
                </div>
                <div class="h3 slide-text3 offset-4">Dentist</div>
            </div>
            <div class="doctor2  my-4">
                <div>
                    <div class="h1 slide-text2 ms-5 formargin1">
                        Dr.Mahfuz Riad
                    </div>
                    <div class="h3 slide-text3 offset-4">Chiropractor</div>

                </div>
            </div>
            <div class="doctor3  my-4">
                <div>
                    <div class="h1 slide-text2 ms-3 formargin1">
                        Dr.David Benjamin
                    </div>
                    <div class="h3 slide-text3 offset-4">Cardiologist</div>

                </div>
            </div>
        </div>
    </div>
    </div>
     <div>
        <img src="plus.png" class="animations"></img>
        <img src="plus.png" class="animations1"></img>
        <img src="plus.png" class="animations2"></img>
        <img src="circle.png" alt="" class="animations3">
        <img src="circle.png" alt="" class="animations4">
        <img src="waves.png" alt="" class="animations5">
        <img src="circle1.png" alt="" class="animations6">
        <img src="square.png" alt=""class="animations7">
        
        <img src="3d.png" alt="" class="animations8">
        <img src="3d.png" alt="" class="animations9">
        <img src="waves.png"  alt="" srcset="" class="animations10">
    </div> 
    <?php include 'footer.php';    
    ?>

</body>

</html>]
