 
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
      
             


        </div>
	<div class="limiter">

		<div class="container-login100">

             <h1>Bienvenidos al Test</h1>
                <p>&nbsp;</p>
 
  
               <table width="138%">
            <thead>

              <tr class="table100-head">
                <th width="140" class="column1"><div align="center">Nombre</div></th>
                <th width="160" class="column2"><div align="center">Apellido Materno</div></th>
                <th width="160" class="column3"><div align="center">Apellido Paterno</div></th>
                <th width="140" class="column4"><div align="center">Correo</div></th>
                <th width="140" class="column5"><div align="center">Puesto</div></th>
              
                
                  <div align="center"></div></th>
              </tr>


             <?php
$conexion=mysqli_connect('localhost', 'root', '12345678', 'INE') or die(mysqli_error());

$buscar = $_POST["palabra"];
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo like '%$buscar%' ");

while($datos = mysqli_fetch_array($resultado))
 
{

?>
     </thead>
            <tbody>

    
          
            
                <tr>
                  <td class="column1"><div align="center"><?php echo $datos['nombre'] ?></div></td>
                  <td class="column2"><div align="center"><?php echo $datos['materno'] ?></div></td>
                  <td class="column3"><div align="center"><?php echo $datos['paterno'] ?></div></td>
                  <td class="column4"><div align="center"><?php echo $datos['correo'] ?></div></td>
                  <td class="column5"><div align="center"><?php echo $datos['puesto'] ?></div></td>
                   

                
                
          
                
             </tr>
                   
               <?php   
        }

     ?>
                
                
                
            </tbody>
          </table>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					   <img src="images/a.jpg" alt="IMG">
				</div>

				<form action="test.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Test Covid-19
					</span>

						



<form action="q.php" method="post" class="login100-form validate-form">
         




  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
  <div class="pregunta">1. ¿Temperatura mayor a 38°?
  </div>
  <div class="respuestas">
  <div>  <input type="radio" name="preg1" value="5" required="" /> Sí<br /></div>
  <input type="radio" name="preg1" value="0" required=""/> No<br />
  </div>
  </div>




  <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">2. ¿Tienes tos?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg2" value="5" required="" /> Sí<br />
  <input type="radio" name="preg2" value="0" required="" /> No<br />
  </div>
  </div>



    <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">3. ¿Tienes dolor de cabeza?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg3" value="5" required=""/> Sí<br />
  <input type="radio" name="preg3" value="0" required=""/> No<br />
  </div>
  </div>

  <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">4. ¿Tienes malestar general?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg4" value="1" required=""/> Sí<br />
  <input type="radio" name="preg4" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">5. ¿Dificultad respiratoria oximetría de pulso?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg5" value="15" required=""/> Sí<br />
  <input type="radio" name="preg5" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">6. ¿Dolor articular?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg6" value="1" required=""/> Sí<br />
  <input type="radio" name="preg6" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">7. ¿Dolor muscular?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg7" value="1" required=""/> Sí<br />
  <input type="radio" name="preg7" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">8. ¿Dolor al tragar?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg8" value="1" required=""/> Sí<br />
  <input type="radio" name="preg8" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">9. ¿Escurrimiento nasal?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg9" value="1" required=""/> Sí<br />
  <input type="radio" name="preg9" value="0" required=""/> No<br />
  </div>
  </div>


 <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">10. ¿Dolor torácico?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg10" value="1" required=""/> Sí<br />
  <input type="radio" name="preg10" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">11. ¿Ojos rojos?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg11" value="1" required=""/> Sí<br />
  <input type="radio" name="preg11" value="0" required=""/> No<br />
  </div>
  </div>





          
          <div class="container-login100-form-btn">
            <input  class="login100-form-btn" type="submit" name="submit" value="Ingresar"/>
            </button>
          </div>


         

          <!--<div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>-->

          <div class="text-center p-t-136">
            <a class="txt2"><!--<a class= "txt2" href="#">-->
              Operación de sistemas - INE 
              <!--<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>-->
            </a>
          </div> 
          
        </form>




					</div>

					
					
					

					<div class="text-center p-t-12">
						
						
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>