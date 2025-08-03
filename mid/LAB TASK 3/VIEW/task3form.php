<!DOCTYPE html>
<html>

<head>
    <title>Donation Form</title>
<link rel="stylesheet" href="../task3style.css">
<script src="../task3valid.js" ></script>
</head>
<body>
    <div class="container">
    <h1>Donation form</h1>
    <form onsubmit="return validateform()">
    <table>
        <tr>
            <td>First Name<br>
            <input type="text" id="fname"></td>
        </tr>
        <tr>
            <td>Last Name<br>
            <input type="text" id="lname"></td>
        </tr>
         <tr>
            <td>Email<br>
            <input type="text" id="email"></td>
        </tr>
        <tr>
          <td>Address<br>
          <input type="text" id="address"></td>
        </tr>
        <tr>
          <td>City<br>
          <input type="text" id="city"></td>
        </tr>
         <tr>
          <td>State<br>
          
            <select id="state">
              <option value="">Select a State</option>
              <option>Dhaka</option>
              <option>Noakhali</option>
              <option>Sylhet</option>
            </select>
         <tr>
            <td>PHONE<br>
            <input type="text" id="number"></td>
        </tr>
         <tr>
            <td>Password<br>
            <input type="password" id="password"></td>
        </tr>
        <tr>
            <td>Donation Ammount<br>
            <input type="number" id="amount"></td>
        </tr>
        <tr>
            <td>Payment Method<br>
            <input type="radio" name="payment" value="bkash">Bkash
            <input type="radio" name="payment" value="nogod">Nogod
            <input type="radio" name="payment" value="cash">Cash</td>
        </tr>
         <tr>
            <td>Terms<br>
            <input type="checkbox" id="terms">I agreed to the Terms</td>
        </tr>
        <tr><td> <h1>Additional Information</h1></td></tr>
        
<tr>
         <td>
            <input type="checkbox"> I would like my gift to remain anonymous.<br>
            <input type="checkbox"> My employer offers a matching gift program.<br>
            <input type="checkbox"> Please don’t send a thank you letter.
          </td>
        </tr>
         <tr>
            <td>
            <input type="reset" id="Reset">
            <input type="submit" id="Submit"></td>
        </tr>
    </table>
    </form>
     </div>
</body>
</html>