<div>
          <?php $this->load->helper('form');?>
          <?php  echo form_open('usuario/logeo', 'class = "well form-inline"'); ?>
            <h2>Usuarios<h2>  
              <table>
                <tr>
                  <td><label>Usuario</label></td>
                  <td><input type="text" name = "email" class="input-medium" placeholder="email"></td>                   
                           
                </tr>
                <tr>
                  <td><label>Contraseña</label></td>
                  <td><input type="password" name = "pass" class="input-medium" placeholder="pass"></td>
                  
                </tr>
                <tr>
                  <td><button type="submit" class="btn">Entrar</button></td>     
                  <td><buttom type="link" href = "" class = "btn" >Registrarme</buttom></td>

                </tr>
              </table>
          </form>
           <h3><div class="alert alert-error"> <?php  if(isset($error)) echo $error; ?></div><h3> 
            
            <?php 
            /*$user = $user[''];

            if (($user['email'] == null)and($user['pass']==null))
            {
              echo "Disculpe pero El email o la contraseña son erroneas";
            }
            else
            {
              echo "Usuario Valido";
            } 

            /*echo $user['email']; 
            echo $user['pass'];*/
            ?>
</div>