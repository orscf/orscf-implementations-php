<?php
/* based on ORSCF IdentityManagement Contract v1.9.0.11852 */


public class ExtendedFieldDescriptor {
  
  public string $technicalName;
  
  public bool $isRequired;
  
  public string $displayLabel;
  
  public string $inputDescription;
  
  public string $regularExpression;
  
}

public class IdentityDetails {
  
  /*
  * the firstname a person (named as in the HL7 standard)
  */
  public string $givenName;
  
  /*
  * the lastname a person (named as in the HL7 standard)
  */
  public string $familyName;
  
  /*
  * date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  */
  public string $birthDate;
  
  /*
  * additional values for each 'extendedField' that is mandatory within (and specific to) the current IMS-System. To retrieve the declarations for such fields call 'GetExtendedFieldDescriptors'
  */
  public object $extendedFields;
  
}
