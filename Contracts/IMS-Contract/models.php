<?php
/* based on ORSCF IdentityManagement Contract v1.6.0.10914 */

use \MedicalResearch\IdentityManagement\Model;
use \MedicalResearch\IdentityManagement\StoreAccess;

namespace MedicalResearch\IdentityManagement\StoreAccess {
  
  public class AdditionalSubjectParticipationIdentifier {
    
    /*
    * *this field has a max length of 50
    */
    public $participantIdentifier;
    
    /*
    * *this field has a max length of 30
    */
    public $identifierName;
    
    public $identifierValue;
    
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
    public $studyExecutionIdentifier;
    
    /*
    * the institute which is executing the study (this should be an invariant technical representation of the company name or a guid)
    */
    public $executingInstituteIdentifier;
    
    /*
    * *this field has a max length of 100
    */
    public $studyWorkflowName;
    
    /*
    * *this field has a max length of 20
    */
    public $studyWorkflowVersion;
    
  }
  
  public class StudyScope {
    
    /*
    * the official invariant name of the study as given by the sponsor *this field has a max length of 100
    */
    public $studyWorkflowName;
    
    /*
    * version of the workflow *this field has a max length of 20
    */
    public $studyWorkflowVersion;
    
    /*
    * for example "Screening-Number" or "Randomization-Number"
    */
    public $participantIdentifierSemantic;
    
  }
  
  /*
  * Composite Key, which represents the primary identity of a StudyScope
  */
  public class StudyScopeIdentity {
    
  }
  
  public class SubjectAddress {
    
    public $internalRecordId;
    
    public $street;
    
    public $houseNumber;
    
    public $postCode;
    
    public $city;
    
    public $state;
    
    public $country;
    
    /*
    * *this field is optional (use null as value)
    */
    public $phoneNumber;
    
  }
  
  public class SubjectIdentity {
    
    public $recordId;
    
    /*
    * *this field is optional (use null as value)
    */
    public $firstName;
    
    /*
    * *this field is optional (use null as value)
    */
    public $lastName;
    
    /*
    * 0=Male / 1=Female / 2=Other *this field is optional
    */
    public $gender;
    
    /*
    * *this field is optional
    */
    public $dateOfBirth;
    
    /*
    * *this field is optional
    */
    public $dateOfDeath;
    
    /*
    * can be used to specify the full salutation including all academic grades by a string containing the placeholders: "{G}"=Gender {F}="FirstName" {L}="LastName". If not specified, a generic fallback can be used *this field is optional (use null as value)
    */
    public $fullNamePattern;
    
    /*
    * *this field is optional (use null as value)
    */
    public $language;
    
    /*
    * *this field is optional (use null as value)
    */
    public $notes;
    
    /*
    * *this field is optional (use null as value)
    */
    public $email;
    
    /*
    * *this field is optional (use null as value)
    */
    public $mobileNumber;
    
    /*
    * *this field is optional
    */
    public $residentAddressId;
    
  }
  
  public class SubjectParticipation {
    
    /*
    * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study) *this field has a max length of 50
    */
    public $participantIdentifier;
    
    /*
    * *this field has a max length of 100
    */
    public $studyWorkflowName;
    
    /*
    * *this field has a max length of 20
    */
    public $studyWorkflowVersion;
    
    public $creationDateUtc;
    
    public $createdForStudyExecutionIdentifier;
    
    /*
    * *this field is optional
    */
    public $subjectIdentityRecordId;
    
  }
  
}
