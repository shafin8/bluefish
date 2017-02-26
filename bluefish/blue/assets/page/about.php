<!DOCTYPE html>
<html>
<head>
<title>  about </title>
<link rel="icon" href = "../img/fish.png" type="image/png">

<style media="screen">
footer{
  position: absolute;
  top: 700px;
  width: 100%;
  margin: 0;
  padding:20px;
  right: 0px;
  margin-right: 0;
  text-align:center;
  background-color:#003447;
  color:#fff;
}
ull {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #003447;
    position: fixed;
    top: 0;
    width: 100%;
}

lii {
    float: right;
}

lii a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

lii a:hover:not(.active) {
    background-color: #335166;
}

.active {
    background-color: #335166;

}

header{
  top: 50px;
  margin: 0px;
  left: 0px;
  margin-left: 0px;
  right: 0px;
  margin-right: 0px;
  padding: 0px;
  position: absolute;


  background-size:cover;

}

photo{
  position: absolute;
  top: 435px;
  width: 100%;
  margin: 0;

  right: 0px;
  margin-right: 0;
  background-color:#003447;

}
#container {

            width: 100% ;
       overflow: hidden;
       margin-top: 0;
       background: white;
             }

             .photobanner {
                 height: 233px;
                 width: 3550px;
                 margin-bottom: 80px;
             }

             /*keyframe animations*/
             .first {
                 -webkit-animation: bannermove 30s linear infinite;
                    -moz-animation: bannermove 30s linear infinite;
                     -ms-animation: bannermove 30s linear infinite;
                      -o-animation: bannermove 30s linear infinite;
                         animation: bannermove 30s linear infinite;
             }

             @keyframes "bannermove" {
              0% {
                 margin-left: 0px;
              }
              100% {
                 margin-left: -2125px;
              }

             }

             @-moz-keyframes bannermove {
              0% {
                margin-left: 0px;
              }
              100% {
                margin-left: -2125px;
              }

             }

             @-webkit-keyframes "bannermove" {
              0% {
                margin-left: 0px;
              }
              100% {
                margin-left: -2125px;
              }

             }

             @-ms-keyframes "bannermove" {
              0% {
                margin-left: 0px;
              }
              100% {
                margin-left: -2125px;
              }

             }

             @-o-keyframes "bannermove" {
              0% {
                margin-left: 0px;
              }
              100% {
                margin-left: -2125px;
              }

             }

             .photobanner img {
                 -webkit-transition: all 0.5s ease;
                 -moz-transition: all 0.5s ease;
                 -o-transition: all 0.5s ease;
                 -ms-transition: all 0.5s ease;
                 transition: all 0.5s ease;
             }

             .photobanner img:hover {
                 -webkit-transform: scale(1.1);
                 -moz-transform: scale(1.1);
                 -o-transform: scale(1.1);
                 -ms-transform: scale(1.1);
                 transform: scale(1.1);
                 cursor: pointer;

                 -webkit-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
                 -moz-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
                 box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
             }


</style>
</head>

<body>

<header>
<h1 style="text-align: center">Blue Fish Hatchery</h1>
<p style="text-align: center">About: Our company is a both wholesale and retail fish hatchery, serving our valued customers for more that (5) years. Our consumers hail from all over Bangladesh and we are also expanding our company to the international level. Our company has been progressively testing innovative ideas to our mainstream suppliers. We aim to offer the best possible service, exceptional quality and value products</p>
<p style="text-align: center">Our company is a both wholesale and retail fish hatchery, serving our valued customers for more that (5) years. Our consumers hail from all over Bangladesh and we are also expanding our company to the international level. Our company has been progressively testing innovative ideas to our mainstream suppliers. We aim to offer the best possible service, exceptional quality and value products.
Blue Fish Hatchery is constantly designing, upgrading, sourcing and manufacturing new products - if you don't see what you need, please give us a call or email us. You will find the necessary information in our contact page.  If you live locally, please drop by and visit to see the latest products in our retail location. We would be happy to help you find a product that will fit your situation and needs, as well as offer advice.
We deliver high levels of dedication and service to every aquaculture project we undertake. We also take great pride in developing each and every successful new project and view the success of each and every project as a direct reflection upon our skills and consummate reputation.</p>

      <ull>

        <lii><a  class="active" href="about.php">About</a></lii>
        <lii><a    href="contacts.php">Contact</a></lii>
        <lii><a  href="faq.php">FAQ</a></lii>
        <lii><a  href="../../blue.php">Home</a></lii>
      </ull>
</header>



<photo>
  <div id="container">
              <!-- Each image is 350px by 233px -->
              <div class="photobanner">
                  <img class="first" src="../img/22.jpg" alt="">
                  <img src="../img/23.jpg" alt="">
                  <img src="../img/24.jpg" alt="">
                  <img src="../img/25.jpg" alt="">
                  <img src="../img/26.jpg" alt="">
                  <img src="../img/27.jpg" alt="">
                  <img src="../img/28.jpg" alt="">
                  <img src="../img/29.jpg" alt="">
                  <img src="../img/30.jpg" alt="">
                  <img src="../img/31.jpg" alt="">
              </div>
          </div>


</photo>




  <footer>

          <h5>Blue Fish © 2016</h5>
          <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="../img/facebook.png" border=0 height="50px"></a>

        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="../img/twitter.png" border=0 height="50px"></a>

          <a target="_blank" title="follow me on twitter" href="http://www.youtube.com"><img alt="follow me on twitter" src="../img/youtube.png" border=0 height="50px"></a>
  </footer>


</body>


</html>
