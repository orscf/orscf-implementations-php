<?php
/* based on ORSCF StudyManagement Contract v1.6.1.11588 */

use \MedicalResearch\StudyManagement\Model;

namespace MedicalResearch\StudyManagement\StoreAccess {
  
  public class Institute {
    
    /*
    * An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    #[Required]
    public string $instituteUid;
    
    /*
    * An DisplayLabel which is dedicated for the usage within the frontend of study managent software. Note that this short name representation hat the caracter of an internal shortcurt and could be ambiguous. The usage for legal-relevant/official communication or documents is not recommended, as well as the usage for technical identification of this record. *this field has a max length of 100
    */
    #[Required]
    #[MaxLength(100)]
    public string $displayLabel;
    
    #[Required]
    public bool $isArchived;
    
  }
  
  public class InstituteRelatedSystemAssignment {
    
    #[Required]
    public string $instituteRelatedSystemAssignemntUid;
    
    #[Required]
    public string $systemEndpointUid;
    
    #[Required]
    public string $instituteUid;
    
    #[Required]
    public string $useAsOwnPatientSdr;
    
    #[Required]
    public string $useAsCandidateSdr;
    
    #[Required]
    public string $useAsOwnWdr;
    
    #[Required]
    public string $useAsConsumingExternalWdr;
    
    /*
    * semicolon separated list of custom role-names
    */
    #[Required]
    public string $customRoles;
    
  }
  
  public class InvolvedPerson {
    
    /*
    * An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    #[Required]
    public string $involvedPersonUid;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $displayLabel;
    
    /*
    * *this field is optional
    */
    public ?string $emailAddress;
    
    #[Required]
    public bool $isArchived;
    
  }
  
  public class InvolvementRole {
    
    /*
    * An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    #[Required]
    public string $involvedPersonRoleUid;
    
    #[Required]
    public string $researchStudyUid;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $role;
    
    /*
    * *this field is optional
    */
    public ?string $involvedFrom;
    
    /*
    * *this field is optional
    */
    public ?string $involvedUntil;
    
    /*
    * null indicated a site independent global role *this field is optional
    */
    public ?string $dedicatedToSiteUid;
    
    #[Required]
    public string $involvedPersonUid;
    
  }
  
  /*
  * entity, which relates to <see href="https://www.hl7.org/fhir/researchstudy.html">HL7.ResearchStudy</see>
  */
  public class ResearchStudy {
    
    /*
    * An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    #[Required]
    public string $researchStudyUid;
    
    /*
    * An DisplayLabel which is dedicated for the usage within the frontend of study managent software. Note that this short name representation hat the caracter of an internal shortcurt and could be ambiguous. The usage for legal-relevant/official communication or documents is not recommended, as well as the usage for technical identification of this record. *this field has a max length of 100
    */
    #[Required]
    #[MaxLength(100)]
    public string $displayLabel;
    
    #[Required]
    public string $initiatorInstituteUid;
    
    #[Required]
    public string $studyWorkflowName;
    
    #[Required]
    public string $studyWorkflowVersion;
    
    /*
    * AS DECLARED BY <see href="https://www.hl7.org/fhir/valueset-research-study-phase.html">HL7.ResearchStudyPhase</see>: n-a | early-phase-1 | phase-1 | phase-1-phase-2 | phase-2 | phase-2-phase-3 | phase-3 | phase-4 *this field is optional (use null as value)
    */
    public string $phase;
    
    /*
    * a estimated date in future is possible *this field is optional
    */
    public ?string $startDate;
    
    /*
    * a estimated date in future is possible *this field is optional
    */
    public ?string $terminationDate;
    
    /*
    * A title which informs about the sematic of the SubjectIdentifer (which concrete value is used): "Randomization-Number", "Screening-Number", ...
    */
    #[Required]
    public string $subjectIdentifierTitle;
    
    /*
    * AS DECLARED BY <see href="https://www.hl7.org/fhir/valueset-research-study-status.html">HL7.ResearchStudyStatus</see>: active | administratively-completed | approved | closed-to-accrual | closed-to-accrual-and-intervention | completed | disapproved | in-review | temporarily-closed-to-accrual | temporarily-closed-to-accrual-and-intervention | withdrawn
    */
    #[Required]
    public string $status;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $terminatedReason;
    
    #[Required]
    public bool $isArchived;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $initiatorRelatedProjectNumber;
    
    /*
    * *this field is optional
    */
    public ?string $originWdrEndpointUid;
    
  }
  
  public class Site {
    
    /*
    * An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    #[Required]
    public string $siteUid;
    
    /*
    * <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> of the institute, which is representing this site
    */
    #[Required]
    public string $representingInstituteUid;
    
    /*
    * <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> of the related record
    */
    #[Required]
    public string $researchStudyUid;
    
    /*
    * a estimated date in future is possible *this field is optional
    */
    public ?string $enrollmentDate;
    
    /*
    * a estimated date in future is possible *this field is optional
    */
    public ?string $terminationDate;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $terminatedReason;
    
    /*
    * Offical 'SiteIdentifier' which is unique within the scope of the related study
    */
    #[Required]
    public string $studyRelatedSiteIdentifer;
    
    /*
    * An DisplayLabel which is dedicated for the usage within the frontend of study managent software. Note that this short name representation hat the caracter of an internal shortcurt and could be ambiguous. The usage for legal-relevant/official communication or documents is not recommended, as well as the usage for technical identification of this record.
    */
    #[Required]
    public string $displayLabel;
    
    /*
    * AS DECLARED BY HL7
    */
    #[Required]
    public string $status;
    
    /*
    * *this field is optional (use null as value)
    */
    public string $siteRelatedProjectNumber;
    
  }
  
  public class SiteRelatedSystemAssignment {
    
    #[Required]
    public string $siteRelatedSystemAssignmentUid;
    
    #[Required]
    public string $systemEndpointUid;
    
    #[Required]
    public string $siteUid;
    
    /*
    * semicolon separated list of custom role-names
    */
    #[Required]
    public string $customRoles;
    
  }
  
  public class StudyRelatedSystemAssignment {
    
    #[Required]
    public string $studyRelatedSystemAssignmentUid;
    
    #[Required]
    public string $researchStudyUid;
    
    #[Required]
    public string $systemEndpointUid;
    
    /*
    * semicolon separated list of custom role-names
    */
    #[Required]
    public string $customRoles;
    
  }
  
  public class SystemConnection {
    
    #[Required]
    public string $systemConnectionUid;
    
    #[Required]
    public string $ownerInstituteUid;
    
    #[Required]
    public string $hierSpäterJWTSEttings;
    
    #[Required]
    public string $targetSystemEndpointUid;
    
    /*
    * *this field is optional
    */
    public ?string $dedicatedSiteRelatedSystemAssignmentUid;
    
  }
  
  public class SystemEndpoint {
    
    #[Required]
    public string $systemEndpointUid;
    
    #[Required]
    public string $providerInstituteUid;
    
    #[Required]
    public string $availableRoles;
    
    #[Required]
    public string $url;
    
    #[Required]
    public string $approvedCert;
    
    #[Required]
    public string $isPublic;
    
    #[Required]
    public string $label;
    
  }
  
}
