<?php
/* based on ORSCF IdentityManagement Contract v1.8.0.11838 */


public class IdentityDetails {
  
  public string $firstName;
  
  public string $lastName;
  
  public string $email;
  
  public string $phone;
  
  public string $street;
  
  public string $houseNumber;
  
  public string $postCode;
  
  public string $city;
  
  public string $state;
  
  /*
  * two letter ISO code
  */
  public string $country;
  
  public ?string $dateOfBirth;
  
  public ?string $dateOfDeath;
  
}

public class ExtendedFieldDescriptor {
  
  public string $technicalName;
  
  public bool $isRequired;
  
  public string $displayLabel;
  
  public string $inputDescription;
  
  public string $regularExpression;
  
}
