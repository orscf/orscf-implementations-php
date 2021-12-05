<?php
/* based on ORSCF IdentityManagement Contract v1.6.0.11588 */

use \MedicalResearch\IdentityManagement\Model;
use \MedicalResearch\IdentityManagement\StoreAccess;

namespace MedicalResearch\IdentityManagement\StoreAccess {
  
  public interface IAdditionalSubjectParticipationIdentifiers {
    
    /*
    * Loads a specific AdditionalSubjectParticipationIdentifier addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $additionalSubjectParticipationIdentifierIdentity Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
    */
    function GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity(AdditionalSubjectParticipationIdentifierIdentity $additionalSubjectParticipationIdentifierIdentity): GetAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityResponse;
    
    /*
    * Loads AdditionalSubjectParticipationIdentifiers.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of AdditionalSubjectParticipationIdentifiers which should be returned
    */
    function GetAdditionalSubjectParticipationIdentifiers(int $page, int $pageSize): GetAdditionalSubjectParticipationIdentifiersResponse;
    
    /*
    * Loads AdditionalSubjectParticipationIdentifiers where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of AdditionalSubjectParticipationIdentifiers which should be returned
    */
    function SearchAdditionalSubjectParticipationIdentifiers(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchAdditionalSubjectParticipationIdentifiersResponse;
    
    /*
    * Adds a new AdditionalSubjectParticipationIdentifier and returns its primary identifier (or null on failure).
    *
    * @param $additionalSubjectParticipationIdentifier AdditionalSubjectParticipationIdentifier containing the new values
    */
    function AddNewAdditionalSubjectParticipationIdentifier(AdditionalSubjectParticipationIdentifier $additionalSubjectParticipationIdentifier): AddNewAdditionalSubjectParticipationIdentifierResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given AdditionalSubjectParticipationIdentifier addressed by the primary identifier fields within the given AdditionalSubjectParticipationIdentifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $additionalSubjectParticipationIdentifier AdditionalSubjectParticipationIdentifier containing the new values (the primary identifier fields within the given AdditionalSubjectParticipationIdentifier will be used to address the target record)
    */
    function UpdateAdditionalSubjectParticipationIdentifier(AdditionalSubjectParticipationIdentifier $additionalSubjectParticipationIdentifier): UpdateAdditionalSubjectParticipationIdentifierResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given AdditionalSubjectParticipationIdentifier addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $additionalSubjectParticipationIdentifierIdentity Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
    * @param $additionalSubjectParticipationIdentifier AdditionalSubjectParticipationIdentifier containing the new values (the primary identifier fields within the given AdditionalSubjectParticipationIdentifier will be ignored)
    */
    function UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity(AdditionalSubjectParticipationIdentifierIdentity $additionalSubjectParticipationIdentifierIdentity, AdditionalSubjectParticipationIdentifier $additionalSubjectParticipationIdentifier): UpdateAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityResponse;
    
    /*
    * Deletes a specific AdditionalSubjectParticipationIdentifier addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $additionalSubjectParticipationIdentifierIdentity Composite Key, which represents the primary identity of a AdditionalSubjectParticipationIdentifier
    */
    function DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentity(AdditionalSubjectParticipationIdentifierIdentity $additionalSubjectParticipationIdentifierIdentity): DeleteAdditionalSubjectParticipationIdentifierByAdditionalSubjectParticipationIdentifierIdentityResponse;
    
  }
  
  public interface ISubjectParticipations {
    
    /*
    * Loads a specific SubjectParticipation addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $participantIdentifier identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    */
    function GetSubjectParticipationByParticipantIdentifier(string $participantIdentifier): GetSubjectParticipationByParticipantIdentifierResponse;
    
    /*
    * Loads SubjectParticipations.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SubjectParticipations which should be returned
    */
    function GetSubjectParticipations(int $page, int $pageSize): GetSubjectParticipationsResponse;
    
    /*
    * Loads SubjectParticipations where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SubjectParticipations which should be returned
    */
    function SearchSubjectParticipations(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSubjectParticipationsResponse;
    
    /*
    * Adds a new SubjectParticipation and returns its primary identifier (or null on failure).
    *
    * @param $subjectParticipation SubjectParticipation containing the new values
    */
    function AddNewSubjectParticipation(SubjectParticipation $subjectParticipation): AddNewSubjectParticipationResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SubjectParticipation addressed by the primary identifier fields within the given SubjectParticipation. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $subjectParticipation SubjectParticipation containing the new values (the primary identifier fields within the given SubjectParticipation will be used to address the target record)
    */
    function UpdateSubjectParticipation(SubjectParticipation $subjectParticipation): UpdateSubjectParticipationResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SubjectParticipation addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $participantIdentifier identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    * @param $subjectParticipation SubjectParticipation containing the new values (the primary identifier fields within the given SubjectParticipation will be ignored)
    */
    function UpdateSubjectParticipationByParticipantIdentifier(string $participantIdentifier, SubjectParticipation $subjectParticipation): UpdateSubjectParticipationByParticipantIdentifierResponse;
    
    /*
    * Deletes a specific SubjectParticipation addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $participantIdentifier identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    */
    function DeleteSubjectParticipationByParticipantIdentifier(string $participantIdentifier): DeleteSubjectParticipationByParticipantIdentifierResponse;
    
  }
  
  public interface IStudyExecutionScopes {
    
    /*
    * Loads a specific StudyExecutionScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $studyExecutionIdentifier a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetStudyExecutionScopeByStudyExecutionIdentifier(string $studyExecutionIdentifier): GetStudyExecutionScopeByStudyExecutionIdentifierResponse;
    
    /*
    * Loads StudyExecutionScopes.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyExecutionScopes which should be returned
    */
    function GetStudyExecutionScopes(int $page, int $pageSize): GetStudyExecutionScopesResponse;
    
    /*
    * Loads StudyExecutionScopes where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyExecutionScopes which should be returned
    */
    function SearchStudyExecutionScopes(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchStudyExecutionScopesResponse;
    
    /*
    * Adds a new StudyExecutionScope and returns its primary identifier (or null on failure).
    *
    * @param $studyExecutionScope StudyExecutionScope containing the new values
    */
    function AddNewStudyExecutionScope(StudyExecutionScope $studyExecutionScope): AddNewStudyExecutionScopeResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the primary identifier fields within the given StudyExecutionScope. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyExecutionScope StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be used to address the target record)
    */
    function UpdateStudyExecutionScope(StudyExecutionScope $studyExecutionScope): UpdateStudyExecutionScopeResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyExecutionIdentifier a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    * @param $studyExecutionScope StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be ignored)
    */
    function UpdateStudyExecutionScopeByStudyExecutionIdentifier(string $studyExecutionIdentifier, StudyExecutionScope $studyExecutionScope): UpdateStudyExecutionScopeByStudyExecutionIdentifierResponse;
    
    /*
    * Deletes a specific StudyExecutionScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyExecutionIdentifier a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteStudyExecutionScopeByStudyExecutionIdentifier(string $studyExecutionIdentifier): DeleteStudyExecutionScopeByStudyExecutionIdentifierResponse;
    
  }
  
  public interface IStudyScopes {
    
    /*
    * Loads a specific StudyScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $studyScopeIdentity Composite Key, which represents the primary identity of a StudyScope
    */
    function GetStudyScopeByStudyScopeIdentity(StudyScopeIdentity $studyScopeIdentity): GetStudyScopeByStudyScopeIdentityResponse;
    
    /*
    * Loads StudyScopes.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyScopes which should be returned
    */
    function GetStudyScopes(int $page, int $pageSize): GetStudyScopesResponse;
    
    /*
    * Loads StudyScopes where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyScopes which should be returned
    */
    function SearchStudyScopes(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchStudyScopesResponse;
    
    /*
    * Adds a new StudyScope and returns its primary identifier (or null on failure).
    *
    * @param $studyScope StudyScope containing the new values
    */
    function AddNewStudyScope(StudyScope $studyScope): AddNewStudyScopeResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyScope addressed by the primary identifier fields within the given StudyScope. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyScope StudyScope containing the new values (the primary identifier fields within the given StudyScope will be used to address the target record)
    */
    function UpdateStudyScope(StudyScope $studyScope): UpdateStudyScopeResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyScopeIdentity Composite Key, which represents the primary identity of a StudyScope
    * @param $studyScope StudyScope containing the new values (the primary identifier fields within the given StudyScope will be ignored)
    */
    function UpdateStudyScopeByStudyScopeIdentity(StudyScopeIdentity $studyScopeIdentity, StudyScope $studyScope): UpdateStudyScopeByStudyScopeIdentityResponse;
    
    /*
    * Deletes a specific StudyScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyScopeIdentity Composite Key, which represents the primary identity of a StudyScope
    */
    function DeleteStudyScopeByStudyScopeIdentity(StudyScopeIdentity $studyScopeIdentity): DeleteStudyScopeByStudyScopeIdentityResponse;
    
  }
  
  public interface ISubjectAddresses {
    
    /*
    * Loads a specific SubjectAddress addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $internalRecordId Represents the primary identity of a SubjectAddress
    */
    function GetSubjectAddressByInternalRecordId(string $internalRecordId): GetSubjectAddressByInternalRecordIdResponse;
    
    /*
    * Loads SubjectAddresses.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SubjectAddresses which should be returned
    */
    function GetSubjectAddresses(int $page, int $pageSize): GetSubjectAddressesResponse;
    
    /*
    * Loads SubjectAddresses where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SubjectAddresses which should be returned
    */
    function SearchSubjectAddresses(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSubjectAddressesResponse;
    
    /*
    * Adds a new SubjectAddress and returns its primary identifier (or null on failure).
    *
    * @param $subjectAddress SubjectAddress containing the new values
    */
    function AddNewSubjectAddress(SubjectAddress $subjectAddress): AddNewSubjectAddressResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SubjectAddress addressed by the primary identifier fields within the given SubjectAddress. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $subjectAddress SubjectAddress containing the new values (the primary identifier fields within the given SubjectAddress will be used to address the target record)
    */
    function UpdateSubjectAddress(SubjectAddress $subjectAddress): UpdateSubjectAddressResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SubjectAddress addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $internalRecordId Represents the primary identity of a SubjectAddress
    * @param $subjectAddress SubjectAddress containing the new values (the primary identifier fields within the given SubjectAddress will be ignored)
    */
    function UpdateSubjectAddressByInternalRecordId(string $internalRecordId, SubjectAddress $subjectAddress): UpdateSubjectAddressByInternalRecordIdResponse;
    
    /*
    * Deletes a specific SubjectAddress addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $internalRecordId Represents the primary identity of a SubjectAddress
    */
    function DeleteSubjectAddressByInternalRecordId(string $internalRecordId): DeleteSubjectAddressByInternalRecordIdResponse;
    
  }
  
  public interface ISubjectIdentities {
    
    /*
    * Loads a specific SubjectIdentity addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $recordId Represents the primary identity of a SubjectIdentity
    */
    function GetSubjectIdentityByRecordId(string $recordId): GetSubjectIdentityByRecordIdResponse;
    
    /*
    * Loads SubjectIdentities.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SubjectIdentities which should be returned
    */
    function GetSubjectIdentities(int $page, int $pageSize): GetSubjectIdentitiesResponse;
    
    /*
    * Loads SubjectIdentities where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SubjectIdentities which should be returned
    */
    function SearchSubjectIdentities(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSubjectIdentitiesResponse;
    
    /*
    * Adds a new SubjectIdentity and returns its primary identifier (or null on failure).
    *
    * @param $subjectIdentity SubjectIdentity containing the new values
    */
    function AddNewSubjectIdentity(SubjectIdentity $subjectIdentity): AddNewSubjectIdentityResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SubjectIdentity addressed by the primary identifier fields within the given SubjectIdentity. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $subjectIdentity SubjectIdentity containing the new values (the primary identifier fields within the given SubjectIdentity will be used to address the target record)
    */
    function UpdateSubjectIdentity(SubjectIdentity $subjectIdentity): UpdateSubjectIdentityResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SubjectIdentity addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $recordId Represents the primary identity of a SubjectIdentity
    * @param $subjectIdentity SubjectIdentity containing the new values (the primary identifier fields within the given SubjectIdentity will be ignored)
    */
    function UpdateSubjectIdentityByRecordId(string $recordId, SubjectIdentity $subjectIdentity): UpdateSubjectIdentityByRecordIdResponse;
    
    /*
    * Deletes a specific SubjectIdentity addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $recordId Represents the primary identity of a SubjectIdentity
    */
    function DeleteSubjectIdentityByRecordId(string $recordId): DeleteSubjectIdentityByRecordIdResponse;
    
  }
  
}
