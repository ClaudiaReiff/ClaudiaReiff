<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/main.css">

<form method="get" action="availability-result.php">
    <div style="display: flex;justify-content: space-evenly;align-items: center">

      <div>
        <label for="guestNr">Guests</label>
        <select name="guestNr" id="guestNr">
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

      <div>
        <label for="checkIn">Check-In</label>
        <input type="date" id="checkIn" name="checkIn">
      </div>

      <div>
        <label for="checkOut">Check-Out</label>
        <input type="date" id="checkOut" name="checkOut">
      </div>

      <div>
        <input type="submit" value="Availability">
      </div>
    </div>
</form>
