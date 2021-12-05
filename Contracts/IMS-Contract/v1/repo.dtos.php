<?php
/* based on ORSCF IdentityManagement Contract v1.6.0.11588 */

use \MedicalResearch\IdentityManagement\Model;
use \MedicalResearch\IdentityManagement\StoreAccess;

namespace MedicalResearch\IdentityManagement\StoreAccess {
  
  /*
  * Contains arguments for calling 'GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity'.
  * Method: Loads a specific AdditionalSubjectParticipationIdentifier addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityRequest {
    
    // Required Argument for 'GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (AdditionalSubjectParticipationIdentifierIdentity): Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
    #[Required]
    public AdditionalSubjectParticipationIdentifierIdentity $additionalSubjectParticipationIdentifierIdentity;
    
  }
  
  /*
  * Contains results from calling 'GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity'.
  * Method: Loads a specific AdditionalSubjectParticipationIdentifier addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (AdditionalSubjectParticipationIdentifier)
    public AdditionalSubjectParticipationIdentifier $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetAdditionalSubjectParticipationIdentifiers'.
  * Method: Loads AdditionalSubjectParticipationIdentifiers.
  */
  public class GetAdditionalSubjectParticipationIdentifiersRequest {
    
    // Optional Argument for 'GetAdditionalSubjectParticipationIdentifiers' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetAdditionalSubjectParticipationIdentifiers' (?int): Max count of AdditionalSubjectParticipationIdentifiers which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetAdditionalSubjectParticipationIdentifiers'.
  * Method: Loads AdditionalSubjectParticipationIdentifiers.
  */
  public class GetAdditionalSubjectParticipationIdentifiersResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetAdditionalSubjectParticipationIdentifiers' (AdditionalSubjectParticipationIdentifier[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchAdditionalSubjectParticipationIdentifiers'.
  * Method: Loads AdditionalSubjectParticipationIdentifiers where values matching to the given filterExpression
  */
  public class SearchAdditionalSubjectParticipationIdentifiersRequest {
    
    // Required Argument for 'SearchAdditionalSubjectParticipationIdentifiers' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchAdditionalSubjectParticipationIdentifiers' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchAdditionalSubjectParticipationIdentifiers' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchAdditionalSubjectParticipationIdentifiers' (?int): Max count of AdditionalSubjectParticipationIdentifiers which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchAdditionalSubjectParticipationIdentifiers'.
  * Method: Loads AdditionalSubjectParticipationIdentifiers where values matching to the given filterExpression
  */
  public class SearchAdditionalSubjectParticipationIdentifiersResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchAdditionalSubjectParticipationIdentifiers' (AdditionalSubjectParticipationIdentifier[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewAdditionalSubjectParticipationIdentifier'.
  * Method: Adds a new AdditionalSubjectParticipationIdentifier and returns its primary identifier (or null on failure).
  */
  public class AddNewAdditionalSubjectParticipationIdentifierRequest {
    
    // Required Argument for 'AddNewAdditionalSubjectParticipationIdentifier' (AdditionalSubjectParticipationIdentifier): AdditionalSubjectParticipationIdentifier containing the new values
    #[Required]
    public AdditionalSubjectParticipationIdentifier $additionalSubjectParticipationIdentifier;
    
  }
  
  /*
  * Contains results from calling 'AddNewAdditionalSubjectParticipationIdentifier'.
  * Method: Adds a new AdditionalSubjectParticipationIdentifier and returns its primary identifier (or null on failure).
  */
  public class AddNewAdditionalSubjectParticipationIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewAdditionalSubjectParticipationIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateAdditionalSubjectParticipationIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given AdditionalSubjectParticipationIdentifier addressed by the primary identifier fields within the given AdditionalSubjectParticipationIdentifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateAdditionalSubjectParticipationIdentifierRequest {
    
    // Required Argument for 'UpdateAdditionalSubjectParticipationIdentifier' (AdditionalSubjectParticipationIdentifier): AdditionalSubjectParticipationIdentifier containing the new values (the primary identifier fields within the given AdditionalSubjectParticipationIdentifier will be used to address the target record)
    #[Required]
    public AdditionalSubjectParticipationIdentifier $additionalSubjectParticipationIdentifier;
    
  }
  
  /*
  * Contains results from calling 'UpdateAdditionalSubjectParticipationIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given AdditionalSubjectParticipationIdentifier addressed by the primary identifier fields within the given AdditionalSubjectParticipationIdentifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateAdditionalSubjectParticipationIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateAdditionalSubjectParticipationIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given AdditionalSubjectParticipationIdentifier addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityRequest {
    
    // Required Argument for 'UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (AdditionalSubjectParticipationIdentifierIdentity): Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
    #[Required]
    public AdditionalSubjectParticipationIdentifierIdentity $additionalSubjectParticipationIdentifierIdentity;
    
    // Required Argument for 'UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (AdditionalSubjectParticipationIdentifier): AdditionalSubjectParticipationIdentifier containing the new values (the primary identifier fields within the given AdditionalSubjectParticipationIdentifier will be ignored)
    #[Required]
    public AdditionalSubjectParticipationIdentifier $additionalSubjectParticipationIdentifier;
    
  }
  
  /*
  * Contains results from calling 'UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given AdditionalSubjectParticipationIdentifier addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity'.
  * Method: Deletes a specific AdditionalSubjectParticipationIdentifier addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityRequest {
    
    // Required Argument for 'DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (AdditionalSubjectParticipationIdentifierIdentity): Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
    #[Required]
    public AdditionalSubjectParticipationIdentifierIdentity $additionalSubjectParticipationIdentifierIdentity;
    
  }
  
  /*
  * Contains results from calling 'DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity'.
  * Method: Deletes a specific AdditionalSubjectParticipationIdentifier addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetSubjectParticipationByParticipantIdentifier'.
  * Method: Loads a specific SubjectParticipation addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetSubjectParticipationByParticipantIdentifierRequest {
    
    // Required Argument for 'GetSubjectParticipationByParticipantIdentifier' (string): identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    #[Required]
    public string $participantIdentifier;
    
  }
  
  /*
  * Contains results from calling 'GetSubjectParticipationByParticipantIdentifier'.
  * Method: Loads a specific SubjectParticipation addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetSubjectParticipationByParticipantIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetSubjectParticipationByParticipantIdentifier' (SubjectParticipation)
    public SubjectParticipation $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetSubjectParticipations'.
  * Method: Loads SubjectParticipations.
  */
  public class GetSubjectParticipationsRequest {
    
    // Optional Argument for 'GetSubjectParticipations' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetSubjectParticipations' (?int): Max count of SubjectParticipations which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetSubjectParticipations'.
  * Method: Loads SubjectParticipations.
  */
  public class GetSubjectParticipationsResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetSubjectParticipations' (SubjectParticipation[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchSubjectParticipations'.
  * Method: Loads SubjectParticipations where values matching to the given filterExpression
  */
  public class SearchSubjectParticipationsRequest {
    
    // Required Argument for 'SearchSubjectParticipations' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchSubjectParticipations' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchSubjectParticipations' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchSubjectParticipations' (?int): Max count of SubjectParticipations which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchSubjectParticipations'.
  * Method: Loads SubjectParticipations where values matching to the given filterExpression
  */
  public class SearchSubjectParticipationsResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchSubjectParticipations' (SubjectParticipation[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewSubjectParticipation'.
  * Method: Adds a new SubjectParticipation and returns its primary identifier (or null on failure).
  */
  public class AddNewSubjectParticipationRequest {
    
    // Required Argument for 'AddNewSubjectParticipation' (SubjectParticipation): SubjectParticipation containing the new values
    #[Required]
    public SubjectParticipation $subjectParticipation;
    
  }
  
  /*
  * Contains results from calling 'AddNewSubjectParticipation'.
  * Method: Adds a new SubjectParticipation and returns its primary identifier (or null on failure).
  */
  public class AddNewSubjectParticipationResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewSubjectParticipation' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateSubjectParticipation'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectParticipation addressed by the primary identifier fields within the given SubjectParticipation. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectParticipationRequest {
    
    // Required Argument for 'UpdateSubjectParticipation' (SubjectParticipation): SubjectParticipation containing the new values (the primary identifier fields within the given SubjectParticipation will be used to address the target record)
    #[Required]
    public SubjectParticipation $subjectParticipation;
    
  }
  
  /*
  * Contains results from calling 'UpdateSubjectParticipation'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectParticipation addressed by the primary identifier fields within the given SubjectParticipation. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectParticipationResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateSubjectParticipation' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateSubjectParticipationByParticipantIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectParticipation addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectParticipationByParticipantIdentifierRequest {
    
    // Required Argument for 'UpdateSubjectParticipationByParticipantIdentifier' (string): identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    #[Required]
    public string $participantIdentifier;
    
    // Required Argument for 'UpdateSubjectParticipationByParticipantIdentifier' (SubjectParticipation): SubjectParticipation containing the new values (the primary identifier fields within the given SubjectParticipation will be ignored)
    #[Required]
    public SubjectParticipation $subjectParticipation;
    
  }
  
  /*
  * Contains results from calling 'UpdateSubjectParticipationByParticipantIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectParticipation addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectParticipationByParticipantIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateSubjectParticipationByParticipantIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteSubjectParticipationByParticipantIdentifier'.
  * Method: Deletes a specific SubjectParticipation addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteSubjectParticipationByParticipantIdentifierRequest {
    
    // Required Argument for 'DeleteSubjectParticipationByParticipantIdentifier' (string): identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    #[Required]
    public string $participantIdentifier;
    
  }
  
  /*
  * Contains results from calling 'DeleteSubjectParticipationByParticipantIdentifier'.
  * Method: Deletes a specific SubjectParticipation addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteSubjectParticipationByParticipantIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteSubjectParticipationByParticipantIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Loads a specific StudyExecutionScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetStudyExecutionScopeByStudyExecutionIdentifierRequest {
    
    // Required Argument for 'GetStudyExecutionScopeByStudyExecutionIdentifier' (string): a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $studyExecutionIdentifier;
    
  }
  
  /*
  * Contains results from calling 'GetStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Loads a specific StudyExecutionScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetStudyExecutionScopeByStudyExecutionIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetStudyExecutionScopeByStudyExecutionIdentifier' (StudyExecutionScope)
    public StudyExecutionScope $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes.
  */
  public class GetStudyExecutionScopesRequest {
    
    // Optional Argument for 'GetStudyExecutionScopes' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetStudyExecutionScopes' (?int): Max count of StudyExecutionScopes which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes.
  */
  public class GetStudyExecutionScopesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetStudyExecutionScopes' (StudyExecutionScope[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes where values matching to the given filterExpression
  */
  public class SearchStudyExecutionScopesRequest {
    
    // Required Argument for 'SearchStudyExecutionScopes' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchStudyExecutionScopes' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchStudyExecutionScopes' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchStudyExecutionScopes' (?int): Max count of StudyExecutionScopes which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes where values matching to the given filterExpression
  */
  public class SearchStudyExecutionScopesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchStudyExecutionScopes' (StudyExecutionScope[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewStudyExecutionScope'.
  * Method: Adds a new StudyExecutionScope and returns its primary identifier (or null on failure).
  */
  public class AddNewStudyExecutionScopeRequest {
    
    // Required Argument for 'AddNewStudyExecutionScope' (StudyExecutionScope): StudyExecutionScope containing the new values
    #[Required]
    public StudyExecutionScope $studyExecutionScope;
    
  }
  
  /*
  * Contains results from calling 'AddNewStudyExecutionScope'.
  * Method: Adds a new StudyExecutionScope and returns its primary identifier (or null on failure).
  */
  public class AddNewStudyExecutionScopeResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewStudyExecutionScope' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateStudyExecutionScope'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the primary identifier fields within the given StudyExecutionScope. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeRequest {
    
    // Required Argument for 'UpdateStudyExecutionScope' (StudyExecutionScope): StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be used to address the target record)
    #[Required]
    public StudyExecutionScope $studyExecutionScope;
    
  }
  
  /*
  * Contains results from calling 'UpdateStudyExecutionScope'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the primary identifier fields within the given StudyExecutionScope. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateStudyExecutionScope' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeByStudyExecutionIdentifierRequest {
    
    // Required Argument for 'UpdateStudyExecutionScopeByStudyExecutionIdentifier' (string): a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $studyExecutionIdentifier;
    
    // Required Argument for 'UpdateStudyExecutionScopeByStudyExecutionIdentifier' (StudyExecutionScope): StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be ignored)
    #[Required]
    public StudyExecutionScope $studyExecutionScope;
    
  }
  
  /*
  * Contains results from calling 'UpdateStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeByStudyExecutionIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateStudyExecutionScopeByStudyExecutionIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Deletes a specific StudyExecutionScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteStudyExecutionScopeByStudyExecutionIdentifierRequest {
    
    // Required Argument for 'DeleteStudyExecutionScopeByStudyExecutionIdentifier' (string): a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $studyExecutionIdentifier;
    
  }
  
  /*
  * Contains results from calling 'DeleteStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Deletes a specific StudyExecutionScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteStudyExecutionScopeByStudyExecutionIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteStudyExecutionScopeByStudyExecutionIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetStudyScopeByStudyScopeIdentity'.
  * Method: Loads a specific StudyScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetStudyScopeByStudyScopeIdentityRequest {
    
    // Required Argument for 'GetStudyScopeByStudyScopeIdentity' (StudyScopeIdentity): Composite Key, which represents the primary identity of a StudyScope
    #[Required]
    public StudyScopeIdentity $studyScopeIdentity;
    
  }
  
  /*
  * Contains results from calling 'GetStudyScopeByStudyScopeIdentity'.
  * Method: Loads a specific StudyScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetStudyScopeByStudyScopeIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetStudyScopeByStudyScopeIdentity' (StudyScope)
    public StudyScope $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetStudyScopes'.
  * Method: Loads StudyScopes.
  */
  public class GetStudyScopesRequest {
    
    // Optional Argument for 'GetStudyScopes' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetStudyScopes' (?int): Max count of StudyScopes which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetStudyScopes'.
  * Method: Loads StudyScopes.
  */
  public class GetStudyScopesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetStudyScopes' (StudyScope[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchStudyScopes'.
  * Method: Loads StudyScopes where values matching to the given filterExpression
  */
  public class SearchStudyScopesRequest {
    
    // Required Argument for 'SearchStudyScopes' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchStudyScopes' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchStudyScopes' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchStudyScopes' (?int): Max count of StudyScopes which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchStudyScopes'.
  * Method: Loads StudyScopes where values matching to the given filterExpression
  */
  public class SearchStudyScopesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchStudyScopes' (StudyScope[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewStudyScope'.
  * Method: Adds a new StudyScope and returns its primary identifier (or null on failure).
  */
  public class AddNewStudyScopeRequest {
    
    // Required Argument for 'AddNewStudyScope' (StudyScope): StudyScope containing the new values
    #[Required]
    public StudyScope $studyScope;
    
  }
  
  /*
  * Contains results from calling 'AddNewStudyScope'.
  * Method: Adds a new StudyScope and returns its primary identifier (or null on failure).
  */
  public class AddNewStudyScopeResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewStudyScope' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateStudyScope'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyScope addressed by the primary identifier fields within the given StudyScope. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyScopeRequest {
    
    // Required Argument for 'UpdateStudyScope' (StudyScope): StudyScope containing the new values (the primary identifier fields within the given StudyScope will be used to address the target record)
    #[Required]
    public StudyScope $studyScope;
    
  }
  
  /*
  * Contains results from calling 'UpdateStudyScope'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyScope addressed by the primary identifier fields within the given StudyScope. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyScopeResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateStudyScope' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateStudyScopeByStudyScopeIdentity'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyScopeByStudyScopeIdentityRequest {
    
    // Required Argument for 'UpdateStudyScopeByStudyScopeIdentity' (StudyScopeIdentity): Composite Key, which represents the primary identity of a StudyScope
    #[Required]
    public StudyScopeIdentity $studyScopeIdentity;
    
    // Required Argument for 'UpdateStudyScopeByStudyScopeIdentity' (StudyScope): StudyScope containing the new values (the primary identifier fields within the given StudyScope will be ignored)
    #[Required]
    public StudyScope $studyScope;
    
  }
  
  /*
  * Contains results from calling 'UpdateStudyScopeByStudyScopeIdentity'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyScopeByStudyScopeIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateStudyScopeByStudyScopeIdentity' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteStudyScopeByStudyScopeIdentity'.
  * Method: Deletes a specific StudyScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteStudyScopeByStudyScopeIdentityRequest {
    
    // Required Argument for 'DeleteStudyScopeByStudyScopeIdentity' (StudyScopeIdentity): Composite Key, which represents the primary identity of a StudyScope
    #[Required]
    public StudyScopeIdentity $studyScopeIdentity;
    
  }
  
  /*
  * Contains results from calling 'DeleteStudyScopeByStudyScopeIdentity'.
  * Method: Deletes a specific StudyScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteStudyScopeByStudyScopeIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteStudyScopeByStudyScopeIdentity' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetSubjectAddressByInternalRecordId'.
  * Method: Loads a specific SubjectAddress addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetSubjectAddressByInternalRecordIdRequest {
    
    // Required Argument for 'GetSubjectAddressByInternalRecordId' (string): Represents the primary identity of a SubjectAddress
    #[Required]
    public string $internalRecordId;
    
  }
  
  /*
  * Contains results from calling 'GetSubjectAddressByInternalRecordId'.
  * Method: Loads a specific SubjectAddress addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetSubjectAddressByInternalRecordIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetSubjectAddressByInternalRecordId' (SubjectAddress)
    public SubjectAddress $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetSubjectAddresses'.
  * Method: Loads SubjectAddresses.
  */
  public class GetSubjectAddressesRequest {
    
    // Optional Argument for 'GetSubjectAddresses' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetSubjectAddresses' (?int): Max count of SubjectAddresses which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetSubjectAddresses'.
  * Method: Loads SubjectAddresses.
  */
  public class GetSubjectAddressesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetSubjectAddresses' (SubjectAddress[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchSubjectAddresses'.
  * Method: Loads SubjectAddresses where values matching to the given filterExpression
  */
  public class SearchSubjectAddressesRequest {
    
    // Required Argument for 'SearchSubjectAddresses' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchSubjectAddresses' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchSubjectAddresses' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchSubjectAddresses' (?int): Max count of SubjectAddresses which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchSubjectAddresses'.
  * Method: Loads SubjectAddresses where values matching to the given filterExpression
  */
  public class SearchSubjectAddressesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchSubjectAddresses' (SubjectAddress[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewSubjectAddress'.
  * Method: Adds a new SubjectAddress and returns its primary identifier (or null on failure).
  */
  public class AddNewSubjectAddressRequest {
    
    // Required Argument for 'AddNewSubjectAddress' (SubjectAddress): SubjectAddress containing the new values
    #[Required]
    public SubjectAddress $subjectAddress;
    
  }
  
  /*
  * Contains results from calling 'AddNewSubjectAddress'.
  * Method: Adds a new SubjectAddress and returns its primary identifier (or null on failure).
  */
  public class AddNewSubjectAddressResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewSubjectAddress' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateSubjectAddress'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectAddress addressed by the primary identifier fields within the given SubjectAddress. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectAddressRequest {
    
    // Required Argument for 'UpdateSubjectAddress' (SubjectAddress): SubjectAddress containing the new values (the primary identifier fields within the given SubjectAddress will be used to address the target record)
    #[Required]
    public SubjectAddress $subjectAddress;
    
  }
  
  /*
  * Contains results from calling 'UpdateSubjectAddress'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectAddress addressed by the primary identifier fields within the given SubjectAddress. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectAddressResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateSubjectAddress' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateSubjectAddressByInternalRecordId'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectAddress addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectAddressByInternalRecordIdRequest {
    
    // Required Argument for 'UpdateSubjectAddressByInternalRecordId' (string): Represents the primary identity of a SubjectAddress
    #[Required]
    public string $internalRecordId;
    
    // Required Argument for 'UpdateSubjectAddressByInternalRecordId' (SubjectAddress): SubjectAddress containing the new values (the primary identifier fields within the given SubjectAddress will be ignored)
    #[Required]
    public SubjectAddress $subjectAddress;
    
  }
  
  /*
  * Contains results from calling 'UpdateSubjectAddressByInternalRecordId'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectAddress addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectAddressByInternalRecordIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateSubjectAddressByInternalRecordId' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteSubjectAddressByInternalRecordId'.
  * Method: Deletes a specific SubjectAddress addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteSubjectAddressByInternalRecordIdRequest {
    
    // Required Argument for 'DeleteSubjectAddressByInternalRecordId' (string): Represents the primary identity of a SubjectAddress
    #[Required]
    public string $internalRecordId;
    
  }
  
  /*
  * Contains results from calling 'DeleteSubjectAddressByInternalRecordId'.
  * Method: Deletes a specific SubjectAddress addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteSubjectAddressByInternalRecordIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteSubjectAddressByInternalRecordId' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetSubjectIdentityByRecordId'.
  * Method: Loads a specific SubjectIdentity addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetSubjectIdentityByRecordIdRequest {
    
    // Required Argument for 'GetSubjectIdentityByRecordId' (string): Represents the primary identity of a SubjectIdentity
    #[Required]
    public string $recordId;
    
  }
  
  /*
  * Contains results from calling 'GetSubjectIdentityByRecordId'.
  * Method: Loads a specific SubjectIdentity addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetSubjectIdentityByRecordIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetSubjectIdentityByRecordId' (SubjectIdentity)
    public SubjectIdentity $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetSubjectIdentities'.
  * Method: Loads SubjectIdentities.
  */
  public class GetSubjectIdentitiesRequest {
    
    // Optional Argument for 'GetSubjectIdentities' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetSubjectIdentities' (?int): Max count of SubjectIdentities which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetSubjectIdentities'.
  * Method: Loads SubjectIdentities.
  */
  public class GetSubjectIdentitiesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetSubjectIdentities' (SubjectIdentity[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchSubjectIdentities'.
  * Method: Loads SubjectIdentities where values matching to the given filterExpression
  */
  public class SearchSubjectIdentitiesRequest {
    
    // Required Argument for 'SearchSubjectIdentities' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchSubjectIdentities' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchSubjectIdentities' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchSubjectIdentities' (?int): Max count of SubjectIdentities which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchSubjectIdentities'.
  * Method: Loads SubjectIdentities where values matching to the given filterExpression
  */
  public class SearchSubjectIdentitiesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchSubjectIdentities' (SubjectIdentity[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewSubjectIdentity'.
  * Method: Adds a new SubjectIdentity and returns its primary identifier (or null on failure).
  */
  public class AddNewSubjectIdentityRequest {
    
    // Required Argument for 'AddNewSubjectIdentity' (SubjectIdentity): SubjectIdentity containing the new values
    #[Required]
    public SubjectIdentity $subjectIdentity;
    
  }
  
  /*
  * Contains results from calling 'AddNewSubjectIdentity'.
  * Method: Adds a new SubjectIdentity and returns its primary identifier (or null on failure).
  */
  public class AddNewSubjectIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewSubjectIdentity' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateSubjectIdentity'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectIdentity addressed by the primary identifier fields within the given SubjectIdentity. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectIdentityRequest {
    
    // Required Argument for 'UpdateSubjectIdentity' (SubjectIdentity): SubjectIdentity containing the new values (the primary identifier fields within the given SubjectIdentity will be used to address the target record)
    #[Required]
    public SubjectIdentity $subjectIdentity;
    
  }
  
  /*
  * Contains results from calling 'UpdateSubjectIdentity'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectIdentity addressed by the primary identifier fields within the given SubjectIdentity. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectIdentityResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateSubjectIdentity' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateSubjectIdentityByRecordId'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectIdentity addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectIdentityByRecordIdRequest {
    
    // Required Argument for 'UpdateSubjectIdentityByRecordId' (string): Represents the primary identity of a SubjectIdentity
    #[Required]
    public string $recordId;
    
    // Required Argument for 'UpdateSubjectIdentityByRecordId' (SubjectIdentity): SubjectIdentity containing the new values (the primary identifier fields within the given SubjectIdentity will be ignored)
    #[Required]
    public SubjectIdentity $subjectIdentity;
    
  }
  
  /*
  * Contains results from calling 'UpdateSubjectIdentityByRecordId'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given SubjectIdentity addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateSubjectIdentityByRecordIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateSubjectIdentityByRecordId' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteSubjectIdentityByRecordId'.
  * Method: Deletes a specific SubjectIdentity addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteSubjectIdentityByRecordIdRequest {
    
    // Required Argument for 'DeleteSubjectIdentityByRecordId' (string): Represents the primary identity of a SubjectIdentity
    #[Required]
    public string $recordId;
    
  }
  
  /*
  * Contains results from calling 'DeleteSubjectIdentityByRecordId'.
  * Method: Deletes a specific SubjectIdentity addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteSubjectIdentityByRecordIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteSubjectIdentityByRecordId' (Boolean)
    public bool $return;
    
  }
  
}
