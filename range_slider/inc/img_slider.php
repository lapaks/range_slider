<div id="thumbnail-preview-indicators" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#thumbnail-preview-indicators" data-slide-to="0" class="active">
      <div class="thumbnail">
        <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/wdXqHcTwSTmLuKOGz92L_Landscape.jpg">
      </div>
    </li>
    <li data-target="#thumbnail-preview-indicators" data-slide-to="1">
    <div class="thumbnail">
        <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/tU3ptNgGSP6U2fE67Gvy_SYDNEY-162.jpg">
      </div>
    </li>
    <li data-target="#thumbnail-preview-indicators" data-slide-to="2">
    <div class="thumbnail">
        <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/mtNrf7oxS4uSxTzMBWfQ_DSC_0043.jpg">
      </div>
    </li>
    <li data-target="#thumbnail-preview-indicators" data-slide-to="3">
    <div class="thumbnail">
        <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/wdXqHcTwSTmLuKOGz92L_Landscape.jpg">
      </div>
    </li>
    <li data-target="#thumbnail-preview-indicators" data-slide-to="4">
    <div class="thumbnail">
        <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/tU3ptNgGSP6U2fE67Gvy_SYDNEY-162.jpg">
      </div>
    </li>
  </ol>
  <div class="carousel-inner">
    <div class="item slides active item_1">
      <div class="slide-1"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>heading 1</h1>
          <p>some text 1</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">button 1</a></p>
        </div>
      </div>
    </div>
    <div class="item slides item_2">
      <div class="slide-2"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>heading 2</h1>
          <p>some text 2</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">button 2</a></p>
        </div>
      </div>
    </div>
    <div class="item slides item_3">
      <div class="slide-3"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>heading 3</h1>
          <p>some text 3</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">button 3</a></p>
        </div>
      </div>
    </div>
    <div class="item slides item_4">
      <div class="slide-1"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>heading 4</h1>
          <p>some text 4</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">button 4</a></p>
        </div>
      </div>
    </div>
    <div class="item slides item_5">
      <div class="slide-2"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>PASA ALI ALI BHAYE JASTO BHAKO HO? KI HOINA?</h1>
          <p>some text 4</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">button 4</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"><<<<</span></a>
  <a class="right carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right">>>>></span></a>
</div> 

<style type="text/css">
  /*
-----------------------------------
    Code snippet by @maridlcrmn
    Credits images: www.unsplash.com
-----------------------------------
*/

#thumbnail-preview-indicators {
  position: relative;
  overflow: hidden;
}
#thumbnail-preview-indicators .slides .slide-1, 
#thumbnail-preview-indicators .slides .slide-2,
#thumbnail-preview-indicators .slides .slide-3 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
    #thumbnail-preview-indicators,
    #thumbnail-preview-indicators .slides,
    #thumbnail-preview-indicators .slides .slide-1, 
    #thumbnail-preview-indicators .slides .slide-2,
    #thumbnail-preview-indicators .slides .slide-3 {
      height: 480px;
    }
#thumbnail-preview-indicators .slides .slide-1 {
  background-image: url(https://s3.amazonaws.com/ooomf-com-files/wdXqHcTwSTmLuKOGz92L_Landscape.jpg); 
}
#thumbnail-preview-indicators .slides .slide-2 {
  background-image: url(https://s3.amazonaws.com/ooomf-com-files/tU3ptNgGSP6U2fE67Gvy_SYDNEY-162.jpg);
}
#thumbnail-preview-indicators .slides .slide-3 {
  background-image: url(https://s3.amazonaws.com/ooomf-com-files/mtNrf7oxS4uSxTzMBWfQ_DSC_0043.jpg);
}
#thumbnail-preview-indicators .carousel-inner .item .carousel-caption {
  top: 20%;
  bottom: inherit;
}
#thumbnail-preview-indicators .carousel-indicators li,
#thumbnail-preview-indicators .carousel-indicators li.active {
  position: relative;
  width: 100px;
  height: 8px;  
}
#thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
  position: absolute;
  top: 0;
  width: 100px;
  display: none;
  opacity: 0;
  left: 50%;
  margin-top: -80px;
  margin-left: -50px;
}
#thumbnail-preview-indicators .carousel-indicators li:hover > .thumbnail,
#thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail {
  display: block;
  opacity: .8;
}
#thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail:hover{
  opacity: 1;
}
@media screen and (max-width : 480px) {    
    #thumbnail-preview-indicators .carousel-indicators li,
    #thumbnail-preview-indicators .carousel-indicators li.active {
      width: 50px;
      height: 8px;
      position: relative;
    }
    #thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
       width: 50px;
       left: 50%;
       margin-top: -50px;
       margin-left: -25px;
    }
}
</style>