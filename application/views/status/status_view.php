<div class="grey darken-4 section no-pad-bot" id="index-banner">
  <div class="container">
      <h5 class="header col s12 light white-text">Monitor de aplicaciones</h5>
  </div>
  <br>
</div>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m2">
      </div>
      <div class="col s12 m8">
        <div class="icon-block">
          <p class="light"></p>
            <ul class="collection with-header">
              <li class="collection-header"><h4>Aplicaciones</h4></li>
              <!-- usados -->
              <?php
               if($usados_prod['status']){
                 echo '<li class="collection-item"><div style="color:green;">API Usados Prod<a href="#!" class="secondary-content"><i class="material-icons">done</i></a></div></li>';
               }else{
                 echo '<li class="collection-item"><div style="color:red;">API Usados Prod<a href="#!" class="secondary-content"><i class="material-icons" style="color:red;">thumb_down</i></a></div></li>';
               }
              ?>

              <?php
               if($usados_dev['status']){
                 echo '<li class="collection-item"><div style="color:green;">API Usados Dev<a href="#!" class="secondary-content"><i class="material-icons">done</i></a>
                 </div></li>';
               }else{
                 echo '<li class="collection-item"><div style="color:red;">API Usados Dev<a href="#!" class="secondary-content"><i class="material-icons" style="color:red;">thumb_down</i></a> </div></li>';
               }
              ?>

              <!-- nuevos -->
              <?php
               if($nuevos_prod['status']){
                 echo '<li class="collection-item"><div style="color:green;">API Nuevos Prod<a href="#!" class="secondary-content"><i class="material-icons">done</i></a>
                 </div></li>';
               }else{
                 echo '<li class="collection-item"><div style="color:red;">API Nuevos Prod<a href="#!" class="secondary-content"><i class="material-icons" style="color:red;">thumb_down</i></a> </div></li>';
               }
              ?>
              <?php
               if($nuevos_dev['status']){
                 echo '<li class="collection-item"><div style="color:green;">API Nuevos Dev<a href="#!" class="secondary-content"><i class="material-icons">done</i></a>
                 </div></li>';
               }else{
                 echo '<li class="collection-item"><div style="color:red;">API Nuevos Dev<a href="#!" class="secondary-content"><i class="material-icons" style="color:red;">thumb_down</i></a> </div></li>';
               }
              ?>
              <!-- subastas -->
              <?php
               if($subasta_prod['status']){
                 echo '<li class="collection-item"><div style="color:green;">API Subasta Prod<a href="#!" class="secondary-content"><i class="material-icons">done</i></a>
                 </div></li>';
               }else{
                 echo '<li class="collection-item"><div style="color:red;">API Subasta Prod<a href="#!" class="secondary-content"><i class="material-icons" style="color:red;">thumb_down</i></a> </div></li>';
               }
              ?>
              <?php
               if($subasta_dev['status']){
                 echo '<li class="collection-item"><div style="color:green;">API Subasta Dev<a href="#!" class="secondary-content"><i class="material-icons">done</i></a>
                 </div></li>';
               }else{
                 echo '<li class="collection-item"><div style="color:red;">API Subasta Dev<a href="#!" class="secondary-content"><i class="material-icons" style="color:red;">thumb_down</i></a> </div></li>';
               }
              ?>
            </ul>
        </div>
      </div>
      <div class="col s12 m2">
      </div>
    </div>
  </div>
  <br><br>
</div>
