<html>
<head>


<style>
/**** Sass Variables ****/
$bodyFont: 'Open Sans', sans-serif;


* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.container {
  max-width: 900px;
  display: flex;
  justify-content: space-evenly;
  margin: 0 auto;
}

.card-wrapper {
  width: 400px;
  height: 500px;
  position: relative;
}

.card {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 350px;
  height: 450px;
  transform: translate(-50%, -50%);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 5px 18px rgba(0, 0, 0, 0.6);
  cursor: pointer;
  transition: 0.5s;
  
  .card-image {
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #000;
    transition: .5s;
  }
  
  &:hover img {
    opacity: 0.4;
    transition: .5s;
  }
}

.card:hover .card-image {
  /* transform: translateY(-100px); */
  transition: all .9s;
}


/**** Personal Details ****/

.details {
  position: absolute;
  bottom: 0;
  left: 0;
  background: #fff;
  width: 100%;
  height: 120px;
  z-index: 1;
  padding: 10px;

  h2 {
    margin: 30px 0;
    padding: 0;
    text-align: center;
     
    .job-title {
        font-size: 1rem;
        line-height: 2.5rem;
        color: #333;
        font-weight: 300;
    }
  }
}

.jane {
  position: absolute;
  bottom: -120px;
  left: 0;
  opacity: 0;
  width: 100%;
  height: 120px;
  z-index: 3;
  padding: 10px;
  transition: .4s;
}

.card:hover .jane {
  bottom: 0;
  left: 0;
  transition-delay: 0s;
  opacity: 1;
}

img{
    height:100%;
    width:100%;
}

#surve{
    height:50%;
}


</style>
</head>

<body>


<div class="container">
<div class="card-wrapper">
      
      <div class="card profile-two">
        
        <div class="card-image profile-img--two">
          <img src="./images/aj.png" alt="profile two">
        </div>

        

        <div class="details jane">
            <h4>Dr. A. J. Umbarkar
              <br>
              <span class="job-title">Staff Advisor</span>
            </h4>
        </div>
    </div>
 </div><!-- END box wrapper -->
<!-- END box wrapper --> 
    
    
<div class="card-wrapper">
      
      <div class="card profile-two">
        
        <div class="card-image profile-img--two">
          <img id="surve" src="./images/surve.png" alt="profile two">
        </div>

        

        <div class="details jane">
            <h4>Prof. A. R. Surve
              <br>
              <span class="job-title">Staff Advisor</span>
            </h4>
        </div>
    </div>
 </div><!-- END box wrapper -->
     
 </div><!-- END container -->
</body>
</html>