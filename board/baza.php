<?php
  // Povezivanje sa bazom
  $baza = mysqli_connect("localhost", "root", "", "wersirius");

  // Provera da li je konekcija uspešna
  if (!$baza) {
      die("Konekcija na bazu nije uspela: " . mysqli_connect_error());
  }

  // Primer podataka (moguće da podaci budu promenjeni ili dodani)
  $truckNumber = 1061;
  $trailer = 232;
  $driversAgreement = "LTP";
  $driverPhone = 232702737;
  $driverName = "Sedgeman Haye";
  $company = "DENVER CARGO";
  $make = "FREIGHTLINER";
  $model = "Cascadia";
  $year = 2025;
  $truckVIN = "3JA3KJHDR8SSVS9029";
  $keyCODE = "FT2980";

  // Prvo, proveri da li vozač sa istim VIN brojem već postoji u bazi
  $check_query = "SELECT * FROM drivers WHERE vin = '$truckVIN'";
  $check_result = mysqli_query($baza, $check_query);

  if (mysqli_num_rows($check_result) == 0) {
      // Ako vozač ne postoji u bazi, izvrši unos
      $query = "INSERT INTO drivers 
                (truck, trailer, agreemant, phone, name, company, make, model, year, vin, keycode) 
                VALUES 
                ('$truckNumber', '$trailer', '$driversAgreement', '$driverPhone', '$driverName', '$company', '$make', '$model', '$year', '$truckVIN', '$keyCODE')";

      if (mysqli_query($baza, $query)) {
          echo "Vozač je uspešno dodat!";
      } else {
          echo "Greška prilikom dodavanja vozača: " . mysqli_error($baza);
      }
  } else {
      // Ako vozač već postoji, obavesti korisnika
      echo "Ovaj vozač već postoji u bazi!";
  }

  // Zatvori konekciju sa bazom
  mysqli_close($baza);
?>
