<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php include('_form.php'); ?>

  <p><span class="error">* required field</span></p>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Salutation:
    <input type="radio" name="salutation" value="Mr" <?php if(isset($salutation) && $salutation == "Mr") echo "checked"; ?>>Mr
    <input type="radio" name="salutation" value="Ms" <?php if(isset($salutation) && $salutation == "Ms") echo "checked"; ?>>Ms
    <input type="radio" name="salutation" value="Mrs" <?php if(isset($salutation) && $salutation == "Mrs") echo "checked"; ?>>Mrs
    <input type="radio" name="salutation" value="Mdm" <?php if(isset($salutation) && $salutation == "Mdm") echo "checked"; ?>>Mdm
    <span class="error">*<?php echo $salutationERR; ?></span><br>
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">*<?php echo $nameERR; ?></span><br>
    Email Address:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">*<?php echo $emailERR; ?></span><br>
    Phone Number:
    <input type="text" name="phone" value="<?php echo $phone;?>">
    <span class="error">*<?php echo $phoneERR; ?></span><br>
    Type of Enquiry:
    <select>
      <option value="General Enquiry">General Enquiry</option>
      <option value="Complaints">Complaints</option>
      <option value="Suggestions">Suggestions</option>
    </select><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
