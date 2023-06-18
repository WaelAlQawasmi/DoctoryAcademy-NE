<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php
    
    if ( ! isset($_SERVER['HTTPS'])) {
   header('Location: https://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']);
}

 


    ?>
    <title>Doctory Academy</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="ass/back-login.jpeg">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <script src="https://www.google.com/recaptcha/api.js?hl=ar" async defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- script -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: 'El Messiri', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'El Messiri', sans-serif;
            /*letter-spacing: 5px;*/
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
  

    <!-- Header -->
    <header class="w3-display-container  w3-wide" style="width:100%;     margin-top: 4vh;
" id="home">

    </header>

    <!-- Page content -->


    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-col m6 w3-padding-large ">
            <img src="./vido.php?vId=0000&url=" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
        </div>

        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center">عن المنصة</h1><br>
            <span class="mdi mdi-access-point"></span>
            <p class="w3-large">
            منصة موجهة لطلبة الطب البشري و الأسنان في مختلف الجامعات الأردنيه ، تُعنى بتقديم المحاضرات المحوسبة في مختلف مساقات الطب في مرحلتيه البيسك و السريريَّة ، و تُتيح لجميع مشتركيها متابعة المواد بطرق عملية و مُيسَّرة و تحت اشراف نُخبة من اساتِذتنا و أطبائنا ذوي الخبرة الوفيرة في التدريس مع توفير كامل وسائل التواصل مع كادرنا المميز ، كما و تبقى الإداره على اطلاع كامل بكافه تفاصيل سير العملية التعليمية لجميع الدورات على المنصة .
            </p>

            <!-- <p class="w3-large w3-text-grey w3-hide-medium">
                <span class="material-symbols-outlined">
                    check_circle
                </span> سرعة في الاداء
                <br />

                <span class="material-symbols-outlined">
                    check_circle
                </span> امكانية الوصول للمنصة من الاجهزة الذكية , اجهزة التالبليت,والكومبيوتر <br />
                <span class="material-symbols-outlined">
                    check_circle
                </span> سهولة التعامل <br />
                <span class="material-symbols-outlined">
                    check_circle
                </span> نظام دعم فني <br />
                <span class="material-symbols-outlined">
                    check_circle
                </span> بساطة في التصميم
                <br />
            </p> -->
        </div>
    </div>

    <hr>



    
    <!-- End page content -->
    </div>



    




<div class="container">
    <div class="row clearfix">


   

        
     
    </div>
</div>

<style type="text/css">
body{
    /* margin-top:20px;
    background-color: #f4f7f6; */
}
.c_review {
    margin-bottom: 0
}

.c_review li {
    margin-bottom: 16px;
    padding-bottom: 13px;
    border-bottom: 1px solid #e8e8e8
}

.c_review li:last-child {
    margin: 0;
    border: none
}

.c_review .avatar {
    float: left;
    width: 80px
}

.c_review .comment-action {
    float: left;
    width: calc(100% - 80px)
}

.c_review .comment-action .c_name {
    margin: 0
}

.c_review .comment-action p {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    max-width: 95%;
    display: block
}

.product_item:hover .cp_img {
    top: -40px
}

.product_item:hover .cp_img img {
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22)
}

.product_item:hover .cp_img .hover {
    display: block
}

.product_item .cp_img {
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translate(-50%);
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    -moz-transform: translate(-50%);
    -o-transform: translate(-50%);
    -khtml-transform: translate(-50%);
    width: 100%;
    padding: 15px;
    transition: all 0.2s ease-in-out
}

.product_item .cp_img img {
    transition: all 0.2s ease-in-out;
    border-radius: 6px
}

.product_item .cp_img .hover {
    display: none;
    text-align: center;
    margin-top: 10px
}

.product_item .product_details {
    padding-top: 110%;
    text-align: center
}

.product_item .product_details h5 {
    margin-bottom: 5px
}

.product_item .product_details h5 a {
    font-size: 16px;
    color: #444
}

.product_item .product_details h5 a:hover {
    text-decoration: none
}

.product_item .product_details .product_price {
    margin: 0
}

.product_item .product_details .product_price li {
    display: inline-block;
    padding: 0 10px
}

.product_item .product_details .product_price .new_price {
    font-weight: 600;
    color: #ff4136
}

.product_item_list table tr td {
    vertical-align: middle
}

.product_item_list table tr td h5 {
    font-size: 15px;
    margin: 0
}

.product_item_list table tr td .btn {
    box-shadow: none !important
}

.product-order-list table tr th:last-child {
    width: 145px
}

.preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.preview .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.preview .preview-thumbnail.nav-tabs {
    margin-top: 15px;
    font-size: 0
}

.preview .preview-thumbnail.nav-tabs li {
    width: 20%;
    display: inline-block
}

.preview .preview-thumbnail.nav-tabs li nav-link img {
    max-width: 100%;
    display: block
}

.preview .preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 2px;
    border-radius: 0 !important;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important
}

.preview .preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0
}

.preview .tab-content {
    overflow: hidden
}

.preview .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s
}

.details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.details .rating .stars {
    display: inline-block
}

.details .sizes .size {
    margin-right: 10px
}

.details .sizes .size:first-of-type {
    margin-left: 40px
}

.details .colors .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px
}

.details .colors .color:first-of-type {
    margin-left: 20px
}

.details .colors .not-available {
    text-align: center;
    line-height: 2em
}

.details .colors .not-available:before {
    content: "\f136";
    color: #fff
}

@media screen and (max-width: 996px) {
    .preview {
        margin-bottom: 20px
    }
}

@-webkit-keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

.cart-page .cart-table tr th:last-child {
    width: 145px
}

.cart-table .quantity-grp {
    width: 120px
}

.cart-table .quantity-grp .input-group {
    margin-bottom: 0
}

.cart-table .quantity-grp .input-group-addon {
    padding: 0 !important;
    text-align: center;
    background-color: #1ab1e3
}

.cart-table .quantity-grp .input-group-addon a {
    display: block;
    padding: 8px 10px 10px;
    color: #fff
}

.cart-table .quantity-grp .input-group-addon a i {
    vertical-align: middle
}

.cart-table .quantity-grp .form-control {
    background-color: #fff
}

.cart-table .quantity-grp .form-control+.input-group-addon {
    background-color: #1ab1e3
}

.ec-checkout .wizard .content .form-group .btn-group.bootstrap-select.form-control {
    padding: 0
}

.ec-checkout .wizard .content .form-group .btn-group.bootstrap-select.form-control .btn-round.btn-simple {
    padding-top: 12px;
    padding-bottom: 12px
}

.ec-checkout .wizard .content ul.card-type {
    font-size: 0
}

.ec-checkout .wizard .content ul.card-type li {
    display: inline-block;
    margin-right: 10px
}

.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
}

.card  {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}
</style>

<script type="text/javascript">

</script>














    <style>

        /* Footer */
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #footer {
            background: #7c8792 !important;
        }

        #footer h5 {
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color: #ffffff;
        }

        #footer a {
            color: #ffffff;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        #footer ul.social li {
            padding: 3px 0;
        }

        #footer ul.social li a i {
            margin-right: 5px;
            font-size: 25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.social li:hover a i {
            font-size: 30px;
            margin-top: -10px;
        }

        #footer ul.social li a,
        #footer ul.quick-links li a {
            color: #ffffff;
        }

        #footer ul.social li a:hover {
            color: #eeeeee;
        }

        #footer ul.quick-links li {
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.quick-links li:hover {
            padding: 3px 0;
            margin-left: 5px;
            font-weight: 700;
        }

        #footer ul.quick-links li a i {
            margin-right: 5px;
        }

        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width:767px) {
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }
    </style>
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/DoctoryAcademy/"><i class="fa fa-facebook"></i></a></li>
                        <!--<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>-->
                        <li class="list-inline-item"><a href="https://www.instagram.com/doctoryacademy/"><i class="fa fa-instagram"></i></a></li>
                        <!--<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>-->
                        <li class="list-inline-item"><a href="mailto:doctoryacademy@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>

        </div>
    </section>
</body>

</html>