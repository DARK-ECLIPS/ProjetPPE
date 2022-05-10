<!DOCTYPE html>
<html>
  <div class="container">
    
    <h3 align="center">CHANGE PASSWORD</h3>
    
    <div><?php if(isset($message)) { echo $message; } ?></div>
    <div class=form>

    
      <form method="post" action="controllers/requetes.php?OperaPPE=4441524b2045434e454c4953">
        <input type="hidden" name="OperaPPE" value="password">
        <div class="inputBox">
            <input type="password" placeholder="Ancien mot de passe" name="currentPassword" id="currentPassword" required>
        </div>
        <div class="inputBox">
            <input type="password" placeholder="Nouveau mot de passe" name="newPassword" id="newPassword" required>
        </div>
        <div class="inputBox">
            <input type="password" placeholder="Confimer le mot de passe" name="confirmPassword" id="confirmPassword" required>
        </div>
        <div class="inputBox">
          <div class="bottom">
            <a href="index.php?OperaPPE=profile"><input type="button" value='Annulé'></a>
            <input type="submit" name="submit" value='Validé'>
          </div>
        </div>
      </form>
    </div>
  </div>
</html>