<!DOCTYPE html>
<html lang="nl">
<?php include('header.php'); ?>

<article class="container opacity shadow p-3 mb-4 mt-4 col-xl-8 bg-light">
    <div class="wrapper">
        <form action="" method="post">
            <h1 class="text-center">Inschrijven</h1>
            <input type="text" class="text" name="FirstName" placeholder="Voornaam" required>
            <input type="text" class="text" name="LastName" placeholder="Achternaam" required>
            <input type="email" class="email" name="Email" placeholder="Email adres" required>
<!--             <input type="email" class="email" name="email2" placeholder="Voer email adres nogmaals in" required> -->
            <input type="text" class="text" name="UserName" placeholder="Gebruikersnaam" required>
            <input type="password" class="text" name="Password" placeholder="Wachtwoord" required>
<!--             <input type="password" class="text" name="password2" placeholder="Voer wachtwoord nogmaals in" required>  -->
            <input type="text" class="text" name="PhoneNumber" placeholder="Telefoonnummer" required>
            <input type="date" class="text" name="BirthDate" placeholder="Geboortedatum (dd-mm-jjjj)" required>
              <div class="row">
                <div class="column">
                  <p>Geslacht</p>
                    <input type="radio" name="Gender" value="man" checked> Man<br>
                    <input type="radio" name="Gender" value="vrouw"> Vrouw<br>
                </div>
                <div class="column">
                  <p>Gewenste sexe</p>
                    <input type="radio" name="PreferredGender" value="man" checked> Man<br>
                    <input type="radio" name="PreferredGender" value="vrouw"> Vrouw<br>
                    <input type="radio" name="PreferredGender" value="beide"> Beide<br>
                </div>
              </div>
              <br><br><br>
            <button type="submit" class="submit" value="Submit">Registreer</button>
        </form> 
    </div>

</article>

<?php include('footer.php'); ?>
