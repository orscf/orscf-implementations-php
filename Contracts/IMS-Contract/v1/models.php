<?php
/* based on ORSCF IdentityManagement Contract v1.6.0.11588 */

use \MedicalResearch\IdentityManagement\Model;
use \MedicalResearch\IdentityManagement\StoreAccess;

namespace MedicalResearch\IdentityManagement\StoreAccess {
  
  public class AdditionalSubjectParticipationIdentifier {
    
    /*
    * *this field has a max length of 50
    */
    public string $participantIdentifier;
    
    /*
    * *this field has a max length of 30
    */
    public string $identifierName;
    
    public string $identifierValue;
    
  }
  
  /*
  * Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
  */
  public class AdditionalSubjectParticipationIdentifierIdentity {
    
  }
  
  public class StudyExecutionScope {
    
    /*
    * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    public string $studyExecutionIdentifier;
    
    /*
    * the institute which is executing the study (this should be an invariant technical representation of the company name or a guid)
    */
    public string $executingInstituteIdentifier;
    
    /*
    * *this field has a max length of 100
    */
    public string $studyWorkflowName;
    
    /*
    * *this field has a max length of 20
    */
    public string $studyWorkflowVersion;
    
  }
  
  public class StudyScope {
    
    /*
    * the official invariant name of the study as given by the sponsor *this field has a max length of 100
    */
    public string $studyWorkflowName;
    
    /*
    * version of the workflow *this field has a max length of 20
    */
    public string $studyWorkflowVersion;
    
    /*
    * for example "Screening-Number" or "Randomization-Number"
    */
    public string $participantIdentifierSemantic;
    
  }
  
  /*
  * Composite Key, which represents the primary identity of a StudyScope
  */
  public class StudyScopeIdentity {
    
  }
  
  public class SubjectAddress {
    
    public string $internalRecordId;
    
    public string $street;
    
    public string $houseNumber;
    
    public string $postCode;
    
    public string $city;
    
    public string $state;
    
    public string $country;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $phoneNumber;
    
  }
  
  public class SubjectIdentity {
    
    public string $recordId;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $firstName;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $lastName;
    
    /*
    * 0=Male / 1=Female / 2=Other *this field is optional
    */
    public ?int $gender;
    
    /*
    * *this field is optional
    */
    public ?string $dateOfBirth;
    
    /*
    * *this field is optional
    */
    public ?string $dateOfDeath;
    
    /*
    * can be used to specify the full salutation including all academic grades by a string containing the placeholders: "{G}"=Gender {F}="FirstName" {L}="LastName". If not specified, a generic fallback can be used *this field is optional (use null as value)
    */
    public string $fullNamePattern;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $language;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $notes;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $email;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $mobileNumber;
    
    /*
    * *this field is optional
    */
    public ?string $residentAddressId;
    
  }
  
  public class SubjectParticipation {
    
    /*
    * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study) *this field has a max length of 50
    */
    public string $participantIdentifier;
    
    /*
    * *this field has a max length of 100
    */
    public string $studyWorkflowName;
    
    /*
    * *this field has a max length of 20
    */
    public string $studyWorkflowVersion;
    
    public string $creationDateUtc;
    
    public string $createdForStudyExecutionIdentifier;
    
    /*
    * *this field is optional
    */
    public ?string $subjectIdentityRecordId;
    
  }
  
}
