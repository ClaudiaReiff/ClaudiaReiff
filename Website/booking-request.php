<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Request</title>
  <link rel="stylesheet" href="css/style.scss">
  <link rel="stylesheet" href="css/overrides.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/cards.css">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/inputs.scss">
</head>

<?php include('components/menu.php');?>
<body style="background-color: #F8F8F8">

  <div class="page-layout">

    <div style="font-size: 32px;display: flex;justify-content: center;font-weight: bold">Send us your request</div>
    <div style="font-size: 18px;margin-bottom: 20px;display: flex;justify-content: center">
      Fill out the form and reserve your dream vacation with us today.</div>

    <div>
      <form action="send-request.php" method="post">
        <div class="cookie-card">
          <fieldset>
            <legend style="font-weight: bold;font-size: 18px;margin-bottom: 10px">&#128218 Booking</legend>

            <div style="display: flex;width: 100%">

              <div style="width: 50%;margin-right: 10px">

                <div>
                  <label for="checkIn">Check-In</label>
                  <input style="width: 100%" type="date" id="checkIn" name="checkIn" required>
                </div>

                <div>
                  <label for="guestNr">Guests</label>
                  <select style="width: 100%;" name="guestNr" id="guestNr" required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                  </select>
                </div>

              </div>

              <div style="width: 50%">
                <div>
                  <label for="checkOut">Check-Out</label>
                  <input style="width: 100%" type="date" id="checkIn" name="checkOut" required>
                </div>

                <div>
                  <label for="petNr">Pets</label>
                  <select style="width: 100%;" name="petNr" id="petNr" required>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>
          </fieldset>
        </div>

        <div class="cookie-card" style="margin-top: 20px">
          <fieldset>
            <legend style="font-weight: bold;font-size: 18px;margin-bottom: 10px">&#128515 Personal information</legend>

            <div style="display: flex;width: 100%">
              <div style="width: 50%;margin-right: 10px">

                <div>
                  <label for="name">Name</label>
                  <input style="width: 100%;" type="text" id="name" name="name" placeholder="Name" required>
                </div>

                <div>
                  <label for="street">Street</label>
                  <input style="width: 100%;" type="text" id="street" name="street" placeholder="Street" required>
                </div>

                <div>
                  <label for="postalCode">Postal Code</label>
                  <input style="width: 100%;" type="text" id="postalCode" name="postalCode" placeholder="Postal Code" required>
                </div>

                <div>
                  <label for="email">Email</label>
                  <input style="width: 100%;" type="text" id="email" name="email" placeholder="Email" required>
                </div>

              </div>
              <div style="width: 50%">

                <div>
                  <label for="surname">Surname</label>
                  <input style="width: 100%;" type="text" id="surname" name="surname" placeholder="Surname" required>
                </div>

                <div>
                  <label for="city">City</label>
                  <input style="width: 100%;" type="text" id="city" name="city" placeholder="City" required>
                </div>

                <div>
                  <label for="country">Country</label>
                  <input style="width: 100%;" type="text" id="country" name="country" placeholder="Country" required>
                </div>

                <div>
                  <label for="phone">Phone</label>
                  <input style="width: 100%" type="tel" id="phone" name="phone" placeholder="Phone number" required>
                </div>

              </div>
            </div>

            <div style="margin-top: 2px;margin-bottom:2px;display: flex;justify-content: end">
              <input type="submit" name="submit" value="Request without obligation">
            </div>

          </fieldset>
        </div>

      </form>
    </div>


  </div>
</body>
