<?php 
include './conexiones/conexion.php';
include './conexiones/paginaPrincipalinformacion.php';
?>
<html>  
    <head>
        <title>Start Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/> 
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 
    </head>
    <body>
        
    

        
        
       
              <!-- Carousel wrapper -->
<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel" 
     data-aos="zoom-out" data-aos-duration="6000" >
  <!-- Indicators -->  
  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->

    <div class="carousel-item active">
        <img src="" width="5000" height="200" class="d-block w-100" alt="Motorbike Smoke" />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
             
      </div>
    </div>
     
    <!-- Single item -->

    <div class="carousel-item">
        <img src=""  width="500" height="200" class="d-block w-100" alt="Mountaintop"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <!-- Single item -->

  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
  

        <section>
            <div class="container "data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="6000" >
                <div class="row " style="padding: 70px 0px">
                    <div class="col-md-6"style="border-right: 3px solid #FF7C00" >
                        <h2>NUESTRA HISTORIA</h2>
                        <p>
                        Fundación Cultural Armonía es una organización sin fines de lucro que nace en Quito con el objetivo de impulsar proyectos
                         educativos y socio-culturales. Nuestra visión es promover el intercambio de experiencias en todos los ámbitos del arte, la educación y la investigación.
                          Brindamos a la comunidad las cualidades artísghgfdhjdghfggfhticas de personas de todas las edades: niños, jóvenes y adultos. Además, fomentamos el arte, la cultura y 
                          la música a través de talleres de educación permanente, especializándonos en el área del canto. 
                        </p>
                        
                    </div>
                    
                    <div class="col-md-6">
                      <?php foreach($resultado as $row){ ?>  <img src="img/<?php echo $row['imgHistoria']; ?>"<?php }?>  class="img-fluid" alt="imgencenttro"> 
                    </div>
                </div>
            </div>  
            
            
        </section>
        
        
  
        
        
        
        
        
        
         
<table  data-aos="fade-down-right" data-aos-duration="6000000" class="table ">
  <thead class="thead-dark p-4">
      <tr class="text-center">
        <th scope="col" colspan="2">NUESTROS IDIALES</th>
    </tr>
  </thead>
  <tbody>
    <tr>

        <td class="p-5"> <div class="text-center">MISION</div><br>
          
         <?php foreach($resultado as $row){ ?>  <?php echo $row['Mision']; ?>  <?php }?></td>
        <td class="p-5">
            <div class="text-center">VISION</div><br>
             
         <?php foreach($resultado as $row){ ?>  <?php echo $row['Vision']; ?>  <?php }?>
          </td>
   
    </tr>
   
  </tbody>
</table>

       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
    <div class="text-center">MIEMBROS</div> 
    
<div class="card-group p-5 m-5 mt-0" >

  <div class="card p-5" data-aos="fade-up"
     data-aos-duration="3000">
      <img class="img-fluid" src="img/5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>      
    </div>
  </div>
  <div class="card  p-5"data-aos="fade-up"
     data-aos-duration="3000">
      <img class="card-img-top" src="img/6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      
    </div>
  </div>
  <div class="card  p-5"data-aos="fade-up"
     data-aos-duration="3000">
      <img class="card-img-top" src="img/7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      
    </div>
  </div>
    
</div>

        
    
        
        
        
        
    <div class="container "  data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm" style="padding: 70px 0px">
                <form class="form-control text-center" method="post" >
                    <fieldset>
                        <legend class="text-center header"> Contactanos</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
        
        
        
        
        
        
        
        
        
        
        
        
        
       
        
        <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>  
    <script src="https://kit.fontawesome.com/d826e2fbf6.js" crossorigin="anonymous"></script>       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </body>
</html>
